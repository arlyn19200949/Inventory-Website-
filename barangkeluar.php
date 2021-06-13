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
    <nav>
        <div class="container">
            <div class="logo">
                <h3>Inventory</h3>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="beranda.php">Home</a></li>
                    <li><a href="barangmasuk.php">Barang Masuk</a></li>
                    <li><a href="beranda.php #about">About Us</a></li>
                    <li><a href="beranda.php #partners">Partners</a></li>
                    <li><a href="beranda.php #contact">Contact Us</a></li>
                    <li><a href="login.php" class="active">Log-Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <section id="bm">
            <div class="data-masuk">
                <p>Input Data Barang yang Keluar</p>
                <form action="databm.php" method="POST">
                    <table>
                        <tr>
                            <td>Id Barang</td>
                            <td><input type="text" name="no2" placeholder="Enter Id Barang..."></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td>
                            <td><input type="text" name="nb2" placeholder="Enter Nama Barang"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Keluar</td>
                            <td><input type="date" name="tk2"></td>
                        </tr>
                        <tr>
                            <td>Jenis Barang</td>
                            <td>
                                <select name="jb2">
                                    <option value="Pilih">Pilih</option>
                                    <option value="Electronic">Elektronic</option>
                                    <option value="Non Electronic">Non Elektronic</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Merk</td>
                            <td><input type="text" name="m2" placeholder="Enter Merk Barang"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Stock</td>
                            <td><input type="number" name="j2" placeholder="Stok /pack/dus"></td>
                        </tr>
                        <tr>
                            <td>Satuan Barang</td>
                            <td><input type="text" name="sa2" placeholder="Jumlah Barang/pcs"></td>
                        </tr>
                    </table>
                    <input class="submit" type="submit" Value="Simpan">
                    <input class="cancel" type="reset" Value="Cancel">
                </form>
            </div>
            <img src="img/barang1.png" class="barang">
        </section>
    </div>

    <div class="footer">
        <h6>@copyright kel-6</h6>
    </div>
</body>

</html>