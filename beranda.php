<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript">
        function message() {
            alert("Selamat Datang")
        }

        function massage(txt){
            alert(txt)
        }
    </script>
</head>

<body onload="massage()">
    <nav>
        <div class="container">
            <div class="logo">
                <h3>Inventory</h3>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#item">Item</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#partners">Partners</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="login.php" class="active">Log-Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <section id="home">
            <div class="col">
                <p class="date">
                    <script type="text/javascript">
                        var tanggal = new Date()
                        var hari = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu")
                        var bulan = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember")
                        document.write(hari[tanggal.getDay()] + " ")
                        document.write(tanggal.getDate() + " ")
                        document.write(bulan[tanggal.getMonth()] + " ")
                        document.write(tanggal.getFullYear() + " ")
                    </script>
                </p>
                <p class="deskripsi">
                    Selamat Datang Di Inventory Website
                </p>
                <h3>Inventory Website</h3>
                <p>Dalam web ini, kami akan mempermudah anda
                    dalam mengatur <br>keluar dan masuknya
                    item</p>

                <p><a href="databm.php" class="tbl-biru">Pelajari Lebih Lanjut!</a></p>
            </div>
            <img src="img/gambar1.png" alt="">
        </section>

        <section id="item">
            <img src="img/gambar2.png" alt="">
            <div class="col">
                <p class="deskripsi-1">
                    -----------------------------------------
                </p>
                <h3>Pemasukkan Barang</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis nam itaque ad, quidem odit vero impedit culpa cumque praesentium, ex quod placeat. Totam in eum voluptatum voluptates ipsum ab!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis nam itaque ad, quidem odit vero impedit culpa cumque praesentium, ex quod placeat. Totam in eum voluptatum voluptates ipsum ab!</p>

                <button type="submit"><a href="barangmasuk.php">Barang Masuk</a></button>
                <button type="submit"><a href="barangkeluar.php">Barang Keluar</a></button>
            </div>
        </section>

        <section id="about">
            <div class="middle">
                <div class="col">
                    <h2 class="deskripsi-2">About US</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="text-box">
                    <div class="text-1">
                        <h3>Vision</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum quas nisi beatae accusantium sequi. Reiciendis sequi eum eos vitae officiis
                            voluptatem eaque esse dolore, ratione, rerum repudiandae, cumque iure explicabo.</p>
                    </div>
                    <div class="x">
                        <img class="x-1" src="img/x.png" alt="">
                    </div>
                    <div class="text-1">
                        <h3>Mission</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum quas nisi beatae accusantium sequi. Reiciendis sequi eum eos vitae officiis
                            voluptatem eaque esse dolore, ratione, rerum repudiandae, cumque iure explicabo.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="partners">
            <div class="middle">
                <h2 class="deskripsi-2">Partners</h2>
                <p>Kami Melakukan Semua Kegiatan ini Bersama Partner Kami yaitu <br> Universitas Bina Sarana Informatika</p>
                <img class="partner" src="img/bsi.png" alt="">
                <p class="bsi">Bina Sarana Informatika</p>
            </div>
        </section>

        <section id="contact">
            <div class="middle">
                <h2 class="deskripsi-2">Contact Us</h2>

                <div class="contact">
                    <div class="contact-us">
                        <form action="#">
                            <table>
                                <tr>
                                    <td>Email Address</td>
                                    <td><input type="text" placeholder="Enter Email Address"></td>
                                </tr>
                                <tr>
                                    <td>Subjek</td>
                                    <td><input type="text" placeholder="Subjek"></td>
                                </tr>
                                <tr>
                                    <td>Massage</td>
                                    <td><textarea name="" id="" cols="22" rows="4" placeholder="Massage..."></textarea></td>
                                </tr>
                            </table>
                            <input type="submit" value="Send Massage" onclick="massage('Maaf, Fitur Ini Belum Tersedia')">
                        </form>
                    </div>

                    <div class="contact-us">
                        <h4>Other Contact</h4>
                        <p>Email <a href="#">19200949@bsi.ac.id</a></p>
                        <p>Email <a href="#">19200067@bsi.ac.id</a></p>
                        <p>Email <a href="#">19200623@bsi.ac.id</a></p>
                        <p>Email <a href="#">19200931@bsi.ac.id</a></p>
                        <p>Email <a href="#">19200924@bsi.ac.id</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="footer">
        <h6>@copyright kel-6</h6>
    </div>

</html>