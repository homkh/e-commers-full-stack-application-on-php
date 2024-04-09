<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // creating the database connection 
    $con = mysqli_connect('localhost', 'root', '', 'mystore');
    if ($con-> connect_error) {
        die('Connection: Failed!'.$con-> connect_error);
    } else {
        $store = $con->prepare("INSERT INTO formedetails (name,email,subject,message) VALUES (?, ?, ?, ?)");
        $store-> bind_param("ssss",$name,$email,$subject,$message);
        $store->execute();
        echo"Sucess!";
        echo"<div class='alert alert-success text-center' role='alert'>
                <h4 class='alert-heading'>Well done!</h4>
                <p>Your Query was Sucessfully Submited</p>
                <hr>
                <p class='mb-0'>We will be reach you as soon as possible.</p>
            </div>";
        $store->close();
        $con->close();
    }
?>
