<?php
    namespace PHP\Modelo\Telas;
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GB Tattooer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        h2{
            font-weight: 800;
            color: black;
            letter-spacing: 3px;
            opacity: 80%;
            text-align: center;
            margin-top: 30px;
        }

        h5{
            font-weight: 500;
            color: black;
            opacity: 80%;
            text-align: center;
        }
    </style>
  </head>

  <body>
    <header>
      <nav>
        <a class="logo" href="/"><img src="css/image/PI logo 1.png" href="css/image/PI logo 1.png" width="170" height="130"/></a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="#">HOME</a></li>
          <li><a href="#">SOBRE</a></li>
          <li><a href="#">GALERIA</a></li>
          <li><a href="#">CONECTE-SE</a></li>
        </ul>
      </nav>
    </header>

        <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="css/image/banner.jpg" class="d-block w-100" alt="imagem de três tatuagens feitas pelo GB.">
                        </div>
                        <div class="carousel-item">
                        <img src="css/image/banner2.jpg" class="d-block w-100" alt="imagem de body piercing feitos pelo GB.">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
            </div>
    <main>

                <h2>OFERECEMOS</h2>
                <div class="oferecemos">
                    <div class="bola">
                        <figure><img src="css/image/pincel.png" width="80" height="80"></figure>
                    </div><br>



                    <div class="bola">
                        <figure><img src="css/image/piercing.png" width="80" height="80"></figure>
                    </div><br>


                    <div class="bola">
                        <figure><img src="css/image/casa.png" width="80" height="80"><figure>
                    </div><br>



                </div>


                <h2>SOBRE</h2>
                <div class="sobre">
                    <div class="fotos">
                        <figure class="001">
                            <img src="css/image/gibi.png" width="600" height="400">
                            <img src="css/image/001.png" width="600" height="400">
                        </figure>
                    </div>
                </div>
    </main>
    <script src="mobile-navbar.js"></script>
  </body>
</html>


           <!-- 
           <section> 
           <div class="container">
                <div class="carousel">
                    <input type="radio" name="slides" checked="checked" id="slide-1">
                    <input type="radio" name="slides" id="slide-2">
                    <ul class="carousel__slides">
                        <li class="carousel__slide">
                            <figure>
                                <div>
                                    <img src="css/image/4 (1).jpg" alt="">
                                </div>
                                <figcaption>
                                    Designs criativos e artísticos.
                                    <span class="credit">Photo: Tim Marshall</span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="carousel__slide">
                            <figure>
                                <div>
                                    <img src="css/image/8 (1).jpg" alt="">
                                </div>
                                <figcaption>
                                    Body piercing.
                                    <span class="credit">Photo: Christian Joudrey</span>                            
                                </figcaption>
                            </figure>
                        </li>
                    </ul>    
                    <ul class="carousel__thumbnails">
                        <li>
                            <label for="slide-1"><img src="css/image/4 (1).jpg" alt=""></label>
                        </li>
                        <li>
                            <label for="slide-2"><img src="css/image/8 (1).jpg" alt=""></label>
                        </li>
                    </ul>
                </div>
            </div>
        </section> 
    
    
    <article>
                        <p><strong>Designs Diversos</strong><br>
                            Temos designs para todos os gostos, artísticos,
                            coloridos, etc.
                        </p>
                    </article>
    
                    <article>
                        <p><strong>Body Piercing</strong><br>
                            Fazemos também body piercing em qualquer 
                            lugar do corpo.
                        </p>
                    </article>


                    <article>
                        <p><strong>Conforto e Segurança</strong><br>
                            Oferecemos segurança a nossos clientes e um 
                            ambiente comfortável.
                        </p>
                    </article>
    
    -->