<?php

namespace Sofar\Aade\Utils;

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Validator\RecursiveValidator;

class Validator
{
    private static $_errors = [];
    private static ?RecursiveValidator $_validator = null;

    private static function Client()
    {
        // get the validator
        if (is_null(self::$_validator)) {
            $builder = Validation::createValidatorBuilder();
            foreach (glob(dirname(__DIR__, 2) . '/aade/validation/*.yml') as $file) {
                $builder->addYamlMapping($file);
            }
            self::$_validator = $builder->getValidator();
        }

        return self::$_validator;
    }

    public static function isValid($object)
    {
        return 0 === count(self::validate($object));
    }

    public static function validate($object)
    {
        self::$_errors = [];

        $validations = self::Client()->validate($object, null, ['xsd_rules']);

        foreach ($validations as $validation) {
            self::$_errors[$validation->getPropertyPath()] = $validation->getMessage();
        }

        return self::$_errors;
    }

    public static function getErrors()
    {
        return self::$_errors;
    }
}
