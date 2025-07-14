<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Spots;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Check if spots already exist to avoid duplicates
        if (Spots::count() > 0) {
            echo "Tourism spots already exist. Skipping seeding.\n";
            return;
        }

        echo "Seeding tourism spots...\n";

        // Seed 20 tourism spots
        $spots = [
            [
                'name' => 'Boracay White Beach',
                'country' => 'Philippines',
                'month' => 'December',
                'description' => 'Famous white sand beach with crystal clear waters and vibrant nightlife.',
                'image_url' => 'https://via.placeholder.com/400x300/20B2AA/FFFFFF?text=Boracay',
                'rating' => 4.8,
                'location' => 'Aklan, Philippines',
                'highlights' => 'Water sports, Beach parties, Sunset sailing'
            ],
            [
                'name' => 'Palawan Underground River',
                'country' => 'Philippines',
                'month' => 'March',
                'description' => 'UNESCO World Heritage site featuring an underground river through limestone karst.',
                'image_url' => 'https://via.placeholder.com/400x300/228B22/FFFFFF?text=Palawan',
                'rating' => 4.9,
                'location' => 'Puerto Princesa, Palawan',
                'highlights' => 'Cave exploration, Wildlife viewing, Boat tours'
            ],
            [
                'name' => 'Bali Rice Terraces',
                'country' => 'Indonesia',
                'month' => 'June',
                'description' => 'Stunning ancient rice terraces carved into volcanic hillsides.',
                'image_url' => 'https://via.placeholder.com/400x300/8FBC8F/FFFFFF?text=Bali+Terraces',
                'rating' => 4.7,
                'location' => 'Jatiluwih, Bali',
                'highlights' => 'Photography, Cultural tours, Traditional villages'
            ],
            [
                'name' => 'Machu Picchu',
                'country' => 'Peru',
                'month' => 'May',
                'description' => 'Ancient Incan citadel perched high in the Andes Mountains.',
                'image_url' => 'https://via.placeholder.com/400x300/CD853F/FFFFFF?text=Machu+Picchu',
                'rating' => 4.9,
                'location' => 'Cusco Region, Peru',
                'highlights' => 'Hiking, History, Mountain views'
            ],
            [
                'name' => 'Santorini Sunset',
                'country' => 'Greece',
                'month' => 'September',
                'description' => 'Iconic whitewashed buildings overlooking the Aegean Sea with spectacular sunsets.',
                'image_url' => 'https://via.placeholder.com/400x300/4682B4/FFFFFF?text=Santorini',
                'rating' => 4.8,
                'location' => 'Cyclades, Greece',
                'highlights' => 'Sunset views, Wine tasting, Beach clubs'
            ],
            [
                'name' => 'Maldives Overwater Bungalows',
                'country' => 'Maldives',
                'month' => 'February',
                'description' => 'Luxury overwater villas in pristine turquoise lagoons.',
                'image_url' => 'https://via.placeholder.com/400x300/00CED1/FFFFFF?text=Maldives',
                'rating' => 4.9,
                'location' => 'Various Atolls, Maldives',
                'highlights' => 'Snorkeling, Spa treatments, Private beaches'
            ],
            [
                'name' => 'Great Wall of China',
                'country' => 'China',
                'month' => 'October',
                'description' => 'Ancient fortification stretching thousands of kilometers across northern China.',
                'image_url' => 'https://via.placeholder.com/400x300/696969/FFFFFF?text=Great+Wall',
                'rating' => 4.6,
                'location' => 'Beijing, China',
                'highlights' => 'Historical significance, Hiking, Photography'
            ],
            [
                'name' => 'Aurora Borealis Iceland',
                'country' => 'Iceland',
                'month' => 'January',
                'description' => 'Spectacular northern lights dancing across the Arctic sky.',
                'image_url' => 'https://via.placeholder.com/400x300/191970/FFFFFF?text=Aurora+Iceland',
                'rating' => 4.8,
                'location' => 'Reykjavik, Iceland',
                'highlights' => 'Northern lights, Hot springs, Glacier tours'
            ],
            [
                'name' => 'Safari Serengeti',
                'country' => 'Tanzania',
                'month' => 'August',
                'description' => 'World-famous wildlife reserve with the Great Migration.',
                'image_url' => 'https://via.placeholder.com/400x300/DEB887/FFFFFF?text=Serengeti',
                'rating' => 4.9,
                'location' => 'Northern Tanzania',
                'highlights' => 'Wildlife viewing, Great migration, Balloon safaris'
            ],
            [
                'name' => 'Cherry Blossoms Tokyo',
                'country' => 'Japan',
                'month' => 'April',
                'description' => 'Beautiful cherry blossom season in Japan\'s bustling capital.',
                'image_url' => 'https://via.placeholder.com/400x300/FFB6C1/FFFFFF?text=Tokyo+Sakura',
                'rating' => 4.7,
                'location' => 'Tokyo, Japan',
                'highlights' => 'Hanami festivals, Traditional gardens, City culture'
            ],
            [
                'name' => 'Banff National Park',
                'country' => 'Canada',
                'month' => 'July',
                'description' => 'Pristine mountain wilderness with turquoise lakes and glacial peaks.',
                'image_url' => 'https://via.placeholder.com/400x300/4169E1/FFFFFF?text=Banff',
                'rating' => 4.8,
                'location' => 'Alberta, Canada',
                'highlights' => 'Hiking, Canoeing, Mountain climbing'
            ],
            [
                'name' => 'Petra Jordan',
                'country' => 'Jordan',
                'month' => 'November',
                'description' => 'Ancient city carved into rose-colored sandstone cliffs.',
                'image_url' => 'https://via.placeholder.com/400x300/BC8F8F/FFFFFF?text=Petra',
                'rating' => 4.7,
                'location' => 'Ma\'an Governorate, Jordan',
                'highlights' => 'Archaeological sites, Desert landscapes, Historical tours'
            ],
            [
                'name' => 'Table Mountain Cape Town',
                'country' => 'South Africa',
                'month' => 'February',
                'description' => 'Iconic flat-topped mountain overlooking Cape Town and the Atlantic Ocean.',
                'image_url' => 'https://via.placeholder.com/400x300/708090/FFFFFF?text=Table+Mountain',
                'rating' => 4.6,
                'location' => 'Cape Town, South Africa',
                'highlights' => 'Cable car rides, Hiking trails, Ocean views'
            ],
            [
                'name' => 'Angkor Wat',
                'country' => 'Cambodia',
                'month' => 'December',
                'description' => 'Magnificent ancient temple complex and archaeological wonder.',
                'image_url' => 'https://via.placeholder.com/400x300/8B4513/FFFFFF?text=Angkor+Wat',
                'rating' => 4.8,
                'location' => 'Siem Reap, Cambodia',
                'highlights' => 'Temple exploration, Sunrise views, Historical significance'
            ],
            [
                'name' => 'Galapagos Islands',
                'country' => 'Ecuador',
                'month' => 'June',
                'description' => 'Unique volcanic islands with endemic wildlife and pristine nature.',
                'image_url' => 'https://via.placeholder.com/400x300/2E8B57/FFFFFF?text=Galapagos',
                'rating' => 4.9,
                'location' => 'Galapagos Province, Ecuador',
                'highlights' => 'Wildlife photography, Snorkeling, Scientific tours'
            ],
            [
                'name' => 'Norwegian Fjords',
                'country' => 'Norway',
                'month' => 'June',
                'description' => 'Dramatic fjords with cascading waterfalls and steep mountain walls.',
                'image_url' => 'https://via.placeholder.com/400x300/4682B4/FFFFFF?text=Norwegian+Fjords',
                'rating' => 4.7,
                'location' => 'Western Norway',
                'highlights' => 'Cruise tours, Waterfall viewing, Mountain hiking'
            ],
            [
                'name' => 'Taj Mahal',
                'country' => 'India',
                'month' => 'October',
                'description' => 'Stunning white marble mausoleum and symbol of eternal love.',
                'image_url' => 'https://via.placeholder.com/400x300/F5F5DC/FFFFFF?text=Taj+Mahal',
                'rating' => 4.6,
                'location' => 'Agra, India',
                'highlights' => 'Architecture, Photography, Historical significance'
            ],
            [
                'name' => 'Easter Island',
                'country' => 'Chile',
                'month' => 'March',
                'description' => 'Remote island famous for mysterious giant stone statues called Moai.',
                'image_url' => 'https://via.placeholder.com/400x300/8B7355/FFFFFF?text=Easter+Island',
                'rating' => 4.5,
                'location' => 'Rapa Nui, Chile',
                'highlights' => 'Moai statues, Polynesian culture, Archaeological sites'
            ],
            [
                'name' => 'Victoria Falls',
                'country' => 'Zambia',
                'month' => 'May',
                'description' => 'One of the world\'s largest waterfalls known as "The Smoke that Thunders".',
                'image_url' => 'https://via.placeholder.com/400x300/87CEEB/FFFFFF?text=Victoria+Falls',
                'rating' => 4.8,
                'location' => 'Livingstone, Zambia',
                'highlights' => 'Waterfall viewing, Bungee jumping, River cruises'
            ],
            [
                'name' => 'Amazon Rainforest',
                'country' => 'Brazil',
                'month' => 'September',
                'description' => 'World\'s largest tropical rainforest with incredible biodiversity.',
                'image_url' => 'https://via.placeholder.com/400x300/228B22/FFFFFF?text=Amazon',
                'rating' => 4.7,
                'location' => 'Amazon Basin, Brazil',
                'highlights' => 'Wildlife spotting, Jungle trekking, Indigenous culture'
            ]
        ];

        foreach ($spots as $spot) {
            Spots::create($spot);
        }
    }
}
