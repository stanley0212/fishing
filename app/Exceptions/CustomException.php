<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;

class CustomException extends Exception
{

    public function render(Request $request)
    {
        return view('product.error', ['msg' => $this->getMessage()]);
        //return response(('<img src="http://localhost/storage/images/2d2593a56eb1dd1f354d907023c95e6c.jpg">'));
        //return response()->view('product.error', ['msg' => $this->getMessage()]);
    }
}