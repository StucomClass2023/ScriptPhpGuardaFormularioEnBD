<!DOCTYPE html>
    
<html>
    
    <head>
        <title>Insert Page page</title>
    </head>
    
    <body>
        <center>
            <?php
        
                function linkResource($rel, $href) {
                    echo "<link rel='{$rel}' href='{$href}'>";
                    }  
                    include_once("./formularioPhp.php");

                if(isset($_POST['submit'])){
                
                    $conn = mysqli_connect("localhost", "root", "", "formulariodb");
    
            
                    if($conn === false){
                        die("ERROR: Could not connect. "
                            . mysqli_connect_error());
                    }
    
            
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $email = $_POST['email'];
                    $edad = $_POST['edad'];
                    $nivelEstudio = $_POST['nivelEstudio'];
                    $listaCurso = $_POST['listaCurso'];
                    $masInfo = $_POST['masInfo'];
    

                    $sql = "INSERT INTO form VALUES ('$nombre',
                        '$apellido','$email','$edad','$nivelEstudio','$listaCurso','$masInfo')";
    
            
                    if(mysqli_query($conn, $sql)){
                        echo "<h3>Datos guardados en la base de datos correctamente."
                            . "<br>Porfavor revisar el localhost php my admin"
                            . " para ver los datos ingresados.</h3>";
    
                        echo nl2br("\n$nombre\n $apellido\n $email\n $edad\n"
                            . "$nivelEstudio\n $listaCurso\n $masInfo");
                    } else{
                        echo "ERROR: BOOM! Lo Siento $sql. "
                            . mysqli_error($conn);
                    }
    
            
                    mysqli_close($conn);
                }
            ?>
        </center>
    </body>
    
</html>
    
