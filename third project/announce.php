<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,
      500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,
      wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/styles_announce.css" />
    <link rel="stylesheet" href="assets/css/styles_announce_media.css" />
    <title>Announce</title>
  </head>
  <body>
    <div class="wrapper">
    <style>
  .button_announce {
    background-color: #000000;
    border-radius: 20px;
    padding: 9px 18px;
  }
  .button_announce a {
    color: #ffffff;
  }
</style>
      <?php require_once('header.php'); ?>
      <main>
        <div class="container">
          <section class="announce_wrapper">
            <div class="announce_text">
              <div class="announce_text_title">
                <p> 
                  Anuncie seu veículo
                </p>
              </div>
              <div class="announce_text_text">
                <p>
                  Preencha o formulário e realize seu anúncio! Nossa equipe entrará em contato com você o mais rápido.
                </p>
              </div>
            </div>
            <div class="announce_form">
              <div class="announce_form_title">
                <p>Dados do veículo</p>
              </div>
              <div class="announce_form_input">
                <input type="text" placeholder="Marca">
                <input type="text" placeholder="Modelo">
                <input type="text" placeholder="Versão">
                <input type="text" placeholder="KM do veículo">
                <input type="text" placeholder="Ano do veículo">
                <input type="text" placeholder="Valor desejado">
              </div>
              <div class="announce_form_title">
                <p>Dados pessoais</p>
              </div>
              <div class="announce_form_input">
                <input type="text" placeholder="Nome">
                <input type="email" placeholder="E-mail">
                <input type="text" placeholder="Número">
              </div>
              <div class="announce_form_title">
                <p>Fotos do veículo</p>
              </div> 
              <div class="announce_form_input">
                <div class="button_left">
                  <button>Escolher arquivos</button>
                  <p>Nenhum arquivo escolhido</p>
                </div>
                <div class="button_r">
                  <button>Enviar</button>
                </div>                
              </div> 
              <div class="announce_form_check">
                <div class="announce_check_check">
                  <input type="checkbox" />
                </div>
                <div class="announce_check_text">
                  <p>
                    De acordo com a LGPD, concordo em fornecer os dados acima
                    para que a Touring Cars entre em contato comigo para
                    apresentar serviços. Seu nome, e-mail e telefone serão
                    usados de acordo com a nossa Política de Privacidade.
                  </p>
                </div>

              </div>             
            </div>
          </section>          
        </div>
      </main>
      <?php require_once('footer.php') ?>
    </div>
</body>
</html>
