<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Work;
use App\Models\SiteSetting;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Editorial', 'Campaign', 'Architecture', 'Food', 'Product', 'Portrait', 'Still', 'Documentary'
        ];

        $categoryMap = [];
        foreach ($categories as $cat) {
            $categoryMap[$cat] = Category::create([
                'name' => $cat,
                'slug' => strtolower($cat)
            ])->id;
        }

        $works = [
            ['title' => 'Atrium · SS25 Lookbook', 'category' => 'Editorial', 'description' => '36 frames · 4 days · Lisbon', 'image_path' => 'assets/img/work-atrium.jpg', 'project_no' => 'No. 142'],
            ['title' => 'Maison Stól', 'category' => 'Still', 'description' => 'Catalogue · 18 frames', 'image_path' => 'assets/img/work-still-1.jpg', 'project_no' => 'No. 139'],
            ['title' => 'Kunsthaus Folder', 'category' => 'Architecture', 'description' => 'Yearbook · 22 frames', 'image_path' => 'assets/img/work-arch.jpg', 'project_no' => 'No. 136'],
            ['title' => 'Salt & Ember', 'category' => 'Food', 'description' => 'Cookbook · 96 frames', 'image_path' => 'assets/img/work-food.jpg', 'project_no' => 'No. 134'],
            ['title' => 'Henning Vorstad', 'category' => 'Portrait', 'description' => 'For TYPE quarterly', 'image_path' => 'assets/img/work-portrait-1.jpg', 'project_no' => 'No. 131'],
            ['title' => 'Aldo & Marlow', 'category' => 'Product', 'description' => 'FW24 product · 28 frames', 'image_path' => 'assets/img/work-product.jpg', 'project_no' => 'No. 129'],
            ['title' => 'Form House', 'category' => 'Still', 'description' => 'Knitwear · 22 frames', 'image_path' => 'assets/img/work-still-2.jpg', 'project_no' => 'No. 127'],
            ['title' => 'Anna Loro', 'category' => 'Portrait', 'description' => 'For Apartamento 32', 'image_path' => 'assets/img/work-portrait-2.jpg', 'project_no' => 'No. 124'],
            ['title' => 'Lange & Maurer', 'category' => 'Architecture', 'description' => 'Practice monograph', 'image_path' => 'assets/img/work-arch-2.jpg', 'project_no' => 'No. 121'],
            ['title' => 'Norfeld FW24', 'category' => 'Campaign', 'description' => 'Campaign · 42 frames · Trieste', 'image_path' => 'assets/img/work-fashion.jpg', 'project_no' => 'No. 118'],
            ['title' => 'Tavola Lunga', 'category' => 'Food', 'description' => 'Trattoria menu · 24 frames', 'image_path' => 'assets/img/work-food-2.jpg', 'project_no' => 'No. 115'],
            ['title' => 'Hochmann Werkstatt', 'category' => 'Documentary', 'description' => 'Process essay · 31 frames', 'image_path' => 'assets/img/work-doc.jpg', 'project_no' => 'No. 113']
        ];

        foreach ($works as $work) {
            Work::create([
                'category_id' => $categoryMap[$work['category']],
                'title' => $work['title'],
                'description' => $work['description'],
                'image_path' => $work['image_path'],
                'project_no' => $work['project_no']
            ]);
        }

        $settings = [
            'index_hero' => 'assets/img/hero-portrait.jpg',
            'index_process' => 'assets/img/process-shoot.jpg',
            'studio_hero' => 'assets/img/studio-hero.jpg',
            'studio_brooklyn' => 'assets/img/studio-brooklyn.jpg',
            'studio_berlin' => 'assets/img/studio-berlin.jpg',
            'services_hero' => 'assets/img/services-hero.jpg',
            'contact_hero' => 'assets/img/contact-hero.jpg',
            'contact_room' => 'assets/img/contact-room.jpg'
        ];

        foreach ($settings as $key => $val) {
            SiteSetting::create([
                'key' => $key,
                'value' => $val,
                'type' => 'image'
            ]);
        }
    }
}
