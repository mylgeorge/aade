<?php

namespace Sofar\Aade;

use GuzzleHttp\Client;

final class Aade
{
    public const AADE_URL_PROD = 'https://mydatapi.aade.gr/myDATA/';
    public const AADE_URL_DEV = 'https://mydataapidev.aade.gr/';
    // public const AADE_URL_DEV = 'https://mydata-dev.azure-api.net/'; //

    private static string $aade_user = '';
    private static string $aade_key = '';
    private static bool $testing = false;
    private static ?Client $_client = null;

    public static function Fake($testing = true)
    {
        self::$testing = $testing;

        return new static();
    }

    public static function SetCredential($aade_user, $aade_key)
    {
        self::$aade_user = $aade_user;
        self::$aade_key = $aade_key;
        self::$_client = null;

        return new static();
    }

    public static function Client()
    {
        if (is_null(self::$_client)) {
            $aade_url = self::$testing ? self::AADE_URL_DEV : self::AADE_URL_PROD;
            $aade_headers = [
                'aade-user-id' => self::$aade_user,
                'Ocp-Apim-Subscription-Key' => self::$aade_key
            ];
            self::$_client = new Client([
                'base_uri' => $aade_url,
                'headers' => $aade_headers,
                'verify' => !self::$testing,
                'timeout' => 30
            ]);
        }

        return self::$_client;
    }

    public static function getVatCategory($value){
        return array_search(intval($value), [
            24, 16, 6, 17, 9, 4, 0
        ]) + 1;
    }
}
