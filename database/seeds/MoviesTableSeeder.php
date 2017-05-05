<?php

use Illuminate\Database\Seeder;

use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => 'The Sandlot',
                'cover' => 'http://i.imgur.com/bMeFf9E.jpg',
                'actor' => 'Patrick Renna',
                'genre' => 'Comedy Family',
                'description' => 'During a summer of friendship and adventure, one boy becomes a part of the gang, nine boys become a team and their leader becomes a legend by confronting the terrifying mystery beyond the right field wall.',
                'purchase_link' => 'https://www.amazon.com/Sandlot-David-Mickey-Evans/dp/B0128CYOFY/ref=sr_1_1?ie=UTF8&qid=1493935567&sr=8-1&keywords=sandlot',
            ]);

        Movie::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => 'A League Of Their Own',
                'cover' => 'http://i.imgur.com/YbwwMnr.jpg',
                'actor' => 'Tom Hanks, Geena Davis',
                'genre' => 'Comedy Family Drama',
                'description' => 'With baseball lineups left empty during World War II, the newly-formed All-American Girls Baseball League brought talented women to the big leagues—and brought fans to the stands.',
                'purchase_link' => 'https://www.amazon.com/League-Their-Own-Tom-Hanks/dp/B00190KZVY/ref=sr_1_1?ie=UTF8&qid=1493935667&sr=8-1&keywords=a+league+of+their+own',
            ]);

        Movie::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => 'Sully',
                'cover' => 'http://i.imgur.com/QuOha4U.png',
                'actor' => 'Tom Hanks',
                'genre' => 'Biography Drama',
                'description' => 'The story of Chesley Sullenberger, who became a hero after gliding his plane along the water in the Hudson River, saving all of his 155 passengers.',
                'purchase_link' => 'https://www.amazon.com/Sully-Tom-Hanks/dp/B01LVVBV9P/ref=sr_1_4?ie=UTF8&qid=1493936957&sr=8-4&keywords=tom+hanks',
            ]);
        Movie::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => "You've Got Mail",
                'cover' => 'http://i.imgur.com/ULbM8xp.jpg',
                'actor' => 'Tom Hanks Meg Ryan',
                'genre' => 'Comedy Drama Romance',
                'description' => 'Neighborhood bookstore rivals unwittingly become e-mail pen pals in thischarming remake of The Shop Around the Corner.',
                'purchase_link' => 'https://www.amazon.com/Youve-Got-Mail-Tom-Hanks/dp/B001N3LLH4/ref=sr_1_14?ie=UTF8&qid=1493937106&sr=8-14&keywords=tom+hanks',
            ]);
        Movie::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => "Sleepless in Seattle",
                'cover' => 'http://i.imgur.com/AiborkJ.jpg',
                'actor' => 'Tom Hanks Meg Ryan',
                'genre' => 'Comedy Drama Romance',
                'description' => 'Tom Hanks and Meg Ryan star in an enchanting romance about a widower whose son convinces him to find new love and the woman who answers his call.',
                'purchase_link' => 'https://www.amazon.com/Sleepless-Seattle-Tom-Hanks/dp/B007RPKWFE/ref=sr_1_16?ie=UTF8&qid=1493937297&sr=8-16&keywords=meg+ryan',
            ]);
        Movie::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => "When Harry Met Sally",
                'cover' => 'http://i.imgur.com/Bcpbrdy.jpg',
                'actor' => 'Meg Ryan Billy Crystal',
                'genre' => 'Comedy Drama Romance',
                'description' => 'Does sex make it impossible for men and women to be true friends? The film chronicles this dilemma through the eleven year relationship between Harry and Sally who meet in college, then pursue their own lives until they reconnect ten years later.',
                'purchase_link' => 'https://www.amazon.com/When-Harry-Sally-Billy-Crystal/dp/B001Q556QG/ref=sr_1_9?ie=UTF8&qid=1493937484&sr=8-9&keywords=meg+ryan',
            ]);
         Movie::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => "Parental Guidance",
                'cover' => 'http://i.imgur.com/Gi0eZRa.jpg',
                'actor' => 'Billy Crystal Bette Midler',
                'genre' => 'Comedy Family',
                'description' => "Billy Crystal, Bette Midler and Marisa Tomei prove that laughter is relative in this hilarious comedy that's fun for the whole family!",
                'purchase_link' => 'https://www.amazon.com/Parental-Guidance-Billy-Crystal/dp/B00C1BVM8A/ref=sr_1_10?ie=UTF8&qid=1493937642&sr=8-10&keywords=billy+crystal',
            ]);
         Movie::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => "Dead Poets Society",
                'cover' => 'http://i.imgur.com/ZyJhKHR.jpg',
                'actor' => 'Robin Williams Rober Sean Leonard',
                'genre' => 'Comedy Drama',
                'description' => 'Academy Award(R) winner Robin Williams (Best Supporting Actor, Good Will Hunting, 1997) stars as a teacher who inspires his students to live their lives to the fullest and "Carpe Diem." But when tragedy strikes, his lessons are put to the test.',
                'purchase_link' => 'https://www.amazon.com/Dead-Poets-Society-Robin-Williams/dp/B006YGMAIE/ref=sr_1_4?ie=UTF8&qid=1493937842&sr=8-4&keywords=robin+williams',
            ]);
         Movie::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => 'Hook',
                'cover' => 'http://i.imgur.com/1GxY0RC.jpg',
                'actor' => 'Robin Williams Dustin Hoffman',
                'genre' => 'Adventure Comedy Family',
                'description' => 'Superstars Robin Williams, Dustin Hoffman and Julia Roberts star in award-winning director Steve Spielberg\'s updating of PETER PAN.',
                'purchase_link' => 'https://www.amazon.com/Hook-Dustin-Hoffman/dp/B000PUV1ZI/ref=sr_1_8?ie=UTF8&qid=1493937995&sr=8-8&keywords=robin+williams',
            ]);
         Movie::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => 'Grumpy Old Men',
                'cover' => 'http://i.imgur.com/BG5uqYK.jpg',
                'actor' => 'Walter Matthau Jack Lemmon',
                'genre' => 'Comedy Drama Romance',
                'description' => 'Jack Lemmon and Walter Matthau reunite in this romantic comedy that examines the decades-old love-hate relationship between two neighbors.',
                'purchase_link' => 'https://www.amazon.com/Grumpy-Old-Men-Jack-Lemmon/dp/B000RO840C/ref=sr_1_1?ie=UTF8&qid=1493938266&sr=8-1&keywords=grumpy+old+men',
            ]);
          Movie::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => 'Grumpier Old Men',
                'cover' => 'http://i.imgur.com/N101pMZ.jpg',
                'actor' => 'Walter Matthau Jack Lemmon',
                'genre' => 'Comedy Romance',
                'description' => 'The only joy Max claims is left in his life is fishing, but that mightchange with the new owner of the bait shop.',
                'purchase_link' => 'https://www.amazon.com/Grumpier-Old-Men-Jack-Lemmon/dp/B00AUOUG8W/ref=sr_1_1?ie=UTF8&qid=1493938389&sr=8-1&keywords=grumpier+old+men+in+amazon+prime',
            ]);
           Movie::insert([
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
                'title' => 'Out to Sea',
                'cover' => 'http://i.imgur.com/WMs0p8X.jpg',
                'actor' => 'Walter Matthau Jack Lemmon',
                'genre' => 'Comedy Romance',
                'description' => 'Two old men board a cruise ship with the intent of defrauding rich widows.',
                'purchase_link' => 'https://www.amazon.com/Out-Sea-Jack-Lemmon/dp/B000I9X7QC/ref=sr_1_1?ie=UTF8&qid=1493938494&sr=8-1&keywords=out+to+sea',
            ]);
    }
}
