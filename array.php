<?php 
    $title='Array';
    include 'header.php' 
?>
    <?php
        $numbers=array(1,2,3,4,5,6,7,8,9,10);
        $arrayLength=count($numbers);
        for($i=0; $i<$arrayLength; $i++){
            echo "<p>$numbers[$i]</p>";
        }

    ?>
</body>
</html>