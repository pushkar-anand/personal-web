<?php
$doc = new DOMDocument();
$htmlData = file_get_contents("https://pushkaranand.me/blog/");
@$doc->loadHTML($htmlData);

$articles = $doc->getElementsByTagName('article');

foreach ($articles as $article)
{

}
?>
