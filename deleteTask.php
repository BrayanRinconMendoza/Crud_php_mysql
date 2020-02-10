<?php 

include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    $rest = mysqli_query($conx, $query);

    if(!$rest){
        die("Query failed");
    } else {
        $_SESSION['message'] = 'Task removed seccessfully';
        $_SESSION['message_type'] = 'danger';
        header("Location: index.php");
    }
}

?>