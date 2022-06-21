<?php

	$conection = "localhost";
	$user = "root";
	$senha = "@lablemos2019";
	$dbname = "restaurante-para-todos";


	$conn = mysqli_connect($conection, $user, $senha, $dbname);

    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }

?>


