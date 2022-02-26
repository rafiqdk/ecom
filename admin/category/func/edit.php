<?php
require_once "../../config.php";
if(isset($_GET['id'])){
$id =$_GET['id'];
$sql ="SELECT * FROM products_categories WHERE category_id='$id'";
$output = $conn->query($sql);
$row = $output->fetch_assoc();

}
else {
    location('header:../index.php');
    
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../../assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
</head>

<?php
require_once '../../partials/side_bar.php';
?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3">

            </i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Category</h3>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Category</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="update.php?id=<?php echo $row['category_id']; ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="" name="category_name"
                                        value="<?php echo $row['category_name'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Slug</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="slug" name="category_slug"
                                        value="<?php echo $row['category_slug'];?>">
                                </div>
                                <div class=" form-group">
                                    <label for="exampleInputPassword1">Category Image</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1"
                                        src="<?php echo 'http://localhost/rafiq/ecom/admin/category/func/'.$row['category_image'];?>"
                                        name="category_image">
                                </div>

                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>2021 &copy; Mazer</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                    href="http://ahmadsaugi.com">A. Saugi</a></p>
        </div>
    </div>
</footer>


<script src="../../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/vendors/apexcharts/apexcharts.js"></script>
<script src="../../assets/js/pages/dashboard.js"></script>
<script src="../../assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
// Simple Datatable
let table1 = document.querySelector('#table1');
let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="../../assets/js/main.js"></script>
</body>

</html>