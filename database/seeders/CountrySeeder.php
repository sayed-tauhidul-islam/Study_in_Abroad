<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

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
                'image_url' => 'https://images.pexels.com/photos/64271/queen-of-liberty-statue-of-liberty-new-york-liberty-statue-64271.jpeg?auto=compress&cs=tinysrgb&w=800',
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
                'image_url' => 'https://images.pexels.com/photos/534173/pexels-photo-534173.jpeg?auto=compress&cs=tinysrgb&w=800',
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
                'image_url' => 'https://images.pexels.com/photos/460672/pexels-photo-460672.jpeg?auto=compress&cs=tinysrgb&w=800',
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
                'image_url' => 'https://images.pexels.com/photos/2570063/pexels-photo-2570063.jpeg?auto=compress&cs=tinysrgb&w=800',
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
                'image_url' => 'https://images.pexels.com/photos/338515/pexels-photo-338515.jpeg?auto=compress&cs=tinysrgb&w=800',
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
                'image_url' => 'https://images.pexels.com/photos/1888883/pexels-photo-1888883.jpeg?auto=compress&cs=tinysrgb&w=800',
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

            // Oceania
            [
                'name' => 'Australia',
                'country_code' => 'AU',
                'capital' => 'Canberra',
                'language' => 'English',
                'currency' => 'AUD ($)',
                'description' => 'Innovative education system with beautiful campuses and vibrant cities. Australia offers Group of Eight universities, excellent quality of life, and post-study work opportunities.',
                'student_count' => 690000,
                'tuition_range_min' => 20000,
                'tuition_range_max' => 45000,
                'image_url' => 'https://images.pexels.com/photos/995765/pexels-photo-995765.jpeg?auto=compress&cs=tinysrgb&w=800',
                'details' => 'Australia offers 2-4 year post-study work visa. Major cities: Sydney, Melbourne, Brisbane, Perth. Known for research excellence, beautiful beaches, and outdoor lifestyle. Group of Eight universities are world-renowned.'
            ],
            [
                'name' => 'New Zealand',
                'country_code' => 'NZ',
                'capital' => 'Wellington',
                'language' => 'English, Māori',
                'currency' => 'NZD ($)',
                'description' => 'Safe, friendly environment with stunning natural beauty. New Zealand offers quality education with innovative teaching methods and welcoming culture.',
                'student_count' => 125000,
                'tuition_range_min' => 18000,
                'tuition_range_max' => 35000,
                'image_url' => 'https://images.pexels.com/photos/1118877/pexels-photo-1118877.jpeg?auto=compress&cs=tinysrgb&w=800',
                'details' => 'Post-study work visa for 1-3 years. Major cities: Auckland, Wellington, Christchurch. Known for adventure activities, beautiful landscapes. Safe and welcoming for international students.'
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

            // Additional countries from Asia, Middle East, Africa, Americas, and smaller European nations
            [
                'name' => 'Australia',
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
            // Additional countries to reach 100+
            ['name' => 'Austria', 'country_code' => 'AT', 'capital' => 'Vienna', 'language' => 'German', 'currency' => 'EUR (€)', 'description' => 'Rich cultural heritage with affordable education', 'student_count' => 75000, 'tuition_range_min' => 800, 'tuition_range_max' => 15000, 'image_url' => 'https://images.unsplash.com/photo-1609856878074-cf31e21ccb2b?w=800', 'details' => 'Strong in music, arts, and sciences'],
            ['name' => 'Belgium', 'country_code' => 'BE', 'capital' => 'Brussels', 'language' => 'Dutch, French', 'currency' => 'EUR (€)', 'description' => 'Multilingual environment', 'student_count' => 55000, 'tuition_range_min' => 1000, 'tuition_range_max' => 12000, 'image_url' => 'https://images.unsplash.com/photo-1559564484-e48f2704d0e4?w=800', 'details' => 'Heart of Europe'],
            ['name' => 'Poland', 'country_code' => 'PL', 'capital' => 'Warsaw', 'language' => 'Polish', 'currency' => 'PLN (zł)', 'description' => 'Affordable education', 'student_count' => 65000, 'tuition_range_min' => 2000, 'tuition_range_max' => 8000, 'image_url' => 'https://images.unsplash.com/photo-1596385345126-b6a1a10bc0c8?w=800', 'details' => 'Rich history'],
            ['name' => 'Czech Republic', 'country_code' => 'CZ', 'capital' => 'Prague', 'language' => 'Czech', 'currency' => 'CZK (Kč)', 'description' => 'Beautiful cities', 'student_count' => 45000, 'tuition_range_min' => 0, 'tuition_range_max' => 10000, 'image_url' => 'https://images.unsplash.com/photo-1541849546-216549ae216d?w=800', 'details' => 'Free tuition in Czech'],
            ['name' => 'Portugal', 'country_code' => 'PT', 'capital' => 'Lisbon', 'language' => 'Portuguese', 'currency' => 'EUR (€)', 'description' => 'Warm climate', 'student_count' => 35000, 'tuition_range_min' => 1000, 'tuition_range_max' => 12000, 'image_url' => 'https://images.unsplash.com/photo-1555881400-74d7acaacd8b?w=800', 'details' => 'Beautiful coastline'],
            ['name' => 'Greece', 'country_code' => 'GR', 'capital' => 'Athens', 'language' => 'Greek', 'currency' => 'EUR (€)', 'description' => 'Ancient history', 'student_count' => 30000, 'tuition_range_min' => 1500, 'tuition_range_max' => 10000, 'image_url' => 'https://images.unsplash.com/photo-1555993539-1732b0258235?w=800', 'details' => 'Cradle of civilization'],
            ['name' => 'Hungary', 'country_code' => 'HU', 'capital' => 'Budapest', 'language' => 'Hungarian', 'currency' => 'HUF (Ft)', 'description' => 'Affordable education', 'student_count' => 35000, 'tuition_range_min' => 4000, 'tuition_range_max' => 12000, 'image_url' => 'https://images.unsplash.com/photo-1541849546-216549ae216d?w=800', 'details' => 'Strong medical programs'],
            ['name' => 'Romania', 'country_code' => 'RO', 'capital' => 'Bucharest', 'language' => 'Romanian', 'currency' => 'RON (lei)', 'description' => 'Very affordable', 'student_count' => 28000, 'tuition_range_min' => 3000, 'tuition_range_max' => 8000, 'image_url' => 'https://images.unsplash.com/photo-1606768865832-bb56538e2aad?w=800', 'details' => 'Popular for medicine'],
            ['name' => 'Ukraine', 'country_code' => 'UA', 'capital' => 'Kyiv', 'language' => 'Ukrainian', 'currency' => 'UAH (₴)', 'description' => 'Very affordable', 'student_count' => 75000, 'tuition_range_min' => 2000, 'tuition_range_max' => 6000, 'image_url' => 'https://images.unsplash.com/photo-1567856371731-888bbec5f478?w=800', 'details' => 'Popular for medicine'],
            ['name' => 'Croatia', 'country_code' => 'HR', 'capital' => 'Zagreb', 'language' => 'Croatian', 'currency' => 'EUR (€)', 'description' => 'Beautiful coast', 'student_count' => 10000, 'tuition_range_min' => 1500, 'tuition_range_max' => 8000, 'image_url' => 'https://images.unsplash.com/photo-1565098774405-d6e5c7b9e0e9?w=800', 'details' => 'Adriatic paradise'],
            ['name' => 'Indonesia', 'country_code' => 'ID', 'capital' => 'Jakarta', 'language' => 'Indonesian', 'currency' => 'IDR (Rp)', 'description' => 'Largest archipelago', 'student_count' => 8000, 'tuition_range_min' => 1500, 'tuition_range_max' => 6000, 'image_url' => 'https://images.unsplash.com/photo-1555217851-5a11f2c06f0b?w=800', 'details' => 'Tropical paradise'],
            ['name' => 'Philippines', 'country_code' => 'PH', 'capital' => 'Manila', 'language' => 'English', 'currency' => 'PHP (₱)', 'description' => 'English-speaking', 'student_count' => 7000, 'tuition_range_min' => 1000, 'tuition_range_max' => 5000, 'image_url' => 'https://images.unsplash.com/photo-1551262842-f66c5e4c5eba?w=800', 'details' => 'Friendly people'],
            ['name' => 'Vietnam', 'country_code' => 'VN', 'capital' => 'Hanoi', 'language' => 'Vietnamese', 'currency' => 'VND (₫)', 'description' => 'Emerging destination', 'student_count' => 6000, 'tuition_range_min' => 2000, 'tuition_range_max' => 6000, 'image_url' => 'https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?w=800', 'details' => 'Beautiful landscapes'],
            ['name' => 'Taiwan', 'country_code' => 'TW', 'capital' => 'Taipei', 'language' => 'Mandarin', 'currency' => 'TWD (NT$)', 'description' => 'High-quality education', 'student_count' => 25000, 'tuition_range_min' => 3000, 'tuition_range_max' => 10000, 'image_url' => 'https://images.unsplash.com/photo-1529158062015-cad636e205a0?w=800', 'details' => 'Strong in technology'],
            ['name' => 'Hong Kong', 'country_code' => 'HK', 'capital' => 'Hong Kong', 'language' => 'Chinese, English', 'currency' => 'HKD (HK$)', 'description' => 'Finance hub', 'student_count' => 35000, 'tuition_range_min' => 15000, 'tuition_range_max' => 30000, 'image_url' => 'https://images.unsplash.com/photo-1536599018102-9f803c140fc1?w=800', 'details' => 'Gateway East-West'],
            ['name' => 'UAE', 'country_code' => 'AE', 'capital' => 'Abu Dhabi', 'language' => 'Arabic', 'currency' => 'AED (د.إ)', 'description' => 'Modern infrastructure', 'student_count' => 85000, 'tuition_range_min' => 10000, 'tuition_range_max' => 35000, 'image_url' => 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=800', 'details' => 'Tax-free income'],
            ['name' => 'Saudi Arabia', 'country_code' => 'SA', 'capital' => 'Riyadh', 'language' => 'Arabic', 'currency' => 'SAR (﷼)', 'description' => 'Growing education', 'student_count' => 65000, 'tuition_range_min' => 5000, 'tuition_range_max' => 20000, 'image_url' => 'https://images.unsplash.com/photo-1556667219-e48472d48aa3?w=800', 'details' => 'Many scholarships'],
            ['name' => 'Israel', 'country_code' => 'IL', 'capital' => 'Jerusalem', 'language' => 'Hebrew', 'currency' => 'ILS (₪)', 'description' => 'Innovation hub', 'student_count' => 12000, 'tuition_range_min' => 8000, 'tuition_range_max' => 20000, 'image_url' => 'https://images.unsplash.com/photo-1544640332-8db091b0c8aa?w=800', 'details' => 'Startup nation'],
            ['name' => 'Jordan', 'country_code' => 'JO', 'capital' => 'Amman', 'language' => 'Arabic', 'currency' => 'JOD (د.ا)', 'description' => 'Safe country', 'student_count' => 30000, 'tuition_range_min' => 3000, 'tuition_range_max' => 10000, 'image_url' => 'https://images.unsplash.com/photo-1580159034983-c0f90f11ff9f?w=800', 'details' => 'Ancient Petra'],
            ['name' => 'Qatar', 'country_code' => 'QA', 'capital' => 'Doha', 'language' => 'Arabic', 'currency' => 'QAR (ر.ق)', 'description' => 'Education City', 'student_count' => 15000, 'tuition_range_min' => 15000, 'tuition_range_max' => 40000, 'image_url' => 'https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=800', 'details' => 'Branch campuses'],
            ['name' => 'Egypt', 'country_code' => 'EG', 'capital' => 'Cairo', 'language' => 'Arabic', 'currency' => 'EGP (E£)', 'description' => 'Ancient civilization', 'student_count' => 20000, 'tuition_range_min' => 1500, 'tuition_range_max' => 6000, 'image_url' => 'https://images.unsplash.com/photo-1572252009286-268acec5ca0a?w=800', 'details' => 'Pyramids'],
            ['name' => 'Morocco', 'country_code' => 'MA', 'capital' => 'Rabat', 'language' => 'Arabic, French', 'currency' => 'MAD (د.م.)', 'description' => 'Gateway to Africa', 'student_count' => 15000, 'tuition_range_min' => 2000, 'tuition_range_max' => 7000, 'image_url' => 'https://images.unsplash.com/photo-1489749798305-4fea3ae63d43?w=800', 'details' => 'Beautiful architecture'],
            ['name' => 'Kenya', 'country_code' => 'KE', 'capital' => 'Nairobi', 'language' => 'Swahili', 'currency' => 'KES (KSh)', 'description' => 'Hub of East Africa', 'student_count' => 8000, 'tuition_range_min' => 2000, 'tuition_range_max' => 8000, 'image_url' => 'https://images.unsplash.com/photo-1489392191049-fc10c97e64b6?w=800', 'details' => 'Safari country'],
            ['name' => 'Ghana', 'country_code' => 'GH', 'capital' => 'Accra', 'language' => 'English', 'currency' => 'GHS (₵)', 'description' => 'Friendly West Africa', 'student_count' => 7000, 'tuition_range_min' => 2000, 'tuition_range_max' => 7000, 'image_url' => 'https://images.unsplash.com/photo-1562101568-c256d2bd0a8c?w=800', 'details' => 'English-taught'],
            ['name' => 'Nigeria', 'country_code' => 'NG', 'capital' => 'Abuja', 'language' => 'English', 'currency' => 'NGN (₦)', 'description' => 'Most populous African', 'student_count' => 6000, 'tuition_range_min' => 1500, 'tuition_range_max' => 6000, 'image_url' => 'https://images.unsplash.com/photo-1562109036-d2f71a8dce2c?w=800', 'details' => 'Largest economy'],
            ['name' => 'Argentina', 'country_code' => 'AR', 'capital' => 'Buenos Aires', 'language' => 'Spanish', 'currency' => 'ARS ($)', 'description' => 'Vibrant culture', 'student_count' => 15000, 'tuition_range_min' => 1000, 'tuition_range_max' => 8000, 'image_url' => 'https://images.unsplash.com/photo-1589909202802-8f4aadce1849?w=800', 'details' => 'Tango and wine'],
            ['name' => 'Chile', 'country_code' => 'CL', 'capital' => 'Santiago', 'language' => 'Spanish', 'currency' => 'CLP ($)', 'description' => 'Stable economy', 'student_count' => 12000, 'tuition_range_min' => 3000, 'tuition_range_max' => 12000, 'image_url' => 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=800', 'details' => 'Beautiful landscapes'],
            ['name' => 'Colombia', 'country_code' => 'CO', 'capital' => 'Bogotá', 'language' => 'Spanish', 'currency' => 'COP ($)', 'description' => 'Growing education', 'student_count' => 8000, 'tuition_range_min' => 2000, 'tuition_range_max' => 8000, 'image_url' => 'https://images.unsplash.com/photo-1524242800152-ad7df4545f50?w=800', 'details' => 'Coffee country'],
            ['name' => 'Peru', 'country_code' => 'PE', 'capital' => 'Lima', 'language' => 'Spanish', 'currency' => 'PEN (S/)', 'description' => 'Machu Picchu', 'student_count' => 6000, 'tuition_range_min' => 2000, 'tuition_range_max' => 7000, 'image_url' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?w=800', 'details' => 'Inca heritage'],
            ['name' => 'Bangladesh', 'country_code' => 'BD', 'capital' => 'Dhaka', 'language' => 'Bengali', 'currency' => 'BDT (৳)', 'description' => 'Rapidly developing', 'student_count' => 5000, 'tuition_range_min' => 1000, 'tuition_range_max' => 4000, 'image_url' => 'https://images.unsplash.com/photo-1564868056745-5bf09468fb72?w=800', 'details' => 'Very affordable'],
            ['name' => 'Pakistan', 'country_code' => 'PK', 'capital' => 'Islamabad', 'language' => 'Urdu', 'currency' => 'PKR (₨)', 'description' => 'Affordable education', 'student_count' => 6000, 'tuition_range_min' => 1000, 'tuition_range_max' => 5000, 'image_url' => 'https://images.unsplash.com/photo-1570495913249-33c0b5c9d4c2?w=800', 'details' => 'Beautiful mountains'],
            ['name' => 'Nepal', 'country_code' => 'NP', 'capital' => 'Kathmandu', 'language' => 'Nepali', 'currency' => 'NPR (रू)', 'description' => 'Home to Himalayas', 'student_count' => 3000, 'tuition_range_min' => 1000, 'tuition_range_max' => 4000, 'image_url' => 'https://images.unsplash.com/photo-1504614758714-9f92f1948882?w=800', 'details' => 'Mount Everest'],
            ['name' => 'Sri Lanka', 'country_code' => 'LK', 'capital' => 'Colombo', 'language' => 'Sinhala', 'currency' => 'LKR (Rs)', 'description' => 'Island nation', 'student_count' => 3000, 'tuition_range_min' => 1500, 'tuition_range_max' => 5000, 'image_url' => 'https://images.unsplash.com/photo-1577392051276-6425cf62f4ff?w=800', 'details' => 'Tea country'],
            ['name' => 'Fiji', 'country_code' => 'FJ', 'capital' => 'Suva', 'language' => 'English', 'currency' => 'FJD ($)', 'description' => 'Pacific paradise', 'student_count' => 5000, 'tuition_range_min' => 3000, 'tuition_range_max' => 10000, 'image_url' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=800', 'details' => 'Beautiful islands'],
            ['name' => 'Jamaica', 'country_code' => 'JM', 'capital' => 'Kingston', 'language' => 'English', 'currency' => 'JMD ($)', 'description' => 'Caribbean island', 'student_count' => 4000, 'tuition_range_min' => 3000, 'tuition_range_max' => 10000, 'image_url' => 'https://images.unsplash.com/photo-1544989164-bb0c8a485d0d?w=800', 'details' => 'Reggae culture'],
            ['name' => 'Costa Rica', 'country_code' => 'CR', 'capital' => 'San José', 'language' => 'Spanish', 'currency' => 'CRC (₡)', 'description' => 'Eco-tourism paradise', 'student_count' => 3000, 'tuition_range_min' => 3000, 'tuition_range_max' => 10000, 'image_url' => 'https://images.unsplash.com/photo-1524491127136-5a1a04b7d42a?w=800', 'details' => 'Pura Vida'],
            ['name' => 'Panama', 'country_code' => 'PA', 'capital' => 'Panama City', 'language' => 'Spanish', 'currency' => 'USD ($)', 'description' => 'Hub of Americas', 'student_count' => 2000, 'tuition_range_min' => 3000, 'tuition_range_max' => 12000, 'image_url' => 'https://images.unsplash.com/photo-1554068865-24ceedd520e4?w=800', 'details' => 'Panama Canal'],
            ['name' => 'Iceland', 'country_code' => 'IS', 'capital' => 'Reykjavik', 'language' => 'Icelandic', 'currency' => 'ISK (kr)', 'description' => 'Nordic innovation', 'student_count' => 3000, 'tuition_range_min' => 0, 'tuition_range_max' => 5000, 'image_url' => 'https://images.unsplash.com/photo-1504893524553-b855bce32c67?w=800', 'details' => 'Land of fire and ice'],
            ['name' => 'Luxembourg', 'country_code' => 'LU', 'capital' => 'Luxembourg', 'language' => 'French, German', 'currency' => 'EUR (€)', 'description' => 'Multilingual hub', 'student_count' => 6000, 'tuition_range_min' => 400, 'tuition_range_max' => 8000, 'image_url' => 'https://images.unsplash.com/photo-1559564484-e48f2704d0e4?w=800', 'details' => 'Very low tuition'],
            ['name' => 'Estonia', 'country_code' => 'EE', 'capital' => 'Tallinn', 'language' => 'Estonian', 'currency' => 'EUR (€)', 'description' => 'Digital society', 'student_count' => 4000, 'tuition_range_min' => 1000, 'tuition_range_max' => 8000, 'image_url' => 'https://images.unsplash.com/photo-1509356843151-3e7d96241e11?w=800', 'details' => 'Tech-savvy nation'],
            ['name' => 'Latvia', 'country_code' => 'LV', 'capital' => 'Riga', 'language' => 'Latvian', 'currency' => 'EUR (€)', 'description' => 'Baltic gem', 'student_count' => 8000, 'tuition_range_min' => 1500, 'tuition_range_max' => 9000, 'image_url' => 'https://images.unsplash.com/photo-1509356843151-3e7d96241e11?w=800', 'details' => 'Affordable Baltic'],
            ['name' => 'Lithuania', 'country_code' => 'LT', 'capital' => 'Vilnius', 'language' => 'Lithuanian', 'currency' => 'EUR (€)', 'description' => 'Growing education', 'student_count' => 6000, 'tuition_range_min' => 1000, 'tuition_range_max' => 7000, 'image_url' => 'https://images.unsplash.com/photo-1509356843151-3e7d96241e11?w=800', 'details' => 'Medieval charm'],
            ['name' => 'Slovenia', 'country_code' => 'SI', 'capital' => 'Ljubljana', 'language' => 'Slovenian', 'currency' => 'EUR (€)', 'description' => 'Alpine beauty', 'student_count' => 3000, 'tuition_range_min' => 2000, 'tuition_range_max' => 10000, 'image_url' => 'https://images.unsplash.com/photo-1565098774405-d6e5c7b9e0e9?w=800', 'details' => 'Beautiful nature'],
            ['name' => 'Slovakia', 'country_code' => 'SK', 'capital' => 'Bratislava', 'language' => 'Slovak', 'currency' => 'EUR (€)', 'description' => 'Affordable Central Europe', 'student_count' => 10000, 'tuition_range_min' => 2000, 'tuition_range_max' => 8000, 'image_url' => 'https://images.unsplash.com/photo-1541849546-216549ae216d?w=800', 'details' => 'Medical programs'],
            ['name' => 'Bulgaria', 'country_code' => 'BG', 'capital' => 'Sofia', 'language' => 'Bulgarian', 'currency' => 'BGN (лв)', 'description' => 'Very affordable', 'student_count' => 15000, 'tuition_range_min' => 3000, 'tuition_range_max' => 8000, 'image_url' => 'https://images.unsplash.com/photo-1541849546-216549ae216d?w=800', 'details' => 'Low cost of living'],
            ['name' => 'Serbia', 'country_code' => 'RS', 'capital' => 'Belgrade', 'language' => 'Serbian', 'currency' => 'RSD (дин)', 'description' => 'Affordable education', 'student_count' => 8000, 'tuition_range_min' => 2000, 'tuition_range_max' => 6000, 'image_url' => 'https://images.unsplash.com/photo-1541849546-216549ae216d?w=800', 'details' => 'Vibrant nightlife'],
            ['name' => 'Malta', 'country_code' => 'MT', 'capital' => 'Valletta', 'language' => 'Maltese, English', 'currency' => 'EUR (€)', 'description' => 'Mediterranean island', 'student_count' => 13000, 'tuition_range_min' => 8000, 'tuition_range_max' => 15000, 'image_url' => 'https://images.unsplash.com/photo-1555993539-1732b0258235?w=800', 'details' => 'English-taught'],
            ['name' => 'Cyprus', 'country_code' => 'CY', 'capital' => 'Nicosia', 'language' => 'Greek, Turkish', 'currency' => 'EUR (€)', 'description' => 'Island education', 'student_count' => 35000, 'tuition_range_min' => 3000, 'tuition_range_max' => 12000, 'image_url' => 'https://images.unsplash.com/photo-1555993539-1732b0258235?w=800', 'details' => 'Year-round sunshine'],
        ];
        
        foreach ($countries as $countryData) {
            Country::create($countryData);
        }
    }
}
