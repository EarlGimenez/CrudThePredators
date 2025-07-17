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

        // Seed 20 tourism spots
        $spots = [
            [
                'name' => 'Boracay White Beach',
                'country' => 'Philippines',
                'month' => 'December',
                'description' => 'Famous white sand beach with crystal clear waters and vibrant nightlife.',
                'image_url' => 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.8,
                'location' => 'Aklan, Philippines',
                'highlights' => 'Water sports, Beach parties, Sunset sailing'
            ],
            [
                'name' => 'Palawan Underground River',
                'country' => 'Philippines',
                'month' => 'March',
                'description' => 'UNESCO World Heritage site featuring an underground river through limestone karst.',
                'image_url' => "https://whc.unesco.org/uploads/thumbs/site_0652_0001-1000-665-20151105151728.jpg",
                'rating' => 4.9,
                'location' => 'Puerto Princesa, Palawan',
                'highlights' => 'Cave exploration, Wildlife viewing, Boat tours'
            ],
            [
                'name' => 'Bali Rice Terraces',
                'country' => 'Indonesia',
                'month' => 'June',
                'description' => 'Stunning ancient rice terraces carved into volcanic hillsides.',
                'image_url' => 'https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.7,
                'location' => 'Jatiluwih, Bali',
                'highlights' => 'Photography, Cultural tours, Traditional villages'
            ],
            [
                'name' => 'Machu Picchu',
                'country' => 'Peru',
                'month' => 'May',
                'description' => 'Ancient Incan citadel perched high in the Andes Mountains.',
                'image_url' => 'https://images.unsplash.com/photo-1587595431973-160d0d94add1?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.9,
                'location' => 'Cusco Region, Peru',
                'highlights' => 'Hiking, History, Mountain views'
            ],
            [
                'name' => 'Santorini Sunset',
                'country' => 'Greece',
                'month' => 'September',
                'description' => 'Iconic whitewashed buildings overlooking the Aegean Sea with spectacular sunsets.',
                'image_url' => 'https://images.unsplash.com/photo-1613395877344-13d4a8e0d49e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.8,
                'location' => 'Cyclades, Greece',
                'highlights' => 'Sunset views, Wine tasting, Beach clubs'
            ],
            [
                'name' => 'Maldives Overwater Bungalows',
                'country' => 'Maldives',
                'month' => 'February',
                'description' => 'Luxury overwater villas in pristine turquoise lagoons.',
                'image_url' => 'https://images.unsplash.com/photo-1514282401047-d79a71a590e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.9,
                'location' => 'Various Atolls, Maldives',
                'highlights' => 'Snorkeling, Spa treatments, Private beaches'
            ],
            [
                'name' => 'Great Wall of China',
                'country' => 'China',
                'month' => 'October',
                'description' => 'Ancient fortification stretching thousands of kilometers across northern China.',
                'image_url' => 'https://images.unsplash.com/photo-1508804185872-d7badad00f7d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.6,
                'location' => 'Beijing, China',
                'highlights' => 'Historical significance, Hiking, Photography'
            ],
            [
                'name' => 'Aurora Borealis Iceland',
                'country' => 'Iceland',
                'month' => 'January',
                'description' => 'Spectacular northern lights dancing across the Arctic sky.',
                'image_url' => 'https://images.unsplash.com/photo-1483347756197-71ef80e95f73?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.8,
                'location' => 'Reykjavik, Iceland',
                'highlights' => 'Northern lights, Hot springs, Glacier tours'
            ],
            [
                'name' => 'Safari Serengeti',
                'country' => 'Tanzania',
                'month' => 'August',
                'description' => 'World-famous wildlife reserve with the Great Migration.',
                'image_url' => 'https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.9,
                'location' => 'Northern Tanzania',
                'highlights' => 'Wildlife viewing, Great migration, Balloon safaris'
            ],
            [
                'name' => 'Cherry Blossoms Tokyo',
                'country' => 'Japan',
                'month' => 'April',
                'description' => 'Beautiful cherry blossom season in Japan\'s bustling capital.',
                'image_url' => 'https://images.unsplash.com/photo-1522383225653-ed111181a951?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.7,
                'location' => 'Tokyo, Japan',
                'highlights' => 'Hanami festivals, Traditional gardens, City culture'
            ],
            [
                'name' => 'Banff National Park',
                'country' => 'Canada',
                'month' => 'July',
                'description' => 'Pristine mountain wilderness with turquoise lakes and glacial peaks.',
                'image_url' => 'https://images.unsplash.com/photo-1441974231531-c6227db76b6e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.8,
                'location' => 'Alberta, Canada',
                'highlights' => 'Hiking, Canoeing, Mountain climbing'
            ],
            [
                'name' => 'Petra Jordan',
                'country' => 'Jordan',
                'month' => 'November',
                'description' => 'Ancient city carved into rose-colored sandstone cliffs.',
                'image_url' => 'https://images.unsplash.com/photo-1539650116574-75c0c6d73469?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.7,
                'location' => 'Ma\'an Governorate, Jordan',
                'highlights' => 'Archaeological sites, Desert landscapes, Historical tours'
            ],
            [
                'name' => 'Table Mountain Cape Town',
                'country' => 'South Africa',
                'month' => 'February',
                'description' => 'Iconic flat-topped mountain overlooking Cape Town and the Atlantic Ocean.',
                'image_url' => 'https://images.unsplash.com/photo-1580060839134-75a5edca2e99?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.6,
                'location' => 'Cape Town, South Africa',
                'highlights' => 'Cable car rides, Hiking trails, Ocean views'
            ],
            [
                'name' => 'Angkor Wat',
                'country' => 'Cambodia',
                'month' => 'December',
                'description' => 'Magnificent ancient temple complex and archaeological wonder.',
                'image_url' => 'https://images.unsplash.com/photo-1539016662988-1de819d6a4e6?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.8,
                'location' => 'Siem Reap, Cambodia',
                'highlights' => 'Temple exploration, Sunrise views, Historical significance'
            ],
            [
                'name' => 'Galapagos Islands',
                'country' => 'Ecuador',
                'month' => 'June',
                'description' => 'Unique volcanic islands with endemic wildlife and pristine nature.',
                'image_url' => 'https://images.unsplash.com/photo-1544551763-77ef2d0cfc6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.9,
                'location' => 'Galapagos Province, Ecuador',
                'highlights' => 'Wildlife photography, Snorkeling, Scientific tours'
            ],
            [
                'name' => 'Norwegian Fjords',
                'country' => 'Norway',
                'month' => 'June',
                'description' => 'Dramatic fjords with cascading waterfalls and steep mountain walls.',
                'image_url' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.7,
                'location' => 'Western Norway',
                'highlights' => 'Cruise tours, Waterfall viewing, Mountain hiking'
            ],
            [
                'name' => 'Taj Mahal',
                'country' => 'India',
                'month' => 'October',
                'description' => 'Stunning white marble mausoleum and symbol of eternal love.',
                'image_url' => 'https://images.unsplash.com/photo-1564507592333-c60657eea523?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.6,
                'location' => 'Agra, India',
                'highlights' => 'Architecture, Photography, Historical significance'
            ],
            [
                'name' => 'Easter Island',
                'country' => 'Chile',
                'month' => 'March',
                'description' => 'Remote island famous for mysterious giant stone statues called Moai.',
                'image_url' => 'https://images.unsplash.com/photo-1581833971358-2c8b550f87b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.5,
                'location' => 'Rapa Nui, Chile',
                'highlights' => 'Moai statues, Polynesian culture, Archaeological sites'
            ],
            [
                'name' => 'Victoria Falls',
                'country' => 'Zambia',
                'month' => 'May',
                'description' => 'One of the world\'s largest waterfalls known as "The Smoke that Thunders".',
                'image_url' => 'https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                'rating' => 4.8,
                'location' => 'Livingstone, Zambia',
                'highlights' => 'Waterfall viewing, Bungee jumping, River cruises'
            ],
            [
                'name' => 'Amazon Rainforest',
                'country' => 'Brazil',
                'month' => 'September',
                'description' => 'World\'s largest tropical rainforest with incredible biodiversity.',
                'image_url' => 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
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