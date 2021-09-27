<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::create([
            'name'                      => 'PayPal',
            'code'                      => 'PPEX',
            'driver_name'               => 'PayPal_Express',
            'merchant_email'            => null,
            'username'                  => null,
            'password'                  => null,
            'secret'                    => null,
            'sandbox_merchant_email'    => 'shado-facilitator@gmail.com',
            'sandbox_username'          => null,
            'sandbox_password'          => 'AXFkQdzI_YqFheQppw_IPAyb2OyrZdR7lh1QUJICJ04_RMUDaSEgy7Yxa_GQqgfENRbaymzwrrhjY58y',
            'sandbox_secret'            => 'EDj9UOPNbiDedz6vZsVOCOZx5BQICUjxNafBGJsAMRuyORXKCI0jPjrLsx1EyQZ1F9LjsIY_xmvIo_lR',
            'sandbox'                   => true,
            'status'                    => true,
        ]);
    }
}
