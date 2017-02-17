<?php

echo 'admin' . PHP_EOL;
$type = 'admin';
$nav = NavFactory::make($type);
echo $nav->render();

echo 'editor' . PHP_EOL;
$type = 'editor';
$nav = NavFactory::make($type);
echo $nav->render();

echo 'contributor' . PHP_EOL;
$type = 'contributor';
$nav = NavFactory::make($type);
echo $nav->render();

echo 'manager' . PHP_EOL;
$type = 'manager';
$nav = NavFactory::make($type);
echo $nav->render();

echo 'reviewer' . PHP_EOL;
$type = 'reviewer';
$nav = NavFactory::make($type);
echo $nav->render();

echo 'another' . PHP_EOL;
$type = 'another';
$nav = NavFactory::make($type);
echo $nav->render();

echo 'reader' . PHP_EOL;
$type = 'reader';
$nav = NavFactory::make($type);
echo $nav->render();
