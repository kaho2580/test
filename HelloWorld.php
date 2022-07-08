<?PHP
echo "HelloWorld!".PHP_EOL;
?>

<?php
$data=array('string',1,1.0,false,array(),NULL,new stdClass);
foreach($data as $value){
    echo gettype($value),"<br/>\n";
}
?>
