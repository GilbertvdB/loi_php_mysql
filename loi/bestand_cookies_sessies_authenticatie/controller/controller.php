<?php //controller class module
include_once 'model/model.php';
include_once 'model/html_class.php';

class Controller {
    public $model;
    
    
    public function __construct()
    {
        $this->model = new Model();
    }
    
    
    public function start() {
        // post request true - gift unpacked.
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $closed_box = $this->model->mum_box('closed'); //model
            HTML::top();  //view
            include 'view/mum_start.php';
            //continue in:
            self::mum_start();
        }
        //no post request - first time visitors or refresh.
        else {
            $gift_box = $this->model->mum_box('gift');  //model
            HTML::top();  //view
            include 'view/gift.php';
            HTML::bottom();
        }
    }
    
    public function mum_start() {
        //continue view mum_start - if condition section.
        if (isset($_POST['press'])) {
            //init
            session_start();
            $_SESSION['semi'] = $this->model->mum_box('semi');
            $_SESSION['open'] = $this->model->mum_box('opened');
            // views
            // play sound
            $this->model->play_sound();
            //auto open tabs
            $this->model->toon('popx','view/pop_x.php', 0);
            $this->model->toon('popy','view/pop_y.php', 1200);
            $this->model->toon('popz','view/pop_z.php', 2000);
            //auto close tabs
            $this->model->close('popx', 3000);//view
            $this->model->close('popy', 3000);//view
            $this->model->close('popz', 3000);//view
            
            HTML::bottom();  // close mum_start.php
            
        }
    }
    
}

?>