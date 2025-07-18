<?php

$var = "foo";

$ref =& $var;

$var = "bar";

$ref = "baz";


$ref2 = $var;

$ref2 = "qux";

var_dump($var, $ref,$ref2);
