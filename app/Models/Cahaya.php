<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cahaya extends Model
{
    use HasFactory;

    protected $table = 'cahayas';
    protected $primaryKey = 'id';
    protected $fillable = ['cahaya'];
    protected $orderBy = 'created_at';
    protected $orderDirection = 'desc';

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
