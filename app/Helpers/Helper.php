<?php

if (! function_exists('setting')) {
    function setting(string $key, $default = null)
    {
        return \App\Models\Setting::get($key, $default);
    }
}

if (! function_exists('successResponse')) {
    function successResponse($message = 'success', $statusCode = 200, $data = null)
    {
        $response = ['success' => true, 'statusCode' => $statusCode, 'message' => $message];
        if ($data) {
            $response['data'] = $data;
        }
        return response()->json($response, $statusCode);
    }
}

if (! function_exists('errorResponse')) {
    function errorResponse(string $message, int $statusCode = 500, $errors = null)
    {
        $response = ['success' => false, 'statusCode' => $statusCode, 'message' => $message];
        if ($errors) {
            $response['errors'] = $errors;
        }
        return response()->json($response, $statusCode);
    }
}
