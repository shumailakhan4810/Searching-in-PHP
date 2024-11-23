<form action="" method= "post" >

Username:<input type="text" name="us" >
Email:<input type="email" name="em">
Address<input type="text" name="ad">
Phone<input type="phone" name="ph">
<input type="submit" name="sub">
</form>
<?php

if(isset($_POST['sub'])){
    $user_name=$_POST["us"];
    $Email=$_POST["em"];
    $Address=$_POST["ad"];
    $Phone=$_POST["ph"];
    

    $conn = mysqli_connect("localhost", "root","", "a_shop");
    $sql = "INSERT INTO users(Username, email, Address, PhoneNO) 
    VALUES('{$user_name}', '{$Email}', '{$Address}','{$Phone}')";
    $run = mysqli_query($conn, $sql);
    if($run){
        echo "<script>alert('Submit successfully');
        </script>";
        header("Location: display.php");
    }else{
        echo "<script>alert('Something went wrong!')</script>";
        

    }

}


?>