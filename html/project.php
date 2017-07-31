<?php
if(isset($_GET['list']))
{
  $jsonFile = "project.json";
  $projectData = file_get_contents($jsonFile);

}
else
{


}
?>
