<?php
session_start();

if (empty($_POST['user_email']) || empty($_POST['user_password'])) {
    $_SESSION['msg_login_error'] = 'Requisição inválida!!!';
    header('location:index.php');
    exit;
}

$email = $_POST['user_email'];
$password = $_POST['user_password'];

accessVerify($email, $password);

function accessVerify(string $email, string $password): void
{
    $db = [
        [
            'name' => 'Eduardo Maciel',
            'email' => 'edmaciel.03@gmail.com',
            'password' => '$2y$10$en/56G8BANT2AzXX29eee.WS46yfzBxIMlTPgmIMqLcBEcZcdq8pO',
            'gender' => 'M'
        ],
        [
            'name' => 'Raian Rodrigues Guimaraes',
            'email' => 'raian.guimaraes@hotmail.com',
            'password' => '$2y$10$x/fRf9UQ79STLLCJGLxkPOVI7sfPtdGtSBjqXox2RFwxr11RQtTu6',
            'gender' => 'F'
        ]
    ];

    foreach ($db as $register) {
        if (
            $email == $register['email']
            && password_verify($password, $register['password'])
        ) {
            $_SESSION['user_name'] = $register['name'];
            $_SESSION['user_gender'] = $register['gender'];
            header('location:dashboard.php'); // Redirecionar
            exit;
        }
    }

    $_SESSION['msg_login_error'] = 'Lamento, usuário ou senha inválidos!!!';
    header('location:index.php');
    exit;
}
