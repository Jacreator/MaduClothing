<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientDetails extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'image',
        'gender',
    ];

    /**
     * Get the phone associated with the user.
     */
    public function top()
    {
        return $this->hasOne(ClientTop::class);
    }

    /**
     * Get the phone associated with the user.
     */
    public function trouser()
    {
        return $this->hasOne(ClientTrouser::class);
    }
}
