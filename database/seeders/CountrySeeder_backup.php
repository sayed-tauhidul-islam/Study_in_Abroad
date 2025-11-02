<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            // North America
            [
                'name' => 'United States',
                'country_code' => 'US',
                'capital' => 'Washington, D.C.',
                'language' => 'English',
                'currency' => 'USD ($)',
                'description' => 'The United States is home to the world\'s best universities including Harvard, MIT, Stanford, and many Ivy League institutions. It offers diverse programs, cutting-edge research facilities, and excellent career opportunities.',
                'student_count' => 1095299,
                'tuition_range_min' => 20000,
                'tuition_range_max' => 70000,
                'image_url' => 'https://images.unsplash.com/photo-1485738422979-f5c462d49f74?w=800',
                'details' => 'The USA attracts the most international students worldwide. Major cities include New York, Los Angeles, Boston, San Francisco, and Chicago. Known for STEM programs, business schools, and liberal arts education. Work opportunities available through OPT and CPT programs.'
            ],
            [
                'name' => 'Canada',
                'country_code' => 'CA',
                'capital' => 'Ottawa',
                'language' => 'English, French',
                'currency' => 'CAD ($)',
                'description' => 'Canada offers world-class education with affordable tuition, welcoming immigration policies, and a multicultural environment. Top universities include University of Toronto, UBC, and McGill.',
                'student_count' => 642480,
                'tuition_range_min' => 15000,
                'tuition_range_max' => 35000,
                'image_url' => 'https://images.unsplash.com/photo-1503614472-8c93d56e92ce?w=800',
                'details' => 'Canada provides excellent post-graduation work permits (PGWP) and pathways to permanent residency. Major student cities: Toronto, Vancouver, Montreal, and Ottawa. Known for engineering, computer science, and business programs.'
            ],
            [
                'name' => 'Mexico',
                'country_code' => 'MX',
                'capital' => 'Mexico City',
                'language' => 'Spanish',
                'currency' => 'MXN ($)',
                'description' => 'Mexico offers affordable education with rich cultural heritage. Growing number of English-taught programs and strong ties with North American institutions.',
                'student_count' => 30000,
                'tuition_range_min' => 3000,
                'tuition_range_max' => 15000,
                'image_url' => 'https://images.unsplash.com/photo-1518638150340-f706e86654de?w=800',
                'details' => 'Popular for Spanish language learning, business, and cultural studies. Major cities: Mexico City, Guadalajara, Monterrey. Affordable cost of living and vibrant student life.'
            ],

            // Europe - Western
            [
                'name' => 'United Kingdom',
                'country_code' => 'GB',
                'capital' => 'London',
                'language' => 'English',
                'currency' => 'GBP (£)',
                'description' => 'Home to Oxford, Cambridge, Imperial College, and Russell Group universities. The UK offers prestigious degrees recognized worldwide with a rich academic tradition.',
                'student_count' => 605130,
                'tuition_range_min' => 15000,
                'tuition_range_max' => 45000,
                'image_url' => 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?w=800',
                'details' => 'UK degrees are typically 3 years for undergraduate and 1 year for masters. Major cities: London, Edinburgh, Manchester, Oxford, Cambridge. Graduate visa available for 2-3 years post-study.'
            ],
            [
                'name' => 'Germany',
                'country_code' => 'DE',
                'capital' => 'Berlin',
                'language' => 'German',
                'currency' => 'EUR (€)',
                'description' => 'Germany offers tuition-free education at public universities for international students. Strong in engineering, technology, and research with excellent job prospects.',
                'student_count' => 411601,
                'tuition_range_min' => 0,
                'tuition_range_max' => 20000,
                'image_url' => 'https://images.unsplash.com/photo-1467269204594-9661b134dd2b?w=800',
                'details' => 'No tuition fees at public universities, only semester contributions (~300 EUR). Major cities: Berlin, Munich, Frankfurt, Hamburg. 18-month post-study work visa. Strong engineering and technical programs.'
            ],
            [
                'name' => 'France',
                'country_code' => 'FR',
                'capital' => 'Paris',
                'language' => 'French',
                'currency' => 'EUR (€)',
                'description' => 'France offers world-class education with affordable tuition at public universities. Known for art, fashion, culinary arts, business, and engineering programs.',
                'student_count' => 358000,
                'tuition_range_min' => 200,
                'tuition_range_max' => 20000,
                'image_url' => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=800',
                'details' => 'Very low tuition at public universities. Paris is a top student city. Known for Grandes Écoles, business schools, and culinary institutes. Post-study work opportunities available.'
            ],
            [
                'name' => 'Netherlands',
                'country_code' => 'NL',
                'capital' => 'Amsterdam',
                'language' => 'Dutch',
                'currency' => 'EUR (€)',
                'description' => 'Netherlands offers innovative teaching methods with 2,100+ English-taught programs. Known for high quality of life and international environment.',
                'student_count' => 122000,
                'tuition_range_min' => 6000,
                'tuition_range_max' => 20000,
                'image_url' => 'https://images.unsplash.com/photo-1512470876302-972faa2aa9a4?w=800',
                'details' => 'Most programs taught in English. Major cities: Amsterdam, Rotterdam, Utrecht, The Hague. One-year search visa after graduation. Known for business, engineering, and design.'
            ],
            [
                'name' => 'Switzerland',
                'country_code' => 'CH',
                'capital' => 'Bern',
                'language' => 'German, French, Italian',
                'currency' => 'CHF (Fr)',
                'description' => 'Switzerland is renowned for hospitality management, banking, and research. Home to ETH Zurich and other top-ranked universities with stunning Alpine scenery.',
                'student_count' => 59000,
                'tuition_range_min' => 1000,
                'tuition_range_max' => 40000,
                'image_url' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800',
                'details' => 'Low tuition at public universities. High cost of living. Major cities: Zurich, Geneva, Lausanne, Bern. Excellent for hospitality, finance, and engineering.'
            ],
            [
                'name' => 'Belgium',
                'country_code' => 'BE',
                'capital' => 'Brussels',
                'language' => 'Dutch, French, German',
                'currency' => 'EUR (€)',
                'description' => 'Belgium offers quality education at affordable prices in the heart of Europe. Home to leading research universities and EU institutions.',
                'student_count' => 48000,
                'tuition_range_min' => 900,
                'tuition_range_max' => 15000,
                'image_url' => 'https://images.unsplash.com/photo-1559564484-e48eb46b5bb7?w=800',
                'details' => 'Low tuition fees. Brussels is the EU capital. Major cities: Brussels, Antwerp, Ghent, Leuven. Strong in international relations, business, and sciences.'
            ],
            [
                'name' => 'Austria',
                'country_code' => 'AT',
                'capital' => 'Vienna',
                'language' => 'German',
                'currency' => 'EUR (€)',
                'description' => 'Austria offers affordable education with high quality of life. Known for music, arts, engineering, and business programs in beautiful historic cities.',
                'student_count' => 92000,
                'tuition_range_min' => 750,
                'tuition_range_max' => 15000,
                'image_url' => 'https://images.unsplash.com/photo-1516550893923-42d28e5677af?w=800',
                'details' => 'Low tuition at public universities (~750 EUR/semester). Major cities: Vienna, Graz, Salzburg, Innsbruck. Rich cultural heritage and excellent public transport.'
            ],

            // Europe - Nordic
            [
                'name' => 'Sweden',
                'country_code' => 'SE',
                'capital' => 'Stockholm',
                'language' => 'Swedish',
                'currency' => 'SEK (kr)',
                'description' => 'Sweden focuses on innovation and sustainability with many English-taught programs. Known for its high quality of life and progressive values.',
                'student_count' => 39000,
                'tuition_range_min' => 0,
                'tuition_range_max' => 18000,
                'image_url' => 'https://images.unsplash.com/photo-1509356843151-3e7d96241e11?w=800',
                'details' => 'Free tuition for EU/EEA students. Major cities: Stockholm, Gothenburg, Uppsala, Lund. Strong in technology, sustainability, and design. Work opportunities available.'
            ],
            [
                'name' => 'Norway',
                'country_code' => 'NO',
                'capital' => 'Oslo',
                'language' => 'Norwegian',
                'currency' => 'NOK (kr)',
                'description' => 'Norway offers tuition-free education at public universities for all international students. Known for stunning natural beauty and high living standards.',
                'student_count' => 22000,
                'tuition_range_min' => 0,
                'tuition_range_max' => 15000,
                'image_url' => 'https://images.unsplash.com/photo-1544262571-1230285abe0e?w=800',
                'details' => 'No tuition fees at public universities. High cost of living. Major cities: Oslo, Bergen, Trondheim, Tromsø. Strong in energy, engineering, and environmental studies.'
            ],
            [
                'name' => 'Denmark',
                'country_code' => 'DK',
                'capital' => 'Copenhagen',
                'language' => 'Danish',
                'currency' => 'DKK (kr)',
                'description' => 'Denmark offers high-quality education with focus on group work and innovation. Known for its design, architecture, and sustainable living.',
                'student_count' => 32000,
                'tuition_range_min' => 6000,
                'tuition_range_max' => 16000,
                'image_url' => 'https://images.unsplash.com/photo-1513622790541-eaa84d356909?w=800',
                'details' => 'Free for EU/EEA students. Major cities: Copenhagen, Aarhus, Odense. Strong in design, engineering, and business. Excellent work-life balance.'
            ],
            [
                'name' => 'Finland',
                'country_code' => 'FI',
                'capital' => 'Helsinki',
                'language' => 'Finnish, Swedish',
                'currency' => 'EUR (€)',
                'description' => 'Finland has one of the world\'s best education systems. Known for technology, design, and innovation with excellent student support.',
                'student_count' => 32000,
                'tuition_range_min' => 0,
                'tuition_range_max' => 18000,
                'image_url' => 'https://images.unsplash.com/photo-1564955564225-80e8cd1e9d2c?w=800',
                'details' => 'Free for EU/EEA students. Major cities: Helsinki, Turku, Tampere. Strong in technology, gaming, education. Northern lights and unique culture.'
            ],
            [
                'name' => 'Iceland',
                'country_code' => 'IS',
                'capital' => 'Reykjavik',
                'language' => 'Icelandic',
                'currency' => 'ISK (kr)',
                'description' => 'Iceland offers unique study opportunities with low tuition fees. Known for environmental studies, renewable energy, and geothermal sciences.',
                'student_count' => 2000,
                'tuition_range_min' => 500,
                'tuition_range_max' => 10000,
                'image_url' => 'https://images.unsplash.com/photo-1504829857797-ddff29c27927?w=800',
                'details' => 'Very low registration fees at public universities. Small class sizes. Reykjavik is the capital. Unique for environmental and energy studies.'
            ],

            // Europe - Southern
            [
                'name' => 'Italy',
                'country_code' => 'IT',
                'capital' => 'Rome',
                'language' => 'Italian',
                'currency' => 'EUR (€)',
                'description' => 'Italy is home to the world\'s oldest universities with strong programs in art, architecture, fashion, design, and culinary arts.',
                'student_count' => 105000,
                'tuition_range_min' => 900,
                'tuition_range_max' => 20000,
                'image_url' => 'https://images.unsplash.com/photo-1515542622106-78bda8ba0e5b?w=800',
                'details' => 'Low tuition at public universities. Major cities: Rome, Milan, Florence, Bologna, Turin. Rich cultural heritage. Strong in design, fashion, arts, and engineering.'
            ],
            [
                'name' => 'Spain',
                'country_code' => 'ES',
                'capital' => 'Madrid',
                'language' => 'Spanish',
                'currency' => 'EUR (€)',
                'description' => 'Spain offers warm climate, vibrant culture, and affordable education. Popular for business, Spanish language, and international exchange programs.',
                'student_count' => 142000,
                'tuition_range_min' => 750,
                'tuition_range_max' => 18000,
                'image_url' => 'https://images.unsplash.com/photo-1543783207-ec64e4d95325?w=800',
                'details' => 'Affordable tuition and living costs. Major cities: Madrid, Barcelona, Valencia, Seville. Great weather and lifestyle. Popular for Erasmus programs.'
            ],
            [
                'name' => 'Portugal',
                'country_code' => 'PT',
                'capital' => 'Lisbon',
                'language' => 'Portuguese',
                'currency' => 'EUR (€)',
                'description' => 'Portugal offers affordable education with beautiful coastal cities. Growing tech hub with increasing English-taught programs.',
                'student_count' => 25000,
                'tuition_range_min' => 1000,
                'tuition_range_max' => 10000,
                'image_url' => 'https://images.unsplash.com/photo-1555881400-74d7acaacd8b?w=800',
                'details' => 'Low cost of living. Major cities: Lisbon, Porto, Coimbra. Beautiful beaches and historic cities. Growing startup ecosystem.'
            ],
            [
                'name' => 'Greece',
                'country_code' => 'GR',
                'capital' => 'Athens',
                'language' => 'Greek',
                'currency' => 'EUR (€)',
                'description' => 'Greece offers affordable education with ancient history and Mediterranean lifestyle. Strong in classics, archaeology, and maritime studies.',
                'student_count' => 35000,
                'tuition_range_min' => 1500,
                'tuition_range_max' => 12000,
                'image_url' => 'https://images.unsplash.com/photo-1555993539-1732b0258235?w=800',
                'details' => 'Very affordable living costs. Major cities: Athens, Thessaloniki. Beautiful islands and ancient sites. Strong in history, archaeology, and tourism.'
            ],

            // Europe - Eastern
            [
                'name' => 'Poland',
                'country_code' => 'PL',
                'capital' => 'Warsaw',
                'language' => 'Polish',
                'currency' => 'PLN (zł)',
                'description' => 'Poland offers quality education at very affordable prices. Growing number of English-taught programs with EU membership benefits.',
                'student_count' => 78000,
                'tuition_range_min' => 2000,
                'tuition_range_max' => 6000,
                'image_url' => 'https://images.unsplash.com/photo-1529070146719-3da773754d65?w=800',
                'details' => 'Very low tuition and living costs. Major cities: Warsaw, Krakow, Wroclaw, Gdansk. EU member state. Strong in engineering, medicine, and IT.'
            ],
            [
                'name' => 'Czech Republic',
                'country_code' => 'CZ',
                'capital' => 'Prague',
                'language' => 'Czech',
                'currency' => 'CZK (Kč)',
                'description' => 'Czech Republic offers free tuition in Czech language and affordable fees for English programs. Beautiful historic cities with low cost of living.',
                'student_count' => 45000,
                'tuition_range_min' => 0,
                'tuition_range_max' => 15000,
                'image_url' => 'https://images.unsplash.com/photo-1519677100203-a0e668c92439?w=800',
                'details' => 'Free if studying in Czech. Major cities: Prague, Brno, Ostrava. Beautiful architecture. Affordable living. Strong in engineering and arts.'
            ],
            [
                'name' => 'Hungary',
                'country_code' => 'HU',
                'capital' => 'Budapest',
                'language' => 'Hungarian',
                'currency' => 'HUF (Ft)',
                'description' => 'Hungary offers affordable quality education with many English programs. Known for medicine, dentistry, and engineering programs.',
                'student_count' => 35000,
                'tuition_range_min' => 4000,
                'tuition_range_max' => 12000,
                'image_url' => 'https://images.unsplash.com/photo-1541483554658-c5b5be8e3e7e?w=800',
                'details' => 'Very affordable costs. Budapest is a beautiful city. Popular for medicine and dentistry. EU member. Rich cultural heritage.'
            ],
            [
                'name' => 'Romania',
                'country_code' => 'RO',
                'capital' => 'Bucharest',
                'language' => 'Romanian',
                'currency' => 'RON (lei)',
                'description' => 'Romania offers very affordable education especially for medicine and engineering. EU member with growing international programs.',
                'student_count' => 30000,
                'tuition_range_min' => 3000,
                'tuition_range_max' => 8000,
                'image_url' => 'https://images.unsplash.com/photo-1606768666853-403c90a981ad?w=800',
                'details' => 'Extremely low costs. Major cities: Bucharest, Cluj-Napoca, Timișoara. Popular for medicine. Beautiful Carpathian mountains.'
            ],

            // Europe - Others
            [
                'name' => 'United States',
                'country_code' => 'US',
                'description' => 'A top destination for international students.',
                'student_count' => 1000000,
                'details' => 'Home to Ivy League and top-ranked universities.'
            ],
            [
                'name' => 'Canada',
                'country_code' => 'CA',
                'description' => 'Known for quality education and multiculturalism.',
                'student_count' => 500000,
                'details' => 'Popular for its welcoming immigration policies.'
            ],
            [
                'name' => 'United Kingdom',
                'country_code' => 'UK',
                'description' => 'Prestigious universities and rich history.',
                'student_count' => 600000,
                'details' => 'Home to Oxford, Cambridge, and Russell Group.'
            ],
            [
                'name' => 'Australia',
                'country_code' => 'AU',
                'description' => 'Popular for research and vibrant student life.',
                'student_count' => 400000,
                'details' => 'Known for its beautiful cities and beaches.'
            ],
            [
                'name' => 'Germany',
                'country_code' => 'DE',
                'description' => 'Tuition-free education for many programs.',
                'student_count' => 350000,
                'details' => 'Strong in engineering and technical fields.'
            ],
            [
                'name' => 'France',
                'country_code' => 'FR',
                'description' => 'Rich culture and affordable tuition.',
                'student_count' => 340000,
                'details' => 'Paris is a top student city.'
            ],
            [
                'name' => 'Italy',
                'country_code' => 'IT',
                'description' => 'Historic universities and art heritage.',
                'student_count' => 100000,
                'details' => 'Known for architecture and design.'
            ],
            [
                'name' => 'Spain',
                'country_code' => 'ES',
                'description' => 'Warm climate and vibrant student life.',
                'student_count' => 120000,
                'details' => 'Popular for Erasmus and exchange programs.'
            ],
            [
                'name' => 'Netherlands',
                'country_code' => 'NL',
                'description' => 'Innovative teaching and English-taught programs.',
                'student_count' => 90000,
                'details' => 'Known for high quality of life.'
            ],
            [
                'name' => 'Sweden',
                'country_code' => 'SE',
                'description' => 'Focus on innovation and sustainability.',
                'student_count' => 40000,
                'details' => 'Many programs in English.'
            ],
            [
                'name' => 'Norway',
                'country_code' => 'NO',
                'description' => 'No tuition fees for international students.',
                'student_count' => 25000,
                'details' => 'Stunning natural scenery.'
            ],
            [
                'name' => 'Denmark',
                'country_code' => 'DK',
                'description' => 'High standard of living and education.',
                'student_count' => 30000,
                'details' => 'Focus on group work and innovation.'
            ],
            [
                'name' => 'Finland',
                'country_code' => 'FI',
                'description' => 'World-class education system.',
                'student_count' => 20000,
                'details' => 'Known for technology and design.'
            ],
            [
                'name' => 'Switzerland',
                'country_code' => 'CH',
                'description' => 'Top for hospitality and business studies.',
                'student_count' => 50000,
                'details' => 'Beautiful landscapes and high quality of life.'
            ],
            [
                'name' => 'New Zealand',
                'country_code' => 'NZ',
                'description' => 'Safe, friendly, and innovative.',
                'student_count' => 30000,
                'details' => 'Adventure and outdoor activities.'
            ],
            [
                'name' => 'Japan',
                'country_code' => 'JP',
                'description' => 'Blend of tradition and technology.',
                'student_count' => 180000,
                'details' => 'Strong in science and engineering.'
            ],
            [
                'name' => 'South Korea',
                'country_code' => 'KR',
                'description' => 'High-tech and vibrant culture.',
                'student_count' => 120000,
                'details' => 'Popular for K-culture and technology.'
            ],
            [
                'name' => 'China',
                'country_code' => 'CN',
                'description' => 'Rapidly growing education sector.',
                'student_count' => 500000,
                'details' => 'Many scholarships for international students.'
            ],
            [
                'name' => 'India',
                'country_code' => 'IN',
                'description' => 'Diverse and affordable education.',
                'student_count' => 47000,
                'details' => 'Strong in IT and engineering.'
            ],
            [
                'name' => 'Singapore',
                'country_code' => 'SG',
                'description' => 'Global education hub in Asia.',
                'student_count' => 60000,
                'details' => 'Known for business and technology.'
            ],
            [
                'name' => 'Brazil',
                'country_code' => 'BR',
                'description' => 'Emerging destination in South America.',
                'student_count' => 20000,
                'details' => 'Rich culture and biodiversity.'
            ],
            [
                'name' => 'South Africa',
                'country_code' => 'ZA',
                'description' => 'Diverse and affordable.',
                'student_count' => 45000,
                'details' => 'Strong in research and innovation.'
            ],
            [
                'name' => 'Russia',
                'country_code' => 'RU',
                'description' => 'Strong in science and engineering.',
                'student_count' => 30000,
                'details' => 'Many government scholarships.'
            ],
            [
                'name' => 'Turkey',
                'country_code' => 'TR',
                'description' => 'Bridge between Europe and Asia.',
                'student_count' => 15000,
                'details' => 'Affordable tuition and living.'
            ],
            [
                'name' => 'Ireland',
                'country_code' => 'IE',
                'description' => 'Tech hub and friendly culture.',
                'student_count' => 35000,
                'details' => 'English-speaking and innovative.'
            ],
        ];
        foreach ($countries as $country) {
            DB::table('countries')->insert($country);
        }
    }
}
