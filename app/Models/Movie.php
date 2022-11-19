<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'year', 'duration', 'studio', 'story'];

    // CALL INFORMATIONS IN "SEARCH" //
    public function scopeFilter($query, array $filters) {
        if($filters['search'] ?? false) {
            $query->where('title', 'like','%' . request('search') . '%')
            
                ->orWhere('year', 'like','%' . request('search') . '%')
                ->orWhere('duration', 'like','%' . request('search') . '%')
                ->orWhere('studio', 'like','%' . request('search') . '%')
                ->orWhere('story', 'like','%' . request('search') . '%');
        }
    }
}
