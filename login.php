<?php

$username = '';
$password = '';
$errors = ['username' => '', 'password' => ''];
//connection establishment
$conn = mysqli_connect('localhost:3307', 'adil', 'test1234', 'user_db');

// connection check
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
} else {
    // echo 'conn success';
}

// checking if POST array is set
if (isset($_POST['submit'])) {

    // check for validations for username
    if (empty($_POST['username'])) {
        $errors['username'] = 'username is required';
    } else {
        $username = $_POST['username'];
        //alphanumeric check using regex
        if (!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $username)) {
            $errors['username'] = 'username must be alphabets and numbers';
        }
    }

    // check for validations for password
    if (empty($_POST['password'])) {
        $errors['password'] = 'password is required';
    } else {
        $password = $_POST['password'];
        //alphabtes and numbers check for psswords using regex
        if (!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $password)) {
            $errors['password'] = 'password must be alphabets and numbers';
        }
    }

    //now checking the user credentials from database to setup a SESSION for the user
    if (array_filter($errors)) {
        //error in form
        echo "error in form";
    } else {
        $myQuery = "SELECT username, password FROM users";
        //fetch result from the wuery
        $result = mysqli_query($conn, $myQuery);
        // collecting all the users as a row in associative array
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //free result from the memory
        mysqli_free_result($result);

        //now looping through each user to match the input value and database value
        foreach ($users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                echo 'access granted';
            }
        }

        mysqli_close($conn);
    }
}
