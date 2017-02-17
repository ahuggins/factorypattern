<?php

switch ($user->type) {
    case 'admin':
        return (new AdminNav)->render();
        break;
    
    case 'editor':
        return (new EditorNav)->render();
        break;

    case 'contributor':
        return (new ContributorNav)->render();
        break;

    default:
        return (new ReaderNav)->render();
        break;
}

if ($user->type == 'admin') {
    return (new AdminNav)->render();
} elseif ($user->type == 'editor') {
    return (new EditorNav)->render();
} elseif ($user->type == 'contributor') {
    return (new ContributorNav)->render();
} else {
    return (new ReaderNav)->render();
}
