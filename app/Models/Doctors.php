<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'doctors';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    /*const CREATED_AT = 'create_date';
    const UPDATED_AT = 'update_date';
    public $timestamps = false;*/
}
