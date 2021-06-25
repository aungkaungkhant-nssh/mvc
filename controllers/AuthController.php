<?php
namespace app\controllers;

use app\core\Controller;

class AuthController extends Controller{
     public function login(){
         $this->setLayout("auth");
        $this->render("login");
     }
     public function register(){

     }
     public function handlesubmit(){

     }
 }