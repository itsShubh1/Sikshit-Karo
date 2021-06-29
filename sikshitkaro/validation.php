<?php 
    session_start(); //$ ke baad underscore wo global variable kehalate hai. session variable is also a global variable, and session start karenge tab ye work karega...jo backendf and frontend mai work kare to use session variable kehte hai
    header('location:index.php'); //render karne ke liye hai wapas jaana hai index.php ...(redirect hona)
    $name = $email = $contact = $gender = $dob = $msgbox = '';

    //Database linking..
    include './connectionDB.php';

    $name = $_POST['name']; // $name php variable
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $msgbox = $_POST['msgbox'];
    

     //Checking already registered email.
    // $email_check_query = "select * from free_education where email='$email' limit 1";
    // limit ka use sirf ek hi pata lagana hai ki mail h ya nai
    // $result = mysqli_query($connection, $email_check_query);
    // $user = mysqli_fetch_assoc($result);

    // //If email already registered
    // if ($user['email'] === $email) {
    //     echo '<script>alert("Email already exists.")</script>';
    // }else{

        // Insterting the data in database
        $query = "insert into free_education (name, email, phone, gender, dob, other) values ('$name', '$email', '$contact', '$gender', '$dob', '$msgbox')";
    
        $insert_data = mysqli_query($connection, $query);
    
        if($insert_data){
            $_SESSION["status"] = 2; //special type of variable.....access frontend mai v kar sakte hai
            $_SESSION["name"] = $name;
            echo '<script>alert("Sucess")</script>';
        }else{
            echo '<script>alert("Something went wrong! Please Try Again....")</script>';
        }
    // }
        
        
        

        
    // Closing the connection.
    mysqli_close($connection)
    
?>