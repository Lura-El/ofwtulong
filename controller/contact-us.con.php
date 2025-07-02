<?php
    require __DIR__ . '/../inc/connect.db.php';

try{
     if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = htmlspecialchars($_POST['name']);
        $email_address = trim($_POST['email']);
        $phone_number = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);

        if(!filter_var($email_address, FILTER_VALIDATE_EMAIL)){
            $error = "Invalid email format";
        }

        if(empty($email_address) || empty($phone_number) || empty($message) ){
            $error = "This field is required";
        }else{
            $query = "INSERT INTO contact_us (name, email_address, phone_number, message)
             VALUES (:name, :email_address, :phone_number, :message)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email_address', $email_address);
            $stmt->bindParam(':phone_number', $phone_number);
            $stmt->bindParam(':message', $message);

            if ($stmt->execute()) {
                header("Location: /ofw/index.php");
                exit; 
            }

        }
     
    }
} catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}
   
