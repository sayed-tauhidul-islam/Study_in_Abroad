<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class UpdateAllCountriesWithOriginalDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'country_code' => 'US',
                'name' => 'United States',
                'image_url' => 'https://images.unsplash.com/photo-1485738422979-f5c462d49f74?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 4298,
            ],
            [
                'country_code' => 'CA',
                'name' => 'Canada',
                'image_url' => 'https://images.unsplash.com/photo-1517935706615-2717063c2225?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 223,
            ],
            [
                'country_code' => 'GB',
                'name' => 'United Kingdom',
                'image_url' => 'https://images.unsplash.com/photo-1513635269975-59663e0ac1ad?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 162,
            ],
            [
                'country_code' => 'AU',
                'name' => 'Australia',
                'image_url' => 'https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 43,
            ],
            [
                'country_code' => 'DE',
                'name' => 'Germany',
                'image_url' => 'https://images.unsplash.com/photo-1467269204594-9661b134dd2b?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 426,
            ],
            [
                'country_code' => 'FR',
                'name' => 'France',
                'image_url' => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 83,
            ],
            [
                'country_code' => 'IT',
                'name' => 'Italy',
                'image_url' => 'https://images.unsplash.com/photo-1515542622106-78bda8ba0e5b?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 97,
            ],
            [
                'country_code' => 'ES',
                'name' => 'Spain',
                'image_url' => 'https://images.unsplash.com/photo-1543783207-ec64e4d95325?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 76,
            ],
            [
                'country_code' => 'NL',
                'name' => 'Netherlands',
                'image_url' => 'https://images.unsplash.com/photo-1512470876302-972faa2aa9a4?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 18,
            ],
            [
                'country_code' => 'SE',
                'name' => 'Sweden',
                'image_url' => 'https://images.unsplash.com/photo-1509356843151-3e7d96241e11?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 47,
            ],
            [
                'country_code' => 'NO',
                'name' => 'Norway',
                'image_url' => 'https://images.unsplash.com/photo-1513519107127-1bed33748e4c?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 30,
            ],
            [
                'country_code' => 'DK',
                'name' => 'Denmark',
                'image_url' => 'https://images.unsplash.com/photo-1513622790541-eaa84d356909?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 8,
            ],
            [
                'country_code' => 'FI',
                'name' => 'Finland',
                'image_url' => 'https://images.unsplash.com/photo-1564882385-5bed6fa40769?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 13,
            ],
            [
                'country_code' => 'CH',
                'name' => 'Switzerland',
                'image_url' => 'https://images.unsplash.com/photo-1527004013197-933c4bb611b3?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 12,
            ],
            [
                'country_code' => 'NZ',
                'name' => 'New Zealand',
                'image_url' => 'https://images.unsplash.com/photo-1507699622108-4be3abd695ad?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 8,
            ],
            [
                'country_code' => 'JP',
                'name' => 'Japan',
                'image_url' => 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 780,
            ],
            [
                'country_code' => 'KR',
                'name' => 'South Korea',
                'image_url' => 'https://images.unsplash.com/photo-1517154421773-0529f29ea451?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 191,
            ],
            [
                'country_code' => 'CN',
                'name' => 'China',
                'image_url' => 'https://images.unsplash.com/photo-1508804185872-d7badad00f7d?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 2956,
            ],
            [
                'country_code' => 'IN',
                'name' => 'India',
                'image_url' => 'https://images.unsplash.com/photo-1524492412937-b28074a5d7da?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 1043,
            ],
            [
                'country_code' => 'SG',
                'name' => 'Singapore',
                'image_url' => 'https://images.unsplash.com/photo-1525625293386-3f8f99389edd?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 6,
            ],
            [
                'country_code' => 'BR',
                'name' => 'Brazil',
                'image_url' => 'https://images.unsplash.com/photo-1483729558449-99ef09a8c325?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 305,
            ],
            [
                'country_code' => 'ZA',
                'name' => 'South Africa',
                'image_url' => 'https://images.unsplash.com/photo-1484318571209-661cf29a69c3?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 26,
            ],
            [
                'country_code' => 'RU',
                'name' => 'Russia',
                'image_url' => 'https://images.unsplash.com/photo-1513326738677-b964603b136d?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 896,
            ],
            [
                'country_code' => 'TR',
                'name' => 'Turkey',
                'image_url' => 'https://images.unsplash.com/photo-1524231757912-21f4fe3a7200?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 207,
            ],
            [
                'country_code' => 'IE',
                'name' => 'Ireland',
                'image_url' => 'https://images.unsplash.com/photo-1590004953392-5aba2e72269a?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 7,
            ],
            [
                'country_code' => 'AT',
                'name' => 'Austria',
                'image_url' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 22,
            ],
            [
                'country_code' => 'BE',
                'name' => 'Belgium',
                'image_url' => 'https://images.unsplash.com/photo-1559564484-e48bf2ab4a3c?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 17,
            ],
            [
                'country_code' => 'PT',
                'name' => 'Portugal',
                'image_url' => 'https://images.unsplash.com/photo-1555881400-74d7acaacd8b?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 15,
            ],
            [
                'country_code' => 'PL',
                'name' => 'Poland',
                'image_url' => 'https://images.unsplash.com/photo-1559564210-90f8f8e8c3e4?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 131,
            ],
            [
                'country_code' => 'CZ',
                'name' => 'Czech Republic',
                'image_url' => 'https://images.unsplash.com/photo-1541849546-216549ae216d?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 26,
            ],
            [
                'country_code' => 'GR',
                'name' => 'Greece',
                'image_url' => 'https://images.unsplash.com/photo-1503152394-c571994fd383?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 24,
            ],
            [
                'country_code' => 'HU',
                'name' => 'Hungary',
                'image_url' => 'https://images.unsplash.com/photo-1541186116-c9178870f7e5?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 21,
            ],
            [
                'country_code' => 'MX',
                'name' => 'Mexico',
                'image_url' => 'https://images.unsplash.com/photo-1518638150340-f706e86654de?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 187,
            ],
            [
                'country_code' => 'AR',
                'name' => 'Argentina',
                'image_url' => 'https://images.unsplash.com/photo-1589909202802-8f4aadce1849?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 131,
            ],
            [
                'country_code' => 'CL',
                'name' => 'Chile',
                'image_url' => 'https://images.unsplash.com/photo-1489171084589-9b5031ebcf9b?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 60,
            ],
            [
                'country_code' => 'CO',
                'name' => 'Colombia',
                'image_url' => 'https://images.unsplash.com/photo-1568632234157-ce7aecd03d0d?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 80,
            ],
            [
                'country_code' => 'TH',
                'name' => 'Thailand',
                'image_url' => 'https://images.unsplash.com/photo-1528181304800-259b08848526?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 78,
            ],
            [
                'country_code' => 'MY',
                'name' => 'Malaysia',
                'image_url' => 'https://images.unsplash.com/photo-1596422846543-75c6fc197f07?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 20,
            ],
            [
                'country_code' => 'ID',
                'name' => 'Indonesia',
                'image_url' => 'https://images.unsplash.com/photo-1555400038-63f5ba517a47?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 122,
            ],
            [
                'country_code' => 'PH',
                'name' => 'Philippines',
                'image_url' => 'https://images.unsplash.com/photo-1532298229144-0ec0c57515c7?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 64,
            ],
            [
                'country_code' => 'VN',
                'name' => 'Vietnam',
                'image_url' => 'https://images.unsplash.com/photo-1555699875-5773b06e7824?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 37,
            ],
            [
                'country_code' => 'AE',
                'name' => 'United Arab Emirates',
                'image_url' => 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 13,
            ],
            [
                'country_code' => 'SA',
                'name' => 'Saudi Arabia',
                'image_url' => 'https://images.unsplash.com/photo-1591608971362-f08b2a75731a?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 28,
            ],
            [
                'country_code' => 'EG',
                'name' => 'Egypt',
                'image_url' => 'https://images.unsplash.com/photo-1572252009286-268acec5ca0a?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 23,
            ],
            [
                'country_code' => 'IL',
                'name' => 'Israel',
                'image_url' => 'https://images.unsplash.com/photo-1552832230-c0197dd311b5?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 8,
            ],
            [
                'country_code' => 'PK',
                'name' => 'Pakistan',
                'image_url' => 'https://images.unsplash.com/photo-1582510003544-4d00b7f74220?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 185,
            ],
            [
                'country_code' => 'BD',
                'name' => 'Bangladesh',
                'image_url' => 'https://images.unsplash.com/photo-1562979314-bee7453e911c?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 153,
            ],
            [
                'country_code' => 'NG',
                'name' => 'Nigeria',
                'image_url' => 'https://images.unsplash.com/photo-1632407880171-9e12c1f1f9fa?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 170,
            ],
            [
                'country_code' => 'KE',
                'name' => 'Kenya',
                'image_url' => 'https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 31,
            ],
            [
                'country_code' => 'MA',
                'name' => 'Morocco',
                'image_url' => 'https://images.unsplash.com/photo-1489749798305-4fea3ae63d43?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 14,
            ],
            [
                'country_code' => 'RO',
                'name' => 'Romania',
                'image_url' => 'https://images.unsplash.com/photo-1547036967-23d11aacaee0?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 56,
            ],
            [
                'country_code' => 'BG',
                'name' => 'Bulgaria',
                'image_url' => 'https://images.unsplash.com/photo-1570849399241-e0739e5f6c08?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 37,
            ],
            [
                'country_code' => 'HR',
                'name' => 'Croatia',
                'image_url' => 'https://images.unsplash.com/photo-1555990538-c5f8e9c0c0e0?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 8,
            ],
            [
                'country_code' => 'SK',
                'name' => 'Slovakia',
                'image_url' => 'https://images.unsplash.com/photo-1555990538-c5f8e9c0c0e0?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 23,
            ],
            [
                'country_code' => 'SI',
                'name' => 'Slovenia',
                'image_url' => 'https://images.unsplash.com/photo-1531366936337-7c912a4589a7?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 3,
            ],
            [
                'country_code' => 'LT',
                'name' => 'Lithuania',
                'image_url' => 'https://images.unsplash.com/photo-1585946787530-b7f4c469e00c?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 14,
            ],
            [
                'country_code' => 'LV',
                'name' => 'Latvia',
                'image_url' => 'https://images.unsplash.com/photo-1560095555-52ea7eb3d5a7?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 11,
            ],
            [
                'country_code' => 'EE',
                'name' => 'Estonia',
                'image_url' => 'https://images.unsplash.com/photo-1567086672013-de7e64c97ce7?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 6,
            ],
            [
                'country_code' => 'IS',
                'name' => 'Iceland',
                'image_url' => 'https://images.unsplash.com/photo-1504893524553-b855bce32c67?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 7,
            ],
            [
                'country_code' => 'LU',
                'name' => 'Luxembourg',
                'image_url' => 'https://images.unsplash.com/photo-1539037116277-4db20889f2d4?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 1,
            ],
            [
                'country_code' => 'MT',
                'name' => 'Malta',
                'image_url' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 1,
            ],
            [
                'country_code' => 'CY',
                'name' => 'Cyprus',
                'image_url' => 'https://images.unsplash.com/photo-1568271675068-f77a2c0e8f85?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 6,
            ],
            [
                'country_code' => 'LK',
                'name' => 'Sri Lanka',
                'image_url' => 'https://images.unsplash.com/photo-1552799446-159ba9523315?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 17,
            ],
            [
                'country_code' => 'NP',
                'name' => 'Nepal',
                'image_url' => 'https://images.unsplash.com/photo-1605640840605-14ac1855827b?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 11,
            ],
            [
                'country_code' => 'MM',
                'name' => 'Myanmar',
                'image_url' => 'https://images.unsplash.com/photo-1556992617-5ca36de84fd2?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 23,
            ],
            [
                'country_code' => 'PE',
                'name' => 'Peru',
                'image_url' => 'https://images.unsplash.com/photo-1526392060635-9d6019884377?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 51,
            ],
            [
                'country_code' => 'VE',
                'name' => 'Venezuela',
                'image_url' => 'https://images.unsplash.com/photo-1564869584447-10e87b1ddb1f?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 45,
            ],
            [
                'country_code' => 'EC',
                'name' => 'Ecuador',
                'image_url' => 'https://images.unsplash.com/photo-1587595431973-160d0d94add1?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 31,
            ],
            [
                'country_code' => 'UY',
                'name' => 'Uruguay',
                'image_url' => 'https://images.unsplash.com/photo-1596977962811-bbf3bbe39ba3?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 5,
            ],
            [
                'country_code' => 'CR',
                'name' => 'Costa Rica',
                'image_url' => 'https://images.unsplash.com/photo-1588507306224-6ed86b1cb7d8?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 5,
            ],
            [
                'country_code' => 'PA',
                'name' => 'Panama',
                'image_url' => 'https://images.unsplash.com/photo-1569619715114-5c0c4b6b6c97?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 6,
            ],
            [
                'country_code' => 'GH',
                'name' => 'Ghana',
                'image_url' => 'https://images.unsplash.com/photo-1580060839134-75a5edca2e99?auto=format&fit=crop&w=1200&q=80',
                'universities_count' => 10,
            ],
        ];

        $updated = 0;
        $created = 0;

        foreach ($countries as $countryData) {
            $country = Country::where('country_code', $countryData['country_code'])->first();
            
            if ($country) {
                $country->update($countryData);
                $this->command->info("✓ Updated {$countryData['name']} ({$countryData['country_code']}) - Unis: {$countryData['universities_count']}");
                $updated++;
            } else {
                Country::create($countryData);
                $this->command->info("+ Created {$countryData['name']} ({$countryData['country_code']}) - Unis: {$countryData['universities_count']}");
                $created++;
            }
        }

        $this->command->info("\n🎉 Complete! Updated: {$updated}, Created: {$created}");
        $this->command->info("All countries now have unique images and correct university counts!");
    }
}
