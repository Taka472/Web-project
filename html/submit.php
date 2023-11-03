<?php
    $con = mysqli_connect('localhost','DESKTOP-H4QLB8\Dell', '','PetShop') or die('cannot connect');

    $Email = $_POST['Email'];
    $Name = $_POST['Name'];
    $Message = $_POST['Message'];

    $query = "INSERT into `MainPage` (`Email`, `Name`, `Message`) VALUES ('$Email', '$Name', '$Message')";

    mysqli_query($con, $query);
?>