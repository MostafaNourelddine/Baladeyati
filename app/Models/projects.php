<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;
    protected $table="projects";
    protected $fillable = [
        'id',
        'title',
        'summary',
        'date',
        'end_date',
        'tinymce_body',
        'banner_image',
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
