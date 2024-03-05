<?php


/**
 * 
 * @return \Illuminate\Http\JsonResponse
*/

function responseSuccess(array|string|int $message , array $auth = [])
{

    return response()->json([
        "status"        => "success",
        "status_code"   => 200,
        "message"       => $message,
        "auth"          => $auth,
    ],200);

}


/**
 * @return \Illuminate\Http\JsonResponse
*/
function responseError( array|string $message ,  int $status = 301  , array|string $errors= [] )
{

    return response()->json([
        "status"        => "error",
        "status_code"   => $status,
        "message"       => $message,
        "errors"        => $errors
    ],$status);

}
