<?php 

$title='Index';
include 'header.php' 
?>
    <!-- Basic HTMl -->
    <h1>Hello World</h1>
    <br/>
<?php
    //Print HTML using echo 
    echo 'Hello PHP!';
    echo '<br/>';
    echo 'Second line';
    echo '<br/>';

?>


<?php
    //variable declaration
    $name='Vinh Nguyen';
    $age=26;

    //Echo values
    echo $name;
    //Single quotes
    echo '<h1>My name is: '.$name.'</h1>';
    echo '<h1>My age is: '.$age.'</h1>';
    //Double quotes
    echo "<h1>My name is: $name</h1>"; 

?>

<?php require 'footer.php' ?>