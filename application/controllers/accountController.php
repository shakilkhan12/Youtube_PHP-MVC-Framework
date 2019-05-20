<?php

class accountController extends framework {


    public function __construct(){

        if($this->getSession('userId')){
            $this->redirect("profile");
        }
        $this->helper("link");
        $this->accountModel = $this->model('accountModel');
        
    }

    public function index(){

        $this->view("signup");
    }

    public function createAccount(){

        $userData = [

         'fullName'        => $this->input('fullName'),
         'email'           => $this->input('email'),
         'password'        => $this->input('password'),
         'fullNameError'   => '',
         'emailError'      => '',
         'passwordError'   => '' 

        ];

        if(empty($userData['fullName'])){

            $userData['fullNameError'] = 'Full Name is required';

        }

        if(empty($userData['email'])){
            $userData['emailError'] = 'Email is required';
        } else {
            if(!$this->accountModel->checkEmail($userData['email'])){

             $userData['emailError'] = "Sorry this email is already exist";

            }
        }

        if(empty($userData['password'])){
            $userData['passwordError'] = "Password is required";
        } else if(strlen($userData['password']) < 5 ){
            $userData['passwordError'] = "Passowrd must be 5 characters long";
        }

        if(empty($userData['fullNameError']) && empty($userData['emailError']) && empty($userData['passwordError'])){
            
            $password = password_hash($userData['password'], PASSWORD_DEFAULT);
            $data = [$userData['fullName'], $userData['email'], $password];
            if($this->accountModel->createAccount($data)){
                
                $this->setFlash("accountCreated", "Your account has been created successfully");
                $this->redirect("accountController/loginForm");

            }

        } else {
            $this->view('signup', $userData);
        }

    }

    public function loginForm(){
        $this->view("login");
    }

    public function userLogin(){

        $userData = [

         'email'         => $this->input('email'),
         'password'      => $this->input('password'),
         'emailError'    => '',
         'passwordError' => ''

        ];

        if(empty($userData['email'])){
            $userData['emailError'] = "Email is required";
        }

        if(empty($userData['password'])){
            $userData['passwordError'] = "Password is required";
        }

        if(empty($userData['emailError']) && empty($userData['passwordError'])){

            $result = $this->accountModel->userLogin($userData['email'], $userData['password']);
            if($result['status'] === 'emailNotFound'){
                $userData['emailError'] = "Sorry invalid email";
                $this->view("login", $userData);
            } else if($result['status'] === 'passwordNotMacthed'){
                $userData['passwordError'] = "Sorry invalid password";
                $this->view("login", $userData);
            } else if($result['status'] === "ok"){
                $this->setSession("userId", $result['data']);
                $this->redirect("profile");
            }
;
        } else {
            $this->view("login", $userData);
        }

    }

}


?>