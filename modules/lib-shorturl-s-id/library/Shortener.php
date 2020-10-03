<?php
/**
 * Shortener
 * @package lib-shorturl-s-id
 * @version 0.0.1
 */

namespace LibShorturlSId\Library;

use LibCurl\Library\Curl;;

class Shortener implements \LibShorturl\Iface\Shortener{

    protected static $last_error;

    static function lastError(): ?string {
        return self::$last_error;
    }

    static function shorten(string $url): ?string {
        $result = Curl::fetch([
            'url'       => 'https://s.id/api/public/link/shorten',
            'method'    => 'POST',
            'headers'   => [
                'Accept'    => 'application/json'
            ],
            'body'      => [
                'url'       => $url
            ],
            'agent'     => \Mim::$app->req->agent
        ]);

        if(isset($result->errors)){
            foreach($result->errors as $errors){
                foreach($errors as $error){
                    self::$last_error = $error;
                    break 2;
                }
            }

            return null;
        }

        return 'https://s.id/' . $result->short;
    }
}