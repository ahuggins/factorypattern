<?php

include '3-SampleClasses.php';

class NavFactory
{
    public static function make($type)
    {
        if ($type == 'admin') {
            return new AdminNav;
        } elseif ($type == 'editor') {
            return new EditorNav;
        } elseif ($type == 'contributor') {
            return new ContributorNav;
        } elseif ($type == 'manager') {
            return new ManagerNav;
        }
        return new ReaderNav;
    }
}

include '5b-SampleUsage.php';
