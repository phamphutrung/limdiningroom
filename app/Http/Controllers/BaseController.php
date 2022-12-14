<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $compacts;

    /**
     * @param array $data
     * @return Response
     */
    protected function jsonRender($data = [], $code = 200)
    {
        $this->compacts['message'] = [
            'status' => true,
            'code' => $code,
        ];

        $compacts = array_merge($data, $this->compacts);

        return response()->json($compacts, $code);
    }
}
