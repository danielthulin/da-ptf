<link href="form.css" rel="stylesheet" type="text/css"/>
<?php include('form_process.php'); ?>

<div class="container">
  <form id="contact" action="<? $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset class="w3-section">
      <input placeholder="Your name" type="text" name="name" value="<?= $name ?>" tabindex="1"autofocus>
      <span class=error><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class=error><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class=error><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Pets" type="text" name="pet" value="<?= $pet ?>" tabindex="4">
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success; ?></div>
  </form>


</div>
