<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);// Displays error, MAKE SURE YOU TURN OFF BEFORE SUBMITTING FINAL WORK
include('config.php');

// if isset $GET['today']

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: whales.php');
}

$sql = 'SELECT * FROM whales WHERE whale_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// now we create a variable, $result
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    // time for the while loop - and the while loop will return the array
    while($row = mysqli_fetch_assoc($result)){
        // not echoing here, we are assigning our row first name to our variable $first_name
        $specie = stripslashes($row['specie']);
        $length = stripslashes($row['length']);
        $weight = stripslashes($row['weight']);
        $description = stripslashes($row['description']);
        $feedback = '';
    } //ends while
} else {
    $feedback = 'Something is not working';
}

include('includes/header.php');
// for the big assignment, you will now call out the header include
?>
<main class="project-view">
<h1>Welcome to the <?php echo $specie;?>'s Information Page!</h1>

<?php
if($feedback == '') {
    echo '<ul>';
    echo '<li><b>Species: </b> '.$specie.'</li>';
    echo '<li><b>Length (feet): </b> '.$length.'</li>';
    echo '<li><b>Weight (tons): </b> '.$weight.'</li>';
    echo '<li><b>Description: </b> '.$description.'</li>';
    echo '</ul>';
    echo '<p>Return back to the <a href="whales.php">whale page</a></p>';
}
?>
</main>
<aside class="project-view">
    <?php
    if($feedback == ''){
        echo '<img class="center" src="images/whale'.$id.'.jpeg" alt="'.$specie.'">';
    }
    ?>
</aside>
<?php
mysqli_free_result($result);
mysqli_close($iConn);
include('includes/footer.php');