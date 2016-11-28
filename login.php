<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Math Game</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <meta charset="utf-8" />
</head>
<body>
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <h1 style="text-align: center; padding: 50px">Please login to enjoy our math game.</h1>
    </div>
</div>
<form action="authenticate.php" method="post" class="form-horizontal">
    <div class="form-group">
        <div class="col-sm-4 text-right">Email:</div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-4 text-right">Password:</div>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="password" placeholder="Password">
        </div>
    </div>
        <div class="col-sm-4 col-sm-offset-4">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
</form>
    <p class="col-sm-3 col-sm-offset-4 text-danger">
        <?php
            if (isset($_GET["error"])) {
                echo $_GET["error"];
            }
        ?>
    </p>
</body>
</html>
