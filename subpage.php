<?php
    include 'connect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yuki Yugioh Shop</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Free CSS Templates from www.templatemo.com -->
<div id="templatemo_container">
    <div id="templatemo_menu">
     <?php 
     include 'subpage/menu.php';
     ?>   
    </div> <!-- end of menu -->
    
    <div id="templatemo_header">
        <?php 
        include 'subpage/header.php';
        ?>
    </div> <!-- end of header -->
    
    <div id="templatemo_content">
        
        <div id="templatemo_content_left">
            <?php
            include 'subpage/left.php';
            ?>
        </div> <!-- end of content left -->
        
        <div id="templatemo_content_right">
            <div id="templatemo_content_right">
            
            <h1>Book Title <span>(by author name)</span></h1>
            <div class="image_panel"><img src="images/templatemo_image_02.jpg" alt="CSS Template" width="100" height="150" /></div>
          <h2>Read the lessons - Watch the videos - Do the exercises</h2>
            <ul>
                <li>By Deke <a href="#">McClelland</a></li>
                <li>January 2024</li>
                <li>Pages: 498</li>
                <li>ISBN 10: 0-496-91612-0 | ISBN 13: 9780492518154</li>
            </ul>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec dui. Donec nec neque ut quam sodales feugiat. Nam sodales, pede vel dapibus lobortis, ipsum diam molestie risus, a vulputate risus nisl pulvinar lacus.</p>

            <p>Donec at arcu. Nunc aliquam, dolor vitae sollicitudin lacinia, nibh orci sagittis diam, dignissim sodales dui erat nec eros. Fusce quis enim. Aenean eleifend, neque hendrerit elementum sodales, odio erat sagittis quam, sed tempor orci magna vitae tellus. Proin dui mauris, tempor eget, pulvinar sed, pretium sit amet, dui. Proin vulputate justo et quam.</p>

            <p>In fermentum, eros ac tincidunt aliquam, elit velit semper nunc, a tincidunt orci lectus a arcu. Nullam commodo, arcu non facilisis imperdiet, felis lectus tempus felis, vitae volutpat augue ante quis leo. Aliquam tristique dolor ac odio. Sed consectetur, lacus et dictum tristique, odio neque elementum ante, nec eleifend leo dolor vel tortor.</p>
            
             <div class="cleaner_with_height">&nbsp;</div>
            
            <a href="index.php"><img src="images/templatemo_ads.jpg" alt="css template ad" /></a>
            
        </div>
        </div> <!-- end of content right -->
    
        <div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
    <div id="templatemo_footer">
    
           <a href="index.php">Home</a> | <a href="search.php?search=&ok=Tìm">Search</a> | <a href="https://www.facebook.com/yugiohtanhoa">Facebook</a> | <a href="#">New Releases</a> | <a href="#">FAQs</a> | <a href="Lienhe.php">Contact Us</a><br />
        Copyright © 2024 <a href="https://www.facebook.com/yugiohtanhoa"><strong>Yuki Yugioh Shop</strong></a> | Designed by <a href="http://www.templatemo.com" target="_parent" title="free css templates">Free CSS Templates</a>    </div> 
    <!-- end of footer -->
<!--  Free CSS Template www.templatemo.com -->
</div> <!-- end of container -->
</body>
</html>