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
                'thumbnail' => 'http://chidory.co/gambar/portfolio/product/binarasa/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/product/binarasa/2.jpg',
                                'http://chidory.co/gambar/portfolio/product/binarasa/3.jpg',
                                'http://chidory.co/gambar/portfolio/product/binarasa/4.jpg',
                                'http://chidory.co/gambar/portfolio/product/binarasa/5.jpg',
                                'http://chidory.co/gambar/portfolio/product/binarasa/6.jpg',
                                'http://chidory.co/gambar/portfolio/product/binarasa/7.jpg',
                               ], 
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Product', 
                'caption'   => 'Cake Bengawan Solo, Kedai Kue', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/product/kedaikue/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/product/kedaikue/2.jpg',
                                'http://chidory.co/gambar/portfolio/product/kedaikue/3.jpg',
                                'http://chidory.co/gambar/portfolio/product/kedaikue/4.jpg',
                                'http://chidory.co/gambar/portfolio/product/kedaikue/5.jpg',
                                'http://chidory.co/gambar/portfolio/product/kedaikue/6.jpg',
                                'http://chidory.co/gambar/portfolio/product/kedaikue/7.jpg',
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
            [
                'category'  => 'Wedding', 
                'caption'   => 'Albert & Lidia', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/wedding/alblid/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/wedding/alblid/2.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/alblid/3.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/alblid/4.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/alblid/5.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/alblid/6.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/alblid/7.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/alblid/8.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/alblid/9.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/alblid/10.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/alblid/11.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Wedding', 
                'caption'   => 'Rian & Natha', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/wedding/rinat/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/wedding/rinat/2.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rinat/3.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rinat/4.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rinat/5.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rinat/6.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rinat/7.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rinat/8.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rinat/9.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Children', 
                'caption'   => 'Ayu`s Love', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/children/ayu/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/children/ayu/2.jpg',
                                'http://chidory.co/gambar/portfolio/children/ayu/3.jpg',
                                'http://chidory.co/gambar/portfolio/children/ayu/4.jpg',
                                'http://chidory.co/gambar/portfolio/children/ayu/5.jpg',
                                'http://chidory.co/gambar/portfolio/children/ayu/6.jpg',
                                'http://chidory.co/gambar/portfolio/children/ayu/7.jpg',
                                'http://chidory.co/gambar/portfolio/children/ayu/8.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Wedding', 
                'caption'   => 'Rudi & Ayu', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/wedding/rayu/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/wedding/rayu/2.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rayu/3.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rayu/4.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rayu/5.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rayu/6.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rayu/7.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rayu/8.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rayu/9.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rayu/10.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rayu/11.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rayu/12.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/rayu/13.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Wedding', 
                'caption'   => 'Dimas & Bintari', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/wedding/ditari/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/wedding/ditari/2.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/ditari/3.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/ditari/4.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/ditari/5.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/ditari/6.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/ditari/7.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/ditari/8.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/ditari/9.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/ditari/10.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/ditari/11.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Wedding', 
                'caption'   => 'Bagas & Indah', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/wedding/baginda/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/wedding/baginda/2.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/baginda/3.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/baginda/4.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/baginda/5.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/baginda/6.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/baginda/7.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/baginda/8.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/baginda/9.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/baginda/10.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/baginda/11.jpg',
                               ],
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Wedding', 
                'caption'   => 'Febri & Lia', 
                'thumbnail' => 'http://chidory.co/gambar/portfolio/wedding/felia/1.jpg', 
                'photos'    => [
                                'http://chidory.co/gambar/portfolio/wedding/felia/2.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/felia/3.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/felia/4.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/felia/5.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/felia/6.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/felia/7.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/felia/8.jpg',
                                'http://chidory.co/gambar/portfolio/wedding/felia/9.jpg',
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
            [
                'category'  => 'Wedding', 
                'caption'   => 'Angga & Nungki', 
                'embeed'    => 'https://www.youtube.com/embed/BGd7tuB_kBk', 
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Wedding', 
                'caption'   => 'Rian & Natha', 
                'embeed'    => 'https://www.youtube.com/embed/fBEg0mFvTEw', 
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Wedding', 
                'caption'   => 'Rahul & Desi', 
                'embeed'    => 'https://www.youtube.com/embed/0VUDlZuM4m4', 
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Wedding', 
                'caption'   => 'Pri & Rachel', 
                'embeed'    => 'https://www.youtube.com/embed/T8AOEM8wcvA', 
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Wedding', 
                'caption'   => 'Ferdy & Christa', 
                'embeed'    => 'https://www.youtube.com/embed/oNJH6Aj9oUM', 
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Profile', 
                'caption'   => 'DRW Skincare', 
                'embeed'    => 'https://www.youtube.com/embed/xVGu6olu8Zc', 
                'description'   => $this->default_lipsum(), 
            ],
            [
                'category'  => 'Profile', 
                'caption'   => 'Villa Harmoni, Pujon', 
                'embeed'    => 'https://www.youtube.com/embed/jEZV8InhtMo', 
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
