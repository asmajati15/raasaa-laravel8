<?php

// Migrasi data + seeder
// php artisan migrate:fresh --seed

namespace Database\Seeders;

use App\Models\Availability;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Menu;
use App\Models\Type;
use App\Models\Filter;
use App\Models\User;

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

        Availability::create([
            'nama'          => 'Tersedia',
            'tersedia'          => 'Tersedia',
            'slug'          => 'able'
        ]);

        Availability::create([
            'nama'          => 'Tidak Tersedia',
            'tersedia'          => 'Tidak Tersedia',
            'slug'          => 'disabled'
        ]);

        Availability::create([
            'nama'          => 'Tersembunyi',
            'tersedia'          => 'Tidak Tersedia',
            'slug'          => 'hidden'
        ]);

        Filter::create([
            'slug'          => 'Drinks & Beverages',
            'hide'          => 'Full-Menu'
        ]);

        Filter::create([
            'slug'          => 'Main Courses',
            'hide'          => 'Full-Menu'
        ]);

        Filter::create([
            'slug'          => 'Dessert',
            'hide'          => 'Full-Menu'
        ]);

        Type::create([
            'filters_id'    => 1,
            'nama'          => 'Special of The Day',
            'slug'          => 'special-of-the-month'
        ]);

        User::create([
            'is_administrator'    => 1,
            'name'          => 'Asmajati Ananto',
            'username'          => 'amnv15',
            'email'          => 'asmajati.cooler15@gmail.com',
            'password'          => Hash::make('Krb0g0r123')
        ]);

        // Type::create([
        //     'filters_id'    => 2,
        //     'nama'          => 'Fresh Juice',
        //     'slug'          => 'fresh-juice'
        // ]);

        // Type::create([
        //     'filters_id'    => 2,
        //     'nama'          => 'Coffee',
        //     'slug'          => 'coffee'
        // ]);

        // Type::create([
        //     'filters_id'    => 3,
        //     'nama'          => 'Special of The Day',
        //     'slug'          => 'special-of-the-day'
        // ]);

        // Menu::factory(12)->create();

        /* Menu::create([
            'types_id'      => 1,
            'nama'          => 'Signature Friedrice',
            'slug'          => 'signature-friedrice',
            'harga'         => 'IDR 65.000',
            'deskripsi'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas turpis nibh, venenatis quis efficitur a, eleifend et tellus. In elementum lorem ligula, a pulvinar libero scelerisque id. Nunc blandit libero eu sapien iaculis dapibus. Phasellus nunc ligula, facilisis ac risus vitae, commodo scelerisque risus. Ut pellentesque ullamcorper nisi a fringilla.',
            'tersedia'      => 'Tersedia'
        ]);

        Menu::create([
            'types_id'      => 2,
            'nama'          => 'Jus Mangga',
            'slug'          => 'jus-mangga',
            'harga'         => 'IDR 25.000',
            'deskripsi'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas turpis nibh, venenatis quis efficitur a, eleifend et tellus. In elementum lorem ligula, a pulvinar libero scelerisque id. Nunc blandit libero eu sapien iaculis dapibus. Phasellus nunc ligula, facilisis ac risus vitae, commodo scelerisque risus. Ut pellentesque ullamcorper nisi a fringilla.',
            'tersedia'      => 'Tersedia'
        ]);

        Menu::create([
            'types_id'      => 3,
            'nama'          => 'Kopi Hitam',
            'slug'          => 'kopi-hitam',
            'harga'         => 'IDR 20.000',
            'deskripsi'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas turpis nibh, venenatis quis efficitur a, eleifend et tellus. In elementum lorem ligula, a pulvinar libero scelerisque id. Nunc blandit libero eu sapien iaculis dapibus. Phasellus nunc ligula, facilisis ac risus vitae, commodo scelerisque risus. Ut pellentesque ullamcorper nisi a fringilla.',
            'tersedia'      => 'Tersedia'
        ]);

        Menu::create([
            'types_id'      => 4,
            'nama'          => 'Fried Calamary Crispy',
            'slug'          => 'fried-calamary-crispy',
            'harga'         => 'IDR 55.000S',
            'deskripsi'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas turpis nibh, venenatis quis efficitur a, eleifend et tellus. In elementum lorem ligula, a pulvinar libero scelerisque id. Nunc blandit libero eu sapien iaculis dapibus. Phasellus nunc ligula, facilisis ac risus vitae, commodo scelerisque risus. Ut pellentesque ullamcorper nisi a fringilla.',
            'tersedia'      => 'Tersedia'
        ]); */
    }
}
