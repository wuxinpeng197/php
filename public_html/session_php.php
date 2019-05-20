<?php
session_start();
if (isset ($_GET['formdata'] ))
{
   if (!isset($_SESSION['data']))
   {
      echo "There was no old value for data<br>";
      echo "There have been no changes in data<br>";
      $_SESSION['times'] = 0;
   }
   else
   {
      $_SESSION['times'] = $_SESSION['times']+1;
      // a better way
      // $_SESSION['times']++;
      echo "old data = ".$_SESSION['data']."<br>";
      echo "times changed = ".$_SESSION['times']."<br>";
   }
   $_SESSION['data'] = $_GET['formdata'];
   echo "current data = ".$_SESSION['data']."<br>";
}
else
{
     echo "No data was submitted<br>";
}
?>

