--TEST--
ical extension is loaded
--FILE--
<?php
echo in_array( 'ical', get_loaded_extensions() );
?>
--EXPECT--
1
