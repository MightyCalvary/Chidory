<?php

use Illuminate\Database\Seeder;

use App\WebContent;
use Carbon\Carbon;

class WebContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. SIMPAN PORTFOLIO
        $this->portfolio();
    }

    private function portfolio(){
        $link    = [
            [
                'category'  => 'Prewedding', 
                'caption'   => 'Prewedding Indra & Lia', 
                'thumbnail' => '/gambar/portfolio/prewedding/indralia/1.jpg', 
                'photos'    => [
                                '/gambar/portfolio/prewedding/indralia/2.jpg',
                                '/gambar/portfolio/prewedding/indralia/3.jpg',
                                '/gambar/portfolio/prewedding/indralia/4.jpg',
                                '/gambar/portfolio/prewedding/indralia/5.jpg',
                                '/gambar/portfolio/prewedding/indralia/6.jpg',
                                '/gambar/portfolio/prewedding/indralia/7.jpg',
                                '/gambar/portfolio/prewedding/indralia/8.jpg',
                                '/gambar/portfolio/prewedding/indralia/9.jpg',
                               ], 
            ],
            [
                'category'  => 'Wedding', 
                'caption'   => 'Wedding Fendy & Sianita', 
                'thumbnail' => '/gambar/portfolio/wedding/fennita/1.jpg', 
                'photos'    => [
                                '/gambar/portfolio/wedding/fennita/2.jpg',
                                '/gambar/portfolio/wedding/fennita/3.jpg',
                                '/gambar/portfolio/wedding/fennita/4.jpg',
                                '/gambar/portfolio/wedding/fennita/5.jpg',
                                '/gambar/portfolio/wedding/fennita/6.jpg',
                                '/gambar/portfolio/wedding/fennita/7.jpg',
                                '/gambar/portfolio/wedding/fennita/8.jpg',
                                '/gambar/portfolio/wedding/fennita/9.jpg',
                               ], 
            ],
            [
                'category'  => 'Maternity', 
                'caption'   => 'Maternity Yehuda & Ruth', 
                'thumbnail' => '/gambar/portfolio/maternity/yehuthe/1.jpg', 
                'photos'    => [
                                '/gambar/portfolio/maternity/yehuthe/2.jpg',
                                '/gambar/portfolio/maternity/yehuthe/3.jpg',
                                '/gambar/portfolio/maternity/yehuthe/4.jpg',
                                '/gambar/portfolio/maternity/yehuthe/5.jpg',
                                '/gambar/portfolio/maternity/yehuthe/6.jpg',
                                '/gambar/portfolio/maternity/yehuthe/7.jpg',
                               ], 
            ],
            [
                'category'  => 'Graduation', 
                'caption'   => 'Graduation Yohana', 
                'thumbnail' => '/gambar/portfolio/graduation/yohana/1.jpg', 
                'photos'    => [
                                '/gambar/portfolio/graduation/yohana/2.jpg',
                                '/gambar/portfolio/graduation/yohana/3.jpg',
                                '/gambar/portfolio/graduation/yohana/4.jpg',
                                '/gambar/portfolio/graduation/yohana/5.jpg',
                                '/gambar/portfolio/graduation/yohana/6.jpg',
                                '/gambar/portfolio/graduation/yohana/7.jpg',
                                '/gambar/portfolio/graduation/yohana/8.jpg',
                                '/gambar/portfolio/graduation/yohana/9.jpg',
                               ], 
            ],
            [
                'category'  => 'Children', 
                'caption'   => 'Baby Showcase', 
                'thumbnail' => '/gambar/portfolio/children/showcase/1.jpg', 
                'photos'    => [
                                '/gambar/portfolio/children/showcase/2.jpg',
                                '/gambar/portfolio/children/showcase/3.jpg',
                                '/gambar/portfolio/children/showcase/4.jpg',
                                '/gambar/portfolio/children/showcase/5.jpg',
                                '/gambar/portfolio/children/showcase/6.jpg',
                                '/gambar/portfolio/children/showcase/7.jpg',
                                '/gambar/portfolio/children/showcase/8.jpg',
                                '/gambar/portfolio/children/showcase/9.jpg',
                                '/gambar/portfolio/children/showcase/10.jpg',
                                '/gambar/portfolio/children/showcase/11.jpg',
                               ], 
            ],
            [
                'category'  => 'Children', 
                'caption'   => 'Kiddo Showcase', 
                'thumbnail' => '/gambar/portfolio/children/showcase/12.jpg', 
                'photos'    => [
                                '/gambar/portfolio/children/showcase/13.jpg',
                                '/gambar/portfolio/children/showcase/14.jpg',
                               ], 
            ],
            [
                'category'  => 'Product', 
                'caption'   => 'Eatery', 
                'thumbnail' => '/gambar/portfolio/product/eatery/1.jpg', 
                'photos'    => [
                                '/gambar/portfolio/product/eatery/2.jpg',
                                '/gambar/portfolio/product/eatery/3.jpg',
                                '/gambar/portfolio/product/eatery/4.jpg',
                                '/gambar/portfolio/product/eatery/5.jpg',
                                '/gambar/portfolio/product/eatery/6.jpg',
                                '/gambar/portfolio/product/eatery/7.jpg',
                               ], 
            ],
        ];

    	foreach ($link as $k => $v) {
            $pfolio 		= new WebContent;
    		$pfolio->type 	= 'photography';
            // $pfolio->keyword    = $v['category'];
            $pfolio->category   = $v['category'];
            $pfolio->caption    = $v['caption'];
    		$pfolio->published_at 	= Carbon::now();
            $pfolio->gallery        = ['thumbnail' => $v['thumbnail'], 'photos' => $v['photos']];
    		$pfolio->description 	= ['text' => $this->default_lipsum()];
    		$pfolio->save();
    	}
    }

    private function default_lipsum(){
        return '<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p><p>Fusce dapibus, tellus ac cursus commodo, tortor mauris, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo. condimentum nibh.</p>';
    }
}
