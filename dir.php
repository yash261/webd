<?php
echo "<head><link rel=\"stylesheet\" href=\"style.css\"></head>";
echo "<body>";
   $dir=getcwd();
 echo "<h1><strong>Contents in the Folder:</strong></h1>";
 echo "<br>";
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "<div id=\"outer\">";
      $mime = mime_content_type($file);
           if(strstr($mime,"video/")){
           echo "
           <video id=\"vid\"width='200' height='150' controls autoplay>
           <source src= ".$file." type='video/ogg'>
           <source src= ".$file." type='video/mp4'>
           Your browser does not support the video tag.
           </video>";
           echo "document.getElementById(\"vid\").play()";
      }
      else if(strstr($mime, "image/")){
           echo "<img type=\"image\"src=".$file." height=\"100px\" width=\"auto\">";
      }
      echo "<h2><en>&nbsp;".$file."</en></h2>";
      echo "</div><br>";
    }
    closedir($dh);
  }
}
echo "</body>";
?>