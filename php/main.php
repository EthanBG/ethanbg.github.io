<?php
header('Content-Type: text/html; charset=utf-8');

require dirname(__FILE__).'/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$name = htmlspecialchars($_POST['user_name']);
$to_mail = htmlspecialchars($_POST['user_mail']);
$message = htmlspecialchars($_POST['user_message']);
echo $message;
$mail = new PHPMailer();
$mail -> isHTML(true);
$mail->addEmbeddedImage('../img/logo.png', 'image_cid');
$Body = '<body>
  <h2>De ETHANOL: </h2>
  <p>Salut '.$name.' ! Merci pour ton message qui vient bien de m\'être envoyer !</p>
  <p><i>'.$message.'</i></p>
  <p style="text-align:right">Je te recontacte au plus vite <img src="cid:image_cid"></p>
  <style>

    @font-face {
      font-family: "Teko";
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: local("Teko Light"), local("Teko-Light"), url(https://fonts.gstatic.com/s/teko/v9/LYjCdG7kmE0gdQhfsCpgqHAtXN_nWQ.woff2) format("woff2");
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    @font-face {
      font-family: "Quicksand";
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/quicksand/v20/6xKtdSZaM9iE8KbpRA_hJVQNYuDyP7bh.woff2) format("woff2");
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    div{
      margin: 0;
      top: 0;
      width: 100vw;
      height: 100vh;
      color: #1C1C1C;
      font-family: "Quicksand", sans-serif;
    }

    h2{
      margin-left:15vw;
      font-size: 5vw;
      font-family: "Teko", sans-serif;
    }

    p{
      margin-left:5vw;
      margin-right:5vw;
      text-align: justify;
    }

    img{
      max-width: 10vw;
      vertical-align: middle
    }
  </style>
</body>';


$mail->Encoding = 'base64';
$mail->CharSet = "UTF-8";
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = false;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.orange.fr';
$mail->Port = 465;
$mail->SetFrom('ethan.bvsg@orange.fr', 'ETHANOL');
$mail->Subject = "Message à ETHANOL";
$mail->Body = $Body;
$mail->AddAddress($to_mail,$name);
$mail->AddAddress('ethan.bvsg@orange.fr','ETHANOL');

if(!$mail->Send()){
  echo "DESO";
} else {
  echo "FRERO";
  return 'Mail error: '.$mail->ErrorInfo;
};
?>
