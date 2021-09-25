<?php include 'header.php' ?>
    <?php
        $grade='A';

        switch($grade){
            case 'A':
                echo '<h2> you are superstar!</h2>';
                break;
            case 'B':
                echo '<h2> you did well!</h2>';
                break;
            case 'C':
                echo '<h2> you have failed</h2>';
                break;
        }



    ?>
<?php require 'footer.php' ?>