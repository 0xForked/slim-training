<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ModelTableTest extends Model  {
    protected $table = 'tabel_test';
    protected $fillable = [
        'id',
        'title',
        'body',
        'category',
        'tag',
        'created_at',
        'updated_at'
    ];

}