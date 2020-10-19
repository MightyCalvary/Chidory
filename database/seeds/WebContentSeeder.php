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
                'caption'   => 'Indra & Lia', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/prewedding/indralia/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/prewedding/indralia/2.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/indralia/3.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/indralia/4.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/indralia/5.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/indralia/6.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/indralia/7.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/indralia/8.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/indralia/9.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Prewedding', 
                'caption'   => 'Ekky & Selly', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/prewedding/eksel/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/prewedding/eksel/2.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/eksel/3.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/eksel/4.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/eksel/5.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/eksel/6.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/eksel/7.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/eksel/8.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/eksel/9.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/eksel/10.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/eksel/11.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/eksel/12.jpg',
                                'http://chidory.co/gambar/portfolio/prewedding/eksel/13.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Wedding', 
                'caption'   => 'Fendy & Sianita', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/wedding/fennita/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/wedding/fennita/2.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/fennita/3.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/fennita/4.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/fennita/5.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/fennita/6.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/fennita/7.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/fennita/8.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/fennita/9.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Maternity', 
                'caption'   => 'Yehuda & Ruth', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/maternity/yehuthe/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/maternity/yehuthe/2.jpg',
                                'http://chidory.co/gambar/portfolio/maternity/yehuthe/3.jpg',
                                'http://chidory.co/gambar/portfolio/maternity/yehuthe/4.jpg',
                                'http://chidory.co/gambar/portfolio/maternity/yehuthe/5.jpg',
                                'http://chidory.co/gambar/portfolio/maternity/yehuthe/6.jpg',
                                'http://chidory.co/gambar/portfolio/maternity/yehuthe/7.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Graduation', 
                'caption'   => 'Graduation Yohana', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/graduation/yohana/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/graduation/yohana/2.jpg',
                                'http://chidory.co/gambar/portfolio/graduation/yohana/3.jpg',
                                'http://chidory.co/gambar/portfolio/graduation/yohana/4.jpg',
                                'http://chidory.co/gambar/portfolio/graduation/yohana/5.jpg',
                                'http://chidory.co/gambar/portfolio/graduation/yohana/6.jpg',
                                'http://chidory.co/gambar/portfolio/graduation/yohana/7.jpg',
                                'http://chidory.co/gambar/portfolio/graduation/yohana/8.jpg',
                                'http://chidory.co/gambar/portfolio/graduation/yohana/9.jpg',
                               ], 
                'description'   => '<p>Bulan April 2017, saya kelimpungan mencari photographer untuk acara wisuda putra saya. Maklum, saya masih baru di kota Malang. "Lucky me"!!, seorang teman memberitahukan satu nama, "Chidory-Photograph Malang".</p><p>Ternyata, saya tidak salah pilih! Hasilnya sangat bagus, terang, jernih, dan ini yang saya suka yaitu "natural"- mengambil moment yang pas dan asyik banget dilihat! Team dari Chidory sangat koperatif , sabar n on time. Dengan hasil yang memuaskan, saya tidak ragu lagi menggunakan jasa Chidory saat wisuda putri saya yang kedua, di bulan Sept 2018.</p>',
            ],
            [
                'category'  => 'Children', 
                'caption'   => 'Baby Showcase', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/children/showcase/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/children/showcase/2.jpg',
                                'http://chidory.co/gambar/portfolio/children/showcase/3.jpg',
                                'http://chidory.co/gambar/portfolio/children/showcase/4.jpg',
                                'http://chidory.co/gambar/portfolio/children/showcase/5.jpg',
                                'http://chidory.co/gambar/portfolio/children/showcase/6.jpg',
                                'http://chidory.co/gambar/portfolio/children/showcase/7.jpg',
                                'http://chidory.co/gambar/portfolio/children/showcase/8.jpg',
                                'http://chidory.co/gambar/portfolio/children/showcase/9.jpg',
                                'http://chidory.co/gambar/portfolio/children/showcase/10.jpg',
                                'http://chidory.co/gambar/portfolio/children/showcase/11.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Children', 
                'caption'   => 'Kiddo Showcase', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/children/showcase/12.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/children/showcase/13.jpg',
                                'http://chidory.co/gambar/portfolio/children/showcase/14.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Product', 
                'caption'   => 'Kue Bina Rasa, Pasuruan', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/product/eatery/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/product/eatery/2.jpg',
                                'http://chidory.co/gambar/portfolio/product/eatery/3.jpg',
                                'http://chidory.co/gambar/portfolio/product/eatery/4.jpg',
                                'http://chidory.co/gambar/portfolio/product/eatery/5.jpg',
                                'http://chidory.co/gambar/portfolio/product/eatery/6.jpg',
                                'http://chidory.co/gambar/portfolio/product/eatery/7.jpg',
                               ], 
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Wedding', 
                'caption'   => 'Hendry & Yasmin', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/wedding/hemin/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/wedding/hemin/2.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/3.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/4.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/5.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/6.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/7.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/8.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/9.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/10.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/11.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/12.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/13.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/14.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/15.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/16.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/17.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/18.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/hemin/19.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
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
    		$pfolio->description 	= ['text' => $v['description']];
    		$pfolio->save();
    	}

        $video    = [
            [
                'category'  => 'Profile', 
                'caption'   => 'Perusahaam Umum Jasa Tirta 1', 
                'embeed'    => 'http://chidory.co/gambar/portfolio/profile/jasatirta/video.mp4', 
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Profile', 
                'caption'   => 'PT. Nestle Indonesia', 
                'embeed'    => 'http://chidory.co/gambar/portfolio/profile/nestle/video.mp4', 
                'description'   => $this->default_lipsum(), 
            ],
        ];

        foreach ($video as $k => $v) {
            $pfolio         = new WebContent;
            $pfolio->type   = 'videography';
            // $pfolio->keyword    = $v['category'];
            $pfolio->category   = $v['category'];
            $pfolio->caption    = $v['caption'];
            $pfolio->published_at   = Carbon::now();
            $pfolio->gallery        = ['embeed' => $v['embeed']];
            $pfolio->description    = ['text' => $v['description']];
            $pfolio->save();
        }
    }

    private function default_lipsum(){
        return '<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p><p>Fusce dapibus, tellus ac cursus commodo, tortor mauris, ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>';
    }
}
