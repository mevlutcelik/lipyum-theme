<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view()
    {
        $comments = collect([
            [
                "name" => "Uğur Çeltik",
                "image" => "https://www.hemengeliriz.com/assets2/images/profile/1.jpg",
                "desc" => "Öğretmen / Elektrik Hizmeti Aldı",
                "comment" => "Evde sürekli atan sigorta için Hemen Geliriz’den elektrik ustası çağırdık. Sigortayı tamir etti ve artık sigorta hiçbir şekilde atmıyor. Yaptığı işlemden de çok uygun bir fiyat aldı. Eline sağlık Erhan usta.",
                "star" => 5
            ], [
                "name" => "Ezgi Atay",
                "image" => "https://www.hemengeliriz.com/assets2/images/profile/2.jpg",
                "desc" => "Ev Hanımı / Beyaz Eşya Tamir Hizmeti Aldı",
                "comment" => "Buzdolabım uzun bir süre çalışmadı. Buradan usta çağırdım ve hemen geldi. Usta buzdolabındaki arızayı tespit etti ve buzdolabının kart arızası için tamir yaptı. Teşekkürler.",
                "star" => 5
            ], [
                "name" => "Mete Saka",
                "image" => "https://www.hemengeliriz.com/assets2/images/profile/3.jpg",
                "desc" => "Özel Sektör / Klima Tamir Hizmeti Aldı",
                "comment" => "Yaz sıcağında bozulan klimanın tamiri için akşam geç vakit gelen Ali ustaya teşekkürler. Her saat hizmeti kaliteli bir şekilde gerçekleştiriyor ustamız.",
                "star" => 5
            ], [
                "name" => "Osman Ziya",
                "image" => "https://www.hemengeliriz.com/assets2/images/profile/4.jpg",
                "desc" => "Özel Sektör / Ev İlaçlama Hizmeti Aldı",
                "comment" => "Evi basan hamam böceği, karınca ve diğer canlılar nedeniyle eve giremiyorduk. Bundan dolayı da Hemengeliriz üzerinden ilaçlama şirketi aramaya başladık. Dakikalar içerisinde eve gelen ustalar sayeisnde kolayca ilaçlama işlemi gerçekleştirildi ve böylece de böceklerden çok uygun fiyatlar ödeyerek kurtulduk.",
                "star" => 5
            ], [
                "name" => "Buse Güvendir",
                "image" => "https://www.hemengeliriz.com/assets2/images/profile/5.jpg",
                "desc" => "Özel Sektör / Ev Temizliği Hizmeti Aldı",
                "comment" => "İnşaat sonrası temizliği için buradan bir şirket ile anlaştık ve buradaki kişiler hızlı bir şekilde evdeki tüm inşaat kalıntısını çeşitli makinelerle ve deterjanlarla temizledi. 4+1 ev temizliği için çok uygun bir fiyat aldılar.",
                "star" => 5
            ], [
                "name" => "Aysel Gözüpek",
                "image" => "https://www.hemengeliriz.com/assets2/images/profile/6.jpg",
                "desc" => "Özel Sektör / Çilingir Hizmeti Aldı",
                "comment" => "Anahtarı evde unutup dışarı çıkmıştım içeriye giremeyince Çilingir çağırmak için Hemen Gelirizi aradım, ustayla görüştükten 10 dk sonra gelip hallettiler.",
                "star" => 5
            ]
        ]);
        return view('pages.home')->with([
            "comments" => $comments
        ]);
    }
}
