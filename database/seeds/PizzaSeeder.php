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
                'name' => 'Neapolitan Pizza',
                'description' => 'The typical Neapolitan pizza toppings are fresh mozzarella, tomatoes, basil leaves, oregano, and olive oil. Since Neapolitan pizza is thin, it isn\'t designed to handle the weight of too many toppings. In fact, Neapolitan pizza is so thin that it\'s typically eaten with a fork and knife.',
                'image' => 'images/paneer-makhani.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 49],
                    ['size_id' => 1, 'crust_id' => 2, 'price' => 99],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 149],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 99],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 149],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 4, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 1, 'price' => 149],
                    ['size_id' => 3, 'crust_id' => 2, 'price' => 199],
                    ['size_id' => 3, 'crust_id' => 3, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 4, 'price' => 399]
                ]
            ],
            [
                'name' => 'Chicago Pizza',
                'description' => 'Chicago pizza, also commonly referred to as deep-dish pizza, gets its name from the city it was invented in. During the early 1900’s, Italian immigrants in the windy city were searching for something similar to the Neapolitan pizza that they knew and loved. Instead of imitating the notoriously thin pie, Ike Sewell had something else in mind. He created a pizza with a thick crust that had raised edges, similar to a pie, and ingredients in reverse, with slices of mozzarella lining the dough followed by meat, vegetables, and then topped with a can of crushed tomatoes. This original creation led Sewell to create the now famous chain restaurant, Pizzeria Uno.',
                'image' => 'images/paneer-makhani.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 49],
                    ['size_id' => 1, 'crust_id' => 2, 'price' => 99],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 149],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 99],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 149],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 4, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 1, 'price' => 149],
                    ['size_id' => 3, 'crust_id' => 2, 'price' => 199],
                    ['size_id' => 3, 'crust_id' => 3, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 4, 'price' => 399]
                ]
            ],
            [
                'name' => 'New York-Style Pizza',
                'description' => 'New York-style pizza usually features tomato sauce and mozzarella cheese. Unlike its thin crust counterpart, the Neapolitan, New York-style pizzas can handle a wide range of additional toppings, from pepperoni and sausage to mushroom and anchovies. While this style of pizza can have virtually any topping added to it, it\'s common to find pizza lovers topping New York pizza with condiments, like oregano, red pepper flakes, Parmesan cheese, and garlic powder.',
                'image' => 'images/paneer-makhani.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 49],
                    ['size_id' => 1, 'crust_id' => 2, 'price' => 99],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 149],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 99],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 149],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 4, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 1, 'price' => 149],
                    ['size_id' => 3, 'crust_id' => 2, 'price' => 199],
                    ['size_id' => 3, 'crust_id' => 3, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 4, 'price' => 399]
                ]
            ],
            [
                'name' => 'Sicilian Pizza',
                'description' => 'Sicilian pizza, also known as "sfincione," provides a thick cut of pizza with pillowy dough, a crunchy crust, and robust tomato sauce. This square-cut pizza is served with or without cheese, and often with the cheese underneath the sauce to prevent the pie from becoming soggy. Sicilian pizza was brought to America in the 19th century by Sicilian immigrants and became popular in the United States after the Second World War.',
                'image' => 'images/paneer-makhani.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 49],
                    ['size_id' => 1, 'crust_id' => 2, 'price' => 99],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 149],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 99],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 149],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 4, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 1, 'price' => 149],
                    ['size_id' => 3, 'crust_id' => 2, 'price' => 199],
                    ['size_id' => 3, 'crust_id' => 3, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 4, 'price' => 399]
                ]
            ],
            [
                'name' => 'Greek Pizza',
                'description' => 'Greek pizza was created by Greek immigrants who came to America and were introduced to Italian pizza. Greek-style pizza, especially popular in the New England states, features a thick and chewy crust cooked in shallow, oiled pans, resulting in a nearly deep-fried bottom. While this style has a crust that is puffier and chewier than thin crust pizzas, it’s not quite as thick as a deep-dish or Sicilian crust.',
                'image' => 'images/paneer-makhani.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 49],
                    ['size_id' => 1, 'crust_id' => 2, 'price' => 99],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 149],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 99],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 149],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 4, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 1, 'price' => 149],
                    ['size_id' => 3, 'crust_id' => 2, 'price' => 199],
                    ['size_id' => 3, 'crust_id' => 3, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 4, 'price' => 399]
                ]
            ],
            [
                'name' => 'California Pizza',
                'description' => 'California pizza, or gourmet pizza, is known for its unusual ingredients. This pizza got its start back in the late 1970’s when Chef Ed LaDou began experimenting with pizza recipes in the classic Italian restaurant, Prego. He created a pizza with mustard, ricotta, pate, and red pepper, and by chance, served it to Wolfgang Puck. Impressed with LaDou’s innovative pie, Puck invited him to be a head pizza chef at his restaurant. It was here that LaDou came up with over 250 unique pizza recipes that eventually formed the menu of the chain restaurant California Pizza Kitchen.',
                'image' => 'images/paneer-makhani.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 49],
                    ['size_id' => 1, 'crust_id' => 2, 'price' => 99],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 149],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 99],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 149],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 4, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 1, 'price' => 149],
                    ['size_id' => 3, 'crust_id' => 2, 'price' => 199],
                    ['size_id' => 3, 'crust_id' => 3, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 4, 'price' => 399]
                ]
            ],
            [
                'name' => 'Detroit Pizza',
                'description' => 'Reflecting the city’s deep ties to the auto industry, Detroit-style pizza was originally baked in a square automotive parts pan in the 1940’s. Detroit pizza is first topped with pepperoni, followed by brick cheese which is spread to the very edges of the pan, yielding a caramelized cheese perimeter. Sauce is then spooned over the pizza, an order similar to Chicago-style pizza. This pizza features a thick, extra crispy crust that is tender and airy on the inside.',
                'image' => 'images/paneer-makhani.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 49],
                    ['size_id' => 1, 'crust_id' => 2, 'price' => 99],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 149],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 99],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 149],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 4, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 1, 'price' => 149],
                    ['size_id' => 3, 'crust_id' => 2, 'price' => 199],
                    ['size_id' => 3, 'crust_id' => 3, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 4, 'price' => 399]
                ]
            ],
            [
                'name' => 'St. Louis Pizza',
                'description' => 'Looking for a light slice? St. Louis pizza features a thin crust with a cracker-like consistency that is made without yeast. Due to the crispy crust, St. Louis pizza is usually cut into three- or four-inch rectangles, known as "party" or "tavern" cut. This pizza features Provel processed cheese, which is a gooey combination of cheddar, Swiss, and provolone cheeses. St. Louis received an influx of Italian immigrants in the 19th century who were looking for employment opportunities. The Italian community, largely from Milan and Sicily, created the St. Louis-style pizza. Its sweet sauce is reminiscent of the Sicilian influence.',
                'image' => 'images/paneer-makhani.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 49],
                    ['size_id' => 1, 'crust_id' => 2, 'price' => 99],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 149],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 99],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 149],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 4, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 1, 'price' => 149],
                    ['size_id' => 3, 'crust_id' => 2, 'price' => 199],
                    ['size_id' => 3, 'crust_id' => 3, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 4, 'price' => 399]
                ]
            ],
            [
                'name' => 'Paneer Makhani',
                'description' => 'Flavorful twist of spicy makhani sauce topped with paneer & capsicum',
                'image' => 'images/paneer-makhani.jpg',
                'sizes' => [1, 2, 3],
                'crusts' => [1, 2, 3, 4],
                'prices' => [
                    ['size_id' => 1, 'crust_id' => 1, 'price' => 49],
                    ['size_id' => 1, 'crust_id' => 2, 'price' => 99],
                    ['size_id' => 1, 'crust_id' => 3, 'price' => 149],
                    ['size_id' => 1, 'crust_id' => 4, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 1, 'price' => 99],
                    ['size_id' => 2, 'crust_id' => 2, 'price' => 149],
                    ['size_id' => 2, 'crust_id' => 3, 'price' => 199],
                    ['size_id' => 2, 'crust_id' => 4, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 1, 'price' => 149],
                    ['size_id' => 3, 'crust_id' => 2, 'price' => 199],
                    ['size_id' => 3, 'crust_id' => 3, 'price' => 299],
                    ['size_id' => 3, 'crust_id' => 4, 'price' => 399]
                ]
            ]
        ];

        foreach ($data as $value) {
            $pizza = new PizzaDetail();
            $pizza->name = $value['name'];
            $pizza->description = $value['description'];
            $pizza->save();

            foreach ($value['sizes'] as $size) {
                $pizzaSize = new PizzaSize();
                $pizzaSize->pizza_id = $pizza->id;
                $pizzaSize->size_id = $size;
                $pizzaSize->save();
            }

            foreach ($value['crusts'] as $crust) {
                $pizzaCrust = new PizzaCrust();
                $pizzaCrust->pizza_id = $pizza->id;
                $pizzaCrust->crust_id = $crust;
                $pizzaCrust->save();
            }

            foreach ($value['prices'] as $price) {
                $pizzaPrice = new PizzaPrice();
                $pizzaPrice->pizza_id = $pizza->id;
                $pizzaPrice->crust_id = $price['crust_id'];
                $pizzaPrice->size_id = $price['size_id'];
                $pizzaPrice->price = $price['price'];
                $pizzaPrice->save();
            }
        }
    }
}
