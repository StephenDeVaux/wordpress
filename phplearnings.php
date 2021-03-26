<?php
    function myFirstFunction() {
        echo 2 + 2;
    };

    function greet($name, $color) { 
        echo "<p>Hi, my name is $name and fav color is $color.<p/>";
    }

    greet('John', 'Blue' );
    greet('Jane', 'Green');

    $item = 'cupcake';
    $itemArray = array('brad', 'john', 'jane');

    $count = 1; 
    while($count < 100) {
        echo "<li>$count</li>";
        $count++;
    }
?>

<h1><?php bloginfo('name') ?></h1>
<h1><?php bloginfo('description') ?></h1>
<h2><?php echo $item ?></h2>
<h2><?php echo $itemArray[0] ?></h2>

<!-- To echo or not?? -->
<?php

    //A function that echos a result
    function doubleMe($num) {
        echo $num * 2; 
    }

    //A function that returns a result
    function doubleMe2($num) {
        return $num * 2; 
    }

?>
