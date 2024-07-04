<?php
    if (isset($_POST['submit'])) {
        
        //check name
        if(empty($_POST['name'])) {
            echo 'A name is required <br />';
        } else {
            $name = $_POST['name'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $name)) {
                echo 'Name must be Latin script and spaces only';
            }
            // echo "Name: " . htmlspecialchars($_POST['name']) . "<br>";
        }

        // check email
        if(empty($_POST['email'])) {
            echo 'An email is required <br />';
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'email must be a valid email addresss';
            }
        }

        //check phone number
        if(empty($_POST['phone'])) {
            echo 'A phone number is required <br />';
        } else {
            $phone = $_POST['phone'];
            // if(!preg_match('^(\+?\d{1,3}[-.\s]?)?(\(?\d{3}\)?[-.\s]?)?[\d\s.-]{7,}$/',$phone)) {
            if(!preg_match('/^[0-9]{7,}$/',$phone)) {
                echo 'Invalid phone number <br />'; 
            }
        }

        //check city
        if(empty($_POST['phone'])) {
            echo 'A city is required <br />';
        } else {
            // echo "City: " . htmlspecialchars($_POST['city']) . "<br>";
        }
    } //end of POST check
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <section class="container">
        <h4 class="center grey-text text-darken-2">Subscription</h4>
        <form action="add.php" class="grey lighten-3" method="POST">
            <label>Your Name:</label>
            <input type="text" name="name">
            <label>Your Email:</label>
            <input type="text" name="email">
            <label>Phone Number</label>
            <input type="tel" name="phone">
            <label>Your City</label>
            <input list="cities" name="city">
            <datalist id="cities">
                <option value="Odesa">
                <option value="Kyiv">
                <option value="Kharkiv">
                <option value="Dnipro">
                <option value="Lviv">
            </datalist>
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn blue accent-1">
            </div>
        </form>
    </section>
</body>
</html>