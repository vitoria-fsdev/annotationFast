<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnotationContent extends Model
{   
    // mass assignment para os campos da tabela, uma lista de permissões para atribuição em massa
    protected $fillable = ['content', 'image_path', 'annotation_id'];

    public function annotation() {
        // um conteúdo pertence a uma anotação
        return $this->belongsTo(Annotation::class);
    }
}
