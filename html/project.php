<?php
if(isset($_GET['list']))
{
  $jsonFile = "project.json";
  $projectData = file_get_contents($jsonFile);
  $jsonArr = json_decode($projectData, true);

  foreach ($variable as $key => $value) {
    # code...
  }

}
else
{


}
?>
