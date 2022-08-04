<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use CodeInc\StripAccents\StripAccents;

class ZipCodesCollection extends ResourceCollection
{
    public static $wrap = null;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $zipcode = $this->collection->first();

        $extructura = [];

        if(!$zipcode){
            return $extructura;
        }

        $extructura["zip_code"] = $zipcode->d_codigo;
        $extructura["locality"] = strtoupper(StripAccents::strip($zipcode->d_ciudad));
        $extructura["federal_entity"] = [
            "key" => intval($zipcode->c_estado),
            "name" => strtoupper(StripAccents::strip($zipcode->d_estado)),
            "code" => $zipcode->c_cp,
        ];

        $extructura["settlements"] = $this->collection->transform(function ($item) use ($extructura) {

            return [
                "key" => intval($item->id_asenta_cpcons),
                "name" => strtoupper(StripAccents::strip($item->d_asenta)),
                "zone_type" => strtoupper(StripAccents::strip($item->d_zona)),
                "settlement_type" => [
                    "name" => $item->d_tipo_asenta
                ]
            ];
        });

        $extructura["municipality"] = [
            "key" => intval($zipcode->c_mnpio),
            "name" => strtoupper(StripAccents::strip($zipcode->d_mnpio))
        ];

        return $extructura;
    }
}
