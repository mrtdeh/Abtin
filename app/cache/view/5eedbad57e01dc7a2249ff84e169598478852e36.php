<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="http://localhost/sinama/app/view/assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/sinama/app/view/assets/admin/css/bootstrap-reset.css" rel="stylesheet" type="text/css">
    <!--external css-->
    <link href="http://localhost/sinama/app/view/assets/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="http://localhost/sinama/app/view/assets/admin/css/style.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/sinama/app/view/assets/admin/css/style-responsive.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="http://localhost/sinama/app/view/assets/js/html5shiv.js"></script>
    <script src="http://localhost/sinama/app/view/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="<?php echo e($action); ?>" method="post">
        <h2 class="form-signin-heading">وارد شوید</h2>
        <div class="login-wrap">
            <span class="err"><?php echo e($login_err ? 'نام کاربری یا گزرواژه اشتباه است.' : ''); ?></span>
            <input type="text" name="username" class="form-control" placeholder="نام کاربری" autofocus>
            <input type="password" name="password" class="form-control" placeholder="کلمه عبور">

            <button class="btn btn-lg btn-login btn-block" name="login" value="1" type="submit">ورود</button>
      

        </div>

      </form>

    </div>


  </body>
</html>



<style>
    .err{
        color: red
    }
</style>