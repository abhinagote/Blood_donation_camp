<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <!-- <link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> -->
    <style>
    table {
        width: 70%;
        border: 2px solid white;
        border-collapse: collapse;
        margin: 20px;
        font-size: 18px;
    }

    th, td {
        border: 2px solid white;
        padding: 12px;
        text-align: center;
    }

    th {
        background-color: #4CAF50; /* Dark Green */
        color: white;
    }

    td {
        background-color: #B2EBF2; /* Light Blue */
    }
</style>
</head>

<body>
    <?php
    include "config_blood.php";

    if (isset($_GET["ID"])) {
        $view = mysqli_query($connect, "select * from donate where id='" . $_GET['ID'] . "'") or die(mysqli_error($connect));
        $row = mysqli_fetch_array($view);
        echo "<script>";
        echo "window.alert('" . $row['first_name'] . "')";
        echo "</script>";
        extract($row);
    }
    ?>

    <table style="width:50%">
    <form method="post" name="leform" class="signin-form">
        <div class="form-input">
            <tr>
                <td><center><label for="first_name">First Name</label></td></center>
                <td><center><input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" id="firsst_name" /></td></center>
            </tr>
            <!-- <input type="text" name="name" value="lmao" id="w3lName" /> -->
        </div>
        <div class="form-input">
        <tr>
        <td><center><label for="last_name">Last Name</label></td></center>
        <td><center><input type="text" name="last_name" id="last_name" value="<?php echo $row['last_name']; ?>" required="" /></td></center>
        </tr>
        </div>
        <div class="form-input">
        <tr>
        <td><center><label for="dob">Date Of Birth</label></td></center>
        <td><center><input type="date" name="dob" id="dob" value="<?php echo $row['dob']; ?>" required="" /></td></center>
        </tr>
        </div>
        <div class="form-input">
        <tr>
        <td><center><label for="city">City</label></td></center>
        <td><center><input type="text" name="city" id="city" value="<?php echo $row['city']; ?>" required="" /></td></center>
        </tr>
        </div>
        <div class="form-input">
        <tr>
        <td><center><label for="age">Age</label></td></center>
        <td><center><input type="text" name="age" id="age" value="<?php echo $row['age']; ?>" required="" /></td></center>
        </tr>
        </div>
        <div class="form-input">
        <tr>
        <td><center><label for="weight">Weight</label></td></center>
        <td><center><input type="number" name="weight" id="weight" value="<?php echo $row['weight']; ?>" required="" /></td></center>
        </tr>
        </div>
        <div class="form-input">
        <tr>
        <td><center><label for="email">Email</label></td></center>
        <td><center><input type="text" name="email" id="email" value="<?php echo $row['email']; ?>" required="" /></td></center>
        </tr>
        </div>
        <div class="form-input">
        <tr>
        <td><center><label for="phone">Phone Number</label></td></center>
        <td><center><input type="number" name="phone" id="phone" value="<?php echo $row['phone']; ?>" required="" /></td></center>
        </tr>
        </div>
        <div class="form-input">
        <tr>
        <td><center><label for="blood_group">Blood Group</label></td></center>
        <td><center><input type="text" name="blood_group" id="blood_group" value="<?php echo $row['blood_group']; ?>" required="" /></td></center>
        </tr>
        </div>
        <div class="form-submit text-right">
            <tr>
                <td></td>
                <td><center><button type="submit" name="submit_btn" class="btn btn-style-1">Update Record</button></td></center>
            </tr>
        </div>
    </form>
</table>
</body>

</html>

<?php
include "config_blood.php";

if (isset($_POST['submit_btn'])) {
    extract($_POST);

    $update = mysqli_query($connect, "update donate set
        first_name='" . $first_name . "',
        last_name='" . $last_name . "',
        dob='" . $dob . "',
        city='" . $city . "',
        age='" . $age . "',
        weight='" . $weight . "',
        email='" . $email . "',
        phone='" . $phone . "',
        blood_group='" . $blood_group . "'
        where id='" . $_GET["ID"] . "'") or die(mysqli_error($connect));

    if ($update) {
        echo "<script>;";
        echo "window.alert('Data update successfully....!');";
        echo 'window.location.href = "donation_record.php";';
        echo "</script>";
    } else {
        echo "<script>;";
        echo "window.alert('Data error....!');";
        echo "</script>";
    }
}
?>