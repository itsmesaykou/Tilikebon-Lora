<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suhu extends Model
{
    use HasFactory;

    protected $table = 'suhus';
    protected $primaryKey = 'id';
    protected $fillable = ['suhu'];
    protected $orderBy = 'created_at';
    protected $orderDirection = 'desc';
    
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
