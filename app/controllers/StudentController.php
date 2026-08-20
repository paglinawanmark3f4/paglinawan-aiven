<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require_once __DIR__ . '/../middlewares/StudentMiddleware.php';

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // CHANGE THIS TO true OR false TO CONTROL PROFILE ACCESS
        $_SESSION['student_access'] = true;

        $this->call->view('student');
    }

    public function profile()
    {
        $middleware = new StudentMiddleware();

        return $middleware->handle(function () {

            $student = [
                'student_id' => 'MCC2024-00157',
                'name' => 'Mark Francis Paglinawan',
                'course' => 'BS Information Technology',
                'year' => '3rd Year',
                'section' => '3F4',
                'email' => 'markfrancispaglinawan09@gmail.com',
                'contact' => '09108682437',
                'address' => 'Masipit, Calapan City',
                'skills' => 'Problem Solving',
                'hobbies' => 'Basketball, Playing Chess, and Physical Workouts',
                'description' => 'I am a BSIT student who enjoys exploring technology, developing websites, and learning new programming skills. I am passionate about improving my knowledge and creating useful digital solutions.',
                'facebook' => 'https://www.facebook.com/share/1CEyDEirTv/',
                'github' => 'https://github.com/paglinawanmark3f4'
            ];

            return $this->call->view('student_profile', $student);
        });
    }
}