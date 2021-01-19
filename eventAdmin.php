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
    <title>Hello, world!</title>
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
        <div class="col-md-10 p-5 pt-3">
            <h3>Product</h3>
            <hr>

            <a href="" class="btn btn-primary mb-3">Tambah Event</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Deskripsi Event</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Foto</th>
                        <th scope="col" colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td><a href="" class="btn btn-primary"><i class="fas fa-edit"> Edit</i></a></td>
                        <td><a href="" class="btn btn-danger"><i class="fas fa-trash-alt"> Delete</i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>Otto</td>
                        <td><a href="" class="btn btn-primary"><i class="fas fa-edit"> Edit</i></a></td>
                        <td><a href="" class="btn btn-danger"><i class="fas fa-trash-alt"> Delete</i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- end sidebar -->



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