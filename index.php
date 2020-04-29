<?php
    // Basic assignment
    $myMessage = 'My first PHP!';
    # This is also a comment!
    /**
     * Multi-line
     * comment
     * yaaaaay!!!!!!
     */
    /**
     * Data-types
     */
    //string
    $myString = 'Hello Charles';
    //Integer
    $myInteger = 37;
    // float/double
    $myFloat = 3.825;
    // Boolean
    $myBoolTrue = TRUE;
    $myBoolFALSE = FALSE;
    // nULL
    $myNull = NULL;
    // object
    $myObject = new stdClass();
    // Array
    $myArray = [ 'First item', 2, 'seventh item' ];
    $myOtherArray = array (
        $myString,
        $myInteger,
        $myFloat,
        $myBoolTrue,
        $myBoolFALSE,
        $myNull,
        $myObject,
        $myArray
    );
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $myMessage; ?></title>
</head>
<body>
    <h1><?php echo $myMessage; ?></h1>
</body>
</html>