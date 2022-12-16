<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'county',
        'zip',
        'population',
        'state_id',
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
