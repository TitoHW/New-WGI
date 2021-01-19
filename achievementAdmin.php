<?php
include 'connection.php';
$result_product = mysqli_query($kon, "SELECT * FROM tabel_achievement ORDER BY id ASC");
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styleAdmin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>Administrator</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">GI Administrator</a>
            <form>
                <div class="icon">
                    <h5>
                        <i class="fas fa-sign-out-alt mr-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Sign Out"></i>
                    </h5>
                </div>
            </form>
        </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- sidebar -->
    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link" href="adminPanel.php"><i class="fas fa-shopping-cart mr-2"></i> Product</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="achievementAdmin.php"><i class="fas fa-trophy mr-2"></i> Achievement</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="eventAdmin.php"><i class="far fa-calendar-alt mr-2"></i> Event</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactAdmin.php"><i class="far fa-comment mr-2"></i> Feedback Contact</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <!-- end sidebar -->


        <!-- content table -->
        <div class="col-md-10 p-5 pt-3">
            <h3>Achievement</h3>
            <hr>

            <a href="add_product.php" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Achievement</a>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Achievement</th>
                    <th scope="col">Foto</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
                <?php
                while ($dataProduct = mysqli_fetch_array($result_product)) {
                    echo "<tr>";
                    echo "<td>" . $dataProduct['id'] . "</td>";
                    echo "<td>" . $dataProduct['deskripsi'] . "</td>";
                    echo "<td>" . $dataProduct['foto'] . "</td>";
                    echo "<td><a href='edit_product.php? id=$dataProduct[id]' class='btn btn-warning'><i class='fas fa-edit'></i> Edit</a> <a href='delete_product.php? id=$dataProduct[id]' class='btn btn-danger'><i class='fas fa-trash-alt'></i> Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
    <!-- end table -->




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/adminPanel.js"></script>

    <!--  -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    <!--  -->
</body>

</html>