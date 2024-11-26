<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use File;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imageFolderPath = public_path('img/Konutlar');
        if (File::exists($imageFolderPath)){
            $images = File::allFiles($imageFolderPath);

            foreach ($images as $image) {
                Project::create([
                    'title' => 'Konut Projesi ' . basename($image, '.'.$image->getExtension()), // Generate title based on image filename
                    'description' => 'A description for ' . basename($image, '.'.$image->getExtension()) . ' project',
                    'image_path' => 'img/Konutlar/' . $image->getFilename(), // Store the image path
                ]);
            }
        }
        $imageFolder_Path=public_path('img/EndustriyelYapilar');
        if (File::exists($imageFolder_Path)){
            $images = File::allFiles($imageFolder_Path);

            foreach ($images as $image) {
                Project::create([
                    'title' => 'Endüstriyel Yapılar Projesi ' . basename($image, '.'.$image->getExtension()), // Generate title based on image filename
                    'description' => 'A description for ' . basename($image, '.'.$image->getExtension()) . ' project',
                    'image_path' => 'img/EndustriyelYapilar/' . $image->getFilename(), // Store the image path
                ]);
            }
        }

    }
}
