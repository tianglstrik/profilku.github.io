<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact me</title>
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
    
    <hr>

    <div>
        <h1>Contact Me</h1>
        <form action="">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="email">
            <br>
            <label for="message">Pesan</label>
            <textarea name="message" placeholder="Tulis yang anda ingin kan tuan" rows="4" cols="80"></textarea>
            <br>
            <br>
            <input type="submit" value="kirim">
        </form>
    </div>

    <hr>
    <footer style="text-align:center;">
        <p>Copyright &copy; 2024 Ahmad Cristiano</p>
    </footer>
</body>
</html>