<?php

if ($format->type == 'json') {
    return json_encode($data);
} elseif ($format->type == 'xml') {
    return // xml format;
} elseif ($format->type == 'html') {
    return // html stuff
}

class ResponseFormatterFactory
{
    public static function make($type)
    {
        $formatClass = ucfirst($type).'Formatter';

        if (class_exists($formatClass)) {
            return new $formatClass;           
        }
        
        throw new Exception("No Formatter for type $type found");
    }
}

$data = ResponseFormatterFactory::make('json');

return $data;
