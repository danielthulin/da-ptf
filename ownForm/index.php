<!DOCTYPE html>

<!-- hämtad från https://www.w3schools.com/w3css/4/w3.css  2017-12-17 --->

<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<?php include('form_process.php'); ?>

<!-- Contact -->
<div class="w3-container" id="contact" style="margin-top:75px">
  <h1 class="w3-xxxlarge w3-text-red"><b>Felanmälan.</b></h1>
  <hr style="width:50px;border:5px solid red" class="w3-round">
  <p>Problem med din bostad, lokal eller i de allmänna utrymmena? Gör en felanmälan så att vi kan åtgärda problemet.</p>
  <form action="<? $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="w3-section">
      <label>Hyresgäst*</label>
      <input class="w3-input w3-border" type="text" name="name" value="<?= $name ?>" tabindex="1">
      <span class="error"><?= $name_error ?></span>
    </div>
    <div class="w3-section">
      <label>Email*</label>
      <input class="w3-input w3-border" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </div>
    <div class="w3-section">
      <label>Telefonnummer*</label>
      <input class="w3-input w3-border" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </div>
    <div class="w3-section">
      <label>Husdjur</label>
      <input class="w3-input w3-border" type="text" name="pet" value="<?= $pet ?>" tabindex="4">
    </div>
    <label>Får vi gå in med huvudnyckel?*<br></label>
    <div>
      <input type="radio" checked="checked" name="mainkey" value="yes"> Ja<brk>
      <input type="radio" name="mainkey" value="no"> Nej<br>
    </div>
    <div class="w3-section">
      <label>Meddelande*</label>
      <input class="w3-input w3-border" type="text" name="Meddelande" value="<?= $message ?>" tabindex="7">
    </div>
    <label>Vill du ha en kopia av felanmälan?*<br></label>
    <div>
      <input type="radio" checked="checked" name="copy" value="yes"> Ja<brk>
      <input type="radio" name="copy" value="no"> Nej<br>
    </div>
    <button name="submit" type="submit" id="contact-submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom w3-section" data-submit="...Sending">Skicka felanmälan</button>
    <div class="success"> <?= $success; ?></div>
  </form>
</div>

</body>
</html>
