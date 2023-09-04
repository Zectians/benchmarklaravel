<?php

namespace App\Helpers;

class ResponseFormatter
{
    protected static $format = [
        'success'   => true,
        'code'      => 200,
        'message'   => 'Successfully',
        'data'      => [],
    ];

    public static function success($data, $message, $code = 200)
    {
        $result = self::$format;
        $result['code'] = $code;
        $result['message'] = $message;
        $result['data'] = $data;
        return response()->json($result, $code);
    }

    public static function error($message = 'Failed load data', $data = [], $code = 500)
    {
        $result = self::$format;
        $result['success'] = false;
        $result['code'] = $code;
        $result['message'] = $message;
        $result['data'] = $data;
        return response()->json($result, $code);
    }
}
