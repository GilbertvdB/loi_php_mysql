<?php

class Mum {
    public $gift_box = "content/images/gift.jpg";
    public $closed_box = "content/images/box_closed.png";
    public $openclose_box = "content/images/box_open_close.png";
    public $opened_box = "content/images/box_open.png";
    
    // init sounds
    
    //base meth
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
    
    
    //model meth
    function show_gift() {
        return $this->img_gift();
    }
    
    
    function toon($url, $delay) {
        echo <<<__OPEN
        <script>
        setTimeout(function(){
        var pop = window.open('$url','_blank');
        },$delay);
        </script>
        __OPEN;
    }
   
    function close_window($delay) {
        echo <<<__CLOSE
        <script>
        setTimeout(function(){
        window.close();
        },$delay);
        </script>
        __CLOSE;
    }
    
    function open($name, $url, $delay){
        echo    "<script>";
        echo    "setTimeout(function(){" . $name . " = window.open('$url', '_blank');}, $delay);";
        echo    "</script>";
    }
    
    function close($name, $delay) {
        echo <<<__CLOSE
        <script>
        setTimeout(function(){
        $name.close();
        },$delay);
        </script>
        __CLOSE;
    }
}


?>