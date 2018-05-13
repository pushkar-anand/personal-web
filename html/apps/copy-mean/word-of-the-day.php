<?php
require_once __DIR__."/../../../includes/app.db.config.php";

header('Content-Type: application/json');

$url = "https://www.merriam-webster.com/word-of-the-day";

$user_agent = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36";

$todays_date = date("d-m-y");
$filename = $todays_date.'.html';
$file_full_path = __DIR__.'/'.$filename;

function entry_exists(string $date):bool
{
    global $conn;

    $q = "SELECT word_id FROM copy_mean_daily_word WHERE php_date = ?";
    $stmt = $conn->prepare($q);

    $stmt->bind_param("s",$date);
    $stmt->execute();

    $stmt->store_result();
    if($stmt->num_rows>0)
    {
        return true;
    }
    return false;
}


if(!entry_exists($todays_date))
{
	error_log("$todays_date does not exists\n") ;

	$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" . 
              "User-Agent: $user_agent\r\n"
  )
);

	$context = stream_context_create($options);
	$html = file_get_contents($url, false, $context);

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

    $insertQuery = "INSERT INTO copy_mean_daily_word (word, meaning, example, php_date) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);

    $stmt->bind_param("ssss",$word,$meaning, $example, $todays_date);
    $stmt->execute();



}
else
{
	error_log("$todays_date exists\n");

    $selectQuery = "SELECT word, meaning, example FROM copy_mean_daily_word WHERE php_date = ?";
    $stmt = $conn->prepare($selectQuery);

    $stmt->bind_param("s",$todays_date);
    $stmt->execute();

    $stmt->bind_result( $word,$meaning, $example);
    $stmt->fetch();
}

$output = array('word' => $word, 'mean' => $meaning, 'example' => $example );
$outputJSON = json_encode($output);
echo $outputJSON;
?>

