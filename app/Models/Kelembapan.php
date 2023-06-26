<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelembapan extends Model
{
    use HasFactory;

    protected $table = 'kelembapans';
    protected $primaryKey = 'id';
    protected $fillable = ['kelembapan'];
    protected $orderBy = 'created_at';
    protected $orderDirection = 'desc';

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
