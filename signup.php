<!DOCTYPE html>
<html>
      <head>
      <title>login</title>
      <link rel="stylesheet" href="login.css">

      </head>

      <body>
        <form method='post' action=signip.php>
            <h1>login</h1>
        <div class="textBoxdiv">
    
            <input type="text" placeholder="Username" name="username">
        </div>
        <div class="textBoxdiv">
            <input type="password" placeholder="Password" name="passward">
         </div>
        <div class="textBoxdiv">
            <input type="email" placeholder="Email" name="Email">
         </div>

        <input type="Submit" value="sign-in" class="loginbtn" name="login_Btn">
        <div class="Sign-up">
            Don't have an account?
        </br>
        <a href="#">Sign-up</a>
        </div>
    
        </form>
      </body>
      </html>

      <?php 
      $conn= mysqli_connect("localhost", "root","");
      if(isset($_POST['login_Btn']))
      {
        $username=$_POST['username'];
        $passward=$_POST['passward'];
        $Email=$_POST['Email'];
        $sql= "SELECT * FROM websitelogin.logindetails WHERE username='$username' ";
        $result = mysqli_query($conn,$sql);
        while($row= mysqli_fetch_assoc($result))
        {
            $resultPassward =$row['passward'];
            if($passward == $resultPassward)
            {
                header('Location:New.html');

            }else
            {
                echo "<script>
                alert('login unsuccesful');
                </script>;
            }
        }
    }
    ?>











 