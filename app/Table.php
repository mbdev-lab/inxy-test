<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'table';
    protected $guarded = [
        'base_64'
    ];


    protected $listUniqAttribute = [
        'provider',
        'brand',
        'location',
        'cpu',
        'drive',
    ];

    public function fillBase64()
    {
        $str = '';
        foreach ($this->listUniqAttribute as $attributeName) {
            $str .= $this->attributes[$attributeName];
        }
        $this->base_64 = base64_encode($str);

        return $this;
    }
}
