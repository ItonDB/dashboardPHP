<?php
    session_start();
    include('conn.php');
    $err = array();
    if(isset($_POST['reg_user'])){
        $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $password2 = mysqli_real_escape_string($conn,$_POST['password2']);

       $user_chek = "SELECT * FROM users_id WHERE email = '$email'";
       $query = mysqli_query($conn, $user_chek);
       $result = mysqli_fetch_assoc($query);

       if($result){
        if$result['email'] === $email
       }
    }


?>