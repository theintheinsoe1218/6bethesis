<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hotel::truncate();

        $hotels = [
            [
                'id' => 1,
                'name' => 'Hilton Mandalay', 
                'location' => 'Cnr 26 and 66th St, Chan Aye Tharza, Mandalay',
                'description' => 'Hilton Mandalay features a garden, terrace, a restaurant and bar in Fort Dufferin. This 4-star hotel offers a concierge service. The accommodation offers a 24-hour front desk, airport transfers, an ATM and free WiFi throughout the property. Mintha Theater is 200 metres from the hotel, while Mandalay Palace is 2.4 km away. The nearest airport is Mandalay International Airport, 37 km from Hilton Mandalay.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])

            ],
            [
                'id' => 2,
                'name' => 'Silver City Hotel', 
                'location' => '29th bet 71st and 72nd street ,Chan Aye Thar Zan Township, Mandalay ',
                'description' => 'Located in Fort Dufferin and with Mintha Theater reachable within 1.6 km, Silver City Hotel provides concierge services, non-smoking rooms, a restaurant, free WiFi throughout the property and a bar. This 3-star hotel offers an ATM. The accommodation offers free shuttle service, a 24-hour front desk and currency exchange for guests. Mandalay Palace is 2 km from the hotel, while Cultural Museum & Library is 2.2 km away. The nearest airport is Mandalay International Airport, 35 km from Silver City Hotel.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 3,
                'name' => 'Havana Hotel Mandalay', 
                'location' => 'Kyel Ser Kan 8th Street No. 75, Mandalay, Myanmar',
                'description' => 'Located in Fort Dufferin and with Mintha Theater reachable within 1.6 km, Silver City Hotel provides concierge services, non-smoking rooms, a restaurant, free WiFi throughout the property and a bar. This 3-star hotel offers an ATM. The accommodation offers free shuttle service, a 24-hour front desk and currency exchange for guests. Mandalay Palace is 2 km from the hotel, while Cultural Museum & Library is 2.2 km away. The nearest airport is Mandalay International Airport, 35 km from Silver City Hotel.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 4,
                'name' => 'Yadanarpon Dynasty Hotel', 
                'location' => 'No.(B/413), 65th Street, Between 27th & 28th Street, Chan Aye Tharzan Township, Mandalay. ',
                'description' => 'Set 300 metres from Mintha Theater, Yadanarpon Dynasty Hotel offers 3-star accommodation in Fort Dufferin and has a garden, a restaurant and a bar. The property is around 2.6 km from Mandalay Palace, 2.9 km from Shwenandaw Monastery and 3 km from Cultural Museum & Library. The accommodation offers a 24-hour front desk, airport transfers, an ATM and free WiFi throughout the property. The nearest airport is Mandalay International Airport, 37 km from the hotel.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 5,
                'name' => 'Hotel G-Seven', 
                'location' => ' No-58,77 street,between 34x35,Chan Aye Thar San Township, Mandalay. ',
                'description' => 'Situated 2.3 km from Mahar Thatkyarthiha Pagoda, Hotel G-Seven offers 2-star accommodation in Fort Dufferin and has a restaurant. The property is around 2.4 km from Cultural Museum & Library, 1.9 km from Sri Ganesh Temple and 2.6 km from Mandalay University. The accommodation features a 24-hour front desk, airport transfers, a concierge service and free WiFi throughout the property. The nearest airport is Mandalay International Airport, 33 km from the hotel.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 6,
                'name' => '79 Living Hotel', 
                'location' => '79th St, between 29th&30th st, Chan Aye Thar Zan Tsp, Mandalay.',
                'description' => '79 Living Hotel is a 5-minute walk from Mandalay Royal Palace. It offers air-conditioned rooms with free Wi-Fi. The hotel is equipped with a 24-hour front desk, tour desk and laundry service. Free public parking is possible in a nearby location. The hotel is a 2-minute walk from Mandalay Railway Station. It is a 45-minute drive from Mandalay International Airport. Rooms are fitted with a flat-screen cable TV, minibar and electric kettle. Shower facilities are included in an en suite bathroom. Boasting city views, the rooftop restaurant serves a variety of European, Thai and Chinese cuisines. Room service is also available.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 7,
                'name' => 'Sunset Palace View Suites', 
                'location' => 'No.417, Corner of 22nd and 66th Street, AungMyayTharZan Township, Mandalay.',
                'description' => 'Situated in Mandalay, 1.1 km from Cultural Museum & Library, Sunset Palace View Suites features accommodation with an outdoor swimming pool, free private parking, a fitness centre and a restaurant. Featuring a bar, the 4-star hotel has air-conditioned rooms with free WiFi, each with a private bathroom. The accommodation provides room service, a 24-hour front desk and organising tours for guests. At the hotel, the rooms come with a wardrobe. Rooms have a desk and a flat-screen TV, and some rooms at Sunset Palace View Suites have a terrace. The rooms will provide guests with a fridge.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 8,
                'name' => 'Dragon Phoenix Hotel', 
                'location' => 'No. 114, 31st Street, Between 79th x 80th Street, Chan Aye Thar Zan Township, Mandalay.',
                'description' => 'Set in Mandalay, less than 1 km from Sri Ganesh Temple, Dragon Phoenix Hotel offers accommodation with a shared lounge, free private parking, a restaurant and a bar. This 3-star hotel offers room service, a 24-hour front desk and free WiFi. Guests can enjoy city views. All guest rooms at the hotel come with air conditioning, a seating area, a flat-screen TV with cable channels, a safety deposit box and a private bathroom with a shower, free toiletries and a hairdryer. At Dragon Phoenix Hotel all rooms have bed linen and towels.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 9,
                'name' => 'Ostello Bello Mandalay', 
                'location' => '28th street 73-74, Mandalay.',
                'description' => 'Set 500 metre from The Mandalay Palace, Ostello Bello Mandalay features a bar and restaurant. Guests can enjoy the music at the rooftop. Free WiFi is offered throughout the property. All rooms include a shared internal bathroom fitted with shower facilities. A flat-screen TV is available in the private rooms. There are also coffee/tea, board games and books. Trip excursions can be arranged at the tour desk. Laundry services are also available.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 10,
                'name' => 'Ease Hotel', 
                'location' => '30th Street, Between 64th & 65th Street,Chan Aye Thar San Township, Mandalay',
                'description' => 'Located in Mandalay, 400 metres from Mintha Theater, Ease Hotel provides accommodation with a garden, free private parking, a terrace and a restaurant. With free WiFi, this 4-star hotel offers room service and a 24-hour front desk. Guests can have a drink at the bar. The hotel will provide guests with air-conditioned rooms with a desk, a kettle, a fridge, a minibar, a safety deposit box, a flat-screen TV and a private bathroom with a shower. At Ease Hotel every room comes with bed linen and towels.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 11,
                'name' => 'Hotel Apex', 
                'location' => '35th Street, Between: 58th & 59th Streets, Chan Aye Thar Zan Twonship, Mandalay,',
                'description' => 'Set in Mandalay, 2.7 km from Mintha Theater, Hotel Apex offers accommodation with free bikes, free private parking, a fitness centre and a restaurant. With free WiFi, this 4-star hotel offers room service and a 24-hour front desk. The accommodation provides an ATM, a business centre and currency exchange for guests. All guest rooms at the hotel come with air conditioning, a seating area, a flat-screen TV with satellite channels, a safety deposit box and a private bathroom with a shower, free toiletries and a hairdryer. Hotel Apex features some units with city views, and all rooms come with a kettle. At the accommodation the rooms are equipped with bed linen and towels.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 12,
                'name' => 'Kaung Myint Hotel', 
                'location' => 'No.502, 80 Road, Between 30 & 31 Street, Mandalay',
                'description' => "Kaung Myint Hotel is set in Mandalay's China Town area, a short walk from Mandalay Railway Station. Guests can enjoy the on-site restaurant. Free private parking is available on site. Every room at this hotel is air conditioned and is fitted with a flat-screen TV. Some units have a seating area where you can relax. You will find a kettle in the room. Each room includes a private bathroom fitted with a shower. For your comfort, you will find slippers, free toiletries and a hair dryer. The hotel features free WiFi. There is a 24-hour front desk at the property.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 13,
                'name' => 'Holiday Pier Hotel', 
                'location' => 'Kywel Sel Kan (2)st, 78th Main Road, Pyi Gyi Ta Gon Tsp., Mandalay',
                'description' => 'Situated in Mandalay, 1 km from Mandalay University, Holiday Pier Hotel features accommodation with an outdoor swimming pool, free private parking, a restaurant and a bar. This 3-star hotel offers room service and a 24-hour front desk. Guests can enjoy city views. The rooms in the hotel are fitted with a flat-screen TV with satellite channels. At Holiday Pier Hotel, rooms are fitted with air conditioning and a private bathroom. Guests at the accommodation can enjoy a buffet breakfast.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 14,
                'name' => 'The Hotel Nova', 
                'location' => 'No.76, West Aung Nan Ward, 32nd Street, Bet 85th x 86th Street Chan Aye Tharzan Township, Mandalay,',
                'description' => 'Located in Mandalay, 500 metres from Mahar Thatkyarthiha Pagoda, The Hotel Nova provides accommodation with free bikes, free private parking, a shared lounge and a restaurant. This 3-star hotel offers a business centre and babysitting service. The accommodation offers a 24-hour front desk, airport transfers, room service and free WiFi throughout the property. At the hotel each room includes air conditioning, a seating area, a flat-screen TV with satellite channels, a safety deposit box and a private bathroom with a shower, free toiletries and a hairdryer. The Hotel Nova features certain rooms with mountain views, and every room is equipped with a kettle. At the accommodation all rooms come with bed linen and towels.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 15,
                'name' => 'The Hotel by the Red Canal', 
                'location' => '417 Corner of 63rd & 22nd Streets, Mandalay',
                'description' => 'The Hotel by the Red Canal is a 5-minute drive from Mandalay Palace. It offers room with free WiFi. The hotel features a spa, pool and fitness centre. Free public parking is possible in a location nearby. The hotel is a 15-minute drive to Mandalay Hill, city centre and Zegyo Market. Rooms are fitted with a satellite TV, minibar and an electric kettle. Featuring a shower, private bathrooms also come with a bath and a hairdryer. Some rooms have a pool view and a garden view. The hotel has a 24-hour front desk and tour desk. Other services include laundry and car rental. The property also provides free coffee/tea as well as tasty snack from 14:30 to 17:30 hrs every day.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 16,
                'name' => 'The Home Hotel', 
                'location' => '82nd Street, between 32nd & 33rd Street, Chan Aye Tharzan Township, Mandalay',
                'description' => 'Situated in Mandalay, 1.1 km from Mahar Thatkyarthiha Pagoda, The Home Hotel features a bar and views of the city. With free WiFi, this 3-star hotel offers room service and an ATM. The accommodation features a concierge service, a tour desk and currency exchange for guests. The hotel will provide guests with air-conditioned rooms offering a desk, a coffee machine, a fridge, a minibar, a safety deposit box, a flat-screen TV and a private bathroom with a bidet. At The Home Hotel rooms have bed linen and towels. Free private parking and a business centre are available, as well as a 24-hour front desk.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 17,
                'name' => 'Royal Pearl Hotel', 
                'location' => 'No. 196, 29th Street, Between 80th and 81st Street, Chan Aye Thar Zan Township, Mandalay',
                'description' => 'Offering rooms with air conditioning, Royal Pearl Hotel is just a 5-minute walk from Mandalay Railway Station. Free WiFi access is available in all areas. Each room here will provide you with a flat-screen cable/satellite TV, an electric kettle and a seating area. Featuring a shower, private bathroom also comes with free toiletries and slippers. At Royal Pearl Hotel you will find a 24-hour front desk and a garden. Other facilities offered include a ticket service and luggage storage. An array of activities can be enjoyed on site or in the surroundings, including cycling. The property is a 10-minute walk from Mandalay Palace. Mandalay International Airport is 32 km away. On-site parking is possible.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 18,
                'name' => 'Mandalay Lodge Hotel', 
                'location' => '58th Street, Between 22nd and 23rd Street ,Aung Myay Thar Zan , Mandalay,',
                'description' => 'Set in Mandalay, 1.9 km from Mintha Theater, Mandalay Lodge Hotel offers accommodation with an outdoor swimming pool, free private parking, a fitness centre and a garden. Featuring a terrace, the 4-star hotel has air-conditioned rooms with free WiFi, each with a private bathroom. Guests can enjoy American and Chinese dishes at the restaurant or have a cocktail at the bar. The units at the hotel come with a seating area and a flat-screen TV with satellite channels. At Mandalay Lodge Hotel all rooms come with bed linen and towels. Breakfast is available every morning, and includes buffet, à la carte and continental options.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 19,
                'name' => 'Shwe Ingyinn Hotel Mandalay', 
                'location' => 'Corner of 30th St &78 St, Mandalay',
                'description' => 'Shwe Inngyinn Hotel Mandalay is a short walk from Central Railway Station. It offers air-conditioned rooms with free Wi-Fi and free public parking. The hotel has a fitness centre and tour desk. The hotel is a 10-minute drive from the centre of Mandalay and a 45-minute drive from Mandalay Airport. Rooms are fitted with a satellite TV, minibar and electric kettle. They also have a safety deposit box. Featuring a shower, private bathrooms also come with towels. Staff at the 24-hour front desk can assist guests with laundry service.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 20,
                'name' => 'Mingalar Mandalay Hotel', 
                'location' => 'Tsp, 73rd Street Between Tha Zin &, Ngu Shwe Wah St, Mandalay',
                'description' => "Set on a tree-lined avenue, this upscale hotel is 3 km from the Mahamuni Buddhist Temple and 7 km from the Mandalay Palace. Mandalay railway station is 5 km away. Refined rooms have Wi-Fi, TVs and minibars, plus tea and coffeemaking facilities. Upgraded rooms add soaking tubs, while suites feature living areas. Room service is available. There's a stylish restaurant, a Chinese eatery and a cafe/bar, as well as an outdoor pool with a poolside bar. Other amenities include a spa and a gym offering fitness classes. Breakfast and parking are provided",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 21,
                'name' => 'Hotel New Wave Mandalay', 
                'location' => '80 Street, Between 26&27 Streets, Mandalay',
                'description' => "In the lively, central Chanayethazan district, this relaxed hotel is an 11-minute walk from the long-standing Zay Cho Market, 1 km from Mandalay train station and 2 km from the 18th-century Mandalay Palace. Featuring teak floors, the understated, warmly decorated rooms have flat-screen TVs, Wi-Fi and minibars, plus tea and coffeemaking facilities. Suites add sitting areas or living rooms. There's 24-hour room service. A casual rooftop restaurant/bar offers palace views. A breakfast buffet and parking are available.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 22,
                'name' => 'Grand Park Hotel', 
                'location' => 'No.348, 84th Street, Bet: 39th & 40th Street,, Western Mandalay, Mandalay,',
                'description' => 'Set in an area with shops and casual eateries, this informal high-rise hotel is 1 km from Mahamuni Buddhist Temple, 2 km from Mandalay Railway Station and 3 km from the restored Mandalay Palace. Bright rooms have TVs. Some come with sitting areas. Suites add living spaces. Amenities include a gym and a rooftop bar, plus an open-air pool featuring sweeping city views. A grand ballroom can accommodate up to 2,500 guests. Breakfast is available.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 23,
                'name' => 'Hotel Sahara', 
                'location' => 'No.414/A, 80th Street Between 26th & 27th Street, Chan Aye Thar Zan Township, Central Mandalay, Mandalay,',
                'description' => "A 12-minute walk from Mandalay railway station, this informal hotel in a commercial area is 2 km from Mandalay Palace and 4 km from Mahamuni Buddha Temple. The straightforward rooms come with flat-screen TVs, minifridges and air-conditioning, in addition to free Wi-Fi. A mixed-gender dorm offers wooden bunk beds. All rooms have private bathrooms. Breakfast is complimentary, as is parking. There's a restaurant. An airport shuttle is available (fee).",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 24,
                'name' => 'The Link 78 Mandalay Boutique Hotel', 
                'location' => 'No. 627, Corner of 78th & 31st Street, Infront of Railway Station, Kitsanamahi Ward, Chan Aye Thar Zan Township, Central Mandalay, Mandalay',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Strategically situated in Central Mandalay, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Mandalay Hill. Rated with 4 stars, this high-quality property provides guests with access to massage, spa and sauna on-site.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 25,
                'name' => 'Golden Country Hotel', 
                'location' => '65th St, Between 31st & 32nd St, Mandalay',
                'description' => 'Set on a leafy residential street, this relaxed hotel is 3 km from Mandalay Palace, 4 km from Shwenandaw Monastery and 7 km from Mandalay Chanmyathazi Airport. Warm rooms feature Wi-Fi, flat-screen TVs and minifridges, as well as sitting areas, windows with city views, and tea and coffeemaking equipment. Family rooms sleep up to 3 guests. In-room dining is available. Amenities include an outdoor pool with sunloungers, and a casual restaurant. There’s also meeting and event space for up to 500 people. Breakfast is available.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 26,
                'name' => 'Hotel The Haven', 
                'location' => '24thstreet, between 58th and, 60th St, Mandalay',
                'description' => "Across a leafy street from Yae Sit Kan Reservoir, this informal hotel is 4 km from Mandalay train station and 5 km from Zegyo Market. The relaxed, airy rooms feature free Wi-Fi and flat-screen TVs, and minifridges, and tea and coffeemaking facilities. Family rooms with lofts sleep up to 3 people. Upgraded rooms add balconies or terraces. Room service is available. There’s a rooftop infinity pool and a poolside bar. Bike rentals are offered.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 27,
                'name' => 'Hotel Yadanarbon', 
                'location' => 'No.125, 31st, Between 76th & 77th St, Chan Aye Thar Zan Township, Mandalay,, Myanmar., 31st Street, Mandalay',
                'description' => 'A 5-minute walk from Mandalay Railway Station, this relaxed hotel close to restaurants is 3 km from Mandalay Palace, a former royal residence dating from 1857, and 5 km from the giant Buddha at the Sandamuni Pagoda. Unpretentious rooms provide minibars, tea and coffeemaking facilities, and Wi-Fi, as well as flat-screen TVs. Polished suites add separate living rooms. Room service is available.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 28,
                'name' => 'Hotel Magic Mandalay', 
                'location' => 'Corner of 65th Street & Padauk Street, Myothit, Chan Mya Tharsi Township, Mandalay,',
                'description' => 'Amid shops and restaurants, this modern hotel is 4 km from both the Mahamuni Buddha Temple and Mandalay Chanmyathazi Airport, and 6 km from Mandalay Palace. Colorful, straightforward rooms provide flat-screen TVs, minifridges and safes, in addition to tea and coffeemaking facilities. Suites add separate living rooms and balconies. Family suites offer 2 bedrooms. Room service is available. A breakfast buffet is available. Other amenities include a relaxed rooftop restaurant/bar and a gym, as well as a spa and an outdoor pool.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 29,
                'name' => 'Mercure Mandalay Hill Resort', 
                'location' => 'At The Foot Of Mandalay Hill, 416 B, 10th St, Mandalay',
                'description' => 'Set at the foot of Mandalay Hill, this sleek luxury hotel is 2 km from the 19th-century Shwenandaw Monastery and 3 km from Mandalay Palace. Elegant rooms with wooden floors offer free Wi-Fi, flat-screen TVs, minibars, and tea and coffeemaking equipment. All have palace or Mandalay Hill views. Upgraded rooms add access to an executive lounge. Suites and villas add plush living and dining areas; some have balconies. Room service is available',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            // [
            //     'id' => 30,
            //     'name' => '', 
            //     'location' => '',
            //     'description' => '',
            //     'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            // ],
            // [
            //     'id' => 24,
            //     'name' => '', 
            //     'location' => '',
            //     'description' => '',
            //     'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            // ],
            // [
            //     'id' => 24,
            //     'name' => '', 
            //     'location' => '',
            //     'description' => '',
            //     'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            // ],
            // [
            //     'id' => 24,
            //     'name' => '', 
            //     'location' => '',
            //     'description' => '',
            //     'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            // ],
            // [
            //     'id' => 24,
            //     'name' => '', 
            //     'location' => '',
            //     'description' => '',
            //     'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            // ],
            // [
            //     'id' => 24,
            //     'name' => '', 
            //     'location' => '',
            //     'description' => '',
            //     'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            // ],
            // [
            //     'id' => 24,
            //     'name' => '', 
            //     'location' => '',
            //     'description' => '',
            //     'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            // ],
            // [
            //     'id' => 24,
            //     'name' => '', 
            //     'location' => '',
            //     'description' => '',
            //     'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            // ],
            // [
            //     'id' => 24,
            //     'name' => '', 
            //     'location' => '',
            //     'description' => '',
            //     'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            // ],
            // [
            //     'id' => 24,
            //     'name' => '', 
            //     'location' => '',
            //     'description' => '',
            //     'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            // ],
            // [
            //     'id' => 24,
            //     'name' => '', 
            //     'location' => '',
            //     'description' => '',
            //     'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            // ],

        ];

        foreach ($hotels as $hotel) {
            Hotel::create($hotel);
        }
    }
}
