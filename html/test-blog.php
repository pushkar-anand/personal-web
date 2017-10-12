<?php
$doc = new DOMDocument();
$htmlData = file_get_contents("https://pushkaranand.me/blog/");
@$doc->loadHTML($htmlData);

$xpath = new DOMXPath($doc);

$titles = $xpath->query("//article/header/h2/a");
$hrefs = $xpath->query("//article/header/h2/a/@href");
$posts = $xpath->query("//article/div/p");

var_dump($titles);
var_dump($hrefs);
var_dump($posts);
$i=0;
foreach ($titles as $x)
{
  $title = $x->nodeValue;
  $href = $hrefs[$i]->nodeValue;
  $post =  $posts->item($i)->nodeValue;

  echo "Title: ".$title." link: ".$href." Summary: ".$post."\n";
  $i++;
}
?>
