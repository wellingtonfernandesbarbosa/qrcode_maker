<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>QR Code Maker</title>
</head>
<body>
  <div class="container">
    <header>
      <a href="#" class="logo">Gerador de QR Code</a>
    </header>
    <main>
      <form action="qr.php" method="post">
        <label for="link">Insira o link:</label>
        <input type="url" name="link" id="link" required>
        <button type="submit">Gerar QR Code</button>
      </form>
      </div>
    </main>
  </div>
</body>
</html>
