<?php	
    //Outputs the navigation 
	function outputNavigation($pageName){
    echo '<a href="home">Home</a>'; 
    echo '<a href="Registration">Registration</a>'; 
    echo '<a href="Login">Login</a>';
    echo '<a href="Game">Game</a>' ;
    echo '<a href="Top scores of registered users and rankings">Top scores of registered users and rankings</a>';     
}
    outputNavigation("Home");
?>

    <!-- Contents of the page -->
    <h1>This website will allow users to register with the website/login if they've already registered ,play Tetris and display their top score. </h1> <img src="tetris_logo.jpg" alt="Tetris logo">
    <?php
    //Outputs the footer
	function outputFooter(){
    echo '</body>';
    echo '</html>';
}
    outputFooter("Home");
?>
