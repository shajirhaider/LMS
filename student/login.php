
<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Login Form | LMS </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>
<div class="well" >
    <img src="../library.jpg"   width="100%" alt="">



<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="post">
            <h1>User Login Form</h1>

            <div>
                <input type="text" name="username" class="form-control" placeholder="username" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div >

                <input class="btn btn-dark col-lg-8" type="submit" name="submit1" value="Login"   >

            </div>

            <div class="clearfix"></div>

            <div class="separator well bg-info">
                <p class="change_link">New to site?
                    <a href="registration.php"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>
</div>
<div>

<div class="well ">
<button autofocus onclick="window.location.href='../librarian/login.php' "  class="btn btn-danger col-lg-12"
        style="margin-left:auto;margin-right:auto;display:block; active"
> Login as Libarian </button>
    </div>

<div class="well ">
    <button autofocus onclick="window.location.href='../librarian/set_librarian.php' "  class="btn btn-danger col-lg-12"
            style="margin-left:auto;margin-right:auto;display:block; active"
    > Admin</button>
</div>
    </div>

</div>

    <?php
    if(isset($_POST["submit1"])){
      $sql=mysqli_query($db," SELECT * FROM student_reg Where username='$_POST[username]' && password='$_POST[password]' && status='yes'");
      $count=0;
      $count=mysqli_num_rows($sql);
      if($count==0){
        ?>
        <div class="alert alert-danger col-lg-6 col-lg-push-3">
            <strong style="color:white">Invalid</strong> Username Or Password.
        </div>

        <?php
      }
      else{
        $_SESSION["username"]=$_POST["username"];

        header('Location: my_issuebooks.php');
      }

    }


     ?>


</div>

<?php
 include "footer.php";

?>


</body>
</html>
