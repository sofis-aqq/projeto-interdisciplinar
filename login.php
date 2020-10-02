<?php
    session_start();

   
    $user = $_POST['usuario'];
    $password = $_POST['senha'];

    $consulta = "SELECT * FROM usuario WHERE usuario ='$user' AND senha='$password'";
    $resultado = $conex -> query($consulta);

    $registros = $resultado -> num_rows;
    $resultado_usuario = mysqli_fetch_assoc($resultado);

    if($registros==1){
        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['usuario'] = $resultado_usuario['usuario'];
        $_SESSION['senha'] = $resultado_usuario['senha'];
        header ('Location: restrita.php');
    }
    
?>