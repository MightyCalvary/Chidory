<?php

use Illuminate\Database\Seeder;

use App\WebConfig;
use Carbon\Carbon;

class WebConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. SIMPAN SLIDER
        $this->slider();

        //2. SIMPAN CATEGORY
        $this->category();
    }

    private function slider(){
        $link    = [
            [
                'web'   => '/gambar/slider/web/slider-web-1.jpg', 
                'link'  =>  route('showcase.portfolio', ['category' => 'Prewedding']),
                'mobile' => '/gambar/slider/mobile/slider-mobile-1.jpg', 
            ],
            [
                'web'   => '/gambar/slider/web/slider-web-2.jpg', 
                'link'  =>  route('showcase.portfolio', ['category' => 'Wedding']),
                'mobile' => '/gambar/slider/mobile/slider-mobile-2.jpg', 
            ],
            [
                'web'   => '/gambar/slider/web/slider-web-3.jpg', 
                'link'  =>  route('showcase.portfolio', ['category' => 'Maternity']),
                'mobile' => '/gambar/slider/mobile/slider-mobile-3.jpg', 
            ],
            [
                'web'   => '/gambar/slider/web/slider-web-4.jpg', 
                'link'  =>  route('showcase.portfolio', ['category' => 'Children']),
                'mobile' => '/gambar/slider/mobile/slider-mobile-4.jpg', 
            ],
            [
                'web'   => '/gambar/slider/web/slider-web-5.jpg', 
                'link'  =>  route('showcase.portfolio', ['category' => 'Graduation']),
                'mobile' => '/gambar/slider/mobile/slider-mobile-5.jpg', 
            ],
        ];

    	foreach ($link as $k => $v) {
    		$slider 		= new WebConfig;
    		$slider->type 	= 'slider';
    		$slider->published_at 	= Carbon::now();
    		$slider->content 		= ['web' => $v['web'], 'mobile' => $v['mobile'], 'link' => $v['link']];
    		$slider->save();
    	}
    }


    private function category(){
        $link    = [
            [
                'thumbnail'     => '/gambar/category/category-1.jpg', 
                'caption'       =>  'Love Will Find It`s Way',
                'link'          =>  route('showcase.portfolio', ['category' => 'Prewedding']),
                'category'      => 'Prewedding',
            ],
            [
                'thumbnail'     => '/gambar/category/category-2.jpg', 
                'caption'       =>  'I DO',
                'link'          =>  route('showcase.portfolio', ['category' => 'Wedding']),
                'category'      => 'Wedding',
            ],
            [
                'thumbnail'     => '/gambar/category/category-3.jpg', 
                'caption'       =>  'Precious Gift',
                'link'          =>  route('showcase.portfolio', ['category' => 'Maternity']),
                'category'      => 'Maternity',
            ],
            [
                'thumbnail'     => '/gambar/category/category-4.jpg', 
                'caption'       =>  'Dream Big',
                'link'          =>  route('showcase.portfolio', ['category' => 'Children']),
                'category'      => 'Children',
            ],
            [
                'thumbnail'     => '/gambar/category/category-5.jpg', 
                'caption'       =>  'Dream keep us awake',
                'link'          =>  route('showcase.portfolio', ['category' => 'Graduation']),
                'category'      => 'Graduation',
            ],
            [
                'thumbnail'     => '/gambar/category/category-6.jpg', 
                'caption'       =>  'Miscellaneous',
                'link'          =>  route('showcase.portfolio', ['category' => 'Product']),
                'category'      => 'Product',
            ],
        ];

        foreach ($link as $k => $v) {
            $category         = new WebConfig;
            $category->type   = 'category';
            $category->published_at   = Carbon::now();
            $category->content        = $v;
            $category->save();
        }
    }
}
