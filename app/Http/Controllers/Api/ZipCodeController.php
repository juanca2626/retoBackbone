<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Zipcode;
use Illuminate\Http\Request;
use App\Http\Resources\ZipCodesCollection;


class ZipCodeController extends Controller
{
    public function code($code)
    {
        $zipcodes = Zipcode::query()->where('d_codigo', $code)->get();
        return new ZipCodesCollection($zipcodes);
    }
}
