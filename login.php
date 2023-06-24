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
    echo 'conn success';
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
        //alphabtes and spaces check for psswords using regex
        if (!preg_match('/^[a-zA-Z\s]+$/', $password)) {
            $errors['password'] = 'password must be alphabets and spaces';
        }
    }
}
