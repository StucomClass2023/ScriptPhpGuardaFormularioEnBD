
    <?php
        
        $nombre = $apellido = $email = $edad = $nivelEstudio = $listaCurso = $masInfo = "";
        $nombreErr = $apellidoErr = $emailErr = $edadErr = $nivelEstudioErr = $listaCursoErr = $masInfoErr = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
        if (empty($_POST['nombre'])) {
            $nombreErr = "Se require un nombre!";
        } else {
            $nombre = test_input($_POST['nombre']);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$nombre)) {
              $nombreErr = "Solo letras y espacios!";
            }
        }
        if (empty($_POST["apellido"])) {
          $apellidoErr = "Se require un apellido!";
        } else {
          $apellido = test_input($_POST["apellido"]);          
          if (!preg_match("/^[a-zA-Z-' ]*$/",$apellido)) {
            $apellidoErr  = "Solo letras y espacios!";
          }
        }
  
        if (empty($_POST["email"])) {
            $emailErr = "Se require un correo electronico!";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Formato no valido!";
            }
        }

        if (empty($_POST["edad"])) {
           $edadErr = "Se require un numero!";
        } else {
           $edad = test_input($_POST["edad"]);           
           if (!preg_match("/^[0-9]*$/",$edad)) {
              $edadErr = "Solo numeros!";
           }
        }

        if (empty($_POST["nivelEstudio"])) {
            $nivelEstudio = "Se require un Nivel de Estudio!";
        } else {
            $nivelEstudio = test_input($_POST["nivelEstudio"]);
        }

        if (empty($_POST["listaCurso"])) {
          $listaCurso = "Se require seleccionar un Curso!";
        } else {
          $listaCurso = test_input($_POST["listaCurso"]);
          
        }if (empty($_POST["masInfo"])) {
        $masInfo = "No se requiere mas informacion";
        } else {
        $masInfo =  "Mas Informacion";
        }
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
