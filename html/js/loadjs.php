<?php
require_once '../../vendor/autoload.php';
use MatthiasMullie\Minify;
function test_input($data)
{
	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	$data = strip_tags($data);
  	return $data;
}
if( isset($_GET['js']))
{
	$jsF = test_input($_GET['js']);
	$jsFiles = explode('/', $jsF);

	$buffer = "";

	$minifier = new Minify\JS();
	foreach ($jsFiles as $jsFile)
	{
		if(!file_exists($jsFile))
		{
			error_log($jsFile);
			header("HTTP/1.0 404 Not Found");
			exit();
		}
		$minifier->add($jsFile);
	}
	echo $minifier->minify();
}
