<?php
    if (isset($_POST['submit'])) {
        echo "<pre>";
        print_r($_POST); // Отображение содержимого массива $_GET
        echo "</pre>";
        echo "Email: " . $_POST['email'] . "<br>";
        echo "City: " . $_POST['city'] . "<br>";
    }
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
            <!-- <div class="input-field">
                <select>
                    <option value="" disabled selected>Choose your option</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                </select>
            </div> -->
            <div class="center">
                <!-- <input type="submit" name="submit" value="submit" class="btn purple lighten-3"> -->
                <input type="submit" name="submit" value="submit" class="btn blue accent-1">
            </div>
        </form>
    </section>
</body>
</html>