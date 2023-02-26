<?php

session_start();
include("../functions/myfunctions.php");
include('../config/connection.php');

if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $login_query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $login_query_run = mysqli_query($conn, $login_query);
    print_r($login_query);
    
    if(mysqli_num_rows($login_query_run) > 0)
    {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $userid = $userdata['id'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];

        $_SESSION['auth_user'] = [
            'user_id' => $userid,
            'email' => $useremail,
        ];

        $_SESSION['role_as'] = $role_as;

       
            redirect("../index.php","Welcome to dashboard");
       
    }
    else
    {
        redirect("../login.php","Invalid Credentials");
    }
}
else if(isset($_POST['add_user_btn']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $add_user_query = "INSERT INTO admin (email, password, role_as) VALUES ('$email', '$password', '1')";
    print_r($add_user_query);

    $add_user_query_run = mysqli_query($conn, $add_user_query);

    if($add_user_query_run){
        redirect("../adduser.php", "Admin added successfully");

    }
    else{
        redirect("../adduser.php", "Something Went Worng");
    }
}
?>
