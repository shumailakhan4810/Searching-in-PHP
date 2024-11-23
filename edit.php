<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit.php</title>
</head>

<body>
<?php 
 $conn = mysqli_connect("localhost", "root","", "a_shop");
 $id = $_GET['id'];

 $sql = "SELECT * FROM users WHERE id = '{$id}'";
 $run = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($run)
?>
    <form action="update.php" method="post">

   


        <input type="hidden" name="id" value="<?php echo $row['id']?>"><br><br>
        <input type="text" name="username" id="" value="<?php echo $row['Username'] ;?>"><br><br>
        <input type="email" name="email" id="" value="<?php echo $row['email'] ;?>"><br><br>
        <input type="text" name="address" id="" value="<?php echo $row['Address'] ;?>"><br><br>
        <input type="text" name="phone" id="" value="<?php echo $row['PhoneNO'] ;?>"><br><br>
        <input type="submit" value="Update" name="updatebtn">
    </form>
</body>
</html>