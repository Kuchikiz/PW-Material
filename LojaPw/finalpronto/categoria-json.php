<?php

    include("conexão.php");

    $stmt = $pdo->prepare("select * from tbCategoria");	
    $stmt ->execute();

    $data = array();
    while($row = $stmt ->fetch(PDO::FETCH_ASSOC)){        
        $data[] = $row;    					
    }	

    echo json_encode($data);
?>

