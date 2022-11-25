<?php

namespace Database\Seeders;

 // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john@gmail.com',
        ]);


        Movie::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Movie::create([
        //     'title' => 'Avatar : The Way of The Water',
        //     'year' => '2022',
        //     'studio' => 'Disney',
        //     'duration' => "3h10",
        //     'story' => 'Jake Sully and Neytiri have become parents. The plot takes place ten years after the events told in the original feature film. Their idyllic life, close to nature, is threatened when the Resources Development Administration, a dangerous non-governmental organization, returns to Pandora. Forced to leave their natural habitat, Jake and his family perform on the reefs, where they believe they will find asylum. But they come across a clan, the Metkayina, with different customs from their...'
        // ]);


        // Movie::create([
        //     'title' => 'Ready Player One',
        //     'year' => '2018',
        //     'studio' => 'Warner Bros.',
        //     'duration' => "2h20",
        //     'story' => '2045. The world is on the brink of chaos. Human beings take refuge in the OASIS, a virtual universe developed by the brilliant and eccentric James Halliday. Before disappearing, he has decided to bequeath his immense fortune to anyone who discovers the digital Easter egg that he took care to hide in the OASIS. The lure of profit provokes planetary competition. But when a young boy, Wade Watts, who does not yet have the profile of a hero, decides to participate in the treasure hunt, he is plunged into a parallel world that is both mysterious and disturbing...'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
