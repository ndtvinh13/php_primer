<?php 
    $title='String';
    include 'header.php' 
?>
    <?php
        $phrase1='student who came late';
        $phrase2='in class, stand up';

        echo $phrase1 ." Vinh ". $phrase2;

        echo "<hr>";
        $datenow=getdate();
        echo "Today is: </br>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';

        echo "Today's date: ". $datenow['mon'] . '/' . $datenow['mday'] . '/' . $datenow['year'] .'<br/>';

        echo time() . '<br/>';

    ?>

<?php require 'footer.php' ?>