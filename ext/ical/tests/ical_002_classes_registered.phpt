--TEST--
whether all classes of the ical extension are registered
--FILE--
<?php
    $classes=array( 
        'ICalComponent'
    );
    foreach( $classes as $class )
    {
        if( class_exists( $class, FALSE ) )
        {
            continue;
        }
        echo 'Class ',$class,' does not exist.',"\n";
    }
?>
--EXPECT--
