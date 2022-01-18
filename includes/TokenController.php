<?php

class TokenController
{
    /**
     * @throws JsonException
     */
    public static function inspectToken($get, $callback)
    {
        if (!empty($get)) {

            if (isset($get['token']) && $get['token'] === '1234') {

                return $callback($get);

            } else {

                echo json_encode(['data' => null, 'error' => 'Bad token'], JSON_THROW_ON_ERROR);
            }
        }
    }
}