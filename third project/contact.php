<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,
      500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,
      wight@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/styles_contact.css" />
  <link rel="stylesheet" href="assets/css/styles_contact_media.css" />
  <title>Contact</title>
</head>

<body>
  <div class="wrapper">
    <style>
      .button_contact {
        background-color: #000000;
        border-radius: 20px;
        padding: 9px 18px;
      }
      .button_contact a {
        color: #ffffff;
      }
    </style>
    <?php require_once('header.php'); ?>
    <main>
      <div class="container">
        <div class="contato_wrapper">
          <div class="contato_text">
            <div class="contato_text_title">
              <p>Contato</p>
            </div>
            <div class="contato_text_contact">
                <a href="#">
                <div class="contato_button">
                  <div class="button_icons">
                    <img src="/assets/images/contact/call (1).png" alt="call">
                  </div>
                  <div class="button_text">
                    <p>Fale conosco</p>
                  </div>
                </div>
                </a>
                <a href="#">
                <div class="contato_button">
                  <div class="button_icons">
                    <img src="/assets/images/contact/email.png" alt="email">
                  </div>
                  <div class="button_text">
                    <p>Enviar um email</p>
                  </div>
                </div>
                </a>
                <a href="#">
                <div class="contato_button">
                  <div class="button_icons">
                    <img src="/assets/images/contact/whatsapp.png" alt="whatsapp">
                  </div>
                  <div class="button_text">
                    <p>WhatsApp</p>
                  </div>
                </div>
                </a>
                <a href="#">
                <div class="contato_button">
                  <div class="button_icons">
                    <img src="/assets/images/contact/photo_camera.png" alt="Instagram">
                  </div>
                  <div class="button_text">
                    <p>Instagram</p>
                  </div>
                </div>
                </a>
              </div>     
          </div>
          <div class="contato_img">
            <img src="/assets/images/contact/BMW M2.jpg" alt="BMW M2">
          </div>
        </div>
        <?php require_once('home_main_s_form.php') ?>
      </div>
    </main>
    <?php require_once('footer.php'); ?>
  </div>
</body>

</html>