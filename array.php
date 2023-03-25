<?php
    //$Names = array("Ayo","Deji", "Daniel" );
    //echo $Names [0];

    // $age = array('David' => '27', 'Amy' => '21');
    // echo $age['Amy'];

    $users = array( 
        'names' => array('ayo','deji','daniel'),
        'online' => array('ayo','deji'),
        'offline' => array('daniel'),
        'away' => array('yo','ji','mary')
    );
    echo $users['away'][1];
?>