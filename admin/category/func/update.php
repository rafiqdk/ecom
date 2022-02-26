<?php 
if(isset($_GET['id'])){
$id =$_GET['id'];
$name =$_POST['category_name'];
$slug =$_POST['category_slug'];
$file_name =$_FILES['category_image']['name'];
$file_tmp =$_FILES['category_image']['tmp_name'];
$url = "image/".uniqid(1,1000).$file_name;
move_uploaded_file($file_tmp, $url);
require_once '../../config.php';

$update = "UPDATE products_categories SET category_name='$name' ,category_slug='$slug',category_image='$url' WHERE category_id='$id'";
$out = $conn->query($update);
if($out){
    header('location:../index.php');
}

}

?>