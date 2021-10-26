<?php
    include 'quiz-12-class.php';

    $kevin = new people('Kevin', '2000','playing football');
    $kaykay = new people('Kaykay', '2001', 'playing balls');

    echo $kevin -> sentence().'<br>';

    print_r($kevin);
    print_r($kaykay);

    // echo sentence($kaykay).'<br>';
    echo $kaykay -> sentence().'<br>';
 
    echo $kaykay -> name;

?>