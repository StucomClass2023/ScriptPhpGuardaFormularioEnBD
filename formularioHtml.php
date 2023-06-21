
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once("./valoresAgregadosPhp.php");      
      linkResource("stylesheet", "./estilos/estilos.css?v=<?php echo time(); ?>"); 
    ?>     
    <title>Formulario HTML</title>   
</head>
  <body>
    <main>
        <div class="row">
           <div>
              <div class="m-b-md text-center">
                 <h1 id="title">EJERCICIO FORMULARIO</h1>
              </div>  
              <p><span class="error"></span></p>
              <form method="post" action="./valoresAgregadosPhp.php"
                id="survey-form" name="survey-form" target="_blank">  
                  <fieldset>
                    <label for="nombre" id="nombre">
                      Nombre:
                      <input class="" type="text"  name="nombre" value="<?php echo $nombre;?>"
                      placeholder="OBLIGATORIO" required  >
                      <span class="error">* 
                        <?php echo $nombreErr;?>
                      </span>
                    </label>
                  </fieldset>                  
                  <fieldset>
                    <label for="apellido" id="apellido">
                      Apellido: 
                      <input class="" type="text" id="apellido" name="apellido" value=" <?php echo $apellido;?>" 
                      placeholder="OBLIGATORIO" required>
                      <span class="error">* 
                        <?php echo $apellidoErr;?>
                      </span>
                    </label>
                  </fieldset>                 
                  <fieldset>
                    <label for="email" id="email">
                      E-mail:
                      <input class="" type="email" id="email" name="email" value=" <?php echo $email;?>" 
                      placeholder="OBLIGATORIO" required />
                      <span class="error">
                        * 
                        <?php echo $emailErr;?>
                      </span>
                    </label>
                  </fieldset>                                   
                  <fieldset>
                    <label for="number" id="edad">
                      Edad:
                      <input class="" type="number" id="edad" name="edad" min="16" max="112" 
                        value=" <?php echo $edad;?>" placeholder="OBLIGATORIO" required />
                      <span class="error">
                        <?php echo $edadErr;?>*
                      </span>
                    </label>
                  </fieldset>                             
                  <fieldset>
                    <div class="labels">
                       Nivel de Estudios:
                    </div>
                    <label class="m-b-xs">
                      <input type="radio" name="nivelEstudio" <?php if (isset($nivelEstudio) 
                          && $nivelEstudio=="basico") echo "checked";?> value=" Basico">Basico
                    </label>
                    <label class="m-b-xs">
                      <input type="radio" name="nivelEstudio" <?php if (isset($nivelEstudio) 
                          && $nivelEstudio=="universitario") echo "checked";?> value=" Universitario">Universitario
                    </label>
                    <label class="m-b-xs">
                      <input type="radio" name="nivelEstudio" <?php if (isset($nivelEstudio) 
                          && $nivelEstudio=="otro") echo "checked";?> value=" Otro">Otro  
                    </label>
                    <span class="error">* <?php echo $nivelEstudioErr;?></span>
                 </fieldset>                  
                  <fieldset>
                    <label for="m-b-xs">
                      Cursos disponibles:
                       <select id="listaCurso" name="listaCurso" class="m-t-xs">
                       <option value="">--- Escoge un nivel de estudio. ---</option>
                        <option value=" Basico" <?php if (isset($listaCurso) 
                          && $listaCurso=="basico") echo "checked";?>>Basico</option>
                        <option value=" Universitario" <?php if (isset($listaCurso) 
                          && $listaCurso=="universitario") echo "checked";?>>Universitario</option>
                        <option value=" Doctorado" <?php if (isset($listaCurso) 
                          && $listaCurso=="doctorado") echo "checked";?>>Doctorado</option>
                        <option value=" Otro" <?php if (isset($listaCurso) 
                          && $listaCurso=="otro") echo "checked";?>>Otro</option>
                       </select>
                    </label>
                    <span class="error">* <?php echo $listaCursoErr;?></span>
                 </fieldset>                 
                  <fieldset>          
                    <label class="m-b-xs">                      
                      <input type="radio" name="masInfo" <?php if (isset($masInfo) 
                          && $masInfo=="siInfo") echo "checked";?> value="Mas informacion.">Deseo mas informacion via correo electronico.
                    </label> 
                    <label class="m-b-xs"> 
                      <input type="radio" name="masInfo" <?php if (isset($masInfo) 
                          && $masInfo=="noInfo") echo "checked";?> value="No mas informacion.">No deseo mas informacion.   
                    </label>  
                    <span class="error">* <?php echo $masInfoErr;?></span>
                 </fieldset>                   
                 <button id="submit" type="submit" name="submit" class="btn">Presentar el formulario.</button>
              </form>

          </div>
        </div>
    </main>
  </body>
</html>
