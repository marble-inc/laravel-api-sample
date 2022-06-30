<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::factory()->count(5)->create()->each(function (Shop $shop) {
            Menu::factory()->count(5)->create(['shop_id' => $shop->id]);
        });
    }
}
