 <!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body
{
    margin: 0;
    padding: 0;
    background-color:#6abadeba;
    font-family: 'Arial';
}
.login{
        width: 382px;
        overflow: hidden;
        margin: auto;
        margin: 20 0 0 450px;
        padding: 80px;
        background: #23463f;
        border-radius: 15px ;

}
h2{
    text-align: center;
    color: #277582;
    padding: 20px;
}
label{
    color: #08ffd1;
    font-size: 17px;
}
#Uname{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 3px;
    padding-left: 8px;
}
#Pass{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 3px;
    padding-left: 8px;

}
#log{
    width: 300px;
    height: 30px;
    border: none;
    border-radius: 17px;
    padding-left: 7px;
    color: blue;


}
span{
    color: white;
    font-size: 17px;
}
a{
    float: right;
    background-color: grey;
}
    </style>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


    <?php
    session_start();
   
   $message = "";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','login') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM loginpages WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            header("Location:index.php");
        } else {
           $message = "Invalid Username or Password!";
        }
    }
  
  
?>
    <h2>Login Page</h2><br>
    <div class="login">
    <form id="login" method="post" action="">
        <div class="message"><?php  if($message!=""){ echo $message;}  ?>
 </div>
        <label><b>User Name
        </b>
        </label>
        <input type="text" name="username" id="Uname" placeholder="Username">
        <br><br>
        <label><b>Password
        </b>
        </label>
        <input type="Password" name="password" id="Pass" placeholder="Password">
        <br><br>
        <input type="submit" name="log" id="log" value="Log In Here">
        <br><br>
        
        <br><br>
        <!-- Forgot <a href="#">Password</a> -->
    </form>
</div>
</body>
</html>

