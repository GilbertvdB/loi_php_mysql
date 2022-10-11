<?php
include_once 'model/mum.php';
include_once 'model/html_class.php';

class Controller {
    public $model;
    
    
    public function __construct()
    {
        $this->model = new Mum();
    }
    
    
    public function start() {
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            self::sessionStart();
            $closed_box = $this->model->img_closed();
            $sound = $this->model->sound_box();
            HTML::top();
            include 'view/mum_start.php';
            HTML::bottom();
            self::mum_start();

        }
        else {
            $gift_box = $this->model->show_gift();  //model
            HTML::top();
            include 'view/gift.php';//view
            HTML::bottom();
        }
    }
    
    public function mum_start() {
      
        if (isset($_POST['press'])) {
            $_SESSION = array();
            $_SESSION['semi'] = $this->model->openclose_box;
            $_SESSION['open'] = $this->model->opened_box;  //model
            
            $this->model->play_sound();
            
//             Mum::play_sound();
            
            $this->model->open('pop','view/pop_x.php', 0);
            $this->model->open('pop1','view/pop_y.php', 1200);
            $this->model->open('pop2','view/pop_z.php', 2000);
            
            $this->model->close('pop', 3000);//view
            
            $this->model->close('pop1', 3000);//view
            
            $this->model->close('pop2', 3000);//view
        }
    }
    
    public function sessionStart() {
        session_start();
    }
    
    public function sessionEnd() {
        $_SESSION = array();
        session_unset();
        session_destroy();
    }
}

?>