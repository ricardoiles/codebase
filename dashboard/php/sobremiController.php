<?php
	require 'connection.php';

	if(empty($_SESSION['name']))
	header('Location: bogar_login.php');

    // Define database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cesaupfy_bogar";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // update hero info
    if(isset($_POST['update_hero_sobre_mi'])){
        $id_sobre_mi = 1;
        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];

        try {
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $resultado = "UPDATE hero_sobre_mi SET titulo = '$titulo', subtitulo = '$subtitulo'
                        WHERE id_sobre_mi = ".$id_sobre_mi;
            
            // Prepare statement
            $stmt = $conn->prepare($resultado);
            
            // execute the query
            $stmt->execute();
            
            // echo a message to say the UPDATE succeeded
            // echo $stmt->rowCount() . " records UPDATED successfully";

            $_SESSION['title'] = '¡Yupi! Todo ha salido bien';
            $_SESSION['message'] = 'Se ha actualizado la información correctamente';
            $_SESSION['icon'] = 'fa-solid fa-circle-check';
            $_SESSION['message_type'] = 'success';
            header('Location: ../bogar_sobre_mi.php');
        }catch(PDOException $e) {
            echo $resultado . "<br> mal" . $e->getMessage();
        }
        $conn = null;  
    }

?>