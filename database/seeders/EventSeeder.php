<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        for ($i = 0; $i < 200; $i++) {
            $user = $users->random();
               Event::factory()->create([
                'user_id' => $user->id
            ]);
        }
    }
}



# yamaha d-net project (aws code commit)
Host git-codecommit.us-east-1.amazonaws.com
User APKA575QQK6V27WGLAH2
IdentityFile ~/.ssh/
