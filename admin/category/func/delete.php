<?php
require_once '../../config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM products_categories WHERE category_id='$id'";
 $del = $conn->query($sql);
 if($del){
     header('location:../index.php');
 }
}

else {
    echo "Something Wrong";
}

 ?>