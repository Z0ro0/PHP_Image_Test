<?php
 include ('./db_conn.php');
 $f_name=$_FILES['userfile']['name'];
 $f_type=$_FILES['userfile']['type'];
 $f_size=$_FILES['userfile']['size'];
 $f_tmpname=$_FILES['userfile']['tmp_name'];

 $upload_dir='./abc/';
 if(!is_dir($upload_dir)) {
    mkdir($upload_dir);
 }
 //To do  진짜 파일이름
 $upload_file1=$upload_dir.basename($f_name);
 if(move_uploaded_file($f_tmpname,$upload_file1)) {
    echo "업로드 되었습니다";

 }
 else {
    "업로드 실패";
 }
  
//insert 쿼리  img_path :$upload_file1
$sql="insert into img(img_name, img_type, img_size, img_path) values('f_name','f_type',$f_size,'$upload_file1')";
echo "추가되었습니다";
mysqli_query($conn,$sql);

?>