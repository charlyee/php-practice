<?php
    // if a form has been submitted to this page, 
    //information using one of two SUPERGLOBAL:
    // $_GET [array] (if the form was submitted with a GET method.)
    // $_POST [array] (if the form was submitted with a post method.)
    if (isset ( $_POST ) && !empty ( $_POST) ) // making sure SOMETHING was submitted
    {
        // Retrieving values from an array (use square brackets and either: the inbox
        // number or the key name [a string]) // $_POST is an associative array (less keys
        // instead of index numbers) Key value pair for associative
        $submittedUsername = $_POST['username'];
        $submittedPassword = $_POST['password']
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
</head>
<body>
    <h1>PHP Form headling</h1>
    <?php include './includes/navigation.php'; ?>
    <h2>Sign In Form</h2>
    <form action="./form.php" method="POST"><?php ?>
        <label for="username">
            Username:
            <input type="text" name="username">
        </label>
        <label for="password">
            Password:
            <input type="password" name="password">
        </label>
        <input type="submit" value="Sign In">
    </form>
</body>
</html>