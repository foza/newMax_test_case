<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Currency
 * @package App
 */
class Currency extends Model
{
    /**
     * @var string
     */
    protected $table = 'currencies';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'rate',
    ];

    /**
     * @var array
     */
    protected $visible = [
        'name',
        'rate',
    ];
}
