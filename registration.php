<?php
   //Output navigation 
	function outputNavigation($pageName){
    echo '<a href="home">Home</a>'; 
    echo '<a href="Registration">Registration</a>'; 
    echo '<a href="Login">Login</a>';
    echo '<a href="Game">Game</a>' ;
    echo '<a href="Top scores of registered users and rankings">Top scores of registered users and rankings</a>';     
}
    outputNavigation("Registration");
?>

    <!-- Contents of the page -->
    <h1>This is the registration page</h1>

    <?php
    //Outputs the footer
	function outputFooter(){
    echo '</body>';
    echo '</html>';
}
    outputFooter("Registration");
