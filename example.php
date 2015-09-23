<?php

require 'vendor/autoload.php';

$a = Arr\Method::undot([
  'one.two.three' => 'hello1',
  'one.two.four' => 'hello2',
  'one.three.four' => 'hello3',
  'rand1.two.three' => 'test',
  'rand2' => 'test2'
]);

print_r($a);
