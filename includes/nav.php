<?php 

echo <<<END

<nav>
    <!-- Responsive navbar -->
    <div class="topnav" id="myTopnav">
    <a href="./index.php" class="active">Home</a>
    <a href="./about-me.php">About</a>
    <a href="./contact.php">Contact Me</a>
    <a href="../assets/Matthew Incardonas Resume.pdf">Resume</a>
    <a
        href="javascript:void(0);"
        class="icon"
        onclick="openMobileNav()"
    >
        <i class="fa fa-bars"></i>
    </a>
    </div>
</nav>

END;
?>
