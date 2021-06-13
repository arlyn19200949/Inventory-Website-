<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">

  <script type="text/javascript">
    function massage(txt) {
      alert(txt)
    }
  </script>
</head>

<body>
  <?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  $error = "";
  $succes = "";

  if (isset($_POST['submit'])) {
    if ($username == "BSI.ac.id") {
      if ($password == "12345678") {
        $error = "";
        $succes = "Login Berhasil";
        header("Location: beranda.php");
      } else {
        $error = "Salah Password";
        $succes = "";
      }
    } else {
      $error = "Username Salah";
      $succes = "";
    }
  }

  ?>
  <div class="login-box">
    <img src="img/bsi.png" class="avatar">
    <h1 class="">Login Here</h1>
    <p class="error"><?= $error; ?></p>
    <p class="error"><?= $succes; ?></p>
    <form method="post" class="">
      <p class="pass">Username</p>
      <input type="text" name="username" placeholder="Enter Username" required>
      <p class="pass">Password</p>
      <input type="password" name="password" placeholder="Enter Password" required>
      <input type="submit" name="submit" value="Login"">
      <a href="#" onclick="massage('Maaf, Fitur Ini Belum Tersedia')">Forget Password!</a>
      <h6 class="note">NOTE !! Username = BSI.ac.id <br> Password = 12345678</h6>
    </form>
  </div>
</body>

</html>