<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;
use function PHPUnit\Framework\name;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'Joh Doe',
            'email' => 'joh@gmail.com'
        ]);
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

      /*  Listing::create([
            'title' => 'Laravel Senior Devoloper',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Crop',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'lodgjjfd cvgfdguv fcghdsu fgdytadsufb dsufytnbf  uyfgtdsufb fdhtgyuuinb '
        ]);


        Listing::create([
            'title' => 'Full Stack Engineer',
            'tags' => 'laravel, api, backend',
            'company' => 'sTARK iNDUSTRY',
            'location' => 'New York, NY',
            'email' => 'email2@email.com',
            'website' => 'https://www.starkindustry.com',
            'description' => 'lodgjjfd cvgfdguv fcghdsu fgdytadsufb dsufytnbf  uyfgtdsufb fdhtgyuuinb fgdhgrshfgbfghn'
        ]);*/

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
