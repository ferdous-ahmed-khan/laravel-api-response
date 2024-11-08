<?php

namespace FerdousAhmedKhan\LaravelApiResponse;

use Illuminate\Http\JsonResponse;

class ResponseHelper
{
    public static function responseSuccess($message, $data = []): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ], 200);
    }

    public static function responseBadRequest($message, $data = []): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => $data
        ], 400);
    }
}
