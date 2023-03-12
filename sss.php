<?php

$file_stats = stat('my-file.txt');
 
if(!$file_stats) {
   echo 'Failed get file information';
}
 
else {
 
   echo 'The file was created on: '.date('d-m-Y h:m:i A',$file_stats["ctime"]).PHP_EOL; //Equivalent of filectime()
 
   echo 'The file was last modified on: '.date('d-m-Y h:m:i A',$file_stats["mtime"]).PHP_EOL; //Equivalent of filemtime()
 
   echo 'The file was last accessed on: '.date('d-m-Y h:m:i A',$file_stats["atime"]).PHP_EOL; //Equivalent of fileatime()
 

}
