<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annotation extends Model
{
    protected $fillable = ['title', 'user_id'];

    public function contents() {
        // uma anotação pode ter muitos conteúdos
        return $this->hasMany(AnnotationContent::class);
    }
}
