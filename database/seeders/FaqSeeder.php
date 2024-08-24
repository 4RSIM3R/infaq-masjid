<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::insert([
            [
                'question' => 'What is the purpose of this website?',
                'answer' => 'This website is a place where you can find information about the different types of plants that can be grown in your garden. It also provides you with information about how to grow your plants and how to take care of them.',
            ],
            [
                'question' => 'What are the different types of plants that can be grown in your garden?',
                'answer' => 'There are many different types of plants that can be grown in your garden. Some of the most common types of plants include tomatoes, peppers, lettuce, herbs, and more. Each type of plant has its own unique characteristics and needs, so it is important to research and understand the needs of each plant before you start growing it.',
            ],
            [
                'question' => 'How do I know if my plants are getting enough sunlight?',
                'answer' => 'One of the most important things to know when it comes to growing plants is how much sunlight they need. Some plants require more sunlight than others, so it is important to research the needs of each plant before you start growing it. You can also use a sunlight simulator to test the amount of sunlight your plants need.',
            ],
            [
                'question' => 'How do I know if my plants are getting enough water?',
                'answer' => 'Another important thing to know when it comes to growing plants is how much water they need. Some plants require more water than others, so it is important to research the needs of each plant before you start growing it. You can also use a water simulator to test the amount of water your plants need.',
            ],
        ]);
    }
}
