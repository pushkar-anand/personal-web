<?php
require_once '../vendor/autoload.php';
use Sendinblue\Mailin;
function test_input($data)
{
  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	$data = strip_tags($data);
  	return $data;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send']) )
{
  //app-smtp.sendinblue.com
  $api_key = 'XXXXX';

  $sender_name = test_input($_POST['name']);
  $sender_email = test_input($_POST['email']);
  $subject = test_input($_POST['subject']);
  $body = test_input($_POST['message']);

  $mailin = new Mailin("https://api.sendinblue.com/v2.0",$api_key);
  $data = array( "to" => array("anandpushkar088@gmail.com"=>"Pushkar Anand"),
    "from" => array($sender_email, $sender_name),
    "subject" => $subject,
    "html" => $body
);
echo <<<HTML
<h1 align="center">Your mail has been sent</h1>
<h2 align="center"><a href="/" title="Go back">Go Back</h2>
HTML;

}
else
{
  header('HTTP/1.1 400 Bad Request', true, 400);
}
?>
