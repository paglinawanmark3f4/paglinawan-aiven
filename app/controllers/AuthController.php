<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('AuthModel');
    }

    public function login()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!empty($_SESSION['auth_user'])) {
            redirect('products');
            exit;
        }

        $this->call->view('auth/login', [
            'error' => $_SESSION['auth_error'] ?? null,
            'username' => $_SESSION['auth_username'] ?? '',
        ]);
        unset($_SESSION['auth_error'], $_SESSION['auth_username']);
    }

    public function authenticate()
    {
        $username = trim((string) $this->io->post('username'));
        $password = (string) $this->io->post('password');
        $user = $this->AuthModel->find_by_username($username);
        $user_data = is_object($user) ? get_object_vars($user) : (array) $user;
        $stored_password = (string) ($user_data['password'] ?? '');
        $is_active = (int) ($user_data['is_active'] ?? 0) === 1;

        if (!$user || !$is_active || !password_verify($password, $stored_password)) {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['auth_error'] = 'Invalid username or password.';
            $_SESSION['auth_username'] = $username;
            redirect('login');
            exit;
        }

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        session_regenerate_id(true);
        $_SESSION['auth_user'] = [
            'id' => $user_data['id'],
            'username' => $user_data['username'],
        ];

        redirect('products');
        exit;
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        unset($_SESSION['auth_user']);
        session_regenerate_id(true);
        redirect('login');
        exit;
    }
}