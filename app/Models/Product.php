<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sub_information',
        'img_url',
        'price',
        'stock',
        'amount',
    ];

    /**
     * Transform attributes to camelCase when the model is converted to an array.
     */
    public function toArray()
    {
        $attributes = parent::toArray();

        // Convert attributes to camelCase
        $camelCaseAttributes = [];
        foreach ($attributes as $key => $value) {
            $camelCaseAttributes[Str::camel($key)] = $value;
        }

        return $camelCaseAttributes;
    }
}
