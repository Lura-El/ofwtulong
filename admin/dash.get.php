<?php

    header("Content-Type: application/json");  
    
    require __DIR__ . '/../inc/connect.db.php';
    
    try{

        $query = "SELECT * FROM contact_us";
        $result = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($result);

    }catch(PDOException $e){
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);

    }


