<html>
<head>
	<title> User Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<head>
<body>

<div class ="container">
    <div class="login-box">
    <div class ="row">
    <div class ="col-md-6 login-left">
        <h2> Login Here</h2>
        <form action="validation.php" method="post">
            <div class = "form-group">
            <label> Username</label>
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="user" class="form-control" required>
        </div>
    <div class = "form-group">
        <label> Password</label>
        <i class="fa fa-lock" aria-hidden="true"></i>
        <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary"> Login </button>

    </form>
    </div>

        <div class="col-md-6 register-right">
        <h2> Registration Here</h2>
        <form action="registration.php" method="post">
            <div class = "form-group">
            <label> Username</label>
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" name="user" class="form-control" required>
        </div>
            <div class = "form-group">
            <label> Password</label>
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Register </button>
</form>
</div>
</div>
</div>
</div>
</body>
</html>




