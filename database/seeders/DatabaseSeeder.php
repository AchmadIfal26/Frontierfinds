<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Adventure;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Achmad Ifal',
            'email' => 'achmadifal@gmail.com',
            'password' => bcrypt('AchmadIfal')
        ]);

        User::create([
            'name' => 'Al Farazy',
            'email' => 'alfarazy@gmail.com',
            'password' => bcrypt('AlFarazy')
        ]);

        Category::create([
            'name' => 'Hiking',
            'slug' => 'hiking'
        ]);

        Category::create([
            'name' => 'Snorkeling ',
            'slug' => 'snorkeling '
        ]);

        Category::create([
            'name' => 'Mountain Biking',
            'slug' => 'mountain-biking'
        ]);

        Category::create([
            'name' => 'Camping',
            'slug' => 'camping'
        ]);

        Category::create([
            'name' => 'Rafting',
            'slug' => 'rafting'
        ]);

        Adventure::create([
            'title' => 'Petualangan Pertama',
            'slug' => 'petualangan-pertama',
            'guide' => 'Achmad Ifal',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo.',
            'duration' => '2',
            'skill' => 'Beginner',
            'price' => '250000',
            'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo. Provident reiciendis vero ipsam nisi consectetur cum nesciunt ex dolor quasi, enim laboriosam suscipit doloribus labore vitae cupiditate dicta, est nulla! Tenetur, totam, dolores obcaecati odit doloremque facilis vitae molestiae sint eligendi qui delectus omnis repellendus? Architecto nulla ducimus, repellat officiis veniam id perferendis illo recusandae minima neque molestiae enim sequi odit eos dolorum atque voluptatem laborum. Quisquam, similique eos dolorem commodi sint dignissimos eligendi hic consequuntur nihil dolor placeat ratione perspiciatis, reiciendis perferendis vitae. Consequuntur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo. Provident reiciendis vero ipsam nisi consectetur cum nesciunt ex dolor quasi, enim laboriosam suscipit doloribus labore vitae cupiditate dicta, est nulla! Tenetur, totam, dolores obcaecati odit doloremque facilis vitae molestiae sint eligendi qui delectus omnis repellendus? Architecto nulla ducimus, repellat officiis veniam id perferendis illo recusandae minima neque molestiae enim sequi odit eos dolorum atque voluptatem laborum. Quisquam, similique eos dolorem commodi sint dignissimos eligendi hic consequuntur nihil dolor placeat ratione perspiciatis, reiciendis perferendis vitae. Consequuntur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo. Provident reiciendis vero ipsam nisi consectetur cum nesciunt ex dolor quasi, enim laboriosam suscipit doloribus labore vitae cupiditate dicta, est nulla! Tenetur, totam, dolores obcaecati odit doloremque facilis vitae molestiae sint eligendi qui delectus omnis repellendus? Architecto nulla ducimus, repellat officiis veniam id perferendis illo recusandae minima neque molestiae enim sequi odit eos dolorum atque voluptatem laborum. Quisquam, similique eos dolorem commodi sint dignissimos eligendi hic consequuntur nihil dolor placeat ratione perspiciatis, reiciendis perferendis vitae. Consequuntur.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Adventure::create([
            'title' => 'Petualangan Kedua',
            'slug' => 'petualangan-kedua',
            'guide' => 'Achmad Ifal',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo.',
            'duration' => '5',
            'skill' => 'Medium',
            'price' => '500000',
            'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo. Provident reiciendis vero ipsam nisi consectetur cum nesciunt ex dolor quasi, enim laboriosam suscipit doloribus labore vitae cupiditate dicta, est nulla! Tenetur, totam, dolores obcaecati odit doloremque facilis vitae molestiae sint eligendi qui delectus omnis repellendus? Architecto nulla ducimus, repellat officiis veniam id perferendis illo recusandae minima neque molestiae enim sequi odit eos dolorum atque voluptatem laborum. Quisquam, similique eos dolorem commodi sint dignissimos eligendi hic consequuntur nihil dolor placeat ratione perspiciatis, reiciendis perferendis vitae. Consequuntur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo. Provident reiciendis vero ipsam nisi consectetur cum nesciunt ex dolor quasi, enim laboriosam suscipit doloribus labore vitae cupiditate dicta, est nulla! Tenetur, totam, dolores obcaecati odit doloremque facilis vitae molestiae sint eligendi qui delectus omnis repellendus? Architecto nulla ducimus, repellat officiis veniam id perferendis illo recusandae minima neque molestiae enim sequi odit eos dolorum atque voluptatem laborum. Quisquam, similique eos dolorem commodi sint dignissimos eligendi hic consequuntur nihil dolor placeat ratione perspiciatis, reiciendis perferendis vitae. Consequuntur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo. Provident reiciendis vero ipsam nisi consectetur cum nesciunt ex dolor quasi, enim laboriosam suscipit doloribus labore vitae cupiditate dicta, est nulla! Tenetur, totam, dolores obcaecati odit doloremque facilis vitae molestiae sint eligendi qui delectus omnis repellendus? Architecto nulla ducimus, repellat officiis veniam id perferendis illo recusandae minima neque molestiae enim sequi odit eos dolorum atque voluptatem laborum. Quisquam, similique eos dolorem commodi sint dignissimos eligendi hic consequuntur nihil dolor placeat ratione perspiciatis, reiciendis perferendis vitae. Consequuntur.</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Adventure::create([
            'title' => 'Petualangan Ketiga',
            'slug' => 'petualangan-ketiga',
            'guide' => 'Achmad Ifal',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo.',
            'duration' => '8',
            'skill' => 'Hard',
            'price' => '1500000',
            'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo. Provident reiciendis vero ipsam nisi consectetur cum nesciunt ex dolor quasi, enim laboriosam suscipit doloribus labore vitae cupiditate dicta, est nulla! Tenetur, totam, dolores obcaecati odit doloremque facilis vitae molestiae sint eligendi qui delectus omnis repellendus? Architecto nulla ducimus, repellat officiis veniam id perferendis illo recusandae minima neque molestiae enim sequi odit eos dolorum atque voluptatem laborum. Quisquam, similique eos dolorem commodi sint dignissimos eligendi hic consequuntur nihil dolor placeat ratione perspiciatis, reiciendis perferendis vitae. Consequuntur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo. Provident reiciendis vero ipsam nisi consectetur cum nesciunt ex dolor quasi, enim laboriosam suscipit doloribus labore vitae cupiditate dicta, est nulla! Tenetur, totam, dolores obcaecati odit doloremque facilis vitae molestiae sint eligendi qui delectus omnis repellendus? Architecto nulla ducimus, repellat officiis veniam id perferendis illo recusandae minima neque molestiae enim sequi odit eos dolorum atque voluptatem laborum. Quisquam, similique eos dolorem commodi sint dignissimos eligendi hic consequuntur nihil dolor placeat ratione perspiciatis, reiciendis perferendis vitae. Consequuntur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo. Provident reiciendis vero ipsam nisi consectetur cum nesciunt ex dolor quasi, enim laboriosam suscipit doloribus labore vitae cupiditate dicta, est nulla! Tenetur, totam, dolores obcaecati odit doloremque facilis vitae molestiae sint eligendi qui delectus omnis repellendus? Architecto nulla ducimus, repellat officiis veniam id perferendis illo recusandae minima neque molestiae enim sequi odit eos dolorum atque voluptatem laborum. Quisquam, similique eos dolorem commodi sint dignissimos eligendi hic consequuntur nihil dolor placeat ratione perspiciatis, reiciendis perferendis vitae. Consequuntur.</p>',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Adventure::create([
            'title' => 'Petualangan Keempat',
            'slug' => 'petualangan-keempat',
            'guide' => 'Achmad Ifal',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo.',
            'duration' => '8',
            'skill' => 'Hard',
            'price' => '3500000',
            'description' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo. Provident reiciendis vero ipsam nisi consectetur cum nesciunt ex dolor quasi, enim laboriosam suscipit doloribus labore vitae cupiditate dicta, est nulla! Tenetur, totam, dolores obcaecati odit doloremque facilis vitae molestiae sint eligendi qui delectus omnis repellendus? Architecto nulla ducimus, repellat officiis veniam id perferendis illo recusandae minima neque molestiae enim sequi odit eos dolorum atque voluptatem laborum. Quisquam, similique eos dolorem commodi sint dignissimos eligendi hic consequuntur nihil dolor placeat ratione perspiciatis, reiciendis perferendis vitae. Consequuntur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo. Provident reiciendis vero ipsam nisi consectetur cum nesciunt ex dolor quasi, enim laboriosam suscipit doloribus labore vitae cupiditate dicta, est nulla! Tenetur, totam, dolores obcaecati odit doloremque facilis vitae molestiae sint eligendi qui delectus omnis repellendus? Architecto nulla ducimus, repellat officiis veniam id perferendis illo recusandae minima neque molestiae enim sequi odit eos dolorum atque voluptatem laborum. Quisquam, similique eos dolorem commodi sint dignissimos eligendi hic consequuntur nihil dolor placeat ratione perspiciatis, reiciendis perferendis vitae. Consequuntur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam quod nostrum quidem ab, voluptatem ea, ducimus numquam in necessitatibus eveniet ex veritatis quo. Provident reiciendis vero ipsam nisi consectetur cum nesciunt ex dolor quasi, enim laboriosam suscipit doloribus labore vitae cupiditate dicta, est nulla! Tenetur, totam, dolores obcaecati odit doloremque facilis vitae molestiae sint eligendi qui delectus omnis repellendus? Architecto nulla ducimus, repellat officiis veniam id perferendis illo recusandae minima neque molestiae enim sequi odit eos dolorum atque voluptatem laborum. Quisquam, similique eos dolorem commodi sint dignissimos eligendi hic consequuntur nihil dolor placeat ratione perspiciatis, reiciendis perferendis vitae. Consequuntur.</p>',
            'category_id' => 5,
            'user_id' => 2
        ]);
    }
}
