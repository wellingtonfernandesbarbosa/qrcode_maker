<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Gerador de QR Code</title>
</head>
<body>
<php
    <div class="qr-code">
        <?php
          if (isset($_POST['link'])) {
            $link = urlencode($_POST['link']);
            echo '<img src="https://chart.googleapis.com/chart?cht=qr&chl='.$link.'&chs=256x256" alt="QR Code">';
          }
        ?>
    </div>
</body>
</html>
