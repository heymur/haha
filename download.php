<?php
$url = 
'https://koceng404.my.id/storage/quotes/temp/a.jpg'; 
$img = 'upload.jpg'; 
file_put_contents($img, file_get_contents($url));
echo "File Tersimpan"
  
?>