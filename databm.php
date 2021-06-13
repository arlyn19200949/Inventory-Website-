<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <?php
    $NO1 = $_POST['no1'];
    $NB1 = $_POST['nb1'];
    $TK1 = $_POST['tk1'];
    $jb1 = $_POST['jb1'];
    $merk1 = $_POST['m1'];
    $jumlah1 = $_POST['j1'];
    $satuan1 = $_POST['sa1'];
    $NO2 = $_POST['no2'];
    $NB2 = $_POST['nb2'];
    $TK2 = $_POST['tk2'];
    $jb2 = $_POST['jb2'];
    $merk2 = $_POST['m2'];
    $jumlah2 = $_POST['j2'];
    $satuan2 = $_POST['sa2'];
    ?>

    <nav>
        <div class="container">
            <div class="logo">
                <h3>Inventory</h3>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="beranda.php">Home</a></li>
                    <li><a href="barangmasuk.php">Barang Masuk</a></li>
                    <li><a href="barangkeluar.php">Barang Keluar</a></li>
                    <li><a href="beranda.php #about">About Us</a></li>
                    <li><a href="beranda.php #partners">Partners</a></li>
                    <li><a href="beranda.php #contact">Contact Us</a></li>
                    <li><a href="login.php" class="active">Log-Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <section id="bk">
            <div class="data-input">
                <p>Data Barang yang Masuk</p>
                <table>
                    <tr>
                        <td>Id Barang</td>
                        <td><?= $NO1 ?></td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td><?= $NB1 ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Keluar</td>
                        <td><?= $TK1 ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Barang</td>
                        <td><?= $jb1 ?></td>
                    </tr>
                    <tr>
                        <td>Merk</td>
                        <td><?= $merk1 ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td><?= $jumlah1 ?></td>
                    </tr>
                    <tr>
                        <td>Satuan</td>
                        <td><?= $satuan1 ?></td>
                    </tr>
                </table>
            </div>
            <div class="data-input">
                <p>Data Barang yang Keluar</p>
                <table>
                    <tr>
                        <td>Id Barang</td>
                        <td><?= $NO2 ?></td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td><?= $NB2 ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Keluar</td>
                        <td><?= $TK2 ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Barang</td>
                        <td><?= $jb2 ?></td>
                    </tr>
                    <tr>
                        <td>Merk</td>
                        <td><?= $merk2 ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td><?= $jumlah2 ?></td>
                    </tr>
                    <tr>
                        <td>Satuan</td>
                        <td><?= $satuan2 ?></td>
                    </tr>
                </table>
            </div>
         

        </section>
    </div>

    <div class="footer">
        <h6>@copyright kel-6</h6>
    </div>
</body>

</html>