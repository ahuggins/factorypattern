<?php

class NavFactory
{
    public static function make($type)
    {
        $navClass = ucfirst($type).'Nav';

        if (class_exists($navClass)) {
            return new $navClass;
        }

        return new ReaderNav;
    }
}

// $type = 'admin' || 'editor' || 'contributor' || 'reader' (default) || 'reviewer' || 'manager' || 'another';
// $nav = NavFactory::make($type);
