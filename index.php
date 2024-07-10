<?php

    include ('config/db_connect.php');

    // connet to database
    // $conn = mysqli_connect('localhost', 'pet_user', 'lfybzadmin', 'pet');

    // check connection
    // if(!$conn){
        // echo 'Connection error: ' . mysqli_connect_error();
    // }

    // write query for all users
    $sql = 'SELECT name, phone, email, city FROM users ORDER BY name';

    // make query & get result
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory
    mysqli_free_result($result);
    
    // close connection
    mysqli_close($conn);

    //print_r($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Plan</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        /* body {
            background-color: indigo lighten-4;
        } */
        .btn:hover{
            background-color: #263238;
            /* background-color: #b388ff; */
            color: white;
        }
        .list{
            height: 150px;
            padding:0 10%;
            /* margin-bottom: 20px; */
        }
        .btn-container {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }
        .row{
            margin-top: 50px;
            margin-left: 80px;
            margin-right: 80px;
        }
    </style>
    <script>
        function redirectToIndex() {
            window.location.href = 'add.php';
        }
    </script>
</head>
<body class="grey lighten-5">
    <div>
        <h5 h5 class="center-align"><b>Billing and subsription</b></h5>
    </div>
    <div class="row">
        <div class="col m4 s12 planFree">
            <div class="plan_name">
                <h6 class="center-align grey-text text-darken-4"><b>FREE</b></h6>
            </div>
            <div class="list">
                <ul>
                    <li><i class="material-icons blue-text text-accent-1">featured_play_list</i> Access to basic features</li>
                    <li><i class="material-icons blue-text text-accent-1">help_center</i> Community support</li>
                    <li><i class="material-icons grey-text">cloud_off</i> Limited storage space</li>
                    <li><i class="material-icons grey-text">featured_video</i> Ads displayed within the app</li>
                </ul>
            </div>
            <div class="btn-container">
                <div class="btn center-align btn-flat btn-bordered" onclick="redirectToIndex()"> Activate </div>
            </div>
        </div>

        <div class="col m4 s12 planPro">
            <div class="plan_name">
                <h6 class="center-align grey-text text-darken-4" onclick="redirectToIndex()"><b>PRO</b></h6>
            </div>
            <div class="list">
                <ul>
                    <li><i class="material-icons blue-text text-accent-1 ">featured_play_list</i> Access to all basic and advanced features</li>
                    <li><i class="material-icons blue-text text-accent-1 ">cloud_done</i> Increased storage space</li>
                    <li><i class="material-icons blue-text text-accent-1 ">live_help</i> Priority customer support</li>
                    <li><i class="material-icons blue-text text-accent-1 ">featured_video</i> Ad-free experience</li>
                </ul>
            </div>
            <div class="btn-container">
                <div class="btn center-align btn-flat btn-bordered" onclick="redirectToIndex()"> Activate </div>
            </div>
        </div>

        <div class="col m4 s12 planPremium">
            <div class="plan_name">
                <h6 class="center-align grey-text text-darken-4"><b>PREMIUM</b></h6>
            </div>
            <div class="list">
                <ul>
                    <li><i class="material-icons blue-text text-accent-1">featured_play_list</i> All Pro Plan features included</li>
                    <li><i class="material-icons blue-text text-accent-1">cloud_done</i> Unlimited storage space</li>
                    <li><i class="material-icons blue-text text-accent-1">support_agent</i> Personalized customer support</li>
                    <li><i class="material-icons deep-purple-text text-lighten-3">tips_and_updates</i> Exclusive access to new features and updates</li>
                </ul>
            </div>
            <div class="btn-container">
                <div class="btn center-align btn-flat btn-bordered" onclick="redirectToIndex()"> Activate </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php foreach($users as $user) { ?>
                    <div class="col s6 md3">
                        <div class="card z-depth-0 blue-grey darken-4">
                            <div class="card-content center">
                                <h6 class="blue-grey-text text-lighten-5"><?php echo htmlspecialchars($user['name'])?></h6>
                                <div class="blue-grey-text text-lighten-5"><?php echo htmlspecialchars($user['city'])?></div>
                            </div>
                            <div class="card-action right-align">
                                <a href="#" class="brand-text">more info</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</body>
</html>