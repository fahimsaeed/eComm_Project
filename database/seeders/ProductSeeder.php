<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Oppo Mobile',
                'price'=>'12300',
                'category'=>'Mobile Phones',
                'description'=>'A Smart Android Phone with 4g/5g',
                'gallery'=>'https://5.imimg.com/data5/WG/ZM/TG/ANDROID-98089178/product-jpeg-500x500.jpg',
            ],
            [
                'name'=>'Samsung LCD',
                'price'=>'20000',
                'category'=>'LCD & Monitors',
                'description'=>'24 inces Samsung LCD',
                'gallery'=>'https://www.savers.pk/images/thumbnails/1600/1400/detailed/78/DT-UN32N5300AFXZA-heroimage-050118.jpg',
            ],
            [
                'name'=>'LG LED',
                'price'=>'35000',
                'category'=>'LCD & Monitors',
                'description'=>'40 inces LG Company LED with Cristal Glass',
                'gallery'=>'https://www.lg.com/in/images/monitors/md05750468/gallery/Global_MP68VQ_2016_Gallery_medium01.jpg',
            ],
            [
                'name'=>'China Fridge',
                'price'=>'70000',
                'category'=>'Home Appliances',
                'description'=>'Double Door Refrigrator with Ice Cream Functionality',
                'gallery'=>'https://image.made-in-china.com/2f0j00hUFfGIWPqCgp/Side-by-Side-Double-Door-Refrigerator-No-Frost-Fridge-with-Ice-Maker.jpg',
            ],
            [
                'name'=>'Singer Fridge',
                'price'=>'35000',
                'category'=>'Home Appliances',
                'description'=>'Single Door Singer Company Fridge',
                'gallery'=>'https://shop.singerindia.net/wp-content/uploads/sites/2/2020/12/Refrigerator-Maxichill-220-Ltr-1-S-433x794.jpg',
            ]
        ]);
    }
}
