<?php
$jmlPositif = $_GET['txtJmlPositif'];
$jmlRawat = $_GET['txtJmlRawat'];
$jmlSembuh = $_GET['txtJmlSembuh'];
$jmlMeninggal = $_GET['txtJmlMeninggal'];
$operator = $_GET['txtOperatorName'];
$nim = $_GET['txtNIM'];
$wilayah = $_GET['wilayah'];

$content = "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>

                <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
                <title>Covid Report</title>
            </head>
            <body>
                <h4 class='text-center'>Data Pemantaun Covid19 wilayah " . $wilayah . "</h4>
                <h5 class='text-center'>Per " . date("d F Y H:i:s") . "</h5>
                <h5 class='text-center'>" . $operator . "/" . $nim . "</h5>
                <div class='row'>
                    <div class='col-md-4 col-md-offset-4'>
                        <table class='table table-bordered table-hover table-responsive-sm table-sm' style='width: 100%;'>
                            <tr>
                                <th>Positif</th>
                                <th>Dirawat</th>
                                <th>Sembuh</th>
                                <th>Meninggal</th>
                            </tr>
                            <tr>
                                <td>" . $jmlPositif . "</td>
                                <td>" . $jmlRawat . "</td>
                                <td>" . $jmlSembuh . "</td>
                                <td>" . $jmlMeninggal . "</td>
                            </tr>
                        </table>
                </div>
            </div>
            </body>
            </html>";

$file = fopen('db.html', 'w');
fwrite($file, $content);
fclose($file);

echo "Sukses !";
?>
