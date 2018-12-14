<?php

use Illuminate\Database\Seeder;

class EstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('estates')->insert([ //inzerát 1
            'street' => "Ul. Mallého",
            'area' => 63,
            'price' => 76000,
            'room_number' => 3,
            'floors' => 2,
            'issale' => "1",
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit 
                              metus, ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2,
            'users_id' => 3,
            'village_id' =>  105,
            'UUID' => '6ebc33e6-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);



        DB::table('estates')->insert([ //inzerát 2
            'street' => "Medená",
            'area' => 52,
            'price' => 390,
            'room_number' => 1,
            'floors' => 4,
            'issale' => "0",
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 1,
            'users_id' => 1,
            'village_id' => 47,

            'UUID' => '6ebc376a-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);



        DB::table('estates')->insert([ // inzerát 3
            'street' => "Pražská ul.",
            'area' => 70,
            'price' => 86000,
            'room_number' => 3,
            'floors' => 2,
            'issale' => "1",
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2,
            'users_id' => 2,
            'village_id' => 809,

            'UUID' => '6ebc38e6-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 4
            'street' => "Švernova",
            'area' => 60,
            'price' => 375,
            'room_number' => 2,
            'floors' => 1,
            'issale' => "0",
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2,
            'users_id' => 4,
            'village_id' => 362,

            'UUID' => '6ebc3a26-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);



        DB::table('estates')->insert([ //inzerát 5
            'street' => "Hlavná",
            'area' => 45,
            'price' => 380,
            'room_number' => 2,
            'floors' => 1,
            'issale' => "0",
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2,
            'users_id' => 2,
            'village_id' => 14,

            'UUID' => '6ebc3b5c-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 6
            'street' => "Južná",
            'area' => 120,
            'price' => 250000,
            'room_number' => 5,
            'floors' => 1,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 3, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 3,
            'village_id' => 1783,

            'UUID' => '6ebc3c9c-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);




        DB::table('estates')->insert([ //inzerát 7
            'street' => "Mexiko",
            'area' => 50,
            'price' => 59000,
            'room_number' => 3,
            'floors' => 5,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 2,
            'village_id' => 986,

            'UUID' => '6ebc3dd2-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);



        DB::table('estates')->insert([ //inzerát 8
            'street' => "Tr. Andreja Hlinku",
            'area' => 56,
            'price' => 450,
            'room_number' => 2,
            'floors' => 1,
            'issale' => "0", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 4,
            'village_id' =>2068 ,

            'UUID' => '6ebc3f6c-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 9
            'street' => "Gagarinovo",
            'area' => 180,
            'price' => 355700,
            'room_number' => 6,
            'floors' => 2,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 3, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 4,
            'village_id' => 666,

            'UUID' => '6ebc420a-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 10
            'street' => "Internátna",
            'area' => 89,
            'price' => 109990,
            'room_number' => 4,
            'floors' => 4,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 2,
            'village_id' => 5,

            'UUID' => '6ebc435e-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);



        DB::table('estates')->insert([ //inzerát 11
            'street' => "Tehelňa",
            'area' => 70,
            'price' => 79990,
            'room_number' => 3,
            'floors' => 6,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 3,
            'village_id' => 2087,

            'UUID' => '6ebc449e-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);



        DB::table('estates')->insert([ //inzerát 12
            'street' => "Ďurková",
            'area' => 70,
            'price' => 520,
            'room_number' => 3,
            'floors' => 2,
            'issale' => "0", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 2,
            'village_id' => 348,

            'UUID' => '6ebc45d4-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 13
            'street' => "Panská",
            'area' => 228,
            'price' => 315000,
            'room_number' => 7,
            'floors' => 2,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 3, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 2,
            'village_id' => 3987,

            'UUID' => '6ebc4700-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);



        DB::table('estates')->insert([ //inzerát 14
            'street' => "Uherová",
            'area' => 58,
            'price' => 89000,
            'room_number' => 3,
            'floors' => 5,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 2,
            'village_id' => 111,

            'UUID' => '6ebc4836-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 15
            'street' => "Záhradnická",
            'area' => 47,
            'price' => 51900,
            'room_number' => 2,
            'floors' => 4,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 3,
            'village_id' => 4000,

            'UUID' => '6ebc4976-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);



        DB::table('estates')->insert([ //inzerát 16
            'street' => "Mlynská",
            'area' => 72,
            'price' => 54990,
            'room_number' => 1,
            'floors' => 6,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 1, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 2,
            'village_id' => 507,

            'UUID' => '6ebc4bba-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 17
            'street' => "Tehelná",
            'area' => 54,
            'price' => 500,
            'room_number' => 2,
            'floors' => 3,
            'issale' => "0", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 2,
            'village_id' => 50,

            'UUID' => '6ebc4cf0-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 18
            'street' => "Prostejovská",
            'area' => 80,
            'price' => 86000,
            'room_number' => 4,
            'floors' => 1,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 4,
            'village_id' => 2047,

            'UUID' => '6ebc4e26-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 19
            'street' => "Ludvíka Svobodu",
            'area' => 64,
            'price' => 500,
            'room_number' => 3,
            'floors' => 6,
            'issale' => "0", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 3,
            'village_id' => 55,


            'UUID' => '6ebc4f5c-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 20
            'street' => "Hrabovská cesta",
            'area' => 29,
            'price' => 48500,
            'room_number' => 1,
            'floors' => 4,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 2,
            'village_id' => 444,

            'UUID' => '6ebc5088-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 21
            'street' => "Hliník nad Váhom",
            'area' => 109,
            'price' => 98990,
            'room_number' => 3,
            'floors' => 6,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 3,
            'village_id' => 76,

            'UUID' => '6ebc51be-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 22
            'street' => "Húskovská",
            'area' => 178,
            'price' => 103990,
            'room_number' => 4,
            'floors' => 6,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 5,
            'village_id' => 1477,

            'UUID' => '6ebc53da-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 23
            'street' => "Podjavorinskej",
            'area' => 234,
            'price' => 450000,
            'room_number' => 6,
            'floors' => 1,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 3, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 4,
            'village_id' => 525,

            'UUID' => '6ebc551a-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 24
            'street' => "Dolná ružová",
            'area' => 82,
            'price' => 110000,
            'room_number' => 3,
            'floors' => 4,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 6,
            'village_id' => 777,

            'UUID' => '6ebc5650-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);




        DB::table('estates')->insert([ //inzerát 25
            'street' => "Opatovská",
            'area' => 85,
            'price' => 84900,
            'room_number' => 4,
            'floors' => 3,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 2,
            'village_id' => 4000,

            'UUID' => '6ebc5786-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);




        DB::table('estates')->insert([ //inzerát 26
            'street' => "Rožňavská",
            'area' => 67,
            'price' => 39000,
            'room_number' => 3,
            'floors' => 4,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 3,
            'village_id' => 666,

            'UUID' => '6ebc58bc-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);



        DB::table('estates')->insert([ //inzerát 27
            'street' => "Baničova",
            'area' => 64,
            'price' => 510,
            'room_number' => 2,
            'floors' => 1,
            'issale' => "0", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 3,
            'village_id' =>870,

            'UUID' => '6ebc59f2-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 28
            'street' => "Chorvátsky Grob",
            'area' => 60,
            'price' => 107000,
            'room_number' => 2,
            'floors' => 2,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 2,
            'village_id' => 5,

            'UUID' => '6ebc5b28-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);



        DB::table('estates')->insert([ //inzerát 29
            'street' => "Dunajská",
            'area' => 81,
            'price' => 98900,
            'room_number' => 4,
            'floors' => 3,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 3,
            'village_id' => 333,

            'UUID' => '6ebc5f10-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);



        DB::table('estates')->insert([ //inzerát 30
            'street' => "Centro",
            'area' => 90,
            'price' => 500,
            'room_number' => 2,
            'floors' => 4,
            'issale' => "0", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 2, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 5,
            'village_id' => 100,

            'UUID' => '6ebc6082-fbb1-11e8-8eb2-f2801f1b9fd1'

        ]);


        DB::table('estates')->insert([ //inzerát 31
            'street' => "Palackého",
            'area' => 50,
            'price' => 200,
            'room_number' => 2,
            'floors' => 1,
            'issale' => "0", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 4, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 3,
            'village_id' => 59,

            'UUID' => '07e65733-f013-41d0-a694-57fbbb3a8c48'

        ]);



        DB::table('estates')->insert([ //inzerát 32
            'street' => "Centrum",
            'area' => 120,
            'price' => 1000,
            'room_number' => 1,
            'floors' => 1,
            'issale' => "0", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 4, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 3,
            'village_id' => 69,

            'UUID' => '6540ba28-03ea-4949-9989-da655725a7f8'

        ]);



        DB::table('estates')->insert([ //inzerát 33
            'street' => "Hrachovište",
            'area' => 4880,
            'price' => 60000,
            'room_number' => null,
            'floors' => null,
            'issale' => "1", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 5, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 2,
            'village_id' => 8,

            'UUID' => 'eb5c5688-b24b-47b6-9081-e41bb7f7d0a5'

        ]);


        DB::table('estates')->insert([ //inzerát 34
            'street' => "Kysucká ul.",
            'area' => 620,
            'price' => 4000,
            'room_number' => null,
            'floors' => null,
            'issale' => "0", //1-predaj, 0-prenajom
            'description' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean et est a dui semper facilisis. 
                              Pellentesque placerat elit a nunc. Nullam tortor odio, rutrum quis, egestas ut, posuere sed, felis. 
                              Vestibulum placerat feugiat nisl. Suspendisse lacinia, odio non feugiat vestibulum, sem erat blandit metus, 
                              ac nonummy magna odio pharetra felis. Vivamus vehicula velit non metus faucibus auctor. Nam sed augue. 
                              Donec orci. Cras eget diam et dolor dapibus sollicitudin. In lacinia, tellus vitae laoreet ultrices, 
                              lectus ligula dictum dui, eget condimentum velit dui vitae ante. Nulla nonummy augue nec pede. 
                              Pellentesque ut nulla. Donec at libero. Pellentesque at nisl ac nisi fermentum viverra. Praesent odio. 
                              Phasellus tincidunt diam ut ipsum. Donec eget est.",


            'estate_type_id' => 5, //1-gars.,  2-byt, 3-dom, 4-nebyt., 5-pozemok, 6-ine
            'users_id' => 2, // od 2 vyššie , 1-je nulový,
            'village_id' => 700, // podla databázy (1-4208)

            'UUID' => '3b0f73bd-cc9b-49d0-9c13-4ae2f9bc98a3'

        ]);

    }
}
