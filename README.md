
# Haber Botu

Güncel haber sitelerinde yer alan haberleri kategorileri ile birlikte çekebilirsiniz.

![Build](https://img.shields.io/badge/build-passing-brightgreen)



## Yol haritası

- Sondakika.com > Eklendi!

- Daha fazla haber sitesi ekleme



## Kurulum

```
composer require evrenonur/haberbotu
```


## Kullanım
getCategoryNews() Fonksiyonu için seçilen sitenin ilgili kategorisi verilir.
```php
require_once "vendor/autoload.php";

$sondakikacom = new \Evren\Haberler\Siteler\SonDakikaCom();

$haberler = $sondakikacom->getCategoryNews(\Evren\Haberler\Kategoriler\SonDakikaComKategoriler::DUNYA);

print_r($haberler);
```

## Örnek Çıktı
```text

Array
(
    [0] => Array
        (
            [title] => İlk kez halka seslenen İngiltere Kralı Charles: Anayasa ülkemizin temelini oluşturacak
            [thumbnail] => https://i.sdacdn.com/haber/2022/09/09/son-dakika-ingiltere-krali-charles-ilk-kez-15262083_2981_osd.jpg
            [summary] => 96 yaşındaki annesi Kraliçe II. Elizabeth'in yaşamını yitirmesinin ardından İngiltere tahtının yeni sahibi olan III. Charles, halka ilk seslenişinde, annesinin çok büyük adanmışlık gösterdiğini belirterek, "Ben de aynısını yapma noktasında size vaadimi sunuyorum. Anayasa ülkemizin temelini oluşturacak. Sizlere saygı, sadakat ve sevgiyle hizmet edeceğim hayatım boyunca yaptığım gibi" ifadelerini kullandı.
            [content] =>  <p>İngiltere Kraliçesi II. Elizabeth, tıbbi gözetim altında tutulduğu Balmoral Kalesi'nde dün 96 yaşında hayatını kaybetti. Kraliçe'nin ölümünün ardından başkent <a class='keyword-sd' href='/londra/' title='Londra'>Londra</a>'ya geçen tahtın yeni sahibi III. Charles, halka ilk kez seslendi. </p><h3>"BÜTÜN HAYATINI GÖREVİNE ADAMIŞTI"</h3><p>Annesi II. Elizabeth hakkında sözlerine başlayan Charles, "Bu onun temeldeki kişisel adanmışlığıydı. Bütün hayatını buna adamıştı. Fedakarlıklar yaptı görevi için. Adanmış bir şekilde hizmet etti, geri adım atmadı. İlerleme zamanlarında, değişim zamanlarında, kutlama zamanlarında ve üzüntü zamanlarında, kayıp zamanlarında hep bu ruhla hizmet etti. Hayatı boyunca geleneğe bağlılığını gördük. Ve tabii ki ilerlemeyi de hep göz önünde bulundurdu. Ülkemizi, ulusumuzu daha ileri taşımaya çalıştı. Onun ortaya koymuş olduğu adanmışlık esasında hizmetinin sembolü oldu. Majesteleri, kraliçe hem insan olarak ve halkı için en iyisini yapan hükümdar olarak karşımıza çıkıyor. Annemin anısını ve hayatını adamış olduğu bu hizmeti her zaman yaşatacağım." dedi. </p><p style="margin-bottom:24px;" id="inpage_reklam"></p><p><strong> III. Charles'ın açıklamalarından satır başları:</strong></p><p>Bizim değerlerimiz her zaman için varlığını sürdürecek. Görevimiz de devam edecek. Özellikle İngiltere Kilisesi ile olan bağlantımız, bağlılığımız, ilişkimiz devam edecek. Bu imanla, inançla başkalarına yardıma devam edeceğimiz. Özgürlük, gelenek ve sorumluluklarımızın bilincinde olarak parlamenter hükümet temelinde çalışmalarımız devam edecek.</p><h3>"YENİ SORUMLULUKLAR ALIYOR OLACAĞIM"</h3><p>Kraliçe çok büyük adanmışlık gösterdi ben de aynısını yapma noktasında size vaadimi sunuyorum. Anayasa ülkemizin temelini oluşturacak. <a class='keyword-sd' href='/birlesik-krallik/' title='Birleşik Krallık'>Birleşik Krallık</a>'ın neresinde yaşarsanız yaşayın, dünyanın neresinde olursanız olun, sizlere saygı, sadakat ve sevgiyle hizmet edeceğim hayatım boyunca yaptığım gibi. Elbette yeni sorumluluklar alıyor olacağım, hayatım değişecek. Benim için zamanımı ve enerjimi bugüne kadar yaptığım gibi hayır işlerine ayırabileceğimi zannetmiyorum, çünkü sorumluluklarım değişiyor. Bu işi başkalarına bırakıyor olacağım. Ailem için de çok şey değişecek. Sevgili eşimin bana olan desteğine güveniyorum.</p><h3>"VELİADIMIZ WİLLİAM, İSKOÇYA TAHTININ SAHİBİ OLACAK"</h3><p>70 sene önce annem tahta çıktı kraliçe olarak. Şimdi benim eşim, kralın eşi kraliçe sıfatıyla benimle olacak. Veliahdımız William da İskoçya tahtının sahibi olacak. O da gereken sorumlulukları yerine getirmeye devam edecek. 50 yıldan bu yana yapmış olduğum işleri şimdi William yapacak.</p><h3>"1 HAFTA İÇERİSİNDE KRALİÇE'NİN DEFİN TÖRENİNİ GERÇEKLEŞTİRECEĞİZ"</h3><p>Henry ve Megan, onlar da kendi yaşamlarını sürdürmeye devam edecekler. 1 hafta içerisinde ulus olarak, İngiliz Uluslar Topluluğu ve küresel toplumu olarak bir araya geleceğiz ve Kraliçe'nin defin törenini gerçekleştireceğiz. Onun ortaya koymuş olduğu örneğin ışığında onu anacağız. Ailem adına samimiyetle ve cani yürekten göndermiş olduğunuz dileklere teşekkür etmek istiyorum. Sevgili anneme... Sen artık ebedi yolculuğuna çıktın ve ben sadece şunu söylemek istiyorum; teşekkür ederim, teşekkür ederim. Sevgin ve adanmışlığın için ailemize ve ulusumuza o kadar güzel hizmet ettin ki uzun yıllar boyunca, melekler ebedi istirahatinde seninle olsun"</p> 
            [publishDate] => 09.09.2022 20:11
        )

    [1] => Array
        (
            [title] => İngiltere'de hükümdar eşlerinin unvanı: Konsort
            [thumbnail] => https://i.sdacdn.com/haber/2022/09/09/ingiltere-de-hukumdar-eslerinin-unvani-konsor-15261530_osd.jpg
            [summary] => İngiltere Kraliçesi 2. Elizabeth'in ölümüyle tahta çıkan Kral 3. Charles'ın eşi Camilla'ya, Şubat'ta Kraliçe tarafından açıklanan 'Konsort Kraliçe' unvanı verildi.
            [content] =>  <p><p>İngiltere Kraliçesi 2. Elizabeth'in ölümüyle tahta çıkan Kral 3. Charles'ın eşi Camilla'ya, Şubat'ta Kraliçe tarafından açıklanan 'Konsort Kraliçe' unvanı verildi.<p>İngiltere kraliyet geleneğine göre, kraliyet ailesi üyeleriyle evlenen kişiler tahtı devralamayacakları için Konsort Kraliçe (tahta oturan kralın eşi) veya Konsort Prens (tahta oturan kraliçenin kocası) unvanlarına sahip olur. Konsort Kraliçe'nin ülke yönetimi gibi egemen bir gücü bulunmamaktadır.</p><p style="margin-bottom:24px;" id="inpage_reklam"></p>Son Konsort Kraliçe, Kral George'un ölümüyle tahta çıkan Kraliçe 2. Elizabeth'in annesiydi. Kraliçe ile Konsort Kraliçe arasındaki fark, birinin veraset yoluyla tahta çıkması diğerinin ise evlilik yoluyla hükümdarın eşi olmasıdır. Kraliçe 2. Elizabeth, 5 Şubat 2022 tarihinde kaleme aldığı açıklamasında Charles'ın eşi Camilla'nın Konsort Kraliçe olmasını arzu ettiğini belirtmişti.Kraliçe 2. Elizabeth'in kocası <a class='keyword-sd' href='/prens-philip/' title='Prens Philip'>Prens Philip</a>, eşi tahta çıkmasına rağmen 'Kral' unvanı yerine Konsort Prens ilan edilmişti. Konsort Prens unvanı alan yakın geçmişten bir diğer kişi ise 1857'de Kraliçe Victoria'nın eşi <a class='keyword-sd' href='/prens-albert/' title='Prens Albert'>Prens Albert</a> idi. Genel kullanımda Konsort unvanı telaffuz edilmese de resmi olarak İngiltere hükümdarının eşine verilen bir unvandır. <br /></p></p> 
            [publishDate] => 09.09.2022 16:26
        )

    [2] => Array
        (
            [title] => Türkiye ve Yunanistan arasındaki tırmanan krizde NATO devrede! İlk yorumları dikkat çekici
            [thumbnail] => 
            [summary] => Türkiye ve Yunanistan arasındaki krizde nasıl bir tavır ortaya koyacağı hayli merak edilen NATO, sonunda konuyla ilgili değerlendirmede bulundu. NATO Genel Sekreteri Jens Stoltenberg, yaptığı ilk açıklamada Türkiye ve Yunanistan'ın farklılıklarını diyalog yoluyla çözmesini istediklerini belirtti. Stoltenberg'in sözleri, Yunanistan tarafında memnuniyetsizlikle karşılandı.
            [content] =>  <p>ABD Dışişleri Bakanı <a class='keyword-sd' href='/antony-blinken/' title='Antony Blinken'>Antony Blinken</a> ve NATO Genel Sekreteri <a class='keyword-sd' href='/jens-stoltenberg/' title='Jens Stoltenberg'>Jens Stoltenberg</a>, <a class='keyword-sd' href='/turkiye/' title='Türkiye'>Türkiye</a> ve <a class='keyword-sd' href='/yunanistan/' title='Yunanistan'>Yunanistan</a>'ın farklılıklarını diyalog yoluyla çözmesini istediklerini söyledi.</p><h3>"HER İKİ ÜLKE DE ABD'NİN DOSTLARI"</h3><p>Blinken ve Stoltenberg <a class='keyword-sd' href='/bruksel/' title='Brüksel'>Brüksel</a>'deki NATO karargahında Kuzey <a class='keyword-sd' href='/atlantik-konseyi/' title='Atlantik Konseyi'>Atlantik Konseyi</a> toplantısına katıldı. Daha sonra düzenlenen ortak basın toplantısında soruları yanıtlayan Blinken, Türkiye ile Yunanistan arasındaki gerginliğe yönelik soruya karşılık şunları dile getirdi: "Her iki ülke de hayati öneme sahip müttefiklerdir ve ABD'nin dostlarıdır. Farklılıkları bulunuyor. Bu farklılıkların yapıcı şekilde diyalog yoluyla çözüldüğünü görmek isteriz. Geçmişte böyle oldu. Yine bu şekilde çözmelerini bekliyoruz."</p><p style="margin-bottom:24px;" id="inpage_reklam"></p><h3>NATO'DAN İKİ ÜLKEYE DİPLOMASİ ÇAĞRISI</h3><p>NATO Genel Sekreteri Stoltenberg de "Türkiye ve Yunanistan çok değerli iki müttefik. NATO'ya birçok farklı şekilde katkıda bulunuyorlar. Aralarındaki farklılıklar elbette diplomatik yollarla çözülmelidir." ifadelerini kullandı. Stoltenberg ayrıca NATO'da Türkiye ve Yunanistan arasında herhangi bir tehlikeli durumu engellemek için gerginliği düşürme mekanizması kurulduğunu ve bunun daha önce kullanıldığını anımsattı.</p><h3>"İSVEÇ VE FİNLANDİYA'NIN ÜYELİKLERİ İÇİN UZLAŞI VAR"</h3><p> <a class='keyword-sd' href='/isvec/' title='İsveç'>İsveç</a> ve <a class='keyword-sd' href='/finlandiya/' title='Finlandiya'>Finlandiya</a>'nın üyeliği konusunu da değerlendiren Blinken, müttefikler arasında üyelik için geniş bir uzlaşı bulunduğunu, sürecin ilerlediğine inandığını söyledi. Blinken, herkesin odak noktasında <a class='keyword-sd' href='/rusya/' title='Rusya'>Rusya</a> olması gerektiğini, bu ülkenin transatlantik ittifakın ötesinde bir tehdit oluşturduğunu ifade etti.</p> 
            [publishDate] => 09.09.2022 16:03
        )
        ........
)

```




## Geri Bildirim

Herhangi bir geri bildiriminiz varsa, lütfen info@onurevren.com adresinden bana ulaşın.


## Lisans

[MIT](https://choosealicense.com/licenses/mit/)

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)

  

  