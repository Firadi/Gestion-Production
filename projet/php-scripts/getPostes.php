<?php
    include 'connect.php';
    $sql = "SELECT * FROM post WHERE id_Code = 1";

    if($result = $conn->query($sql)){
        $posts = [];
        while($post = $result->fetch_assoc()){
            $posts[] = $post;
        }
    }
    else {
        echo 'error';
    }
    $conn->close();
?>