<?php

$errors = [];
$first_name = '';
$last_name = '';
$email = '';
$password = '';
$pwd_confirm = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $first_name = sanitize($_POST['first_name']) ?? '';
    $last_name = sanitize($_POST['last_name']) ?? '';
    $email = sanitize($_POST['email']) ?? '';
    $password = sanitize($_POST['password']) ?? '';
    $pwd_confirm = sanitize($_POST['pwd_confirm']) ?? '';

    if (empty($first_name)) {
        $errors['first_name'] = 'First name is required';
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $first_name)) {
        $errors['first_name'] = "Only letters and white space allowed";
    }
    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email address';
    }
    if (empty($password)) {
        $errors['password'] = 'Password is required';
    } else if (strlen($password) < 8 || strlen($password) > 20) {
        $errors['password'] = 'Password should have between 8 and 20 characters';
    }

    if (empty($pwd_confirm)) {
        $errors['pwd_confirm'] = 'Confirmation of password is required';
    }
    if ($password && $pwd_confirm && strcmp($password, $pwd_confirm) !== 0) {
        $errors['pwd_confirm'] = 'Your password must match the password you created first';
    }
    if (empty($errors)) {
        $user_details = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'password' => $password,
            'confirmPassword' => $pwd_confirm,
        ];

    }
}
function sanitize($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}