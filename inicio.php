<?php
session_start();
if(empty($_SESSION['username'])){
    header("location:login");
}else{
    echo $_SESSION['username'];
}



?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="es1.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <nav id="main-nav" class="autofix">
        <div id="nav-wrap">
            <ul>
            
            <li id="inicio"><a href=""><img src="./images/home2.png"></a></li>
            <li>
                <a href="#">Placas</a>
                <ul>
                <a href="addplaca"><li>Añadir</li></a>
                <a href="delplaca"><li>Eliminar</li></a>   
                </ul>
            <li id="cierre"><a href="logout" ><img src="./images/logout.png"></a></li>
            </ul>
        </div>
    </nav>
    <div>
    
    </div>
</body>
</html>