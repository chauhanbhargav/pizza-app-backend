<?php

use App\Models\PizzaCrust;
use App\Models\PizzaDetail;
use App\Models\PizzaPrice;
use App\Models\PizzaSize;
use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Margherita',
                'description' => 'A hugely popular margherita, with a deliciously tangy single cheese topping',
                'image' => 'images/Margherit.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'dollar' => 2, 'euro' => 1],
                    ['size_id' => 1, 'crust_id' => 2, 'dollar' => 4, 'euro' => 3],
                    ['size_id' => 1, 'crust_id' => 3, 'dollar' => 6, 'euro' => 5],
                    ['size_id' => 1, 'crust_id' => 4, 'dollar' => 8, 'euro' => 7],
                    ['size_id' => 2, 'crust_id' => 1, 'dollar' => 3, 'euro' => 2],
                    ['size_id' => 2, 'crust_id' => 2, 'dollar' => 6, 'euro' => 5],
                    ['size_id' => 2, 'crust_id' => 3, 'dollar' => 12, 'euro' => 11],
                    ['size_id' => 2, 'crust_id' => 4, 'dollar' => 16, 'euro' => 15],
                    ['size_id' => 3, 'crust_id' => 1, 'dollar' => 4, 'euro' => 3],
                    ['size_id' => 3, 'crust_id' => 2, 'dollar' => 8, 'euro' => 7],
                    ['size_id' => 3, 'crust_id' => 3, 'dollar' => 16, 'euro' => 15],
                    ['size_id' => 3, 'crust_id' => 4, 'dollar' => 20, 'euro' => 19]
                ]
            ],
            [
                'name' => 'Double Cheese Margherita',
                'description' => 'The ever-popular Margherita - loaded with extra cheese... oodies of it!',
                'image' => 'images/Double_Cheese_Margherita.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'dollar' => 4, 'euro' => 3],
                    ['size_id' => 1, 'crust_id' => 2, 'dollar' => 5, 'euro' => 4],
                    ['size_id' => 1, 'crust_id' => 3, 'dollar' => 7, 'euro' => 6],
                    ['size_id' => 1, 'crust_id' => 4, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 2, 'crust_id' => 1, 'dollar' => 6, 'euro' => 5],
                    ['size_id' => 2, 'crust_id' => 2, 'dollar' => 9, 'euro' => 8],
                    ['size_id' => 2, 'crust_id' => 3, 'dollar' => 12, 'euro' => 11],
                    ['size_id' => 2, 'crust_id' => 4, 'dollar' => 15, 'euro' => 14],
                    ['size_id' => 3, 'crust_id' => 1, 'dollar' => 8, 'euro' => 7],
                    ['size_id' => 3, 'crust_id' => 2, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 3, 'crust_id' => 3, 'dollar' => 13, 'euro' => 12],
                    ['size_id' => 3, 'crust_id' => 4, 'dollar' => 18, 'euro' => 17]
                ]
            ],
            [
                'name' => 'Farm House',
                'description' => 'A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp capsicum, succulent mushrooms and fresh tomatoes',
                'image' => 'images/Farmhouse.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'dollar' => 3, 'euro' => 2],
                    ['size_id' => 1, 'crust_id' => 2, 'dollar' => 7, 'euro' => 6],
                    ['size_id' => 1, 'crust_id' => 3, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 1, 'crust_id' => 4, 'dollar' => 12, 'euro' => 11],
                    ['size_id' => 2, 'crust_id' => 1, 'dollar' => 5, 'euro' => 4],
                    ['size_id' => 2, 'crust_id' => 2, 'dollar' => 9, 'euro' => 8],
                    ['size_id' => 2, 'crust_id' => 3, 'dollar' => 11, 'euro' => 10],
                    ['size_id' => 2, 'crust_id' => 4, 'dollar' => 13, 'euro' => 12],
                    ['size_id' => 3, 'crust_id' => 1, 'dollar' => 7, 'euro' => 6],
                    ['size_id' => 3, 'crust_id' => 2, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 3, 'crust_id' => 3, 'dollar' => 13, 'euro' => 12],
                    ['size_id' => 3, 'crust_id' => 4, 'dollar' => 16, 'euro' => 17]
                ]
            ],
            [
                'name' => 'Peppy Paneer',
                'description' => 'Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful!.',
                'image' => 'images/Peppy_Paneer.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'dollar' => 2, 'euro' => 1],
                    ['size_id' => 1, 'crust_id' => 2, 'dollar' => 5, 'euro' => 4],
                    ['size_id' => 1, 'crust_id' => 3, 'dollar' => 9, 'euro' => 8],
                    ['size_id' => 1, 'crust_id' => 4, 'dollar' => 12, 'euro' => 11],
                    ['size_id' => 2, 'crust_id' => 1, 'dollar' => 5, 'euro' => 4],
                    ['size_id' => 2, 'crust_id' => 2, 'dollar' => 9, 'euro' => 8],
                    ['size_id' => 2, 'crust_id' => 3, 'dollar' => 11, 'euro' => 10],
                    ['size_id' => 2, 'crust_id' => 4, 'dollar' => 15, 'euro' => 14],
                    ['size_id' => 3, 'crust_id' => 1, 'dollar' => 7, 'euro' => 6],
                    ['size_id' => 3, 'crust_id' => 2, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 3, 'crust_id' => 3, 'dollar' => 14, 'euro' => 13],
                    ['size_id' => 3, 'crust_id' => 4, 'dollar' => 18, 'euro' => 17]
                ]
            ],
            [
                'name' => 'Mexican Green Wave',
                'description' => 'A pizza loaded with crunchy onions, crisp capsicum, juicy tomatoes and jalapeno with a liberal sprinkling of exotic Mexican herbs.',
                'image' => 'images/Mexican_Green_Wave.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'dollar' => 2, 'euro' => 1],
                    ['size_id' => 1, 'crust_id' => 2, 'dollar' => 4, 'euro' => 3],
                    ['size_id' => 1, 'crust_id' => 3, 'dollar' => 6, 'euro' => 5],
                    ['size_id' => 1, 'crust_id' => 4, 'dollar' => 8, 'euro' => 7],
                    ['size_id' => 2, 'crust_id' => 1, 'dollar' => 3, 'euro' => 2],
                    ['size_id' => 2, 'crust_id' => 2, 'dollar' => 6, 'euro' => 5],
                    ['size_id' => 2, 'crust_id' => 3, 'dollar' => 12, 'euro' => 11],
                    ['size_id' => 2, 'crust_id' => 4, 'dollar' => 16, 'euro' => 15],
                    ['size_id' => 3, 'crust_id' => 1, 'dollar' => 4, 'euro' => 3],
                    ['size_id' => 3, 'crust_id' => 2, 'dollar' => 8, 'euro' => 7],
                    ['size_id' => 3, 'crust_id' => 3, 'dollar' => 16, 'euro' => 15],
                    ['size_id' => 3, 'crust_id' => 4, 'dollar' => 20, 'euro' => 19]
                ]
            ],
            [
                'name' => 'Deluxe Veggie',
                'description' => 'For a vegetarian looking for a BIG treat that goes easy on the spices, this one\'s got it all.. The onions, the capsicum, those delectable mushrooms - with paneer and golden corn to top it all.',
                'image' => 'images/Deluxe_Veggie.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'dollar' => 4, 'euro' => 3],
                    ['size_id' => 1, 'crust_id' => 2, 'dollar' => 5, 'euro' => 4],
                    ['size_id' => 1, 'crust_id' => 3, 'dollar' => 7, 'euro' => 6],
                    ['size_id' => 1, 'crust_id' => 4, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 2, 'crust_id' => 1, 'dollar' => 6, 'euro' => 5],
                    ['size_id' => 2, 'crust_id' => 2, 'dollar' => 9, 'euro' => 8],
                    ['size_id' => 2, 'crust_id' => 3, 'dollar' => 12, 'euro' => 11],
                    ['size_id' => 2, 'crust_id' => 4, 'dollar' => 15, 'euro' => 14],
                    ['size_id' => 3, 'crust_id' => 1, 'dollar' => 8, 'euro' => 7],
                    ['size_id' => 3, 'crust_id' => 2, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 3, 'crust_id' => 3, 'dollar' => 13, 'euro' => 12],
                    ['size_id' => 3, 'crust_id' => 4, 'dollar' => 18, 'euro' => 17]
                ]
            ],
            [
                'name' => 'Veg Extravaganza',
                'description' => 'A pizza that decidedly staggers under an overload of golden corn, exotic black olives, crunchy onions, crisp capsicum, succulent mushrooms, juicyfresh tomatoes and jalapeno - with extra cheese to go all around.',
                'image' => 'images/Veg_Extravaganz.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'dollar' => 3, 'euro' => 2],
                    ['size_id' => 1, 'crust_id' => 2, 'dollar' => 7, 'euro' => 6],
                    ['size_id' => 1, 'crust_id' => 3, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 1, 'crust_id' => 4, 'dollar' => 12, 'euro' => 11],
                    ['size_id' => 2, 'crust_id' => 1, 'dollar' => 5, 'euro' => 4],
                    ['size_id' => 2, 'crust_id' => 2, 'dollar' => 9, 'euro' => 8],
                    ['size_id' => 2, 'crust_id' => 3, 'dollar' => 11, 'euro' => 10],
                    ['size_id' => 2, 'crust_id' => 4, 'dollar' => 13, 'euro' => 12],
                    ['size_id' => 3, 'crust_id' => 1, 'dollar' => 7, 'euro' => 6],
                    ['size_id' => 3, 'crust_id' => 2, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 3, 'crust_id' => 3, 'dollar' => 13, 'euro' => 12],
                    ['size_id' => 3, 'crust_id' => 4, 'dollar' => 16, 'euro' => 17]
                ]
            ],
            [
                'name' => 'CHEESE N CORN',
                'description' => 'Cheese Golden Corn pizza that decidedly staggers under an overload of golden corn, exotic black olives, crunchy onions, crisp capsicum, succulent mushrooms, juicyfresh tomatoes and jalapeno - with extra cheese to go all around.',
                'image' => 'images/Corn_&_Cheese.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'dollar' => 2, 'euro' => 1],
                    ['size_id' => 1, 'crust_id' => 2, 'dollar' => 5, 'euro' => 4],
                    ['size_id' => 1, 'crust_id' => 3, 'dollar' => 9, 'euro' => 8],
                    ['size_id' => 1, 'crust_id' => 4, 'dollar' => 12, 'euro' => 11],
                    ['size_id' => 2, 'crust_id' => 1, 'dollar' => 5, 'euro' => 4],
                    ['size_id' => 2, 'crust_id' => 2, 'dollar' => 9, 'euro' => 8],
                    ['size_id' => 2, 'crust_id' => 3, 'dollar' => 11, 'euro' => 10],
                    ['size_id' => 2, 'crust_id' => 4, 'dollar' => 15, 'euro' => 14],
                    ['size_id' => 3, 'crust_id' => 1, 'dollar' => 7, 'euro' => 6],
                    ['size_id' => 3, 'crust_id' => 2, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 3, 'crust_id' => 3, 'dollar' => 14, 'euro' => 13],
                    ['size_id' => 3, 'crust_id' => 4, 'dollar' => 18, 'euro' => 17]
                ]
            ],
            [
                'name' => 'Paneer Makhani',
                'description' => 'Paneer Makhani Pizza is an Indian style pizza wherein we blend the best ever taste of Paneer Makhani which is also known as Paneer Butter Masala with every one\'s favorite Pizza',
                'image' => 'images/Paneer_Makhni.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'dollar' => 2, 'euro' => 1],
                    ['size_id' => 1, 'crust_id' => 2, 'dollar' => 4, 'euro' => 3],
                    ['size_id' => 1, 'crust_id' => 3, 'dollar' => 6, 'euro' => 5],
                    ['size_id' => 1, 'crust_id' => 4, 'dollar' => 8, 'euro' => 7],
                    ['size_id' => 2, 'crust_id' => 1, 'dollar' => 3, 'euro' => 2],
                    ['size_id' => 2, 'crust_id' => 2, 'dollar' => 6, 'euro' => 5],
                    ['size_id' => 2, 'crust_id' => 3, 'dollar' => 12, 'euro' => 11],
                    ['size_id' => 2, 'crust_id' => 4, 'dollar' => 16, 'euro' => 15],
                    ['size_id' => 3, 'crust_id' => 1, 'dollar' => 4, 'euro' => 3],
                    ['size_id' => 3, 'crust_id' => 2, 'dollar' => 8, 'euro' => 7],
                    ['size_id' => 3, 'crust_id' => 3, 'dollar' => 16, 'euro' => 15],
                    ['size_id' => 3, 'crust_id' => 4, 'dollar' => 20, 'euro' => 19]
                ]
            ],
            [
                'name' => 'VEGGIE PARADISE',
                'description' => 'Goldern Corn, Black Olives, Capsicum & Red Paprika is an Indian style pizza which is also known as Paneer Butter Masala with every one\'s favorite Pizza',
                'image' => 'images/Digital_Veggie_Paradise_olo_266x265.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'dollar' => 4, 'euro' => 3],
                    ['size_id' => 1, 'crust_id' => 2, 'dollar' => 5, 'euro' => 4],
                    ['size_id' => 1, 'crust_id' => 3, 'dollar' => 7, 'euro' => 6],
                    ['size_id' => 1, 'crust_id' => 4, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 2, 'crust_id' => 1, 'dollar' => 6, 'euro' => 5],
                    ['size_id' => 2, 'crust_id' => 2, 'dollar' => 9, 'euro' => 8],
                    ['size_id' => 2, 'crust_id' => 3, 'dollar' => 12, 'euro' => 11],
                    ['size_id' => 2, 'crust_id' => 4, 'dollar' => 15, 'euro' => 14],
                    ['size_id' => 3, 'crust_id' => 1, 'dollar' => 8, 'euro' => 7],
                    ['size_id' => 3, 'crust_id' => 2, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 3, 'crust_id' => 3, 'dollar' => 13, 'euro' => 12],
                    ['size_id' => 3, 'crust_id' => 4, 'dollar' => 18, 'euro' => 17]
                ]
            ],
            [
                'name' => 'FRESH VEGGIE',
                'description' => 'Onion I Capsicum is an Indian style pizza which is also known as Paneer Butter Masala with every one\'s favorite Pizza',
                'image' => 'images/Fresh_Veggie.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'dollar' => 3, 'euro' => 2],
                    ['size_id' => 1, 'crust_id' => 2, 'dollar' => 7, 'euro' => 6],
                    ['size_id' => 1, 'crust_id' => 3, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 1, 'crust_id' => 4, 'dollar' => 12, 'euro' => 11],
                    ['size_id' => 2, 'crust_id' => 1, 'dollar' => 5, 'euro' => 4],
                    ['size_id' => 2, 'crust_id' => 2, 'dollar' => 9, 'euro' => 8],
                    ['size_id' => 2, 'crust_id' => 3, 'dollar' => 11, 'euro' => 10],
                    ['size_id' => 2, 'crust_id' => 4, 'dollar' => 13, 'euro' => 12],
                    ['size_id' => 3, 'crust_id' => 1, 'dollar' => 7, 'euro' => 6],
                    ['size_id' => 3, 'crust_id' => 2, 'dollar' => 10, 'euro' => 9],
                    ['size_id' => 3, 'crust_id' => 3, 'dollar' => 13, 'euro' => 12],
                    ['size_id' => 3, 'crust_id' => 4, 'dollar' => 16, 'euro' => 17]
                ]
            ]
        ];

        foreach ($data as $value) {
            $pizza = new PizzaDetail();
            $pizza->name = $value['name'];
            $pizza->description = $value['description'];
            $pizza->image = $value['image'];
            $pizza->save();

            foreach ($value['prices'] as $price) {
                $pizzaPrice = new PizzaPrice();
                $pizzaPrice->pizza_id = $pizza->id;
                $pizzaPrice->crust_id = $price['crust_id'];
                $pizzaPrice->size_id = $price['size_id'];
                $pizzaPrice->dollar = $price['dollar'];
                $pizzaPrice->euro = $price['euro'];
                $pizzaPrice->save();
            }
        }
    }
}
