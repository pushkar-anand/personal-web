<?php
$allKeys = array("sofdule", "mkss","wishthem", "mo", "mka", "20");

if(isset($_GET['list']))
{
  $list = $_GET['list'];
  if(!in_array($list, $allKeys))
  {
    header('HTTP/1.1 400 Bad Request', true, 400);
    exit;
  }
  $jsonFile = "project.json";
  $projectData = file_get_contents($jsonFile);
  $jsonArr = json_decode($projectData, true);
  $linkExists = false;

  foreach ($jsonArr["Projects"] as $key => $value)
  {
    if($value["key"] == $_GET['list'])
    {
      $projectName = $value["name"];
      $projectInfo = $value["info"];
      if(array_key_exists("link", $value))
      {
        $linkExists = true;
        $projectLink = $value["link"];
      }
      echo "Name: ".$projectName."<br/>";
      echo "Info: ".$projectInfo."<br/>";
      if($linkExists)
      {
        echo "Link: ".$projectLink."<br/>" ;
      }
      break;
    }
  }

}
else
{
?>
<!DOCTYPE HTML>
<html>
<?php
$jsonFile = "project.json";
$projectData = file_get_contents($jsonFile);
$jsonArr = json_decode($projectData, true);


foreach ($jsonArr["Projects"] as $key => $value)
{
  echo "Name: ".$value["name"]."<br/>";
  echo "Info: ".$value["info"]."<br/>";
  if(array_key_exists("link", $value))
  {
    echo "Link: ".$value["link"]."<br/>" ;
  }
  echo "Key: ".$value["key"]."<br/>";
  echo "<br/><br/><br/><br/>";;
}
?>
</html>
<?php
}
?>
