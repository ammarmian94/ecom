<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo Mobile',
                'price'=>"21000",
                'category'=>"Electronics",
                "description"=>"3GB Ram, 64 Rom wit 49MP Selfie Camera",
                "gallery"=>"https://www.godigit.com/content/dam/godigit/directportal/en/contenthm/oppo-a55.jpg"
            ],
            [
                'name'=>'Samsung Mobile',
                'price'=>"39000",
                'category'=>"Electronics",
                "description"=>"6GB Ram, 256 Rom wit 49MP Selfie Camera",
                "gallery"=>"https://www.91-cdn.com/hub/wp-content/uploads/2021/11/Samsung-Galaxy-S21-FE-featured.png?tr=q-100"
            ],
            [
                'name'=>'Lenovo LCD',
                'price'=>"36000",
                'category'=>"tv",
                "description"=>"32 inch LCD monitor with HDMI support",
                "gallery"=>"https://service.pcconnection.com/images/inhouse/C860E5FA-5C3A-43EA-9938-58355838BC69.jpg"
            ],
            [
                'name'=>'fridge',
                'price'=>"85000",
                'category'=>"fridge",
                "description"=>"jumbo size fridge on special discount",
                "gallery"=>"https://media.istockphoto.com/photos/refrigerator-with-fruits-and-vegetables-picture-id842160124?k=20&m=842160124&s=612x612&w=0&h=GrjPQBB3DRGLEtm1Oa0gcTpMOhdOpXGgECnLB8qVnJg="
            ]

        ]);
    }
}
