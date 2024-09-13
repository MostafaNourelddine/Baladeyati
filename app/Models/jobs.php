<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;
    protected $table="jobs";
    protected $fillable = [
        'id',
        'title',
        'description',
        'banner_image',
        'tinymce_body',
    ];
    public function scopeFilter($query,array $filters){
        if($filters['search'] ?? false){
            \Log::info($query->toSql());
            $query->where('title','like','%'.request('search').'%')
            ->orWhere('description','like','%'.request('search').'%');
            \Log::info($query->toSql());
        }
    }
}
