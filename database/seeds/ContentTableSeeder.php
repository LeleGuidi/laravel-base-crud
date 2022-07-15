<?php

use Illuminate\Database\Seeder;
use App\Content;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = config('contents');

        foreach ($contents as $content) {
            $newContent = new Content();
            $newContent->name = $content['name'];
            $newContent->url = $content['url'];
            $newContent->alt = $content['alt'];
            $newContent->save();
        }
    }
}
