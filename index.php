    <?php

    include('./templates/header.php');

    ?>

    <!-- SLIDER -->

    <div class="contenedor centrado-h  w3-margin-bottom w3-margin-top">
      <div data-jcarousel-control="true" data-target="-=1" class="contenedor centrado-v jcarousel-control-prev">
        <p class="fto-left-open-big"></p>
      </div>
      <div class="contenedor centrado-h jcarousel-wrapper">
        <div data-jcarousel="true" data-wrap="circular" class="jcarousel">
          <ul>
            <li><img src="imgs/banner/banner_00.jpg" class="w3-image"></li>
            <li><img src="imgs/banner/banner_01.jpg" class="w3-image"></li>
            <li><img src="imgs/banner/banner_02.jpg" class="w3-image"></li>
            <li><img src="imgs/banner/banner_03.jpg" class="w3-image"></li>
          </ul>
        </div>
      </div>
      <div data-jcarousel-control="true" data-target="+=1" class="contenedor centrado-v jcarousel-control-next">
        <p class="fto-right-open-big"></p>
      </div>
    </div>

    <div class="w3-container w3-content w3-margin-bottom">

      <!-- Contenido personalizado -->

      <div class="w3-container w3-padding w3-margin-bottom">
        <div class="w3-half  w3-padding" style="text-align: right;">
          <h2 class="w3-xxlarge font-montserrat w3-text-green" style="font-weight: 700;">Bienvenido</h2>
          <h3>Echa un vistazo a mis proyectos, seguro que encuentras algo interesante</h3>
        </div>
        <div class="w3-half w3-padding">
          <p>Diseño, maquetación y desarrollo de aplicaciones web. </p>
          <p>Utiliza el formulario si quieres ponerte en contacto conmigo. Gracias por tu visita.</p>
          <a href="contact.php" class="w3-button w3-dark-grey w3-round">Contacto</a>
        </div>
      </div>

      <!-- Contenido personalizado -->

      <div class="w3-container w3-margin-bottom">
        <div class="w3-panel w3-leftbar w3-border-green w3-light-grey">
          <span style="font-size:150px;line-height:0.6em;opacity:0.2" class="w3-text-green">❝</span>
          <p class="w3-xxlarge font-lobster "><i>"El optimista tiene siempre un proyecto; el pesimista, una excusa."</i></p>
          <p class="font-lobster w3-large">Anónimo</p>
        </div>
      </div>

      <!-- slider proyectos -->

      <div id="sliderArticulos" class="sliderArticulos w3-hide-small">
        <div id="carrusel">

          <div class="w3-container w3-right-align">
            <div class="w3-left">
              <p class="w3-xlarge">Mis proyectos</p>
            </div>
            <div class="w3-right">
              <a href="#" class="left-arrow fto-left-open-3"></a>
              <a href="#" class="right-arrow fto-right-open-3"></a>
            </div>
          </div>

          <div class="carrusel">
            <div class="w3-half w3-padding" id="product_0">
              <div class="containerSliderArticles">
                <img src="imgs/products/r/06.jpg" alt="jeans0">
                <div class="overlay">
                  <div class="boton-carrito">
                    <a href="#"><span class="fto-basket-3"></span> comprar</a>
                  </div>
                  <div class="boton-compartir">
                    <a href="product_page.html">
                      <p><span class="fto-eye-2"></span> ver más</p>
                    </a>
                  </div>
                </div>
              </div>
              <h3 class="w3-center"> Auriculares de tapón</h3>
              <p class="w3-text-green font-oswald">99,90 €</p>
              <div class="contenedor centrado-h">
                <ul style="padding: 15px 0px; margin: 0px auto;">
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                </ul>
              </div>
            </div>

            <div class="w3-half w3-padding" id="product_1">
              <div class="containerSliderArticles">
                <img src="imgs/products/r/07.jpg" alt="jeans1">
                <div class="overlay">
                  <div class="boton-carrito">
                    <a href="#"><span class="fto-basket-3"></span> comprar</a>
                  </div>
                  <div class="boton-compartir">
                    <a href="product_page.html"><span class="fto-eye-2"></span> ver más</a>
                  </div>
                </div>
              </div>
              <h3 class="w3-center">Auriculares de diadema</h3>
              <p class="w3-text-green font-oswald">85,00 €</p>
              <div class="contenedor centrado-h">
                <ul style="padding: 15px 0px; margin: 0px auto;">
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                </ul>
              </div>
            </div>

            <div class="w3-half w3-padding" id="product_2">
              <div class="containerSliderArticles">
                <img src="imgs/products/r/08.jpg" alt="jeans2">
                <div class="overlay">
                  <div class="boton-carrito">
                    <a href="#"><span class="fto-basket-3"></span> comprar</a>
                  </div>
                  <div class="boton-compartir">
                    <a href="#"><span class="fto-eye-2"></span> ver más</a>
                  </div>
                </div>
              </div>
              <h3 class="w3-center">Auriculares inalámbricos</h3>
              <p class="w3-text-green font-oswald">85,00 €</p>
              <div class="contenedor centrado-h">
                <ul style="padding: 15px 0px; margin: 0px auto;">
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                </ul>
              </div>
            </div>

            <div class="w3-half w3-padding" id="product_3">
              <div class="containerSliderArticles">
                <img src="imgs/products/r/09.jpg" alt="jeans3">
                <div class="overlay">
                  <div class="boton-carrito">
                    <a href="#"><span class="fto-basket-3"></span> comprar</a>
                  </div>
                  <div class="boton-compartir">
                    <a href="#"><span class="fto-eye-2"></span> ver más</a>
                  </div>
                </div>
              </div>
              <h3 class="w3-center">Auriculares semi-profesionales</h3>
              <p class="w3-text-green font-oswald">85,00 €</p>
              <div class="contenedor centrado-h">
                <ul style="padding: 15px 0px; margin: 0px auto;">
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                </ul>
              </div>
            </div>

            <div class="w3-half w3-padding" id="product_4">
              <div class="containerSliderArticles">
                <img src="imgs/products/r/10.jpg" alt="jeans4">
                <div class="overlay">
                  <div class="boton-carrito">
                    <a href="#"><span class="fto-basket-3"></span> comprar</a>
                  </div>
                  <div class="boton-compartir">
                    <a href="#"><span class="fto-eye-2"></span> ver más</a>
                  </div>
                </div>
              </div>
              <h3 class="w3-center">Auriculares con cable</h3>
              <p class="w3-text-green font-oswald">85,00 €</p>
              <div class="contenedor centrado-h">
                <ul style="padding: 15px 0px; margin: 0px auto;">
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                </ul>
              </div>
            </div>

            <div class="w3-half w3-padding" id="product_5">
              <div class="containerSliderArticles">
                <img src="imgs/products/r/11.jpg" alt="jeans5">
                <div class="overlay">
                  <div class="boton-carrito">
                    <a href="#">
                      <p><span class="fto-basket-3"></span> comprar</p>
                    </a>
                  </div>
                  <div class="boton-compartir">
                    <a href="#">
                      <p><span class="fto-eye-2"></span> ver más</p>
                    </a>
                  </div>
                </div>
              </div>
              <h3 class="w3-center">Auriculares domésticos</h3>
              <p class="w3-text-green font-oswald">85,00 €</p>
              <div class="contenedor centrado-h">
                <ul style="padding: 15px 0px; margin: 0px auto;">
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                </ul>
              </div>
            </div>

            <div class="w3-half w3-padding" id="product_6">
              <div class="containerSliderArticles">
                <img src="imgs/products/r/12.jpg" alt="jeans5">
                <div class="overlay">
                  <div class="boton-carrito">
                    <a href="#">
                      <p><span class="fto-basket-3"></span> comprar</p>
                    </a>
                  </div>
                  <div class="boton-compartir">
                    <a href="#">
                      <p><span class="fto-eye-2"></span> ver más</p>
                    </a>
                  </div>
                </div>
              </div>
              <h3 class="w3-center">Auriculares profesionales</h3>
              <p class="w3-text-green font-oswald">85,00 €</p>
              <div class="contenedor centrado-h">
                <ul style="padding: 15px 0px; margin: 0px auto;">
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                </ul>
              </div>
            </div>

            <div class="w3-half w3-padding" id="product_7">
              <div class="containerSliderArticles">
                <img src="imgs/products/r/13.jpg" alt="jeans5">
                <div class="overlay">
                  <div class="boton-carrito">
                    <a href="#">
                      <p><span class="fto-basket-3"></span> comprar</p>
                    </a>
                  </div>
                  <div class="boton-compartir">
                    <a href="#">
                      <p><span class="fto-eye-2"></span> ver más</p>
                    </a>
                  </div>
                </div>
              </div>
              <h3 class="w3-center">Auriculares ergonómicos</h3>
              <p class="w3-text-green font-oswald">85,00 €</p>
              <div class="contenedor centrado-h">
                <ul style="padding: 15px 0px; margin: 0px auto;">
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                  <li style="display: inline-block;" class="fto-star-filled"></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Artículos destacados -->

      <div id="featuredProducts" class="w3-container w3-padding w3-margin-bottom">
        <div class="w3-container w3-threequarter">

          <div class="w3-margin-top w3-third">
            <div class="w3-half">
              <img src="imgs/products/r/00.jpg" class="w3-image" alt="">
            </div>
            <div class="w3-half w3-padding w3-left-align">
              <h3>short</h3>
              <p class="w3-text-green font-oswald w3-padding-small">49,95 €</p>
              <div class="w3-padding-small">
                <a class="fto-basket blanco w3-green w3-padding-small" href="#"></a>
              </div>
            </div>
          </div>

          <div class="w3-margin-top w3-third">
            <div class="w3-half">
              <img src="imgs/products/r/01.jpg" class="w3-image" alt="">
            </div>
            <div class="w3-half w3-padding w3-left-align">
              <h3>short</h3>
              <p class="w3-text-green font-oswald w3-padding-small">49,95 €</p>
              <div class="w3-padding-small">
                <a class="fto-basket blanco w3-green w3-padding-small" href="#"></a>
              </div>
            </div>
          </div>

          <div class="w3-margin-top w3-third">
            <div class="w3-half">
              <img src="imgs/products/r/02.jpg" class="w3-image" alt="">
            </div>
            <div class="w3-half w3-padding w3-left-align">
              <h3>short</h3>
              <p class="w3-text-green font-oswald w3-padding-small">49,95 €</p>
              <div class="w3-padding-small">
                <a class="fto-basket blanco w3-green w3-padding-small" href="#"></a>
              </div>
            </div>
          </div>

          <div class="w3-margin-top w3-third">
            <div class="w3-half">
              <img src="imgs/products/r/03.jpg" class="w3-image" alt="">
            </div>
            <div class="w3-half w3-padding w3-left-align">
              <h3>short</h3>
              <p class="w3-text-green font-oswald w3-padding-small">49,95 €</p>
              <div class="w3-padding-small">
                <a class="fto-basket blanco w3-green w3-padding-small" href="#"></a>
              </div>
            </div>
          </div>

          <div class="w3-margin-top w3-third">
            <div class="w3-half">
              <img src="imgs/products/r/14.jpg" class="w3-image" alt="">
            </div>
            <div class="w3-half w3-padding w3-left-align">
              <h3>short</h3>
              <p class="w3-text-green font-oswald w3-padding-small">49,95 €</p>
              <div class="w3-padding-small">
                <a class="fto-basket blanco w3-green w3-padding-small" href="#"></a>
              </div>
            </div>
          </div>

          <div class="w3-margin-top w3-third">
            <div class="w3-half">
              <img src="imgs/products/r/05.jpg" class="w3-image" alt="">
            </div>
            <div class="w3-half w3-padding w3-left-align">
              <h3>short</h3>
              <p class="w3-text-green font-oswald w3-padding-small">49,95 €</p>
              <div class="w3-padding-small">
                <a class="fto-basket blanco w3-green w3-padding-small" href="#"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="w3-container w3-padding-32 w3-quarter">
          <img class="mySlides w3-image" src="imgs/products/r/07.jpg">
          <img class="mySlides w3-image" src="imgs/products/r/08.jpg">
          <img class="mySlides w3-image" src="imgs/products/r/09.jpg">
          <img class="mySlides w3-image" src="imgs/products/r/10.jpg">
          <img class="mySlides w3-image" src="imgs/products/r/11.jpg">
          <img class="mySlides w3-image" src="imgs/products/r/12.jpg">
          <img class="mySlides w3-image" src="imgs/products/r/13.jpg">
        </div>
      </div>
    </div>
    <script type="text/javascript" src="./js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="./js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="./js/carousel-scripts.js"></script>
    <script type="text/javascript" src="./js/scripts.js"></script>

    <script>
      carousel();
    </script>


    <?php

    include('./templates/footer.php');

    ?>