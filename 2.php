<?php

switch ($user->type) {
    case 'admin':
        // return admin nav
        break;
    
    case 'editor':
        // return editor nav
        break;

    case 'contributor':
        // return contributor nav
        break;

    default:
        // return "reader" nav
        break;
}
