<?php
header('Content-Type: application/json');
$url = "https://www.merriam-webster.com/word-of-the-day";

$user_agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36";

$todays_date = date("d-m-y");
$filename = $todays_date.'.html';

if(!file_exists($filename))
{
	error_log("$filename does not exists\n") ;

	$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" . 
              "User-Agent: $user_agent\r\n"
  )
);

	$context = stream_context_create($options);
	$html = file_get_contents($url, false, $context);

	$file = fopen($filename, "w");
	fwrite($file, $html);
	fclose($file);

	$yestrdy = date("d-m-y", strtotime("yesterday"));
	$yfile = $yestrdy.'.html';
	if(file_exists($yfile))
	{
		unlink($yfile);
	}
}
else
{
	error_log("$filename exists\n");
	$html = file_get_contents($filename);
}

$doc = new DomDocument();
@$doc->loadHTML($html);

$xpath = new DomXPath($doc);

$wordXPath = "/html/body/div[1]/div/div[4]/main/article/div[1]/div[2]/div[1]/div/h1";
$word = $xpath->query($wordXPath);

$definationXPath = "/html/body/div[1]/div/div[4]/main/article/div[3]/div[1]/div/div[1]/p";
$defination = $xpath->query($definationXPath);

$exampleXPath = "/html/body/div[1]/div/div[4]/main/article/div[3]/div[1]/div/div[2]/p[1]";
$example = $xpath->query($exampleXPath);

/*var_dump($word[0]->nodeValue);
var_dump($defination[0]->nodeValue);
var_dump($example[0]->nodeValue);*/


$word = $word[0]->nodeValue;
$meaning = $defination[0]->nodeValue;
$example = $example[0]->nodeValue;


$output = array('word' => $word, 'mean' => $meaning, 'example' => $example );
$outputJSON = json_encode($output);
echo $outputJSON;
?>

