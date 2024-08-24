<?php
if(isset($_POST['ap']))
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

 $Distance = $_POST['Distance'];
 $Institute = $_POST['Institute'];
 $From = $_POST['From'];
 $To = $_POST['To'];
 $sql="INSERT INTO `record`.`apply` (`Distance`, `Institute`, `From`, `To`) VALUES ('$Distance', '$Institute', '$From', '$To')";

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
    <link rel="stylesheet" href="styles.css">
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
    margin-left: 22px;
}

input[type="text"],
input[type="number"],
input[type="email"],
input[type="password"] {
    
    width: 97%;
    /*text-align: center;*/
    padding: 8px;
    margin-left: 20px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    
}

button {
    text-align: center;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 725px;
    margin-bottom: 220px;
}

button:hover {
    background-color: #45a049;
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
      <section id="apply">
            <h2>Apply for Pass</h2>
            <form id="passForm" action="apply.php" method="post">
                <label for="distance">Distance (in km):</label>
                <input type="number" id="distance" name="Distance" required><br><br>
                <label for="institute">Institute Name:</label>
                <input type="text" id="institute" name="Institute" required><br><br>
                <label for="from">From:</label>
                <input type="text" id="from" name="From" required><br><br>
                <label for="to">To:</label>
                <input type="text" id="to" name="To" required><br><br>
                <button type="submit" id="submit-1" name="ap">Submit</button>
            </form>
        </section>   
    <footer>
        <p>&copy; 2024 E-Pass. All rights reserved.</p>
    </footer>
    
</body>
<script>document.getElementById("submit-1").addEventListener("click",function()
    {
        alert("Submit successfully");
    });</script>
</html>