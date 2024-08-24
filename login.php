<?php
if(isset($_POST['ln']))
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

 $Username = $_POST['Username'];
 $Password = $_POST['Password'];
 $sql="INSERT INTO `record`.`login` (`Username`, `Password`) VALUES ('$Username', '$Password')";


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
    
    <title>Document</title>
</head>
<style>
  body, h1, h2, p, ul, li, form, label, input, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

nav {
    background-color: #444;
    padding: 10px;
}

nav ul {
    list-style-type: none;
    text-align: center;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

main {
    padding: 20px;
    color: aliceblue;
    background-color: rgb(65, 65, 200);
}
h2{
    text-align: center;
}
section {
    margin-bottom: 20px;
    color: aliceblue;
    background-color: rgb(65, 65, 200);
}

form {
    margin-bottom: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
    margin-left: 24px;
}


input[type="text"],
input[type="password"] {
    width: 97%; 
    padding: 8px;
    margin: auto;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    align-items: center;

    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

/*form{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}*/
button {
    margin-left: 725px;
    margin-bottom: 220px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


button:hover {
    background-color: #45a049;
}
footer{
    margin-bottom: 100%;
}

   


   


</style>
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
    <section id="login">
        <h2>Login</h2>
        <form id="loginForm" action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="Username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="Password" required><br><br>
            <button  onclick="window.open('apply.php','_blank')" type="submit" id="login-1" name="ln">Login</button>
        </form>    
    </section>
    <footer>
        <p>&copy; 2024 E-Pass. All rights reserved.</p>
    </footer>
</body>
<script>document.getElementById("login-1").addEventListener("click",function()
    {
           alert("Login sucessfully");
    });
    </script>
</html>