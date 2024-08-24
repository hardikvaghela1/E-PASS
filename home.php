<?php
if(isset($_POST['sb']))
{
 $SERVER='localhost';
 $username='root';
 $password='';
 $database='record';
 
 
 $con=mysqli_connect($SERVER,$username,$password,$database);
 if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
 }
 //echo 'success to connect the db';

 $name = $_POST['fm'];
 $email = $_POST['em'];
 $username = $_POST['nu'];
 $password = $_POST['pw'];
 $sql="INSERT INTO `record`.`register` (`nm`, `em`, `nu`, `pw`) VALUES ('$name', '$email', '$username', '$password')";


if($con->query($sql) == true){
    echo " Data Successfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Pass - Online Bus Pass</title>
    <link rel="stylesheet" href="e-pass.css">
   <link rel="stylesheet" href="" class="php">
</head>
<body>
    <header>
        <h1>E-Pass - Online Bus Pass</h1>
    </header>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="e-pass.php">Sign Up</a></li>
            <li><a href="login.php" >Login</a></li>
            <li><a href="apply.php">Apply for Pass</a></li>       
        </ul>
    </nav>
    <main>
        <h2 type="center">Apply for Pass</h2>
        <section id="signup">
            <h2>Sign Up</h2>
            <form id="signupForm" action="e-pass.php" method="post">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fm"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="em"><br><br>
                <label for="newUsername">Choose a Username:</label>
                <input type="text" id="newUsername" name="nu"><br><br>
                <label for="newPassword">Choose a Password:</label>
                <input type="password" id="newPassword" name="pw"><br><br>
                <button class="btn" type="submit" id="signup-1" name="sb">Sign Up </button>     
            </form>
           <!-- <div id="sucess-msg" class="sucess-msg"> signup sucessfully</div> -->
        </section>   
        </main>
    <footer>
        <p>&copy; 2024 E-Pass. All rights reserved.</p>
    </footer>
</body>
</html>