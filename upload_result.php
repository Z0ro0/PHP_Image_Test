<?php

$f_name=$_FILES['userfile']['name'];

$f_type=$_FILES['userfile']['type'];

$f_size=$_FILES['userfile']['size'];

$f_tmpname=$_FILES['userfile']['tmp_name'];

echo "파일이름: ".$f_name."<br/>";
echo "파일타입: ".$f_type."<br/>";
echo "파일임시이름: ".$f_tmpname."<br/>";

$upload_dir='./abc/';
if(!is_dir($upload_dir)){
    mkdir($upload_dir);
}
?>