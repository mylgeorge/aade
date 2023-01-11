<?php

namespace Sofar\Aade\Utils;

class Helpers
{
    public static function isClassProperty(string $property, string $class)
    {
        $_class = new \ReflectionClass($class);

        foreach ($_class->getProperties() as $prop) {
            if ($prop->name == $property) return true;
        }

        return false;
    }
}
