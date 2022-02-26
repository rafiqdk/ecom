<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
</head>


<?php 
require_once '../partials/side_bar.php';

?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>DataTable</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="create.php"> <button class="btn btn-primary"> <i class="bi bi-plus-square"> Add
                                Category</i>
                        </button> </a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th class="text-center">Sl NO</th>
                                <th class="text-center">Category Name</th>
                                <th class="text-center">Category Slug</th>
                                <th class="text-center"> Category Image</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php require_once '../config.php';
                            $i =1;
                            $qry ="SELECT * FROM products_categories";
                            $result = $conn->query($qry);
                            while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td class="text-center"> <?php  echo $i++; ?></td>
                                <td class="text-center"> <?php  echo $row['category_name'];?></td>
                                <td class="text-center"><?php  echo $row['category_slug'];?></td>
                                <td class="text-center"><img style="width:100px; height:100px"
                                        src="<?php  echo "http://localhost/rafiq/ecom/admin/category/func/".$row['category_image'];?>"
                                        alt="Cat IMG"></td>
                                <td class="text-center">
                                    <span class="badge bg-success">Publish</span>
                                    <span class="badge bg-success">Unpublish</span>
                                </td>
                                <td> <a href="func/edit.php?id=<?php echo $row['category_id'];?>"><button
                                            class="btn btn-info"> <i class="bi bi-pencil-square"></i></button></a>
                                    <a href="func/delete.php?id=<?php echo $row['category_id'];?>"><button
                                            class="btn btn-danger"><i class="bi bi-file-x-fill"></i></button></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
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
</div>


</div>


<script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendors/apexcharts/apexcharts.js"></script>
<script src="../assets/js/pages/dashboard.js"></script>
<script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
// Simple Datatable
let table1 = document.querySelector('#table1');
let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="../assets/js/main.js"></script>
</body>

</html>