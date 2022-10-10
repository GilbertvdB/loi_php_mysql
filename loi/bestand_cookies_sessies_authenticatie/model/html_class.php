<?php

class HTML {
    
    function top() {
        echo <<<___TOP
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="content-type" content=" text/html;charset=utf-8">
        <link rel="stylesheet" href="content/css/main.css">
        <title>M.u.m</title>
        </head>
        <body>
        <div class="center">
          
        ___TOP;
    }
    
    function top_child() {
        echo <<<___TOP
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="content-type" content=" text/html;charset=utf-8">
        <link rel="stylesheet" href="../content/css/main.css">
        <title>pop</title>
        </head>
        <body>
        <div class="center">
        
        ___TOP;
    }
    
    function mid($content) {
        echo <<<___CONTENT
        <div class='content'>
        <?php $content; ?> 
        ___CONTENT;
    }
    
    function bottom() {
        echo <<<___BOTTOM
        </div>
        </body>
        </html>
        ___BOTTOM;
    }
    
}