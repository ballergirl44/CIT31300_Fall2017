<?php
class Controller {

    public $load;
    public $user;


    function __construct() {

        $this->load = new Load();
        $this->user = new User();

        $this->home();

    }

    function home() {

        $this->user->userID = 'lamspenc';
        $this->user->firstname = 'Laurie';
        $this->user->lastname = 'Spencer';
        $this->user->email = 'lamspenc@umail.iu.edu';
        $this->user->role = 'student';


        $data = $this->user->getName();
        $this->load->view('view.php',$data);

    }





}

?>