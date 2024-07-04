<?php
    if (isset($_POST['submit'])) {
        
        //check name
        if(empty($POST['name'])) {
            echo 'A name is required <br />';
        } else {
            echo "Name: " . htmlspecialchars($_POST['name']) . "<br>";
        }

        // check email
        if(empty($POST['email'])) {
            echo 'An email is required <br />';
        } else {
            echo "Email: " . htmlspecialchars($_POST['email']) . "<br>";
        }

        //check phone number
        if(empty($POST['email'])) {
            echo 'A phone number is required <br />';
        } else {
            echo "Phone number: " . htmlspecialchars($_POST['phone']) . "<br>";
        }

        //check city
        if(empty($POST['phone'])) {
            echo 'A city is required <br />';
        } else {
            echo "City: " . htmlspecialchars($_POST['city']) . "<br>";
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
            <input type="email" name="email">
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