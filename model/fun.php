<?php
class Fun {

    public static function all() {
        return array(
            'title' => 'Welcome to jokes for Chuck Norris',
            'content' => 'Extremely interesting jokes'
        );
    }

    public static function find() {

        $url = "http://api.icndb.com/jokes/random";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        $resp = curl_exec($ch);
        curl_close($ch);

        return json_decode($resp, true);
    }
}