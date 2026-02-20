<?php

namespace Database\Seeders;

use App\Models\Annotation;
use App\Models\AnnotationContent;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnotationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first() ?? User::factory()->create();
        
        $annotation = Annotation::create([
            'title' => 'Primeira Anotação',
            'user_id' => $user->id,
        ]);

        AnnotationContent::create([
            'annotation_id' => $annotation->id,
            'content' => 'Conteúdo da primeira anotação',
            'image_path' => null,
        ]);

        AnnotationContent::create([
            'annotation_id' => $annotation->id,
            'content' => 'Segunda parte da anotação',
            'image_path' => null,
        ]);
    }
}
