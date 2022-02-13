<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $table = 'articles';
    public $timestamps = false;

    protected $fillable = [
                            'order_no',
                            'title', 
                            'detail', 
                            'credit', 
                            'thumbnail', 
                            'is_home', 
                            'is_active', 
                            'is_delete', 
                            'create_date',
                            'create_by',
                            'update_date',
                            'update_by'
                        ];

}
