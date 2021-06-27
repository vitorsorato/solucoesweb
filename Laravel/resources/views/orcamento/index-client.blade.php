<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Realengo Alimentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="pictures/icon.png" type="image/x-icon" />
    <link rel ="stylesheet" href="owl-carousel/assets/owl.carousel.css"/>
    <link rel ="stylesheet" href="owl-carousel/assets/owl.theme.min.css"/>
  </head>

  <body>

<!---Navbar--->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-fixed-top">
      <a class="navbar-brand" href="#">
        <img src="pictures/logo_realengo2.png" width="200px" height="70px"/>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="background-color: #ffffff">
        <div class="navbar-nav mr-auto w-100 justify-content-end">
          <a class="nav-item nav-link active" href="#Home" style="color:#1027D6;"><b>Home</b><span class="sr-only">(Página atual)</span></a>
          <a class="nav-item nav-link" href="#QuemSomos" style="color:#1027D6;"><b>Arroz Realengo</b></a>
          <a class="nav-item nav-link" href="#Produtos" style="color:#1027D6;"><b>Produtos</b></a>
          <a class="nav-item nav-link" href="#Parceiros" style="color:#1027D6;"><b>Parceiros</b></a>
          <a class="nav-item nav-link" href="#Contato" style="color:#1027D6;"><b>Contato</b></a>
          <a class="nav-item nav-link" href="{{ route('orcamento.index') }}"  style="color:#1027D6;"><b>Administrativo</b></a>
        </div>
      </div>
    </nav>
<!---Fim Navbar--->

<!---Home--->
<section>
  <div style="padding-top: 84px; background-color:#091570;" id="Home" >
    <div id="carouselHome" class="carousel slide " data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
        <li data-target="#carouselHome" data-slide-to="1"></li>
        <li data-target="#carouselHome" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="carousel-img" id="slide-1" >
        </div>
        <div class="carousel-item">
          <img class="carousel-img" id="slide-2">
        </div>
        <div class="carousel-item">
          <img class="carousel-img" id="slide-3">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>
</section>
<!---Fim Home--->

<!---Arroz Realengo--->
<section id="QuemSomos">
    <div class="container-fluid" style="background-color:#091570; height:500px">
      <div class="row align-items-center">
        <div class="col-md-6 order-1">
          <div class="px-0 py-1">
            <div style="background-color:#091570;" id="QuemSomos">
              <div id="carouselSobre" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselSobre" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselSobre" data-slide-to="1"></li>
                  <li data-target="#carouselSobre" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block d-flex w-100" src="pictures/cor2.png" alt="Primeiro Slide" style="height:450px">
                    <div class="carousel-caption text-center">
                      <h3>Tradição</h3>
                      <img src="pictures/estrela.png"  width="40px" height="40px">
                      <p><br>Desde 1982 fazendo arroz bem feitinho.

                        Levando para a sua mesa somente grãos selecionados das melhores fazendas do sul.
                        
                        A Realengo atua em todo o processo do arroz até chegar as prateleiras dos supermercados. 
                        Com fazendas onde são cultivadas as melhores sementes. Na indústria, em que é empregada a mais alta 
                        tecnologia na produção do arroz. E no transporte, que garante uma maior agilidade e cuidado na entrega do arroz ao mercado.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="pictures/cor2.png" alt="Segundo Slide" style="height:450px">
                    <div class="carousel-caption">
                        <h3>Qualidade</h3>
                        <img src="pictures/livro.png"  width="40px" height="40px">
                        <p><br>A Realengo trabalha voltada a produção do arroz, realizando todas as etapas do processo com total qualidade, segurança e eficiência. 

                          Cada processo é monitorado e padronizado, desde o plantio, o beneficiamento, o empacotamento, até a distribuição.</p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="pictures/cor2.png  " alt="Terceiro Slide" style="height:450px">
                    <div class="carousel-caption">
                        <h3>Saudabilidade</h3>
                        <img src="pictures/arroz-icon2.png"  width="40px" height="40px">
                        <p><br>Você sabia que todo arroz é rico em fibras e proteínas naturais, e não contem glúten?

                          Arroz faz parte de uma dieta mais saudável e natural.</p>
                      </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselSobre" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselSobre" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-6">
        <div class="px-5 py-4" align="center">
          <img src="pictures/logo4.jpg" style="height:370px;">
        </div>
      </div>
    </div>
  </div>
  <div class="py-2" style="background-color:#ffffff;"></div>
 </section>
<!---Fim Arroz Realengo--->

