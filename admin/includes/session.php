<?php


class SESSION
{
    private $signed_in =false;
    public $user_id;
    public $message;
    public function __construct()
    {//all funtions inside here are called automatically
        session_start();
        $this->check_the_login();
        $this->check_message();
    }

    //message method
    public function message($msg=""){
        if (!empty($msg)) {
            $_SESSION['message']= $msg;
        } else {
            return $this->message;
        }
        
    }

    public function check_message(){
        if (isset($_SESSION['message'])) {
            $this_message = $_SESSION['message'];
            unset($_SESSION['message']);
        } else {
            $this->message ="";
        }
        
    }

    //return if the the user is signed in//it is also a getter

    public function is_signed_in()
    {
        return $this->signed_in;
    }

    //function to login the user
    public function login($user)
    {
        if ($user) {
            //assigning two values to the object
            $this->user_id = $_SESSION['user_id'] =$user->id;
            $this->signed_in= true;
        }
    }
    //method to log out the user
    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->signed_in= false;
    }
    //checckif the session user id is set
    private function check_the_login()
    {
        if (isset($_SESSION['user_id'])) {
            $this->user_id = $_SESSION['user_id'];
            $this->signed_in = true;
        } else {
            unset($this->user_id);
            $this->signed_in = false;
        }
    }
}

//instantiating th seession
$session = new SESSION;
