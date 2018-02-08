<?php
require_once '../vendor/autoload.php';
session_start();
date_default_timezone_set('Asia/Kolkata');

use Sendinblue\Mailin;

function test_input($data)
{
  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	$data = strip_tags($data);
  	return $data;
}
?>
<?php include_once("analyticstracking.php") ?>
<?php
function sendResponseMail($sender_name,$sender_email,$api_key)
{
    try {
        $mailin = new Mailin("https://api.sendinblue.com/v2.0", $api_key);
    } catch (Exception $e) {
    }

    $body = "I received your mail. Thanks for contacting.</br> Will get back to you soon</br> <p>Regards</p><p>Pushkar Anand</p>";

  $data = array( "to" => array($sender_email=>$sender_name),
    "from" => array("no-reply@pushkaranand.me", "Pushkar Anand"),
    "subject" => "Thank you for contacting.",
    "html" => $body
);
  $mailin->send_email($data);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send']) )
{
  //app-smtp.sendinblue.com
  $api_key = 'XXXXX';

  $sender_name = test_input($_POST['name']);
  $sender_email = test_input($_POST['email']);
  $subject = test_input($_POST['subject']);
    $body = wordwrap(test_input($_POST['message']), 70, "\r\n");

    $headers = 'From: ' . $sender_name . '<' . $sender_email . '>' . "\r\n" .
        'Reply-To: ' . $sender_email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


    /*$mailin = new Mailin("https://api.sendinblue.com/v2.0",$api_key);
    $data = array( "to" => array("anandpushkar088@gmail.com"=>"Pushkar Anand"),
      "from" => array($sender_email, $sender_name),
      "subject" => $subject,
      "html" => $body
  );*/
    if (mail("anandpushkar088@gmail.com", $subject, $body, $headers)) {
        $_SESSION['mail-sent'] = "success";
        sendResponseMail($sender_name, $sender_email, $api_key);
        $response = "Success";
    } else {
        $_SESSION['mail-sent'] = "failure";
        $response = "failure";
    }

    /*
    $response = $mailin->send_email($data);
    if($response["code"]=="success")
    {
      $_SESSION['mail-sent'] = "success";
      sendResponseMail($sender_name,$sender_email,$api_key);
      $response = "Success";
    }
    else
    {
      $_SESSION['mail-sent'] = "failure";
      $response = "failure";
    }*/

    $logData = date("Y-m-d h:i:sa") . " " . $sender_name . "<" . $sender_email . "> " . $response . ": " . $arr["message"] . " " . $subject . " " . $body . " \n";
  $myfile = fopen("mail.log", "a") or die("Unable to open file!");
    fwrite($myfile, $logData);
  header('Location: /');
}
else
{
  header('HTTP/1.1 400 Bad Request', true, 400);
  exit;
}
?>