<!---Produtos--->
 <section>
     <div id="Produtos" class="col-md-12 col-sm-12 text-center container-style" style="background-color:#ffffff">
      <div class="row align-items-center">
       <div class="col-md-6">
       <p class="pt-4" align="center"><font size="10" style="color:#091570"><b >Produtos</b></font><br>
         <img src="pictures/traco.png"  width="180px" height="20px"></p>
         <div class="loop owl-carousel owl-theme" style="cursor:grab;">
           <div class="item"><img class="parceiros"  width="140px" height="300px" src="pictures/prodarroz.png" href=""></div>
           <div class="item"><img class="parceiros"  width="140px" height="300px" src="pictures/prodarroz2.png" href=""></div>
           <div class="item"><img class="parceiros"  width="140px" height="300px" src="pictures/prodarroz3.png" href=""></div>
           <div class="item"><img class="parceiros"  width="140px" height="300px" src="pictures/prodarroz4.png" href=""></div>
           <div class="item"><img class="parceiros"  width="140px" height="300px" src="pictures/prodarroz5.png" href=""></div>
         </div>
       </div>
     <div class="col-md-6 order-1">
       <div class="px-5 py-4" align="center">
         <img src="pictures/potearroz.png" style="height:370px;">
       </div>
     </div>
   </div>
  </div>
   <div class="py-3" style="background-color:#ffffff;"></div>
 </section>
<!---Fim Produtos--->

<!---Parceiros--->
 <section id="Parceiros">
   <div class="col-md-12 col-sm-12 text-center container-style" style="background-color:#091570">
     <p class="pt-4" align="center" style="color:white"><font size="10"><b>Parceiros</b></font><br>
     <img src="pictures/traco2.png"  width="150px" height="15px"></p>
     <div class="loop owl-carousel owl-theme" style="cursor:grab;">
       <div class="item"><img class="parceiros" src="pictures/parceiros1.png" href=""></div>
       <div class="item"><img class="parceiros" src="pictures/parceiros2.png" href=""></div>
       <div class="item"><img class="parceiros" src="pictures/parceiros1.png" href=""></div>
       <div class="item"><img class="parceiros" src="pictures/parceiros2.png" href=""></div>
     </div>
   </div>
   <div class="py-3" style="background-color:#ffffff;"></div>
 </section>
<!---Fim Parceiros--->


<!---Contato--->
<section id="Contato">
  <div class="py-1">
    <p align="center" style="color:#091570"><font size="10"><b>Contato</b></font><br>
    <img src="pictures/traco.png" width="150px" height="15px"></p>
  </div>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6 order-1">
          <div class="px-5 py-4">
            <div class="text-center"> <img class=" d.block mx-auto img-fluid" src="img/luis_cardoso.png" alt="" style="max-height: 300px"></div>
              <div id="divfaleconosco">
                <p align="center" style="color:#091570"><font  size="4" ><b>Realengo Alimentos Ltda - Arroz das Fazendas do Sul</b><br></font></p>
                <p style="color:#091570"><a><img src="pictures/phone.png" width="25px" height="25px"></a>
                Telefone: (48) 3525-8500</p>
                <p style="color:#091570"><a><img src="pictures/email.png" width="25px" height="25px"></a>
                Email: contato@realengo.com.br</p>
                <p style="color:#091570"><a><img src="pictures/address.png" width="25px" height="25px"></a>
                Endereço: Rua Leoberto Leal, nº 10 - Turvo/SC </p>
              </div>
          </div>
        </div>
        <div class="col-md-6 order-2">
          <div class="px-5 py-4" align="center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13967.74981920523!2d-49.685505!3d-28.929907000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95222018a1c0a81b%3A0xaffee35284a5bde9!2sR.%20Leoberto%20Leal%2C%2010%20-%20Centro%2C%20Turvo%20-%20SC%2C%2088930-000%2C%20Brasil!5e0!3m2!1spt-BR!2sus!4v1624754812820!5m2!1spt-BR!2sus"
            width="450" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
<!---Fim Contato--->

<!---Footer--->
<div class="py-3" style="background-color:#B3AA01;"></div>
<footer class="page-footer font-small cyan darken-3" style="background-color:#B3AA01;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 py">
        <div class="mb-5 flex-center" align="center">
          <a class="fb-ic">
            <a href="https://www.facebook.com/arrozrealengo" target="_blank"><img src="pictures/face.png" width="40px" height="40px"></a>
          </a>
          <a><img src="pictures/cor.png" width="20px" height="20px"></a>
          <a class="li-ic">
            <a href="https://www.linkedin.com/company/realengo/" target="_blank"><img src="pictures/linke.png"  width="40px" height="40px"></a>
          </a>
          <a><img src="pictures/cor.png" width="15px" height="15px"></a>
          <a class="ins-ic">
            <a href="https://www.instagram.com/arroz_realengo/" target="_blank"><img src="pictures/insta.png" width="50px" height="50px"></a>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3" style="background-color:#091570; color:white;">© 2021 Copyright:
    <a href="https://unisatc.com.br/pagina-inicial/" target="_blank">Unisatc.com.br</a>
  </div>
</footer>
<!---Fim Footer--->

<!---Java Script--->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script>
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel()
  });
</script>
<!---Fim Java Script--->

  </body>
</html>
