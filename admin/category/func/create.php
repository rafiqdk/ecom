<?php 


require_once '../../config.php';
if(isset($_POST['submit'])){
  $category_name = $_POST['category_name'];
  $category_slug =$_POST['category_slug'];
  $tmp = $_FILES['category_image']['tmp_name'];
  $name  = $_FILES['category_image']['name'];
  $url = "image/".rand().$name;
  move_uploaded_file($tmp, $url);
   
 $sql ="INSERT INTO products_categories (category_name, category_slug,category_image) VALUES ('$category_name','$category_slug','$url')";
 $result = $conn->query($sql);
  if($result){
      header('location:../index.php');
  }
}

else {
    header('location:../create.php');
}


?>