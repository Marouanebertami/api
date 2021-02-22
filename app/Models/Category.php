<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cour;
use App\Models\Category;

class Category extends Model
{
    use HasFactory;

    public function Parent(){
        return $this->hasOne(Category::class, 'id', 'id_parent');
    }

    public function Children(){
        return $this->belongsTo(Category::class, 'id', 'id_parent');
    }

    public function Cour()
    {
        return $this->belongsTo(Cour::class, 'id', 'id_category');
    }
}
