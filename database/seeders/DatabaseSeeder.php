<?php

namespace Database\Seeders;

use id;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(2)->create();

        // Listing::factory(6)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'

        ]);

        Listing::factory(6)->create([
            'user_id'=>$user->id
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


//         Listing::create([
// 'title' => 'Laravel Senior Developer',
// 'tags' =>'laravel, javascript',
// 'company' => 'Acme Corp',
// 'Location' => 'Boston, MA',
// 'email' => 'email@email.com',
// 'website' => 'https://ww.acme.com',
// 'description' => 'Lorem ipsum dolor sit
// amet consectetur adipicing quas possimus
// voluptas repudiandae cum expedita, eveniet
// aliquid, quam illum quaerat consequatur!
// Expedita ab consectetur tenetur delensiti?'


//         ]);

//         Listing::create([
//             'title' => 'Full-stack Engineer',
//             'tags' =>'laravel, backend ,api',
//             'company' => 'Stack Industries',
//             'Location' => 'New York, NY',
//             'email' => 'full-stackdev@email.com',
//             'website' => 'https://ww.stackIndustries.com',
//             'description' => 'Lorem ipsum dolor sit
//             amet consectetur adipicing quas possimus
//             voluptas repudiandae cum expedita, eveniet
//             aliquid, quam illum quaerat consequatur!
//             Expedita ab consectetur tenetur delensiti?'
            
            
//                     ]);
    }
}
