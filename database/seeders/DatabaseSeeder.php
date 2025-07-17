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
                'image_url' => 'https://boracayinformer.com/wp-content/uploads/2024/10/inbound8053735243835763425-1080x560.jpg',
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
                'image_url' => 'https://media.cntraveler.com/photos/5e35bdf00e2bfd0008a03691/16:9/w_2240,c_limit/Tegallalang-GettyImages-515480864.jpg',
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
                'image_url' => 'https://res.cloudinary.com/icelandtours/g_auto,f_auto,c_fill,w_2048,q_auto:good/northern_lights_above_glacier_lagoon_v2osk_unsplash_7d39ca647f.jpg',
                'rating' => 4.8,
                'location' => 'Reykjavik, Iceland',
                'highlights' => 'Northern lights, Hot springs, Glacier tours'
            ],
            [
                'name' => 'Safari Serengeti',
                'country' => 'Tanzania',
                'month' => 'August',
                'description' => 'World-famous wildlife reserve with the Great Migration.',
                'image_url' => 'https://www.safariventures.com/wp-content/uploads/Untitled-design-1-1.png',
                'rating' => 4.9,
                'location' => 'Northern Tanzania',
                'highlights' => 'Wildlife viewing, Great migration, Balloon safaris'
            ],
            [
                'name' => 'Cherry Blossoms Tokyo',
                'country' => 'Japan',
                'month' => 'April',
                'description' => 'Beautiful cherry blossom season in Japan\'s bustling capital.',
                'image_url' => 'https://hips.hearstapps.com/hmg-prod/images/fuji-and-sakura-royalty-free-image-144483163-1562593125.jpg',
                'rating' => 4.7,
                'location' => 'Tokyo, Japan',
                'highlights' => 'Hanami festivals, Traditional gardens, City culture'
            ],
            [
                'name' => 'Banff National Park',
                'country' => 'Canada',
                'month' => 'July',
                'description' => 'Pristine mountain wilderness with turquoise lakes and glacial peaks.',
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/c/c5/Moraine_Lake_17092005.jpg',
                'rating' => 4.8,
                'location' => 'Alberta, Canada',
                'highlights' => 'Hiking, Canoeing, Mountain climbing'
            ],
            [
                'name' => 'Petra Jordan',
                'country' => 'Jordan',
                'month' => 'November',
                'description' => 'Ancient city carved into rose-colored sandstone cliffs.',
                'image_url' => 'https://theworldtravelguy.com/wp-content/uploads/2019/06/DSCF5609.jpg',
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
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/20171126_Angkor_Wat_4712_DxO.jpg/2880px-20171126_Angkor_Wat_4712_DxO.jpg',
                'rating' => 4.8,
                'location' => 'Siem Reap, Cambodia',
                'highlights' => 'Temple exploration, Sunrise views, Historical significance'
            ],
            [
                'name' => 'Galapagos Islands',
                'country' => 'Ecuador',
                'month' => 'June',
                'description' => 'Unique volcanic islands with endemic wildlife and pristine nature.',
                'image_url' => 'https://res.cloudinary.com/enchanting/q_30,f_auto,c_mfit,w_1400,h_1400/tcs-web/2023/11/shutterstock_1309505530.jpg',
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
                'image_url' => 'https://magazine.columbia.edu/sites/default/files/styles/wysiwyg_full_width_image/public/2024-08/Exp_easter-island.jpg?itok=mO1e5TJJ',
                'rating' => 4.5,
                'location' => 'Rapa Nui, Chile',
                'highlights' => 'Moai statues, Polynesian culture, Archaeological sites'
            ],
            [
                'name' => 'Victoria Falls',
                'country' => 'Zambia',
                'month' => 'May',
                'description' => 'One of the world\'s largest waterfalls known as "The Smoke that Thunders".',
                'image_url' => 'https://cdn.shortpixel.ai/spai/q_glossy+ret_img+to_auto/www.discoverafrica.com/wp-content/uploads/2016/03/GettyImages-1081365424-1920x1080.jpg',
                'rating' => 4.8,
                'location' => 'Livingstone, Zambia',
                'highlights' => 'Waterfall viewing, Bungee jumping, River cruises'
            ],
            [
                'name' => 'Amazon Rainforest',
                'country' => 'Brazil',
                'month' => 'September',
                'description' => 'World\'s largest tropical rainforest with incredible biodiversity.',
                'image_url' => 'https://images.nationalgeographic.org/image/upload/t_edhub_resource_key_image/v1638890315/EducationHub/photos/amazon-river-basin.jpg',
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