<?php

    $favoriteColor = 'green';

    if($favoriteColor == 'red'){
        echo 'red';
    }elseif($favoriteColor == 'blue'){
        echo 'blue';
    }elseif ($favoriteColor == 'purple') {
        echo 'purple';
    } else {
        echo 'i give up, tell me';
    }
    
    echo '<br/>';

    //switch version
    $favoriteColor = 'purple';
    switch($favoriteColor){
        case 'red':
            echo 'red';
        break;

        case 'blue':
            echo 'blue';
        break;

        case 'purple':
            echo 'purple';
        break;
        default:
        echo 'I give up, tell me';
    }

    echo '<br/>';

    //another use case for a switch statement

    switch($favoriteColor) {
        case 'red':
            case 'blue':
                case 'green':
                    echo 'nice choice';
                break;

        case 'purple':
            case 'pink':
                case 'magenta':
                    echo 'thats okay';
                break;

        default:
        echo 'I dont understand';
    }

?>