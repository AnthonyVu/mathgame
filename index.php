<?php 
    session_start();
    if (!isset($_SESSION["authenticated"])) {
        header("Location: login.php");
    }
    if (!isset($counter2)) {
        $counter2 = 0;
    }
    if (!isset($counter)) {
        $counter = 0;
    }
    $message = "";
    extract($_POST);
    if ( isset($first) 
        && isset($operator) 
        && isset($second) 
        && isset($answer) 
    ) {
        if (!is_numeric($answer) ) {
            $message = "<span style='color: red'>Enter a number</span>";
        } else 
        switch ($operator) {
            case "+":
                $result = $first + $second;
                if ($result == $answer) {
                    $message = "<span style='color: green; font-weight: bold;'>Correct</span>";
                    $counter++;
                } else {
                    $message = "<span style='color: red; font-weight: bold;'>INCORRECT</span>";
                }
                $counter2++;
                break;
            case "-":
                $result = $first - $second;
                if ($result == $answer) {
                    $message = "<span style='color: green; font-weight: bold;'>Correct</span>";
                    $counter++;                    
                } else {
                    $message = "<span style='color: red; font-weight: bold;'>INCORRECT</span>";
                }
                $counter2++;
                break;
        }
    }
    $nmbr1 = rand(0,20);
    $nmbr2 = rand(0,20);
    $operator_integer = rand(1,2);
    $sign = "";
    
    switch ($operator_integer) {
        case 1:
            $sign = "+";
            break;
        case 2:
            $sign = "-";
            break;
    }
  
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Math Game</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <meta charset="utf-8" />
</head>
<body>
    <div class="container">
<form action="index.php" method="post" role="form" class="form-horizontal">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4"><h1>Math Game</h1></div>
        <div class="col-sm-4"><a href="logout.php" class="btn btn-default btn-sm">Logout</a></div>
    </div>
    <div class="row">
        <div class="col-sm-4"></div>
        <label class="col-sm-2 col-sm-offset-1"><?php echo "$nmbr1 $sign $nmbr2"; ?></label>
    </div>

    <input type="hidden" name="first" value="<?php echo $nmbr1; ?>" />
    <input type="hidden" name="operator" value="<?php echo $sign; ?>" />
    <input type="hidden" name="second" value="<?php echo $nmbr2; ?>" />
    <input type="hidden" name="counter2" value="<?php echo $counter2; ?>" />
    <input type="hidden" name="counter" value="<?php echo $counter; ?>" />

    <div class="form-group">
        <div class="col-sm-3 col-sm-offset-4">
            <input type="text" class="form-control" id="answer" name="answer" placeholder="Enter answer" size="6">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 col-sm-offset-4">
            <button type="submit" class="btn btn-primary btn-sm">
            Submit</button>
        </div>
    </div>
</form>
<hr />
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <?php echo $message; ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">counter: <?php echo "$counter / $counter2" ?></div>
</div>
    </div>
</body>
</html>
