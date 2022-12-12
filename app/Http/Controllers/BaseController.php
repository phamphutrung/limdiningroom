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
    protected function jsonRender($data = [])
    {
        $this->compacts['message'] = [
            'code' => 200,
            'status' => true,
        ];

        $compacts = array_merge($data, $this->compacts);

        return response()->json($compacts, 200);
    }
}
