<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];

    $txtfile=fopen("data.txt","a");
    fwrite($txtfile,$name . "\t" . $email . "\t" . $passwd. "\n");
    fclose($txtfile);
    echo "data inserted successfully";

}
?>