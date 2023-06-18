<?php
require('connection.php');

if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM `user_info` WHERE `username`='$_POST[username]'OR`email`='$_POST[email]'";
   $result=mysqli_query($con,$user_exist_query);

   if($result)
   {
    if(mysqli_num_rows($result)>0)#if the username or email already exist
    {
        
        $result_fetch=mysqli_fetch_assoc($result);
        if($result_fetch['username']==$POST['username']) 
        {
            echo"
            <script>alert('$result_fetch[username]-username already taken');
            window.location.href='index.php';
            </script>
            ";
        }
        else
        {
            echo"
        <script>alert('$result_fetch[email]-email already taken');
        window.location.href='index.php';
        </script>
        ";
        }
    }
    else
    {
        $query="INSERT INTO `user_info`(`fullname`,`username`,`email`,`password`)VALUE('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]')"; 
        if(mysqli_query($con,$query))
        {
            #if insertion is successful
            echo"
            <script>alert('registration successful');
            window.location.href='index.php';
            </script>
            ";
        }
        else{
            
    echo"
    <script>alert('cannot Run Query');
    window.location.href='index.php';
    </script>
    ";
        }
    }
   }
   else
   {
    echo"
    <script>
    alert('cannot Run Query');
    window.location.href='index.php';
    </script>
    ";
   }
}




#for login
   if(isset($_POST['login']))
   {
    $adminquery="SELECT * FROM `admin_login` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $adminresult=mysqli_query($con,$adminquery); 

$userquery="SELECT * FROM `user_info` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
$userresult=mysqli_query($con,$userquery); 


if(mysqli_num_rows($adminresult)==1)
{
$result_admin=mysqli_fetch_assoc($adminresult);
if($_POST['password']===$result_admin['password'])
{
echo"welcome admin";
}
else{
    echo"
    <script>
    alert('Incorrect Password');
    window.location.href='index.php';
    </script>
    ";
}
}

elseif(mysqli_num_rows($userresult)==1)
{
$result_user=mysqli_fetch_assoc($userresult);
if($_POST['password']===$result_user['password'])
{
echo"welcome user";
}
else{
    echo"
    <script>
    alert('Incorrect Password');
    window.location.href='index.php';
    </script>
    ";
}
}

else{
    echo"
    <script>
    alert('Email or username not registered');
    window.location.href='index.php';
    </script>
    ";
}}
   
?>



