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
            [
                'id' => 30,
                'name' => 'Ritz Grand Hotel', 
                'location' => '42nd Street,Between 60th , 62th Street, Southern Mandalay, Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Southern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Rated with 3.5 stars, this high-quality property provides guests with access to massage, restaurant and fitness center on-site.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 31,
                'name' => 'Mandalay City Hotel', 
                'location' => '26th Street, Between 82nd & 83rd Chan Aye Thar Zan Township, Mandalay',
                'description' => 'This unpretentious hotel is 3 km from Mandalay Palace, and 6 km from both Shwenandaw Monastery and Kuthodaw Pagoda. Modest rooms provide Wi-Fi access, flat-screen TVs and minibars, as well as air-conditioning, safes, and tea and coffeemaking equipment. Suites add separate living areas and free-standing tubs. Room service is available. Breakfast is available. Other amenities include a restaurant, an outdoor pool and meeting space.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 32,
                'name' => 'Mandalay Swan Hotel', 
                'location' => 'No. 44(B) 26th , Bet 66th & 68th Street, Chan Aye Thar San Tsp, Mandalay',
                'description' => "Across from the gates of the Mandalay Royal Palace complex, this laid-back hotel with 2 hectares of gardens is 3 km from both the Mandalay Railway Station and Kuthodaw Pagoda, a Buddhist stupa with the world's largest book. The unfussy rooms offer TVs, minibars and sitting areas, plus en suite, shower-only bathrooms. Room service is available. The 4 dining options include a casual international restaurant, and a bar/lounge with regular live music and a pool table. Other amenities consist of an outdoor pool, a tennis court and sunloungers, plus a business centre, a gym and a lounge.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 33,
                'name' => 'Paragon Hotel', 
                'location' => '65th x 66th St & Ngu Shwe Wah & Khaing Shwe Wah, near Mandalar Thiri, football stadium ocean super centres, Mandalay',
                'description' => 'This informal hotel is 5 km from the ornate Mahamuni Buddha Temple, 7 km from the 19th-century Mandalay Palace complex and 6 km from Mandalay railway station. The unfussy rooms come with en suite bathrooms, flat-screen TVs and minibars, as well as safes, tea and coffeemaking facilities, and Wi-Fi. Upgraded rooms add balconies and/or corner baths. Amenities include a bar, an outdoor pool and a spa. A breakfast buffet and bike rentals are available.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 34,
                'name' => 'Wilson Hotel', 
                'location' => 'No.31 (E), 78th Street (Yangon-Mandalay Main Road Maha Aung Myay Township, ၇၈ လမ်း, Mandalay',
                'description' => 'Set along Route 1, this relaxed hotel is 5 km from the Mandalay Palace and 8 km from Kuthodaw Pagoda. The Mandalay Chanmyathazi Airport is 2 km away. Colorful rooms with wood floors or quirky tiling, provide free Wi-Fi and flat-screen TVs, as well as minifridges, and tea and coffeemaking facilities. Some come with separate living areas. Room service is available 24/7. Amenities include a bar, BBQ facilities and a casual buffet-style restaurant with panoramic views, along with spa, an outdoor gym and a rooftop deck with a pool. Rental bikes and airport transfers are offered for a fee. Parking is available.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 35,
                'name' => 'Triumph Hotel Mandalay', 
                'location' => 'No. (1), 26th (B) Road, Between ; 55th & 56th Street, Aung Myay Tharzan, Township, Mandalay',
                'description' => "Off Highway 3, this down-to-earth hotel set amid gardens is 3 km from Shwenandaw Monastery and 7 km from the scenic Mandalay Hill. Laid-back rooms offer Wi-Fi, flat-screen TVs, and tea and coffeemaking equipment, plus in-room safes and en suite, shower-only bathrooms. Upgraded quarters add teak furnishings, lounge areas and baths. Suites sleep up to 3 guests. All have garden views and minifridges. There's a breakfast buffet. Other amenities include an outdoor pool, a restaurant and conference facilities, plus a gym. Massage services are offered, and parking is available.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 36,
                'name' => 'Shwe Ye Mon Hotel', 
                'location' => '53rd street, between:38th & 39th street, Mahar Aung Myae Tsp, Mandalay',
                'description' => 'In a residential district, this informal hotel is 7 km from the Mahamuni Buddha Temple, 8 km from Zay Cho Market and 2 km from Aung Pin Le railway station. Understated rooms provide flat-screen TVs, Wi-Fi and minifridges, in addition to safes, and tea and coffeemaking facilities. Upgraded rooms add sitting areas. Room service is available 24/7. Amenities include an outdoor pool with bar service, plus a gym and a restaurant. Parking and bike rentals are available.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 37,
                'name' => 'Hotel 78', 
                'location' => 'No.902, Corner of 78th Street and Theik Pan Street, Chan Mya Tharsi Township, Southern Mandalay, Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Southern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Rated with 3 stars, this high-quality property provides guests with access to massage, restaurant and spa on-site.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 38,
                'name' => 'Hotel Shwe Pyi Thar', 
                'location' => 'N0.B-8, Pyin Oo Lwin Road,, Between 31st & 32nd Street, Chan Aye Thar Zan Townshi, Mandalay',
                'description' => "Flanked by greenery, this upscale hotel is 7 km from Shwenandaw Monastery, 8 km from Mandalay Palace and 6 km from Mandalay train station. Airy, polished rooms feature traditional carved wood furniture, TVs, and en suite bathrooms with soaking tubs. Suites add separate living rooms, wood-panelling and ornate decor. Upgraded suites add terraces, whirlpool tubs and/or dining rooms with kitchenettes. Room service is available. There's a restaurant and a posh cafe/bar. A breakfast buffet is available. Other amenities include an outdoor pool, a spa and a gym, as well as Wi-Fi and shops.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 39,
                'name' => 'Aung Myint Mo Hotel', 
                'location' => 'Corner of Yangon-Mandalay Road & Chan Mya Shwe Pyi Base Compound Street, Kywesekan, Southern Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Southern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. As an added bonus, restaurant is provided on-site to conveniently serve your needs.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 40,
                'name' => 'Grand Central Hotel', 
                'location' => '30th Street, Between 76th & 77th Street, Chan Aye Thar Zan Township, Central Mandalay, Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Strategically situated in Central Mandalay, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Mandalay Hill. This 3-star property features restaurant to make your stay more indulgent and memorable.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 41,
                'name' => 'Ibis Styles Hotel Mandalay', 
                'location' => '151 Corner Of 35 And 54 Streets Chan Aye Thar San Township, Eastern Mandalay, Mandalay,',
                'description' => "Conveniently situated in the Eastern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Rated with 4 stars, this high-quality property provides guests with access to restaurant, fitness center and indoor pool on-site.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 42,
                'name' => 'Gold Leaf Hotel Mandalay', 
                'location' => '36th Street, Between 77th &, 78th St, Mandalay',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Southern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Rated with 3 stars, this high-quality property provides guests with access to massage, restaurant and spa on-site.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 43,
                'name' => 'Shwe Phyu Hotel', 
                'location' => 'No.3(10), 64th St, Mandalay',
                'description' => "Set in a bright corner building, this straightforward hotel is 4 km Mandalay Chanmyathazi Airport and 6 km from Kuthodaw Pagoda. Mandalay Hill is 8 km away. Low-key rooms have Wi-Fi access, flat-screen TVs and minifridges, plus tea and coffeemaking facilities. Airy suites add separate living areas with city views. A breakfast buffet is included. There’s a casual restaurant, an outdoor pool and sunloungers. Other amenities consist of a meeting room and airport transportation.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 44,
                'name' => 'Sunrise Hotel', 
                'location' => 'No.195, 35th Street Between 77th & 78th Street, Central Mandalay, Mandalay,',
                'description' => 'Conveniently situated in the Central Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. This 3-star property is packed with in-house facilities to improve the quality and joy of your stay.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 45,
                'name' => 'Shwe Htee Hotel', 
                'location' => 'No. 1234, Jasmin street, Between 60th & 62nd, Near Nursing University, Mandalay',
                'description' => 'Next to a hospital, this low-key budget hotel is 5 km from the Mahamuni Buddha Temple, 6 km from Mandalay Chanmyathazi Airport and 8 km from Mandalay Palace. The understated rooms come with Wi-Fi and flat-screen TVs, plus tea and coffeemaking facilities. Upgraded rooms add wet bars, minifridges and microwaves; suites feature living rooms. Room service is available. A breakfast buffet is available. Other amenities include a bar and a gym.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 46,
                'name' => 'Moon Light Hotel', 
                'location' => '79 Road, Between 27*28 Street, Chanayetharzan Township, Mandalay',
                'description' => "In an area filled with shopping and dining options, this understated hotel is 3 km from the 19th-century Mandalay Palace and a 9-minute walk from Mandalay train station. The relaxed rooms come with flat-screen TVs, as well as minifridges, and tea and coffeemaking facilities. Amenities include an informal dining room, and a furnished rooftop terrace offering city views.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 47,
                'name' => 'Hotel Homey Mandalay', 
                'location' => '64th Street, Between 27th and 28th Street Mandalay,',
                'description' => "In an area filled with cafes and restaurants, this informal hotel on a tree-lined street is 3 km from both Mandalay railway station and the 19th-century Mandalay Palace. It's 4 km from the Kuthodaw Pagoda Buddhist temple and pilgrimage site. Featuring wood floors and furnishings, the unfussy rooms provide Wi-Fi and flat-screen TVs, plus safes, minifridges, and tea and coffeemaking facilities. Family rooms sleep up to 3 people. Room service is available. Amenities include a rooftop terrace with city views, as well as parking and a breakfast buffet.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 48,
                'name' => 'Golden Mandalay Hotel', 
                'location' => 'No.78/Nga, Corner of 19th and 60th Street Nan Shae, AungMyayTharZan Township, Northern Mandalay,',
                'description' => "Get your trip off to a great start with a stay at this property, which offers car park free of charge. Conveniently situated in the Northern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 49,
                'name' => 'Royal Yadanarbon Hotel', 
                'location' => '89 Road, Between 22&23, Pinya St, Mandalay',
                'description' => 'In a commercial area a 3-minute walk from the nearest bus stop, this relaxed hotel is 3 km from the 19th-century Mandalay Palace and 5 km from the Mahamuni Buddha Temple pilgrimage site. Straightforward rooms provide free Wi-Fi and flat-screen TVs, along with sitting areas, desks and minifridges. Mixed-sex dorms include bamboo bunk beds. Room service is available. Loaner bikes are complimentary. A relaxed lobby lounge features tile floors and intricately carved furniture.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 51,
                'name' => 'Hotel Duo Swan', 
                'location' => '37th Street, Between 66th & 67th Streets, Mandalay',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Eastern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. As an added bonus, restaurant is provided on-site to conveniently serve your needs.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 52,
                'name' => 'Super Light Guest House', 
                'location' => '59th St Bet, (Manaw Hari) 110th St & (Khaing Shwe Wah, 109th St, Mandalay',
                'description' => 'In an area filled with casual shops and eateries, this laid-back hotel is 1 mile from Aung Pin Le railway station, 4 miles from MKo Moeahamuni Buddhist Temple and 2 miles from Mandalar Thiri Sports Stadium. Featuring wood panelling, the down-to-earth rooms provide flat-screen TVs, minifridges, and tea and coffeemaking facilities, as well as air conditioning and Wi-Fi. There are also family rooms. Breakfast is served in a casual dining room. Traditional massages are available.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 53,
                'name' => 'Hotel Emperor', 
                'location' => 'Bet 26th & 27th, 74th St, Mandalay',
                'description' => "Across a road from a canal, this informal hotel is an 18-minute walk from the 19th-century Mandalay Palace, 1 km from Mandalay railway station and 2 km from the lively Zegyo Market. Featuring wood panelling, the unfussy rooms provide flat-screen TVs, minibars, and tea and coffeemaking equipment. There's a warm lobby lounge. Bike rentals are also available.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 54,
                'name' => 'Power Hotel', 
                'location' => 'No. 686, 80th st., 39th x 40th st.,, Southern Mandalay, Mandalay,',
                'description' => "Within 10 minutes' walk of cafes and restaurants, this unpretentious hotel is 2 km from both Mandalay railway station and the revered Mahamuni Buddha Temple. The down-to-earth rooms and suites come with satellite TV; some quarters also provide minifridges and/or dining areas. There's an airy lounge featuring a striking image of a traditional soldier on horseback. Parking and breakfast are available.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 55,
                'name' => 'Royal Ruby Hotel', 
                'location' => '81st Street, Between 21st x 22nd Street, No.157, Northern Mandalay, Mandalay',
                'description' => "Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. Conveniently situated in the Northern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. This 3-star property is packed with in-house facilities to improve the quality and joy of your stay.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 56,
                'name' => 'Stone Inn', 
                'location' => 'No. Ta-7/ Nya-28, Bogyoke Ywa, Between 68th & 70th Streets and Theikpan Road & Thazin Streets, Chan Mya Tha Zi Township, Mandalay',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Southern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. As an added bonus, restaurant is provided on-site to conveniently serve your needs.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 57,
                'name' => 'Ruby Land Hotel', 
                'location' => 'No C-1,65th St, Between 29×30th Sts, Pyi Gyi Myat Shin Ward, Mandalay',
                'description' => "Conveniently situated in the Eastern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 58,
                'name' => 'Hotel A1', 
                'location' => 'Corner of 32nd and 83rd Street, Chan Aye Thar Zan Township, Central Mandalay, Mandalay,',
                'description' => "On a bustling street lined with local businesses, this bright hotel is 8 km from the iconic Mandalay Hill, overlooking multiple temples. It's 4 km from Mandalay Palace and 6 km from Mandalay International Airport. Simply furnished rooms provide flat-screen TVs, free Wi-Fi and minifridges, as well as tea and coffeemaking equipment. Some feature bathrooms with wet rooms. Family rooms sleep up to 4 people. Room service is offered. Complimentary amenities include breakfast and loaner bikes. In addition to an informal lobby lounge, there's a casual restaurant with views of the city. An on-call doctor and a back-up generator are available.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 59,
                'name' => 'Hotel Moe Thee', 
                'location' => 'No.257, 77th St, Between 36th St x 37th St, Hay Ma Malar North Quarter, Mahar Aung Myay Township, Southern Mandalay, Mandalay, ',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Strategically situated in Southern Mandalay, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Mandalay Hill. Restaurant and fitness center are among the special facilities that will enhance your stay with on-site convenience.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 60,
                'name' => 'Amayarnadi Hotel', 
                'location' => 'Corner of 60th Street & NguShweWah Street - AungSan Street, Mandalay',
                'description' => 'Set 5 km from the golden-clad Mahamuni Buddha Temple statue, this straightforward hotel is 8 km from the landmark Mandalay Palace and a 16-minute walk from the Aung Pin Le train station. Unassuming rooms come with Wi-Fi, minfridges and in-room safes. Some feature city views, tubs and/or kettles. Upgraded rooms add sitting areas. Room service is available. A breakfast buffet is offered. Amenities include a laid-back restaurant/bar and an airy lobby lounge with sofas.',
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 61,
                'name' => 'Hotel Sakura Princess', 
                'location' => 'No.7/8 (B), 67th Street, Between 32nd x 33rd Street, Chan Aye Thar Zan Township, Eastern Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Eastern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Rated with 3 stars, this high-quality property provides guests with access to massage, restaurant and fitness center on-site.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 62,
                'name' => 'Golden Hotel', 
                'location' => 'Corner of 53rd and 33rd Streets, Chan Aye Thar San Township',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Eastern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Rated with 3 stars, this high-quality property provides guests with access to massage, restaurant and fitness center on-site.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 63,
                'name' => 'Majestic Hotel Mandalay', 
                'location' => 'Corner of 12th Street and 76th Street, North Moat, AungMyayTharSan Township Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Northern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. As an added bonus, restaurant is provided on-site to conveniently serve your needs.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 64,
                'name' => 'Rupar Mandalar Resort', 
                'location' => 'No.(A-15), Corner of 53rd & 30th Street, Chan Aye Tharzan Township Mandalay,',
                'description' => "Set on 2 hectares next to a residential neighbourhood, this upscale resort lies 5 km from Shwenandaw Monastery, built in 1878. Route 3 is less than 1 km away. Refined wood-panelled rooms feature free Wi-Fi, satellite TV and minibars. Suites add separate living rooms; some have balconies offering pool views. Room service is available. A breakfast buffet, a Thai massage and a happy hour cocktail are complimentary. Other amenities include a formal restaurant and an open-air bar/lounge, plus an outdoor pool, a hot tub and a sundeck. There's also a gym and a spa.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 65,
                'name' => 'Orient Hotel', 
                'location' => 'No. 144, 27th Street, Bet 79th X 80th Street, Central Mandalay, Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Strategically situated in Central Mandalay, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Mandalay Hill. This 3-star property features restaurant to make your stay more indulgent and memorable.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 66,
                'name' => 'Hotel Yadanar Oo', 
                'location' => 'No.(676), 22nd St., Bet: 65th x 66th, South of National Theatre Aung Myay Thar Zan Township, Mandalay',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Northern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Rated with 3 stars, this high-quality property provides guests with access to restaurant, indoor pool and outdoor pool on-site.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 67,
                'name' => 'Rising Venus Hotel', 
                'location' => 'Ta.(7) /Nya.(11), Between 70th x 71st Streets, Yuzana Street & Shwe Hnin Si Street, Bogoke Village, , Southern Mandalay, Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Southern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Rated with 3 stars, this high-quality property provides guests with access to massage, restaurant and fitness center on-site.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 68,
                'name' => 'Night Sweet Hotel', 
                'location' => 'Da-2/7, Corner of 66 Street x 40 Street, Mahamyaing (1), Maha Aung Myae Township, Eastern Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Eastern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Massage and restaurant are among the special facilities that will enhance your stay with on-site convenience.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 69,
                'name' => 'Perfect Hotel', 
                'location' => 'Corner of 59 and Theikpan road, mandalay,',
                'description' => "Along a main road, this informal hotel is a 2-minute walk from Aung Pin Le train station and 4 km from the Mahamuni Buddha Temple pilgrimage site. Streamlined rooms offer Wi-Fi and flat-screen TVs, plus minifridges and kettles. Most have en suite wet rooms; some provide baths. Room service is 24/7. Amenities include a down-to-earth restaurant and a sleek bar. A breakfast buffet, parking and bike rentals are available, as are spa treatments.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 70,
                'name' => 'Silver Star Hotel', 
                'location' => 'No. 195. Corner of 27th Street & 83rd Street, Chan Aye Tharzan Township, Central Mandalay, Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Strategically situated in Central Mandalay, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Mandalay Hill. This 3-star property features restaurant to make your stay more indulgent and memorable.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 71,
                'name' => 'Yadanar Theingi Hotel', 
                'location' => 'No.189, 83rd Street, Between 26th & 27th Street, Near Zay Cho Market, Chan Aye Thar Zan Township,, Central Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Strategically situated in Central Mandalay, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Mandalay Hill. As an added bonus, restaurant is provided on-site to conveniently serve your needs.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 72,
                'name' => 'Palace View Hotel', 
                'location' => '15/B, 26th Street, Between 75th x 76th Street, Chan Aye Thar Zan Township, Mandalay,',
                'description' => "This simple hotel is set in a buzzing downtown area. The Zay Cho Market and Mandalay Palace complex are both 2 km away. It also lies 1 km from Mandalay Railway Station and 24 km from Mandalay International Airport. Straightforward rooms come with en suite bathrooms, air conditioning, Wi-Fi and TVs. Some rooms have balconies with views of the Mandalay Palace complex. Amenities include a 24-hour front desk, parking spaces and an airport shuttle service. There’s also a casual restaurant with Mandalay Palace views.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 73,
                'name' => 'Hotel Wonderland', 
                'location' => 'Shwe Hnin Si St, Between 68th & 69th, Chan Mya Thar Si Township, Southern Mandalay, Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Southern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. As an added bonus, restaurant is provided on-site to conveniently serve your needs.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 74,
                'name' => 'Hotel Aurora', 
                'location' => 'No.190, 87th Street Between 26th Street and 27th Street Chan Aye Thar Zan Township. Near Zay Cho Market Mandalay,',
                'description' => "Offering city views, this unassuming hotel is 3 km from Mandalay Palace, 7 minutes' walk from Zegyo Market and 38 km from Mandalay International Airport. Colorful, relaxed rooms provide free Wi-Fi, flat-screen TVs and minifridges, as well as tea and coffeemaking facilities. Breakfast and parking are complimentary. Other amenities include a business center, and a casual restaurant with a rooftop terrace.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 75,
                'name' => 'Royal Peacock Hotel', 
                'location' => '83rd Street,Between 22nd &amp; 23rd Street,Aung Myay Thar Zan Township,Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Northern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. This 3-star property features restaurant to make your stay more indulgent and memorable.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 76,
                'name' => 'Hotel Boss', 
                'location' => 'No.16 , 26 B Road, Between 91*92 Street , Chan Aye Thar Zaw Township, Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Western Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Rated with 3 stars, this high-quality property provides guests with access to massage, restaurant and hot tub on-site.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 77,
                'name' => 'Palace Hotel', 
                'location' => 'No.267, 80th Street, Bet 32nd & 33rd Street, Central Mandalay, Mandalay, ',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Strategically situated in Central Mandalay, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Mandalay Hill. As an added bonus, restaurant is provided on-site to conveniently serve your needs.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 78,
                'name' => 'King Park Hotel', 
                'location' => '72nd Street, Between 33 &, 34th St, Mandalay',
                'description' => "In an area filled with eateries, this informal hotel with a colourful exterior is 7 km from pagodas and monasteries at Mandalay Hill, and 3 km from the 19th-century Mandalay Palace. It's 2 km from Mandalay train station. Casual rooms feature flat-screen TVs, safes, minifridges, and tea and coffeemaking facilities; some have Wi-Fi. Family rooms add sitting areas, and hill and/or city views. Room service is available 24/7. There's a restaurant. Parking and a breakfast buffet are offered.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 79,
                'name' => 'New Tiger Hotel', 
                'location' => '80St;Between37&38, Southern Mandalay, Mandalay, ',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Southern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. This 3-star property features restaurant to make your stay more indulgent and memorable.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 80,
                'name' => 'Royal Power Hotel', 
                'location' => '80th Street, Bet: 27th & 28th st, Chan Aye Thar San Township, Mandalay',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Strategically situated in Central Mandalay, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Mandalay Hill. Massage and restaurant are among the special facilities that will enhance your stay with on-site convenience.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 81,
                'name' => 'Mandalay Karaweik Mobile Hotel', 
                'location' => 'Stand Street, Between 32nd and 33rd Street, Chanaye Tharzan Township, Western Mandalay, Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Western Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. This 3-star property features restaurant to make your stay more indulgent and memorable.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 82,
                'name' => 'Hotel 82', 
                'location' => 'No. 571, 82nd Street, Between 32 st and 31 st ,Mandalay ',
                'description' => "A 14-minute walk from the Mandalay Central railway station, this low-key hotel is 2 km from Mahamuni Buddha Temple, and 4 km from 19th-century Mandalay Palace with mausoleums and a throne room. Humble rooms offer Wi-Fi and cable TV, plus minifridges, and tea and coffeemaking facilities. All have en suite bathrooms. Some offer city views. There's a restaurant, and 24-hour security. Bike rentals are offered. Breakfast is available, as is parking.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 83,
                'name' => 'Hotel My World', 
                'location' => 'No. 70, 30th St, Bet 73rd x 74th St, Chan Aye Thar San, Mandalay',
                'description' => "This unpretentious budget hotel in the city centre is an 11-minute walk from Mandalay Railway Station, 2 km from the 19th-century Mandalay Palace and 5 km from storied Buddhist Atumashi Monastery. The straightforward rooms come with complimentary Wi-Fi and satellite TV, plus minifridges, and tea and coffeemaking equipment. There's an informal restaurant. Valet parking and bike rentals are available. A generator is on-site.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 84,
                'name' => 'Hotel Myat Nan Taw Win', 
                'location' => 'No.65, Kywe Se Kan 5th Street, Pyi Kyi Ta Khon Township, Mandalay',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Southern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. As an added bonus, restaurant is provided on-site to conveniently serve your needs.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 85,
                'name' => 'Royal Naung Yoe Hotel', 
                'location' => '34th Street, Between 65th x 66th Street, Chan Aye Thar Zan Township, Mandalay',
                'description' => "Close to eateries, this unpretentious hotel is 4 km from both Mandalay railway station and the 19th-century Mandalay Palace. It's 5 km from the bustling Zegyo Market. Unassuming, warmly decorated rooms feature flat-screen TVs, minifridges, and tea and coffeemaking facilities, as well as en suite bathrooms. Amenities include a casual dining room, and a low-key lobby lounge with a chandelier and ornately carved wood furnishings.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 86,
                'name' => 'Great Wall Hotel Mandalay', 
                'location' => '78th Road, Between 42nd & Theik pan Street, Yangon-Mandalay Highway Road, Mandalay',
                'description' => "Set along Highway 1, this warm hotel is 2 km from Mahamuni Buddha Temple, a major pilgrimage site. The 19th-century Mandalay Palace is 5 km away. Casual rooms offer cable TV, minifridges and air conditioning, as well as room service. Upgraded rooms have sitting areas. Amenities include a relaxed bar, a fitness center and conference facilities. There's also a restaurant.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 87,
                'name' => 'The Link - 83rd', 
                'location' => 'No. 597, 83rd Street, Between 27th and 28th Street,, Mandalay',
                'description' => "Occupying a modern building on a street lined with shops, this upmarket hotel is 3 km from the Mandalay Palace, a 19th-century royal residence and 4 km from Mahamuni Buddha Temple. It's 40 km from Mandalay International Airport. The warmly decorated rooms include free Wi-Fi, flat-screen TVs and minibars, as well as safes, and tea and coffeemaking equipment. Some feature sitting areas, city views and/or futons. There's a dining room.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 88,
                'name' => 'Golden City Light Hotel', 
                'location' => 'No .50 ,77 Street , btw 34 Street &amp; 35 Street , Chan Aye Thar Zan Township., Mandalay',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Strategically situated in Central Mandalay, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Mandalay Hill. Restaurant and spa are among the special facilities that will enhance your stay with on-site convenience.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 89,
                'name' => 'Hotel Dingar', 
                'location' => '35th Street, Between 72nd & 73rd Street, Mahar Aung Myay Township, Mandalay',
                'description' => "Set 4 km from the Mandalay Chanmyathazi Airport, this informal hotel is a 10-minute walk from the Chinatown Night Market and 3 km from Mandalay Palace. Relaxed rooms with teak furnishings offer free Wi-Fi, flat-screen TVs, and tea and coffeemaking equipment, plus minifridges and en suite, shower-only bathrooms. Some include city views and sleep up to 3 guests. Room service is available. Breakfast and parking are complimentary. There's a laid-back restaurant, a lobby lounge and a rooftop bar. Conference facilities and an airport shuttle are available.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 90,
                'name' => 'Golden Dream Hotel', 
                'location' => 'No. 255, 30th Street, Between 89th & 90th Street, North of Pyi Kyaw Market, Mandalay',
                'description' => "Set 3 km from the Mandalay Railway Station, this straightforward hotel near shops is 4 km from the grand Mahamuni Buddha Temple, and 5 km from Mandalay Palace, the last royal Burmese palace. The unfussy rooms feature free Wi-Fi, flat-screen TVs and sitting areas, as well as minifridges, and tea and coffeemaking facilities. Room service is available. Complimentary amenities include parking and a breakfast buffet. Other amenities include a warm lobby seating area and a casual rooftop restaurant with a terrace offering panoramic city views. Bike rentals and an area shuttle are available.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 91,
                'name' => 'Oway Grand Hotel', 
                'location' => 'No. 624, 78th Street, Bet: 30th x 31st, Chan Aye Tharsan Township, Mandalay',
                'description' => "Overlooking a bustling street, this streamlined hotel is a minutes' walk from the Mandalay Railway Station and 3 km from revered Mandalay Palace, featuring a throne room, a clock tower & mausoleums. The informal rooms offer free Wi-Fi, flat-screen TVs and minifridges, plus en suite facilities with showers. Breakfast is available. Other amenities include a meeting room and a simple restaurant featuring warm decor.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 92,
                'name' => 'Good Time Hotel', 
                'location' => 'No. 96/F, Yadanarbon Street, Ahneiktaw Quarter, Block 49, Nanshae, Mandalay',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Northern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Restaurant and fitness center are among the special facilities that will enhance your stay with on-site convenience.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 93,
                'name' => 'Hotel Mega Star', 
                'location' => '80th Street, Between 8th Street & Strand Road, Aung Myay Thar Zan Township, Mandalay',
                'description' => "Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. Conveniently situated in the Northern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Rated with 3 stars, this high-quality property provides guests with access to restaurant, indoor pool and outdoor pool on-site.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 94,
                'name' => 'Hotel United Mandalay', 
                'location' => 'No.60, Coner of 64th St & 19th St, Nan Shae, Aung Myae Thar Zan Township, Mandalay',
                'description' => "Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. Conveniently situated in the Northern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. As an added bonus, restaurant is provided on-site to conveniently serve your needs.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 95,
                'name' => 'East Mandalay Hotel', 
                'location' => '62nd St, Bet: 26th x 27th St, Chan Aye Thar San Township, Mandalay',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Eastern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Massage and restaurant are among the special facilities that will enhance your stay with on-site convenience.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 96,
                'name' => 'Hotel Ye Myanmar', 
                'location' => 'No.53-54, X432+JV6 Mahar Aung Myat Township, Corner of 68th & 43rd St, Mandalay',
                'description' => "Set 2 km from Aung Pin Le Railway Station, this down-to-earth hotel is 3 km from the Mahamuni Buddha Temple and 5 km from Mandalay Palace, a 19th-century royal palace. Relaxed rooms with warm decor offer free Wi-Fi, flat-screen TVs and minibars, plus in-room safes and 24-hour room service. Some quarters sleep up to 3 guests. Extra beds are available for a fee. There's a laid-back restaurant and a chic bar, plus bike rentals and a terrace with city views. Parking is available.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 97,
                'name' => 'Mingalar Hotel', 
                'location' => 'No.43/B ,22nd Street, 88th x 89th Street, Yuzana Corner, Mandalay',
                'description' => "Beside Thiri Mandalar Highway bus station, this casual hotel close to restaurants is a 6-minute walk from Aung Myay Mandalar Stadium, 9 minutes away on foot from the Khaymar Wunthi monastery and 4 miles from Kuthodaw Pagoda. Low-key rooms come with air conditioning and flat-screen TVs. Bathrooms, some with showers only, are en suite. An unassuming lobby lounge features ornately carved wooden furnishings. Breakfast and meeting space are also available.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 98,
                'name' => 'New Aye Yar Hotel', 
                'location' => '35th st, Between 75×74th St, Mahar Aung Myay Township, Mandalay',
                'description' => "Get your trip off to a great start with a stay at this property, which offers free Wi-Fi in all rooms. Strategically situated in Central Mandalay, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Mandalay Hill. As an added bonus, restaurant is provided on-site to conveniently serve your needs.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 99,
                'name' => 'Emerald Land Hotel', 
                'location' => '14 Street Bet 87 & 88 Street, Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Northern Mandalay part of Mandalay, this property puts you close to attractions and interesting dining options. Don't leave before paying a visit to the famous Mandalay Hill. Restaurant, indoor pool and outdoor pool are among the special facilities that will enhance your stay with on-site convenience.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],
            [
                'id' => 100,
                'name' => 'Royal Diamond Hotel', 
                'location' => 'No.(207),77 Street,between 33 street and 34 street, Central Mandalay,',
                'description' => "The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Strategically situated in Central Mandalay, allowing you access and proximity to local attractions and sights. Don't leave before paying a visit to the famous Mandalay Hill. As an added bonus, restaurant is provided on-site to conveniently serve your needs.",
                'images' => json_encode(['hotel1.jpg', 'hotel2.jpg'])
            ],

        ];

        foreach ($hotels as $hotel) {
            Hotel::create($hotel);
        }
    }
}
