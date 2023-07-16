<?php      
$status=unlink('upload.jpg');    
if($status){  
echo "Delete berhasil";    
}else{  
echo "Sorry!";    
}  
?>  