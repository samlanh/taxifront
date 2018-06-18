<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    // use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    public function responseError($key, $value) {
        return response()->json([
                    'code' => $key,
                    'message' => $value
                ]
            );
    }

    public function responseSuccess($data) {
        return response()->json([
            'result' => $data,
            'code' => 'SUCCESS'
        ]);
    }

    public function queryException(\PDOException $ex) {
        if ($ex->getCode() === 1045) {
            return $this->responseError('ERR_DATABASE_CONNECTION', 'Unable to connect to database');
        }
        return $this->responseError('ERR_DATABASE', $ex->getMessage());
    }
}
