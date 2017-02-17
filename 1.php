<?php

if ($user->type == 'admin') {
    // return admin nav
} elseif ($user->type == 'editor') {
    // return editor nav
} elseif ($user->type == 'contributor') {
    // return contributor nav
} else {
    // return "reader" nav
}
