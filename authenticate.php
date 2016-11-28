<?php
session_start();
extract($_POST);
if (($_POST['email'] === "a@a.a") && ($_POST['password'] === "aaa")) {
    $_SESSION["authenticated"] = true;
    header("Location: index.php");
} else {
    $error = "Uh oh! Something's wrong.";
    header("Location: login.php?error=$error");
}
?>