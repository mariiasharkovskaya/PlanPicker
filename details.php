<?php 

    include('config/db_connect.php');

    if(isset($_POST['delete'])){
        $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
        $sql = "DELETE FROM users WHERE id = $id_to_delete";
        if(mysqli_query($conn, $sql)){
            // success
            header('Location: index.php');
        } {
            // failure
            echo 'query error: ' . mysqli_error($conn);
        }
    }

    // check GET request id param
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        // make sql
        $sql = "SELECT * FROM users WHERE id = $id";

        // get the query result
        $result = mysqli_query($conn, $sql);

        // fetch result in array format
        $user = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

        // print_r($user);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container center">
        <?php if($user): ?>
            <p>Created by: <?php echo htmlspecialchars($user['email']); ?></p>
            <p>From <?php echo htmlspecialchars($user['city']); ?></p>
            <p><?php echo date($user['created_at']); ?></p>

             <!-- DELETE FROM -->
             <form action="details.php" method="POST">
                <input type="hidden" name="id_to_delete" value="<?php echo $user['id']?>">
                <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
             </form> 
             <?php else: ?>
            <h5>No such user exists</h5>
        <?php endif; ?>
    </div>
</body>
</html>