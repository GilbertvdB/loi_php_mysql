<?php //HTML class module

class HTML {
    
    static function top() {
        echo <<<___TOP
        <!DOCTYPE html>
        <html>
        <head>
            <meta http-equiv="content-type" content=" text/html;charset=utf-8">
        <title>PC4U</title>
        </head>
        <body>
        
        ___TOP;
    }
        
    static function bottom() {
        echo <<<___BOTTOM
        
        </body>
        </html>
        ___BOTTOM;
    }
    
}

?>