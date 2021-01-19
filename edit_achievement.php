<?php
// include database connection file
include 'connection.php';

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['update'])) {  
    $id = $_POST['id'];

    $judul = $_POST['judul'];
    $foto = $_POST['foto'];

    // update user data
    $result_product = mysqli_query($kon, "UPDATE tabel_achievement SET judul='$judul',foto='$foto' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: adminPanel.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result_product = mysqli_query($kon, "SELECT * FROM tabel_achievement WHERE id=$id");

while ($dataProduct = mysqli_fetch_array($result_product)) {
    $judul = $dataProduct['judul'];
    $foto = $dataProduct['foto'];
}
?>
<html>

<head>
    <title>Edit Achievement</title>
</head>

<body>
    <a href="adminPanel.php">Home</a>
    <br /><br />

    <form name="update_product" method="post" action="edit_product.php">
        <table border="0">
            <tr>
                <td>Judul Achievement</td>
                <td><input type="text" name="judul" value=<?php echo $judul; ?>></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="text" name="foto" value=<?php echo $foto; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>