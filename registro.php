<?php
session_start(); // Iniciar la sesión
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <script src="https://kit.fontawesome.com/ee4011fd08.js" crossorigin="anonymous"></script>
    <title>Sclothing</title>
</head>

<body>
    <header>
        <nav class="nav_uno">
            <ul>
                <li>SCLOTHING</li>
                <li><a href="./mujer.php">MUJER</a></li>
                <li>HOMBRE</li>
                <li>OFERTAS</li>
            </ul>
        </nav>
        <nav class="nav_dos">
            <ul>
                <li><input type="text" placeholder="Buscar"></li>
               <!-- <li><a href="./inicio_sesion.php">Iniciar sesión</a></li>-->
                <li><a href="#">Carrito</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                <li>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
                <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
            <?php else: ?>
                <li><a href="./inicio_sesion.php">Iniciar sesión</a></li>
                <li><a href="-/registro.php">Registrarse</a></li>
            <?php endif; ?>
            </ul>
        </nav>

    </header>
    <section class="vh-100" >
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registro</p>
      
                      <form class="mx-1 mx-md-4" method="POST" action="register.php">
      
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class=" fas fa-person-half-dress fa-lg me-3 fa-fw"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <input type="text" name="nombre" id="form3Example1c" class="form-control" required/>
                            <label class="form-label" for="form3Example1c">Nombre</label>
                          </div>
                        </div>      
                        
                        
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <input type="text" name="apellido" id="form3Example2c" class="form-control" required />
                                <label class="form-label" for="form3Example2c">Apellido</label>
                            </div>
                        </div>
                        
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <input type="email" name="correo" id="form3Example3c" class="form-control" required />
                            <label class="form-label" for="form3Example3c">Correo</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-calendar-alt fa-lg me-3 fa-fw"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                              <input type="date" name="fecha_nacimiento" id="form3Example5c" class="form-control" required />
                              <label class="form-label" for="form3Example5c">Fecha de Nacimiento</label>
                          </div>
                      </div>

                        <div class="d-flex flex-row align-items-center mb-4">                            
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                              <input type="text" name="usuario" id="form3Example6c" class="form-control" required/>
                              <label class="form-label" for="form3Example6c">Usuario</label>
                            </div>
                          </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <input type="password" name="contraseña" id="form3Example4c" class="form-control" required/>
                            <label class="form-label" for="form3Example4c">Contraseña</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div data-mdb-input-init class="form-outline flex-fill mb-0">
                            <input type="password" name="rep_contraseña" id="form3Example4cd" class="form-control" required/>
                            <label class="form-label" for="form3Example4cd">Repetir contraseña</label>
                          </div>
                        </div>
      
                        <div class="form-check d-flex justify-content-center mb-5">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example7c" required/>
                          <label class="form-check-label" for="form2Example7c">
                           <a href="#!"> Estoy de acuerdo con los términos de servicio</a>
                          </label>
                        </div>
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <input  type="submit" class="btn btn-primary btn-lg"></input>
                        </div>
      
                      </form>
      
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <footer>
        <div class="conte_foot1">
            <hr>
            <p>Regístrate y obtén un cupón</p>
            <input type="mail" placeholder="correo">
            <input type="button" value="Enviar">
            <p><input type="checkbox" name="" id="">Declaro que he leído la política de datos
            </p>
            <hr>
        </div>
        <div class="conte_foot2">
            <div class="cf1">
                <div>COMUNÍCATE CON NOSOTROS</div>
                <div>servicioalcliente@Sclothing.com.co</div>
                <div>Preguntas frecuentes</div>
                <div>PQR</div>
                <div>Rastreo de envÍo</div>
            </div>
            <div class="cf2">
                <div>CONDICIONES GENERALES DE VENTA</div>
                <div>Políticas de envio.</div>
                <div>Políticas de garantía. </div>
            </div>
            <div>
                <p>Teléfono</p>
                <p>Whatsapp</p>
                <p>Cambios</p>
            </div>
        </div>
        
    </footer>
    
</body>

</html>