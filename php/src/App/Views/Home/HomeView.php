<?php 

namespace App\Views\Home; 
use App\Interfaces\ViewInterface;


class HomeView implements ViewInterface{
    public function render(){
        require_once __DIR__ . '/../../pages/HomePage.php';
    }
}