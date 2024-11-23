<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $conn = mysqli_connect("localhost", "root","", "a_shop");
        $sql = "SELECT * FROM users";
    if(isset($_GET['searchBtn'])){
        // $sql = "SELECT * FROM users WHERE id = " . $_GET['Search'];
        $searchBy=$_GET['Search-List'];
        $searchText=$_GET['Search'];
        if($searchBy=='id'){
            $sql = "SELECT * FROM users WHERE id = '$searchText'" ;
        }else if($searchBy=='Username'){
            $sql = "SELECT * FROM users WHERE Username = '$searchText'" ;
        }else if($searchBy=='email'){
            $sql = "SELECT * FROM users WHERE email = '$searchText'" ;
        }else if($searchBy=='Address'){
            $sql = "SELECT * FROM users WHERE Address = '$searchText'" ;
        }else if($searchBy=='PhoneNO'){
            $sql = "SELECT * FROM users WHERE PhoneNO = '$searchText'" ;
        }else{
            "<script>alert('Plese select any field')</script>";
    }
}

        $run = mysqli_query($conn, $sql);
        if(mysqli_num_rows($run)>0){
    ?>

<form action="" method="get">
    <label for="">Search BY ID:</label>
    <input type="text" require value="0"  name="Search" >
    <select name="Search-List" >
        <option value="select">select</option>
        <option value="id">id</option>
        <option value="Username">Username</option>
        <option value="email">email</option>
        <option value="Address">Address</option>
        <option value="PhoneNO">PhoneNO</option>
    </select>
    <input type="submit" value="submit" name="searchBtn">
    <button><a href="display.php">Reset</a></button>

</form>
<br><br>



    <table border="1" cellpadding="20px" cellspacing="0">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>PhoneNo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($data = mysqli_fetch_assoc($run)){
            ?>
            <tr>
               
                <td><?php echo $data['Username'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['Address'];?></td>
                <td><?php echo $data['PhoneNO'];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    <a href="delete.php>?id=<?php echo $data['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>

    <?php }?>
 
    <br><br><br>
    <a href="form.php"><button>Add New User</button></a>
</body>
</html>