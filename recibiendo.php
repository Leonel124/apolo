<?php
//Declaramos las variables de la conexion
$username = 'root';
$password = '';
$database = 'school';
// Declaramos un objeto que con tiene los valores de la conexion
$mysqli = new mysqli("localhost", $username, $password, $database);
// Seleccione la base de datos
$mysqli->select_db($database) or die( "Unable to select database");
// Recibi los valores del formulario y los asigne a las variables names, lastname, email y password
$name=$_REQUEST['name'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
// Aqui setee la variable sql con un insert string los valores que recibí
$sql = "INSERT INTO students(name, lastname, email, password)VALUES ('$name', '$lastname', '$email', '$password')";
// Cree una condicion donde se revisa si se registro correctamente o si sucedio un error
    if ($mysqli->query($sql)) {
       echo "Registro ingresado correctamente";
    } else {
       echo "Error:";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="py-5">
<div class="container">
<?php
// Hice una peticion para conseguir todos los datos de la tabla students y el resultado de eso se lo asigno a la variable result
if ($result = $mysqli->query("SELECT * FROM students;")){
    // Imprimo el numero de filas  de la tabla students
    echo 'Num de filas '.$result->num_rows;?>
    <table class="table">
        <tbody>
    <?php 
    // Creo un bucle de tipo while que tenga que se ejecutara mientras existan filas en el result
    while($row=$result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['lastname'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['created_at'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>
    <?php
    }
?>
</div>
    </body>
    </html>
    <?php
    // Cierro la conexion con la base de datos
    $mysqli->close();
