<?php

function __autoload($class) {
    require_once $class . '.php';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Responsive Drop Down Menu jQuery CSS3 Using Icon Symbol</title>
        <link rel="stylesheet" type="text/css" href="view/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="view/css/menu.css">

        <script type="text/javascript" src="view/js/jquery.js"></script>
        <script type="text/javascript" src="view/js/function.js"></script>
    </head>
    <!-- /head-->
    <body data-spy="scroll" data-target=".navbar">
        <div id="wrap">
            <header>
                <div class="inner relative">
                    <a class="logo" href="http://www.freshdesignweb.com" ><img src="view/images/logo.png" alt="fresh design web"></a>
                    <a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
                    <nav id="navigation">
                        <ul id="main-menu">
                            <li class="current-menu-item"><a href="#">Home</a></li>
                            <li class="parent">
                                <a href="#">Cadastros</a>
                                <ul class="sub-menu">
                                    <li  ><a href="#" onclick=" changeUrl(0)"><i class="icon-wrench"></i> Pessoas</a></li>
                                    <li><a href="#" onclick=" changeUrl(1)"><i class="icon-credit-card"></i>  Usuários</a></li>
                                    <li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html"><i class="icon-gift"></i> Icons</a></li>
                                    <li>
                                        <a  class="parent" href="#"><i class="icon-file-alt"></i> Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Full Width</a></li>
                                            <li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Left Sidebar</a></li>
                                            <li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Right Sidebar</a></li>
                                            <li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Double Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#" onclick=" changeUrl(2)">Calendário</a></li>
                            <li class="parent">
                                <a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Large Image</a></li>
                                    <li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Medium Image</a></li>
                                    <li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Masonry</a></li>
                                    <li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Double Sidebar</a></li>
                                    <li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Single Post</a></li>
                                </ul>
                            </li>
                            <li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
            </header>	
        </div>
        <div id="corpo" name>
            <iframe src="index.php" height=400 width=400 frameborder=0 name = "pagina"></iframe>

        </div>
    </body>
</html>