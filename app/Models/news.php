<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    protected $table="news";
    protected $fillable = [
        'id',
        'title',
        'summary',
        'banner_image',
        'tinymce_body',
    ];
    public function scopeFilter($query,array $filters){
        if($filters['search'] ?? false){
            \Log::info($query->toSql());
            $query->where('title','like','%'.request('search').'%')
            ->orWhere('summary','like','%'.request('search').'%');
            \Log::info($query->toSql());
        }
    }
}
