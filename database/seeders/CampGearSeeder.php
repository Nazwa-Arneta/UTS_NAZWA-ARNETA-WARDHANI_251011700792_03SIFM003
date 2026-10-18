<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampGearSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Terra Hiking Backpack',
                'category' => 'Tas',
                'rent_price' => 35000,
                'stock' => 12,
                'image' => 'carrier.jpg',
                'description' => 'Tas hiking untuk membawa perlengkapan penting selama perjalanan outdoor. Cocok untuk kegiatan trekking dan camping.',
            ],
            [
                'name' => 'Trail Sleeping Bag',
                'category' => 'Perlengkapan Tidur',
                'rent_price' => 20000,
                'stock' => 15,
                'image' => 'sleeping bag.jpg',
                'description' => 'Sleeping bag praktis untuk membantu memberikan kenyamanan saat beristirahat di area perkemahan.',
            ],
            [
                'name' => 'Alpine Trekking Pole',
                'category' => 'Aksesori',
                'rent_price' => 15000,
                'stock' => 10,
                'image' => 'tracking pole.jpg',
                'description' => 'Tongkat trekking untuk membantu menjaga keseimbangan saat berjalan di jalur pendakian.',
            ],
            [
                'name' => 'Camp Cooking Set',
                'category' => 'Peralatan Masak',
                'rent_price' => 25000,
                'stock' => 7,
                'image' => 'nesting set.jpg',
                'description' => 'Peralatan masak camping yang praktis untuk menyiapkan makanan saat beraktivitas di alam terbuka.',
            ],
            [
                'name' => 'Compact Camping Stove',
                'category' => 'Peralatan Masak',
                'rent_price' => 22000,
                'stock' => 8,
                'image' => 'kompor.jpg',
                'description' => 'Kompor portabel untuk membantu memasak selama camping. Gunakan sesuai petunjuk keselamatan produk.',
            ],
            [
                'name' => 'Portable Camping Chair',
                'category' => 'Furnitur Camping',
                'rent_price' => 18000,
                'stock' => 9,
                'image' => 'kursi lipat outdoor.jpg',
                'description' => 'Kursi lipat untuk beristirahat dan menikmati suasana di area perkemahan.',
            ],
            [
                'name' => 'Outdoor LED Lantern',
                'category' => 'Penerangan',
                'rent_price' => 12000,
                'stock' => 20,
                'image' => 'lamp.jpg',
                'description' => 'Lampu portabel untuk membantu menerangi tenda dan area camping saat malam hari.',
            ],
            [
                'name' => 'Hydro Trekking Bottle',
                'category' => 'Aksesori',
                'rent_price' => 10000,
                'stock' => 18,
                'image' => 'bottle.jpg',
                'description' => 'Botol minum yang praktis dibawa untuk menemani aktivitas trekking dan perjalanan outdoor.',
            ],
            [
                'name' => 'RainGuard Outdoor Jacket',
                'category' => 'Pakaian Outdoor',
                'rent_price' => 30000,
                'stock' => 6,
                'image' => 'jaket.jpg',
                'description' => 'Jaket outdoor untuk menunjang kenyamanan saat beraktivitas di lingkungan terbuka.',
            ],
            [
                'name' => 'Forest Camping Hammock',
                'category' => 'Furnitur Camping',
                'rent_price' => 16000,
                'stock' => 5,
                'image' => 'hammock.jpg',
                'description' => 'Hammock untuk bersantai di area camping. Pasang pada titik yang kokoh dan aman.',
            ],
            [
                'name' => 'Outdoor Flying Sheet',
                'category' => 'Perlindungan Camping',
                'rent_price' => 28000,
                'stock' => 7,
                'image' => 'flying sheet.jpg',
                'description' => 'Flying sheet untuk membantu membuat area berteduh saat berkemah.',
            ],
            [
                'name' => 'Trail Hiking Shoes',
                'category' => 'Alas Kaki',
                'rent_price' => 30000,
                'stock' => 6,
                'image' => 'sepatu.jpg',
                'description' => 'Sepatu outdoor untuk mendukung perjalanan trekking sesuai medan dan kebutuhan pengguna.',
            ],
            [
                'name' => 'Portable Gas Canister',
                'category' => 'Bahan Bakar Camping',
                'rent_price' => 12000,
                'stock' => 10,
                'image' => 'gas.jpg',
                'description' => 'Tabung gas portabel untuk kompor yang kompatibel. Penggunaan wajib mengikuti instruksi keselamatan.',
            ],
            [
                'name' => 'Headlamp Explorer',
                'category' => 'Penerangan',
                'rent_price' => 10000,
                'stock' => 12,
                'image' => 'headlamp.jpg',
                'description' => 'Lampu kepala untuk membantu penerangan ketika berjalan atau menyiapkan perlengkapan di malam hari.',
            ],
            [
                'name' => 'Hydro Trekking Pack',
                'category' => 'Tas',
                'rent_price' => 25000,
                'stock' => 8,
                'image' => 'hydropack.jpg',
                'description' => 'Tas hidrasi untuk membawa kebutuhan minum selama aktivitas trekking dan olahraga outdoor.',
            ],
        ];

        // Menyesuaikan data katalog dengan 15 produk pada daftar ini.
        DB::table('camp_gears')->delete();

        foreach ($products as $product) {
            DB::table('camp_gears')->insert([
                'name' => $product['name'],
                'category' => $product['category'],
                'rent_price' => $product['rent_price'],
                'stock' => $product['stock'],
                'image' => 'assets/images/' . $product['image'],
                'description' => $product['description'],
            ]);
        }
    }
}
