<?php
function test_input($data)
{
	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	$data = strip_tags($data);
  	return $data;
}
if(isset($_GET['css']))
{
	$cssF = test_input($_GET['css']);
	$cssFiles = explode('/', $cssF);

	$buffer = "";
	foreach ($cssFiles as $cssFile)
	{
		if(!file_exists($cssFile))
		{
			header("HTTP/1.0 404 Not Found");
			exit();
		}
  		$buffer .= file_get_contents($cssFile);
	}

	// Remove comments
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

	// Remove space after colons
	$buffer = str_replace(': ', ':', $buffer);

	// Remove whitespace
	$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);

	// Enable GZip encoding.
	ob_start("ob_gzhandler");

	// Enable caching
	header('Cache-Control: public');

	// Set the correct MIME type, because Apache won't set it for us
	header("Content-type: text/css");

	// Write everything out
	echo($buffer);
}
else
{
	header("HTTP/1.0 404 Not Found");
	exit();
}
?>
