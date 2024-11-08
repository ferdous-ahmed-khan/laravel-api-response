<?php

namespace FerdousAhmedKhan\LaravelApiResponse;

use Illuminate\Http\JsonResponse;

class ResponseHelper
{
    public static function success(string $message = 'Success', $data = null): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
            'errors' => null
        ], 200);
    }

    public static function updated(string $message = 'Updated successfully', $data = null): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
            'errors' => null
        ], 200);
    }

    public static function deleted(string $message = 'Deleted successfully', $data = null): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
            'errors' => null
        ], 200);
    }

    public static function created(string $message = 'Created successfully', $data = null): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data,
            'errors' => null
        ], 201);
    }

    public static function badRequest(string $message = 'Bad Request', $error = null): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
            'errors' => $error
        ], 400);
    }

    public static function failed(string $message = 'Something went wrong', $error = null): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
            'errors' => $error,
        ], 400);
    }

    public static function unauthorized(string $message = 'Unauthorized', $error = null): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
            'errors' => $error
        ], 401);
    }

    public static function forbidden(string $message = 'Forbidden', $error = null): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
            'errors' => $error
        ], 403);
    }

    public static function notFound(string $message = 'Not Found', $error = null): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
            'errors' => $error,
        ], 404);
    }

    public static function validationFailed(string $message = 'Validation Failed', $error = []): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
            'errors' => $error,
        ], 422);
    }

    public static function internalServerError(string $message = 'Internal Server Error', $error = null): JsonResponse
    {
        return response()->json([
            'status' => false,
            'message' => $message,
            'data' => null,
            'errors' => $error
        ], 500);
    }

    public static function custom(bool $status, int $code, string $message = 'Custom Response', $data = null, $error = null): JsonResponse
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
            'errors' => $error,
        ], $code);
    }
}
