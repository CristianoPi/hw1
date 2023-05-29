<html>
    <head>
        <meta charset="uttf-8">
        <link rel="stylesheet" href="hw1.css">
        <link rel="stylesheet" href="album.css">
        <title>Post Camera</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="cerca.js" defer></script>
        <script src="menu_mobile.js" defer></script>
        <link rel="shortcut icon" href="logo.png" />
    </head>
    <body>
        <div id="header">
            <img src="logo.png" alt="">
            <nav id="menu">
                <a href="index.php">HOME</a>
        
                <a href="cerca.php">ISPIRATI</a>
                <?php
                    session_start();
                    if(isset($_SESSION['ID'])&&isset($_SESSION['user']))
                    echo '<a href="benvenuto.php">'.$_SESSION["user"].'</a>';
                    else{
                    echo '<a href="login.php">LOGIN</a>';
                    }
                ?>
                <div id="menu_icon">
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
            </nav>
        </div>
        <div id="menu_mobile" class="menu_mobile">

            <a href="index.php">HOME</a>
         
            <a href="cerca.php">ISPIRATI</a> 
            <?php  
                if(isset($_SESSION['ID'])&&isset($_SESSION['user']))
                  echo '<a href="benvenuto.php">'.$_SESSION["user"].'</a>';
                else{
                  echo '<a href="login.php">LOGIN</a>';
                }
            ?> 

        </div>
        <header id="i1">
            <div class="overlay">
                <h1 class="t">CERCA <span class="t_y">ISPIRAZIONE</span></h1>
            </div>
        </header>

        <section class="s1">
        <form>
          <input type="text" name="search" id="search" placeholder="CERCA">
        </form>
        <section id="album-view">
        </section>
        <section id="modal-view" class="hidden">
        </section>
        </section>
        <footer id="f1">
            REALIZZATO DA: Cristiano Pistorio 1000015332
        </footer>
    </body>
</html>