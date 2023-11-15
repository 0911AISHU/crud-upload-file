

<?php
// include db connection
include 'config.php';

if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PHONENUMBER = $_POST['phonenumber'];
    $EMAIL= $_POST['email'];
    $DATE = $_POST['date'];
    $TIME = $_POST['time'];
    $ADDRESS = $_POST['address'];
    $IMAGE = $_FILES['image'];
    print_r($_FILES['image']);
    $img_loc = $_FILES['image']['tmp_name'];
   $img_name = $_FILES['image']['name'];
   $img_des = "uploadimage/".$img_name;
    move_uploaded_file($img_loc,'uploadimage/'.$img_name);

    // insert data

    mysqli_query($con,"INSERT INTO `bookappointment`( `Name`, `Phonenumber`, `Email`, `Date`, `Time`, `Address`, `Image`) VALUES ('$NAME','$PHONENUMBER','$EMAIL','$DATE','$TIME','$ADDRESS','$img_des')");
    //header("location:index.php");

}

?>


