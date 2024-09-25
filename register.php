<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <nav>
          <ul>
              <li><a href="index.php">Beranda</a></li>
              <li><a href="about.php">Profil</a></li>
              <li class="dropdown"><a href="#">Materi</a>
                <ul>
                  <li><a href="penulisan.docx">Penulisan css</a></li>
                  <li><a href="#">PHP</a></li>
                  <li><a href="#">Jquery</a></li>
                  <li><a href="#">HTML</a>
                    <ul>
                      <li><a href="#">Dasar HTML</a></li>
                      <li><a href="#">Tag HTML</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="contact.php">Kontak</a></li>
              <li><a href="register.php">Register</a></li>
          </ul>
      </nav>
    
    <form action="register.php" method="post">
        <table>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
    </form>
</body>
</html>