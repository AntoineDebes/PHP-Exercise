<?php
if (isset($_POST["submit"])) {
    if (empty($_POST["full--name"])) {
      $fullNameErr = 'Name is required';
    }
    
    if (empty($_POST['user--name'])) {
      $userNameErr = 'Email is required';
    }
      
    if (empty($_POST['password'])) {
      $passwordErr = 'Password is required';
    }
  
    if (empty($_POST['confirm--password'])) {
      $confirmPasswordErr = 'Enter your password';
    }
  
    if (empty($_POST['email'])) {
      $emailErr = 'Email is required';
    }

    if (empty($_POST['phone'])) {
      $PhoneErr = 'Phone is required';
    }
    
    if (empty($_POST['date-of-birth'])) {
      $dateOfBirthErr = 'Date is required';
    }

    if (empty($_POST['social-security-number'])) {
      $socialSecurityNumberErr = 'Social Security Number is required';
    }
    
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Document</title>
</head>
<style>
.wrapper{
    display:grid;
    grid-template-columns: 1fr 1fr
}
.registration--part{
    width:100%;
    grid-column:1;
}
.login--part{
    grid-column:2;
}
.danger{
  color:red;
}
</style>

<body>
  

<div class="wrapper">
    <div class="registration--part">
        <form method="post" id="register" >
            <div>
                <lable for="full--name">Full name</lable>
                <input type="text" id="full-name"><span class="danger"><?php echo $fullNameErr; ?></span>
            </div>
            <div>
                <lable for="user--name">User name</lable>
                <input type="text" id="user--name"><span class="danger"><?php echo $userNameErr; ?></span>
            </div>
            <div>
                <lable for="password">Password</lable>
                <input type="password" id="password"><span class="danger"><?php echo $passwordErr; ?></span>
            </div>
            <div>
                <lable for="confirm--password">Confirm password</lable>
                <input type="password" id="confirm--password"><span class="danger"><?php echo $confirmPasswordErr; ?></span>
            </div>
            <div>
                <lable for="email">Email</lable>
                <input type="email" id="email"><span class="danger"><?php echo $emailErr; ?></span>
            </div>
            <div>
                <lable for="phone">Phone</lable>
                <input type="tel" id="phone"><span class="danger"><?php echo $PhoneErr; ?></span>
            </div>
            <div>
                <lable for="date-of-birth">Date of Birth</lable>
                <input type="date" id="date-of-birth"><span class="danger"><?php echo $dateOfBirthErr; ?></span>
            </div>
            <div>
                <lable for="social-security-number">Social security number</lable>
                <input type="number" id="social-security-number"><span class="danger"><?php echo $socialSecurityNumberErr; ?></span>
            </div>
            <button type="submit" name="submit" value="submit" >Submit</button>
        </form>
    </div>
    <?php 
    include 'home.php';
    ?>
 </body>
</html>

<?php
$users = array('user-name' => 'Antoine', 'password' => '12345678');
if (isset($_POST['register'])){
    if (($_POST["login-username"] == $users["user-name"]) && ($_POST["login-password"] == $users["password"])){
        echo "Welcome Antoine";         
    }else{
      echo "User not found";
    }
}
$users_2 = array('name' => 'Khaldoun', 'password' => '123456');
if (isset($_POST['register'])){
if ( ($_POST["user--name"] == $users_2["name"]) && ($_POST["login-password"] == $users_2["password"])){
    echo "Welcome Khaldoun";       
}else{
    echo "User not found";
}
}
?>