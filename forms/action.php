<?php
include 'con.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
$name=filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$subject=filter_input(INPUT_POST,'subject',FILTER_SANITIZE_STRING);
$message=filter_input(INPUT_POST,'message',FILTER_SANITIZE_STRING);


}
else{
    echo "Please fill all the required fields.";
}

$query='INSERT into `form_data`(`name`,`email`,`subject`,`message`) VALUES (:name, :email, :subject,:message)';
$stmt= $pdo->prepare($query);

if($stmt){
    
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':subject',$subject);
    $stmt->bindParam(':message',$message);

    if($stmt->execute()){
        echo "Data Inserted :]";
    }
    else{
        echo "Error";
    }


}
else
{
    echo "Query Failed";
}




?>