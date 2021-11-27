<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('config.php');
include('includes/header.php');?>

<div id="wrapper">
    <main class="project">
    <h1><?php echo $headline;?></h1>
    
<?php
// for my big database assignment, header include will go right here

// we need to grab our table and assign it to a variable
$sql = 'SELECT * FROM whales';

// we need to connect to the database using mysqli_connect() function
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// now we create a variable, $result
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// now its time for the if statement - if we have more than 0 rows...
if(mysqli_num_rows($result) > 0) {
    // time for the while loop - and the while loop will return the array
    while($row = mysqli_fetch_assoc($result)){
        echo '<ul>';
        echo '<li><b>Species:</b> '.$row['specie'].'</li>';
        echo '<li><b>Length (feet):</b> '.$row['length'].'</li>';
        echo '<li><b>Weight (tons):</b> '.$row['weight'].'</li>';
        echo '</ul>';
        echo '<p><i>Please click <a href="whales-view.php?id='.$row['whale_id'].'">here</a> for more information about the '.$row['specie'].'</i></p>';
    } //ends while loop

} else {
    echo 'Houston, we have a problem';
}
mysqli_free_result($result);
mysqli_close($iConn);
?>

    
    </main>
        
    <aside class="project">
    <img src="images/whale.jpg" alt="Whale jumping out of the ocean">
    <p><i>Whales are social, air breathing mammals, they feed their babies with their own milk, and they take extraordinarily good care of their young and teach them life skills.</i></p>
    <p><i>There are currently around 90 recognised species of whales, dolphins and porpoises; they are collectively known as ‘cetaceans’ or simply ‘whales’.</i></p>
    </aside>
</div>
<?php include('includes/footer.php');?>