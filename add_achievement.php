<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <title>Tambah Achievement</title>
</head>

<body>
    <!-- form-formulir -->
    <section class="" id="" style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col m12 12">
                    <form action="add_achievement.php" method="post">
                        <div class="card-panel">
                            <h5 class="center" style="margin-bottom: 25px;">Tambah Data Achievement</h5>

                            <div class="input-field">
                                <input style="height: 60px;" type="text" name="judul" require>
                                <label for="judul">Judul Achievement</label>
                            </div>
                            <div class="input-field">
                                <input style="height: 60px;" type="text" name="foto" require>
                                <label for="foto">Foto Produk</label>
                            </div>
                        </div>

                        <button type="submit" class="btn" id="submit" name="Submit" style="background-color: blue;">Tambah</button>
                        <button type="submit" class="btn btn-danger"><a href="adminPanel.php" style="color: white;">Kembali</a></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {

        $judul = $_POST['judul'];
        $foto = $_POST['foto'];

        // include database connection file
        include_once("connection.php");

        // Insert user data into table
        $result_product = mysqli_query($kon, "INSERT INTO tabel_achievement (judul,foto) VALUES ('$judul','$foto')");

        // Show message when user added
        echo "Produk berhasil ditambahkan.";
    }
    ?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>