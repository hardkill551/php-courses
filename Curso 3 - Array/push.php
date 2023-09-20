<?php 
     $array = [
        'Gabi',
        'Carlos',
        'Pedro',
        'Maria'
     ];

     $array[] = 'Vinicius';
     array_push($array, 'Hugo', "Arthur", "Lucas");
     array_unshift($array, 'Gabriela');
     var_dump($array);
     array_pop($array);
     array_shift($array);
     var_dump($array);
