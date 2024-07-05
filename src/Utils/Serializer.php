<?php

namespace Sofar\Aade\Utils;

use JMS\Serializer\Serializer as JMSSerializer;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;

class Serializer
{
    private static ?string $_meta_dir = null;
    private static ?JMSSerializer $_serializer = null;

    private static function metaDir()
    {
        if (is_null(self::$_meta_dir)) self::$_meta_dir = dirname(__DIR__, 2) . '/aade/metadata';
        return self::$_meta_dir;
    }

    public static function Serializer()
    {
        if (is_null(self::$_serializer)) {
            self::$_serializer = SerializerBuilder::create()
                ->addDefaultHandlers()
                ->addMetadataDir(self::MetaDir(), 'Sofar\Aade')
                ->configureHandlers(function (HandlerRegistryInterface $handler) {
                    $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
                    $handler->registerSubscribingHandler(new XmlSchemaDateHandler('Europe/Athens')); // XMLSchema date handling
                })
                ->build();
        }

        return self::$_serializer;
    }

    public static function deserialize($data, $namespace = 'Sofar\Aade\ResponseDoc', $type = 'xml')
    {
        try {
            return self::Serializer()->deserialize($data, $namespace, $type);
        } catch (\Exception $e) {
            return null;
            // echo $exc->getTraceAsString();
        }
    }

    public static function serialize($data, $type = 'xml')
    {
        try {
            return self::Serializer()->serialize($data, $type);
        } catch (\Exception $e) {
            return null;
            // echo $exc->getTraceAsString();
        }
    }
}
