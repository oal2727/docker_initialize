<?php 
    echo 'INITIALIZE WITH DOCKER'. "<br>";
    $connect = mysqli_connect("db","root","example","company1");
    $sql = "SELECT * FROM users";
    $result = $connect->query($sql);
    while($data = $result->fetch_object()){
        $users[]=$data;
    }
    foreach($users as $user){
        echo $user->name ." " .$user->amount."<br>";
    }

?>