<?php

if (!function_exists('response_success')) {
    function response_success($data = [], $message = "Success", $code = 200)
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
            'errors' => []
        ], $code);
    }
}

if (!function_exists('response_error')) {
    function response_error($message = "Error", $errors = [], $code = 400)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
            'errors' => $errors
        ], $code);
    }
}
