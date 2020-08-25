<?php

use Illuminate\Database\Seeder;
class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dish = new \App\Dish();
        $dish->name = 'JERK CHICKEN';
        $dish->price = '4.8';
        $dish->image = 'https://www.gordonramsay.com/assets/Recipes/_resampled/CroppedFocusedImage192072050-50-Jerk-Chicken-626.jpg';
        $dish->save();

        $dish = new \App\Dish();
        $dish->name = 'CHICKEN & AUTUMN VEGETABLE PIES';
        $dish->price = '2.3';
        $dish->image = 'https://www.gordonramsay.com/assets/Recipes/_resampled/CroppedFocusedImage192072050-50-Chicken-Veg-Pie-1078.jpg';
        $dish->save();

        $dish = new \App\Dish();
        $dish->name = 'LEAN MACHINE CHICKEN SKEWERS';
        $dish->price = '1.4';
        $dish->image = 'https://www.gordonramsay.com/assets/Recipes/_resampled/CroppedFocusedImage192072050-50-Lean-MACHINE-chicken-skewers.jpg';
        $dish->save();

        $dish = new \App\Dish();
        $dish->name = 'COURGETTI SPAGHETTI AND TURKEY MEATBALLS';
        $dish->price = '1.5';
        $dish->image = 'https://www.gordonramsay.com/assets/Uploads/_resampled/CroppedFocusedImage192072050-50-Courgetti-Spaghetti-With-Meatballs.png';
        $dish->save();

        $dish = new \App\Dish();
        $dish->name = 'BEEF WELLINGTON';
        $dish->price = '5.6';
        $dish->image = 'https://www.gordonramsay.com/assets/Uploads/_resampled/CroppedFocusedImage192072050-50-beef-well-banner.png';
        $dish->save();

        $dish = new \App\Dish();
        $dish->name = 'STEAK SANDWICHES';
        $dish->price = '3.4';
        $dish->image = 'https://www.gordonramsay.com/assets/Uploads/_resampled/CroppedFocusedImage192072050-50-Steak-Sandwich.jpg';
        $dish->save();

        $dish = new \App\Dish();
        $dish->name = 'BANANA AND APPLE CRISPS';
        $dish->price = '2.3';
        $dish->image = 'https://www.gordonramsay.com/assets/Uploads/_resampled/CroppedFocusedImage192072050-50-Banana-and-apple-crisps.png';
        $dish->save();

        $dish = new \App\Dish();
        $dish->name = 'SPRING GREEN WRAPS';
        $dish->price = '7.6';
        $dish->image = 'https://www.gordonramsay.com/assets/Uploads/_resampled/CroppedFocusedImage192072050-50-spring-green-wraps.png';
        $dish->save();
    }
}
