<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 - Forme</title>
</head>
<body>
    <h1>Forme</h1>
    <form action="prijavise.php" method="post">
    <label for="username">Korisnicko ime:</label>
    <input type="text" name="username" id="username"><br>
    <label for="password">Lozinka:</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Prijavi se">
    <?php if (isset($_GET['login'])): ?>
       <p>Pogresno korisnicko ime/lozinka.</p>
       <?php endif?>
    </form>
</body>
</html>