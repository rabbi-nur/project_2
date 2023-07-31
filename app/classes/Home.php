<?php


namespace App\classes;
class Home
{
    public function index()
    {
//        echo 'RUN PHP';
        header('Location:action.php?page=home');
    }
}