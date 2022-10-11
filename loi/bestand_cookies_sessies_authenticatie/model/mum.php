<?php //Mum Class module

class Mum {
    public $gift_box = "content/images/gift.jpg";
    public $closed_box = "content/images/box_closed.png";
    public $openclose_box = "content/images/box_open_close.png";
    public $opened_box = "content/images/box_open.png";
    public $sound_box = "content/sounds/open_close.mp3";
    // base sounds methods
    function sound_box() {
        return $this->sound_box;
    }
    
    //base image methods
    function img_gift() {
        return $this->gift_box;
    }
    
    function img_closed() {
        return $this->closed_box;
    }
    
    function img_semi() {
        return $this->openclose_box;
    }
    
    function img_opened() {
        return $this->opened_box;
    }

}

?>