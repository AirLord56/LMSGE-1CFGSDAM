<?php
 $nombre =   isset( $_GET['nombre'] ) ? $_GET['nombre'] : '';
 $apellidos =   isset( $_GET['apel'] ) ? $_GET['apel'] : '';
 $pass= isset($_GET['password']) ? $_GET['password'] :'';
 $edad =   isset( $_GET['edad'] ) ? $_GET['edad'] : '';
 $sexo =  isset( $_GET['sexo'] ) ? $_GET['sexo'] : '';
 $correo =  isset( $_GET['correo'] ) ? $_GET['correo'] : '';
 $poblacion =  isset( $_GET['poblacion'] ) ? $_GET['poblacion'] : '';
 $desc =  isset( $_GET['desc'] ) ? $_GET['desc'] : '';
 $condiciones =  isset( $_GET['condiciones'] ) ? $_GET['condiciones'] : '';
 $masinf=   $_GET['masinf'];
 $foto =  isset( $_GET['foto'] ) ? $_GET['foto'] : '';
 
 $contenido= '
<html> 
<head> 
  	<title>Restringir por edad</title> 
</head> 

<body> 
 <p>Nombre: '.$nombre.';</p>
 <p>Apellidos: '.$apellidos.';</p>

 <p>Edad: '.$edad.';</p>
 <p>sexo: '.$sexo.';</p>
 <p>email: '.$correo.';</p>
 <p>población: '.$poblacion.';</p>
 
 <p>Descripción: '.$desc.';</p>
 <p>Condiciones: '.$condiciones.';</p>
 
 <p>Más información: '.$masinf.';</p>
 <p>Foto: '.$foto.';</p>
 
</body> 
</html>';
/*

<?php 
$nombre =   isset( $_POST['nombre'] ) ? $_POST['nombre'] : '';
$apellidos =   isset( $_POST['apellidos'] ) ? $_POST['apellidos'] : '';
$edad =   isset( $_POST['edad'] ) ? $_POST['edad'] : '';
$estudios =  isset( $_POST['estudios'] ) ? $_POST['estudios'] : '';
$edad =  isset( $_POST['edad'] ) ? $_POST['edad'] : '';
$curso =  isset( $_POST['curso'] ) ? $_POST['cursos'] : '';
$opciones =  isset( $_POST['opciones'] ) ? $_POST['opciones'] : '';
$marcas =  isset( $_POST['marcas'] ) ? $_POST['marcas'] : '';
$resultado =  isset( $_POST['resultado'] ) ? $_POST['resultado'] : '';
$descripcion =  isset( $_POST['descripcion'] ) ? $_POST['descripcion'] : '';
$contenido = '
                    <html>
                    <head>
                        <title></title>
                    </head>
                    <bod
                        <p>Titulo: '.$titulo.' </p>
                        <p>Técnica: '.$tecnica.' </p>

                         <hr>

                    </body>
                    </html>';*/
echo $contenido;                        
?>
