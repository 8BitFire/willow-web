<?php
  include('includes/arrays.php');
?>

<header class="navbar">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"></a>
        </div>
            <ul class="nav navbar-nav navbar-right">
                <?php

                    foreach ($urls as $name => $url) {
            print '<li '.(($currentPage == $name) ? ' class="active" ': '').
                '><a href="'.$url.'">'.$name.'</a></li>';
        }


                ?>
            </ul>
    </div>
</header>
