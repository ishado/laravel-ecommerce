<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(EntrustSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductsTagSeeder::class);
        $this->call(ProductsImagesSeeder::class);
        $this->call(ProductCouponSeeder::class);
        $this->call(ProductReviewSeeder::class);
        $this->call(WorldSeeder::class);
        $this->call(WorldStatusSeeder::class);
        $this->call(UserAddressSeeder::class);
        $this->call(ShippingCompanySeeder::class);
        $this->call(PaymentMethodSeeder::class);
    }
}
