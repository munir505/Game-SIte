<?php

//create all starting tages and titles of pages

function headers($title){

	echo '<!DOCTYPE html>';
	echo '<html>';
	echo '<head>';
	echo '<title>' . $title . '</title>';
	echo '<link rel="stylesheet" type="text/css" href="CSS.css">';
	echo '</head>';
	
}


//creates the top bar of pages and main titles of the pages


function titles($pageName){

	echo '<div id="H" style="position: absolute; width: 100%; left: 0px; right: 0px; top: 0px;">';
	echo '<h1>';
	echo '<img src="' . $pageName . '.gif" style="width: 400px; height: 50px;">';
	echo '</h1>';

	echo '<h2>';
        
        //creating buttons for pages

	echo '<a href="index.php">Home Page</a>';
	echo '<a href="Game.php">Game Page</a>';
	echo '<a href="Reg.php">Reg Page </a>';

	echo '</h2>';

	echo '</div>';
}

      
       
?>





    

        

    


