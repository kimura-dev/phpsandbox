<?php 
  /*

      -Indexed
      -Associative
      -Mulit-dimensional
  
  */

  // Indexed
  $people = array('Greg', 'Jim', 'Denny');
  // echo $people[1];
  $ids = array(22, 55, 122);
  $cars = ['Honda','Toyota', 'Ford'];
  // Add to array
  $cars[3] = 'Chevy';
  $cars[] = 'Malibu';

  // echo count($cars); - count() gets the length
  // print_r($cars); - prints out content in array
  // var_dump($cars) - all content in array

  // Associative Arrays
  $people = array('Brad' => 35, 'Jose' => 32, 'Will' => 37);


  $ids = [22 =. 'Brad', 44 => 'Jose', 63 => 'Will'];

  echo $ids[22];
  // echo $people['Brad']; => 35

  $people['Jill'] = 42;


  //  Mulit-dimensional Arrays
  $cars = array(
    array('Honda', 20, 20)
    array('Chevy', 30, 40)
    array('Ford', 24, 18)
  );

  // $cars[1][0]; => Chevy
?>
