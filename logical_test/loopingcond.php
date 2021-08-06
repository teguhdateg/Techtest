<?php
for ($i = 1; $i <= 50; $i++)
{
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FooBarr $lb";
    }
    else if($i % 3 == 0){
        echo "Foo $lb";
    }
    else if($i % 5 == 0){
        echo "Barr $lb";
    }
    else {
        echo $i;
    }
}
?>