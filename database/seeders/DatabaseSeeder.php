<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Audit;
use App\Models\Process;
use App\Models\Rule;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ryan ait',
            'email' => 'ryan@r.r',
        ]);


        $articles = Article::factory(5)->create();

        Rule::factory(3)->create([
            'article_id' => 1
        ]);

        Rule::factory(3)->create([
            'article_id' => 2
        ]);

        Rule::factory(5)->create([
            'article_id' => 3
        ]);

        Rule::factory(3)->create([
            'article_id' => 4
        ]);

        Rule::factory(4)->create([
            'article_id' => 5
        ]);

        Process::factory(5)->create();

        $audit = Audit::factory()->create();

        foreach ($articles as $article) {

            $article->audits()->attach($audit->id, ['status' => 1]);

        }
    }
}
