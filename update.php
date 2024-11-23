<?php 
if(isset($_POST['updatebtn'])){
    $id = $_POST['id'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $conn = mysqli_connect("localhost", "root","", "a_shop");
   
    $sql = "UPDATE users SET Username = '{$name}', email = '{$email}', Address = '{$address}', PhoneNo = '{$phone}' WHERE id = '{$id}'";
    $run = mysqli_query($conn, $sql);
    if($run){
        header("Location: display.php");
    }else{
        echo "<script>alert('Something Went wrong! Record could not be updated')</script>";
    }
}
?>