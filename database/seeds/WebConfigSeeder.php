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

        //3. SIMPAN VIDEO
        $this->video();

        //3. SIMPAN TESTIMONY
        $this->testimony();
    }

    private function slider(){
        $link    = [
            [
                'web'   => 'http://chidory.co/gambar/slider/web/slider-web-1.jpg', 
                'link'  =>  'http://chidory.co/portfolio/Prewedding',
                'mobile' => 'http://chidory.co/gambar/slider/mobile/slider-mobile-1.jpg', 
            ],
            [
                'web'   => 'http://chidory.co/gambar/slider/web/slider-web-2.jpg', 
                'link'  =>  'http://chidory.co/portfolio/Wedding',
                'mobile' => 'http://chidory.co/gambar/slider/mobile/slider-mobile-2.jpg', 
            ],
            [
                'web'   => 'http://chidory.co/gambar/slider/web/slider-web-3.jpg', 
                'link'  =>  'http://chidory.co/portfolio/Maternity',
                'mobile' => 'http://chidory.co/gambar/slider/mobile/slider-mobile-3.jpg', 
            ],
            [
                'web'   => 'http://chidory.co/gambar/slider/web/slider-web-4.jpg', 
                'link'  =>  'http://chidory.co/portfolio/Children',
                'mobile' => 'http://chidory.co/gambar/slider/mobile/slider-mobile-4.jpg', 
            ],
            [
                'web'   => 'http://chidory.co/gambar/slider/web/slider-web-5.jpg', 
                'link'  =>  'http://chidory.co/portfolio/Graduation',
                'mobile' => 'http://chidory.co/gambar/slider/mobile/slider-mobile-5.jpg', 
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
                'thumbnail'     => 'http://chidory.co/gambar/category/category-1.jpg', 
                'caption'       =>  'Love Will Find It`s Way',
                'link'          =>  'http://chidory.co/portfolio/Prewedding',
                'category'      => 'Prewedding',
            ],
            [
                'thumbnail'     => 'http://chidory.co/gambar/category/category-2.jpg', 
                'caption'       =>  'I DO',
                'link'          =>  'http://chidory.co/portfolio/Wedding',
                'category'      => 'Wedding',
            ],
            [
                'thumbnail'     => 'http://chidory.co/gambar/category/category-3.jpg', 
                'caption'       =>  'Precious Gift',
                'link'          =>  'http://chidory.co/portfolio/Maternity',
                'category'      => 'Maternity',
            ],
            [
                'thumbnail'     => 'http://chidory.co/gambar/category/category-4.jpg', 
                'caption'       =>  'Dream Big',
                'link'          =>  'http://chidory.co/portfolio/Children',
                'category'      => 'Children',
            ],
            [
                'thumbnail'     => 'http://chidory.co/gambar/category/category-5.jpg', 
                'caption'       =>  'Dream keep us awake',
                'link'          =>  'http://chidory.co/portfolio/Graduation',
                'category'      => 'Graduation',
            ],
            [
                'thumbnail'     => 'http://chidory.co/gambar/category/category-6.jpg', 
                'caption'       =>  'Miscellaneous',
                'link'          =>  'http://chidory.co/portfolio/Product',
                'category'      => 'Product',
            ],
            [
                'thumbnail'     => 'http://chidory.co/gambar/category/category-7.jpg', 
                'caption'       =>  'Where idea grows',
                'link'          =>  'http://chidory.co/portfolio/Profile',
                'category'      => 'Profile',
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

    private function video(){
        $link    = [
            [
                'embeed'        => 'http://chidory.co/video/chidory.mp4', 
                'title'         => 'Love', 
                'subtitle'      => 'will find it`s way', 
                'description'   => 'With the right gear, we strive to take the beauty and elegance of love itself in each of our works. Trust us, We will capture your moments.', 
            ],
        ];

        foreach ($link as $k => $v) {
            $video         = new WebConfig;
            $video->type   = 'video';
            $video->published_at   = Carbon::now();
            $video->content        = $v;
            $video->save();
        }
    }

    private function testimony(){
        $link    = [
            [
                'source'    => 'Yohana`s Mom', 
                'comment'   => 'Hasilnya sangat bagus, terang, jernih, dan ini yg aku suka yaitu "natural"- mengambil moment yang pas dan asyik banget dilihat!', 
            ],
            [
                'source'    => 'Bunda Nike', 
                'comment'   => 'Ramah, sabar sampai bisa dapat ekspresi terlucu si bayik, hasil juga tidak mengecewakan', 
            ],
            [
                'source'    => 'Uthe - Kiwa`s Mom', 
                'comment'   => 'Fotografernya sabar dan pandai memanfaatkan lokasi untuk mendapatkan hasil foto yang keren dan unforgettable', 
            ],
            [
                'source'    => 'Lia - Indra`s Wife', 
                'comment'   => 'Hasil fotonya baguss, natural, terlihatt cantik tiap anglenya.. Soal harga juga bersahabatt, gak ngecewain deh pokoknya.. Recommended banget buat abadikan moment berharga bareng chidory', 
            ],
            [
                'source'    => 'Ima - Cello`s Mom', 
                'comment'   => 'Seneng banget foto di chidory, hasilnya cakep n memuaskan.. fotografernya baik n sabar banget... apalagi harganya nyaman di kantong... so, gak rugi deh buat ngeabadiin moment loe di Chidory Photography', 
            ],
            [
                'source'    => '@hensontato [IG]', 
                'comment'   => 'Hasil foto sangat memuaskan dan mewah, fotografer nya sangat aktif dan inisiatif. Rela dateng pagi - pagi buat foto sesi make up juga, pokoknya puas banget deh pakek Chidory. Oh iya hasil cetak fotonya keren banget, albumnya gede dan dikasihkan tepat waktu, plus Flashdisk 2 biji pula. Pokoknya keren deh ni Chidory. Recomended', 
            ],
        ];

        foreach ($link as $k => $v) {
            $test         = new WebConfig;
            $test->type   = 'testimony';
            $test->published_at   = Carbon::now();
            $test->content        = $v;
            $test->save();
        }
    }
}
