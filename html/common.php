<?php
  session_save_path('C:\XAMPP\tmp');
  session_start();

  //function to output the header of the html file depending on the page title
  function outputHeader($title){
    echo '<DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<meta charset="utf-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<title>'.$title.'</title>';
    echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
    echo '<link rel="stylesheet" href="styles/style.css">';
    echo '</head>';
    echo '<body>';
  }

  //function to output the navbar of the html file depending on the page title
  function outputNavbar($pageName){
    $loginCheck = 0;
    if( array_key_exists("loggedinUsername", $_SESSION) ){
          $loginCheck = 1;
    }
    echo '<div class="wrapper">';
    echo '<nav id="sidebar">';
    echo '<div class="sidebar-header">';
    echo '<a href="index.php"><img src="Images/logo.png" width="230" height="82"/></a>';
    echo '</div>';
    //array to hold the link names
    $linkNames = array('Home','About','Login/Register','Movies','Cart','Admin');
    //array to hold the file names
    $linkAddress = array('index.php','about.php','login.php','movies.php','cart.php','cms.html');
    echo '<ul class="list-unstyled components">';
    //for loop to make a list of pages for the navbar
    for ($i=0; $i < count($linkNames) ; $i++) {
      echo '<li ';
      //makes sure the active page is highlighted on the navbar
      if ($linkNames[$i] == $pageName) {
        echo 'class="active">';
      }else{
        echo '>';
      }
      //Checks if any
      if ($i==2 && $loginCheck == 1 ) {
        echo '<a href="profile.php?username='.$_SESSION['loggedinUsername'].'">'.$_SESSION['loggedinUsername'].'</a></li>';
      }else{
        echo '<a href="'.$linkAddress[$i].'">'.$linkNames[$i].'</a></li>';
      }
    }
    echo '</ul>';
    //outputs social media links
    echo '<div style="font-size:x-large">';
    echo '<a href="https://twitter.com/TheVadster7" class="fa fa-twitter" target="_blank"></a>';
    echo '<a href="https://www.instagram.com/thevadster7/" class="fa fa-instagram" target="_blank"></a>';
    echo '<a href="https://500px.com/rohitvaddi" class="fa fa-500px" target="_blank"></a>';
    echo '<a href="https://github.com/thatVaddiguy" class="fa fa-github" target="_blank"></a>';
    echo '<a href="https://www.linkedin.com/in/rohit-vaddi-141096/" class="fa fa-linkedin" target="_blank"></a>';
    echo '</div>';
    echo '</nav>';
  }

  //function to output the bottom of the html file
  function outputFooter(){
    echo '</div>';
    echo '<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>';
    echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>';
    echo '</body>';
    echo '</html>';
  }
?>
