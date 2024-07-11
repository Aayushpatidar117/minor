
<?php
// Open a new connection to the MySQL server
$linkDB = mysqli_connect("localhost", "root", "", "minor");
if (mysqli_connect_error()) { //for connection error finding
    die('There was an error while connecting to database');
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$how_much = $_POST['how_much'];
$address = $_POST['address'];
$your_order = $_POST['your_order'];
$data = "INSERT INTO `order_data` (`name`, `email`,`phone_number`,`how_many`,`address`,`your_order`) VALUES ('" . $name . "','" . $email . "','" . $phone_number . "','" . $how_much . "','" . $address . "', '" . $your_order . "')";

mysqli_query($linkDB, $data);
echo "You have succesfully registered!";

?>