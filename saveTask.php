<?php

include("db.php");

if(isset($_POST['save_task'])){
   // echo 'Saving'; Mostrar que se está recibiendo los datos
   $title = $_POST['title'];
   $description = $_POST['description'];

   $query = "INSERT INTO task (title, description) VALUES ('$title', '$description')";
   $resultado = mysqli_query($conx, $query);

   if(!$resultado){
        die("Query failed");
   }else{
       $_SESSION['message'] = 'Task saved succesfully';
       $_SESSION['message_type'] = 'success';
       header("Location: index.php");
   }
}

?>