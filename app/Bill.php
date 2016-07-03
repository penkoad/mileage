<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{

    /**
     * Fillable fields for a Bill
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'amount',
        'milage',
        'billdate',
    ];

    /**
     * A bill is owned by a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
