<?php
 include_once "head.php";
?>
      <div class ="container">
        <div class ="row">
            <div class="col"></div>
            <div class="col-sm-6 col-lg-8 p-1">
            <!-- 3 imágenes promocionales de tu instituto -->
                <h2 class ="shadow p-3 mb-4 bg-body rounded text-center" id ="noticias">Noticias y Promociones</h2>
                <div id="carouselExampleIndicators" class="carousel slide shadow bg-body rounded"  style ="max-width: 100%; max-height:90%;" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner text-center">
                      <div class="carousel-item active">
                        <a href="#" style="text-decoration: none;"><img src="src/multimedia/imagen1.jpg" style ="max-width: 100%; max-height:90%;" alt="programas">
                        <span class ="navbar-brand" style ="margin-top:-25;">Licenciaturas y Posgrados</span>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#" style="text-decoration: none;"><img src="src/multimedia/imagen2.jpg"  style ="max-width: 100%; max-height:90%;" alt="Asesoria">
                        <span class ="navbar-brand" style ="margin-top:-25;">Asesoria Personalizada</span>
                        </a>
                      </div>
                      <div class="carousel-item">
                        <a href="#" style="text-decoration: none;"><img src="src/multimedia/imagen3.jpg" style ="max-width: 100%; max-height:90%;" alt="taller">
                        <span class ="navbar-brand" style ="margin-top:-25;">Taller de diseño. Proximo inicio Abril-2021</span>
                        </a>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  <div class ="p-4"></div>
                  <h2 class =" fs-2 shadow p-3 mb-4 bg-body rounded text-center" id ="acerca">Información Institucional</h2>
                <!--Avisos institucionales 
                puede  ser  sobre  periodo  de  vacaciones,  proceso  de reinscripción, solicitud de becas, etc-->
                <div class ="content shadow p-3 mb-4 bg-body rounded text-center">
                <div class ="row p-2">
                <div class ="col">
                    <img src="src/multimedia/img-Escuela.jpg" style="max-width: 100%;" alt="">
                </div>
                <div class ="col">
                <h2 class ="fs-4">Acerca de Nosotros.</h2>
                <p class ="fs-6">Somos una organización orientada a la enseñanza sobre la industria tecnológica digital, que permite a sus alumnos a participar en proyectos que contribuyen a la mejora del entorno socio-laboral.</p>
                <br>
                </div>
                <div class ="row">
                <div class ="col">
                <h3 class ="fs-4">Visión</h3>
                <p class ="fs-6">Ser una institución que forme profesionistas que ayuden a la mejora social mediante el desarrollo e implementación de tecnologías digitales.</p>
                </div>
                <div class ="col">
                <h3 class ="fs-4 text-justify-start">Misión</h3>
                <p class ="fs-6">Formar los mejores profesionistas con habilidades y competencias que apoyen a desarrollar soluciones en la industria tecnológica digital.</p>
                </div>
                </div>
                </div>
                <div class ="row p-2">
                    <div class ="col">
                    <a href="#" class ="" style="text-decoration:none">
                    <img src="src/multimedia/calendario.jpg" class ="img-thumbnail m-2" style="max-width: 150px;" alt="">
                    <label class ="fs-5">Calendario Escolar</label>
                    </a>                    
                    </div>
                    <div class ="col">
                    <a href="#" style="text-decoration:none;">
                    <img src="src/multimedia/imagen_colab1.jpg" class ="img-thumbnail m-2" style="max-width: 150px;" alt="">
                    <label class ="fs-5">Inscripcion de Talleres</label>
                    </a>
                    </div>
                    <div class ="col">
                    <a href="#" style="text-decoration:none;">
                    <img src="src/multimedia/imagen_colab2.jpg" class ="img-thumbnail m-2" style="max-width: 150px;" alt="">
                    <label class ="fs-5">Sala Colaborativa</label>
                    </a>
                    </div>
                </div>                
                </div>
            </div>
            <div class="col p4"></div>
        </div>
<?php
 include_once "footer.php";
?>
