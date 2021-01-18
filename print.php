<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <title>Print Hasil</title>

    <!-- print pdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
    <!-- end print pdf -->

    <script type="text/javascript">
        history.pushState(null, null, location.href);
        window.onpopstate = function() {
            history.go(1);
        };
    </script>
</head>

<body>

    <!-- form print -->
    <section class="print_data" id="print_data">
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col m8 12 offset-m2">
                    <div class="card-panel">
                        <h5 style="text-align: center; margin-bottom: 50px;">HASIL FORM BIODATA</h5>
                        <table class="centered highlight responsive-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>ID</th>
                                    <th>Tanggal Kedatangan</th>
                                    <th>Keperluan</th>
                                    <th>Resiko Covid-19</th>
                                </tr>
                            </thead>

                            <?php
                            include "connection.php";
                            $sql = "select * from tabel_visitor order by id desc limit 1";

                            $hasil = mysqli_query($kon, $sql);

                            while ($data = mysqli_fetch_array($hasil)) {


                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $data["name"] ?></td>
                                        <td><?php echo $data["no_id"] ?></td>
                                        <td><?php echo date("d/m/y", strtotime($data["visit_date"])) ?></td>
                                        <td><?php echo $data["tujuan"] ?></td>
                                        <td><?php echo $data["covid_form"] ?></td>
                                    </tr>
                                </tbody>
                            <?php
                            }

                            ?>

                        </table>
                    </div>
                    <button type="submit" class="btn" name="submit"><a href="visitor.php" style="color: white;">Kembali</button>
                    <button type="submit" id="cmd">generate PDF</button>
                </div>
            </div>
        </div>
    </section>
    <!-- end form print -->

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
        var doc = new jsPDF();
        var specialElementHandlers = {
            function(element, renderer) {
                return true;
            }
        };

        $('#cmd').click(function() {
            doc.fromHTML($('#print_data').html(), {
                'elementHandlers': specialElementHandlers
            });
            doc.save('sample-file.pdf');
        });
    </script>

</body>

</html>