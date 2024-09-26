<?php

    $connect = mysqli_connect("localhost","root","root","blood_donation_camp") or die(mysqli_error($connect));
    if($connect)
    {
        echo "Connected Sucessfully";
    }
    else
    {
        echo "Not Connected";
    }
?>