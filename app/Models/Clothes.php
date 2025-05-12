<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;

    //テーブル名を明示的に指定
    protected $table = 'clothes';

    //一括代入可能なフィールドを指定
    protected $fillable = [
        'name',
        'category',
        'color',
        'price',
        'size',
        'description',
    ];
}
