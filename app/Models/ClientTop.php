<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientTop extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shoulder',
        'sleeve_length',
        'top_length',
        'arm',
        'chest',
        'stomach',
        'neck',
        'wrist',
    ];

    /**
     * Get the user that owns this top.
     */
    public function clientDetail()
    {
        return $this->belongsTo(ClientDetails::class);
    }
}
