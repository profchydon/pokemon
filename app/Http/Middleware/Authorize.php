<?php

namespace App\Http\Middleware;

use Closure;
use Exception;

class AuthorizeMiddleware
{
    public function handle($request, Closure $next, $guard = null)
    {
        // dd($request->header('authorization'));
        $authorization = $request->header('authorization');

        $email = openssl_encrypt($request->header('email'), "AES-128-ECB", env('ENCRYPTION_KEY'));

        $emailExist = ConsumerUser::whereEmail($email)->exists();
        
        if(!$authorization) {

            // Unauthorized response if token not there
            $response = [
                'success' => false,
                'message' => "Unauthorized",
                'data'    => [],
            ];

            return response()->json($response, 404);
        }

        if(!$emailExist || ($email != $authorization)) {

            // Unauthorized response if token not there
            $response = [
                'success' => false,
                'message' => "Who the fuck are you???",
                'data'    => [],
            ];

            return response()->json($response, 404);
        }

        return $next($request);
    }
}