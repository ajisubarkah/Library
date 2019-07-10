<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'name' => 'Dilan 1990',
                'books_category_id' => 1,
                'synopsis' => 'Novel ini menceritakan sebuah kisah seorang perempuan yang bernama Milea. Milea merupakan seorang murid yang baru saja pindah dari Jakarta. Ketika Milea pergi menuju sekolah barunya di Bandung, dia dihampiri dengan teman laki-laki satu sekolahan dengannya. temannya itu adalah seorang yang suka meramal.
Laki-laki yang suka meramal itu berkata bahwa nanti mereka berdua akan bertemu besok di hari minggu. Pada awalnya Melia acuh dengan lelaku itu, tapi dia merasa terganggu karena setiap hari laki-laki itu selalu saja menghampirinya dan membuat dia senang ketika bertemu denganya. Milea mencari tahu laki-laki itu. Ternyata laki-laki itu bernama Dilan.
Suatu hari, Dilan ingin menemani Milea pulang naik angkot,Dilan berbisik, ” Milea, kamu cantik, tapi aku belum mencintaimu. enggak tahu sore. Tunggu saja”. Kata yang diucapkan Dilan membuat jantungnya berdetak dengan kencang, Milea kaget dengan apa yang diucapkan Dilan. Dengan diam Milea mendengar ucapan Dilan, saat itu juga Melia teringat dengan pacarnya bernama Beni yang tinggal di Jakarta.
Dilan mendekati Milea memakai cara yang unik,romantis, dan tak biasa, karena hal itu Milea terus memikirkannya. Dilan sering meberikan hadiah kepada Melia seperti cokelat melalui POS, membawa seorang tukang pijat saat Milea sedang sakit, dan saat Milea ulang tahun Dilan memberi kado sebuah TTS ( teka teki silang ), yang lucunya TTS itu ada tulisan “Selamat Hari Lahir Melia, Ini aku persembahkan hadiah untuk kamu, Hanya sebuah TTS, tapi semuanya sudah aku isi, aku cinta kamu, aku tidak ingin kamu jadi pusing karena mengisi TTS ini”.
Seiring berjalanya waktu, Dilan dan Milea pun semakin akrab. Milea tahu tentang Dilan beberaa hal dari temannya yang bernama Wati, sepupu Dilan sekelas dengan Milea. Sekolah Milea mendapatkan kesempatan untuk mengikuti acara cerdas cermat yang diselenggarakan oleh TVRI, para siswa yang tidak mengikuti lomba boleh untuk memberikan semangat kepada teman-temannya yang mengikti lomba dengan ikut ke Jakarta.
Milea pun ikut, dia sudah memiliki rencana untuk bertemu pacarnya Beni di Jakarta. Milea lama menunggu Beni yang janji akan bertemu di TVRI, akan tetapi Beni tidak datang-datang. Pada akhirnya, Milea pergi unutk makan bersama temannya Wati dan Wanda. Ketika itu Beni datang dengan penuh emosi dan marah melihat Milea makan dengan Nandan, teman sekelasnya. Hubungan mereka kandas ketika itu juga. Jelang beberapa hari Beni mengajak Milea untuk kembali menjadi pacarnya, tapi Milea menolak penawaran Beni.
Akhirnya Milea Bertemu dengan ibuna Dilan. Ternyata, ibunya Dilan asiknya sama seperti Dilan. Ibunya Dilan pun senang dengan Milea, jadi ibunya Dilan memberikan dukungannya penuh agar mereka jadian.
',
                'image' => 'img/books/dilan-1990.jpg',
                'status' => false,
            ],
            [
                'name' => 'Dilan 1991',
                'books_category_id' => 1,
                'synopsis' => 'Cinta pertama memang tak terlupakan. Meskipun sudah bertahun-tahun lamanya, dia tetap menempati sisi lain hati. Memang kelihatan samar, namun begitu nyata, walaupun hanya untuk pemilik hati saja.
Milea Adnan Hussain, dia kembali mengenang kisah kasihnya bersama Dilan di tahun 1991.
Setelah akhirnya mereka menandatangani surat pernyataan bermaterai di Warung Bi Eem, Milea dan Dilan resmi berpacaran. Dengan perasaan yang masih begitu memuncah, Dilan mengantarkan Milea pulang ke rumahnya dengan status Pacar Milea.
Milea bahagia. Dilan juga begitu. Milea selalu rindu Dilan. Dilan sepertinya juga begitu.
“Aku merasa benar-benar nyaman dengannya dan aku tidak merasa tertekan. Dia hanya menungguku untuk menyerah. Aku telah menemukan seseorang yang aku bisa mencintainya tanpa merasa takut untuk tidak dicintai.” – Milea – hlm. 273

Namun, cinta mereka langsung diuji. Ingat bukan, sebelum mereka jadian, Dilan berkelahi dengan Anhar karena Anhar berani menampar Milea? Setelah itu, Dilan diancam akan dipecat dari sekolah jika berkelahi lagi?
Rasanya, bukan Dilan kalau takut dengan ancama pihak sekolah. Lagi-lagi Dilan dan kelompoknya berencana untuk balas dendam karena beberapa waktu yang lalu, Dilan dikeroyok sampai babak belur.
Milea sebagai pacar Dilan tentu tak ingin pacarnya berkelahi. Apalagi Milea tahu, jika Dilan kena masalah lagi, maka dia akan dipecat dari sekolah. Milea tak ingin Dilan dipecat dari sekolah. Saking cemasnya, Milea mengancam Dilan. Jika Dilan nggak nurut Milea, mereka putus.
“Dengar ya, Lia. Kamu harus tau, senakal-nakalnya gank anak motor, mereka juga shalat pada waktu ujian praktek Agama.” – Dilan – hlm. 19

Dilan masih remaja. Jiwanya yang bebas jelas tak ingin dikekang. Tapi, Dilan sangat mencintai Milea Adnan Hussain. Lalu, harus bagaimana dia harus bersikap? Menuntaskan rasa dendam dan marahnya, menyelematkan igo dan harga dirinya, atau menjadi Dilan yang diinginkan Milea?
“Ah, gak apa-apa gak pacaran sama kamu juga, deh. Asal kamunya tetep ada di bumi. Udah cukup, udah bikin aku seneng.” – Dilan – hlm. 24
',
                'image' => 'img/books/dilan-1991.jpg',
                'status' => false,
            ],
            [
                'name' => 'Milea',
                'books_category_id' => 1,
                'synopsis' => 'Novel ini menceritakan pengenalan singkat Dilan waktu dia masih kecil. Kira-kira waktu masih berumur 5 tahun, pernah ingin jadi macan walaupun itu tidak mungkin. Dia pernah menamai sepedanya dengan nama “mobil derek”. Dia juga pernah sholat pakai mukena. Dilan selalu berpikir bahwa dia mempunyai masa kecil yang benar-benar bahagia.

Setelah SMA, Dilan ke sekolah tidak lagi naik sepeda melainkan naik motor. Pulangnya nongkrong di warung Kang Ewok. Di sana, dia biasa berkumpul dengan teman-temannya yang bernama Akew, Bowo, Anhar, Burhan, Ivan, dan lain-lain. Dilan juga sering nongkrong di warung Bi Eem bersama teman-temannya. Di warung Bi Eem itulah Dilan mendengar nama Milea, seorang gadis cantik yang berasal dari Jakarta. Dilan menyukai Milea, teman-temannya juga mendukungnya. Ketika Dilan ingin melakukan pendekatan dengan Milea, Dilan minta do’a pada bundanya agar lancar.

Setelah banyak yang sudah Dilan lakukan dalam rangka mendekati Milea, waktu akhirnya datang. Tanggal 22 Desember tahun 1990, di Bandung, tepatnya di warung bi Eem, Dilan resmi berpacaran dengan Milea Adnan Hussain, dinyatakan secara lisan dan tulisan, yang lengkap dibubuhi tanda tangan oleh kedua belah pihak di atas materai. Masing-masing merasa dimaui, merasa sangat diterima dan membiarkan diri dikuasai oleh harapan untuk mencapai kesempurnaan di dalam berpacaran. Kesehariannya berpacaran dengan Milea sangat romantis. Dilan membuat begitu banyak puisi yang indah untuk Milea. Kelakuan Dilan yang konyol selalu membuat Milea tertawa dan juga merasa senang.

Sampai suatu ketika Dilan putus dengan Milea. Itu semua terjadi karena sebuah kesalah pahaman antara Dilan dengan Milea, yang disebabkan oleh kematian temannya yang bernama Akew. Milea mengira bahwa kematian Akew disebabkan oleh perselisihan antara geng motor. Milea marah kepada Dilan, karena Dilan juga merupakan anggota geng motor. Milea khawatir kalau Dilan juga akan mengalami hal yang sama seperti Akew. Milea menyuruh Dilan agar keluar dari geng motor, namun Dilan tetap saja tidak menghiraukannya. Milea marah kepada Dilan sampai tidak mau diajak bicara. Itulah yang telah menyebabkan Dilan putus dengan Milea. Setelah putus dengan Milea, Dilan merasa kesepian, dan benar-benar rindu pada Milea.

Setelah lulus SMA, Dilan melanjutkan kuliahnya di salah satu Perguruan Tinggi Negri di Bandung. Sebulan setelah Bu Rini wafat, Dilan bertemu lagi dengan Milea di acara reuni SMA, dia datang dengan Mas Herdi. Dilan merasa senang bisa berkumpul lagi dengan teman-teman semasa SMA, karena sudah lama tidak bertemu.
',
                'image' => 'img/books/milea.jpg',
                'status' => false,
            ],
            [
                'name' => 'Dear Nathan',
                'books_category_id' => 1,
                'synopsis' => 'Novel ini menceritakan tentang seorang gadis bernama Salma Alvira yang terlambat datang ke Sekolah barunya di hari pertama. Ia yang kebingungan di depan gerbang kemudian bertemu dengan seorang laki-laki yang mengenakan seragam putih abu-abu sama seperti dirinya. Kemudian lelaki itu membantunya menyelinap lewat samping. Hari itu Salma berhasil masuk berkat bantuan lelaki itu, lelaki yang belum sempat ia ketahui namanya.

                Salma gadis kaku si kutu buku yang hidupnya selalu tertata penuh dengan planning untuk kedepannya. Berbanding terbalik dengan Nathan—lelaki yang membantu Salma di hari pertama masuk sekolah baru—ia si pembuat onar, biang kerok yang selalu menjadi buah bibir. Salma mengetahui nama lelaki itu pun dari gosip yang beredar tiap saaat di kantin Sekolahnya.

                Salma yang begitu lugu nyatanya mmapu membuat Nathan jatuh hati. Nathan memang brengsek tetapi dia tahu betul bagaimana cara menghargai seorang perempuan. Ketulusan Nathan pun membuat Salma luluh begitu saja, meski Salma selalu diwanti-wanti oleh Afifah—sahabatnya sekaligus teman sekelas Nathan—agar jauh-jauh dari si pembuat onar itu.

                Terlepas dari kisah cinta yang mewarnai kehidupan Nathan, masalah keluarga yang timbul sejak dulu pun tak kunjung terselesaikan. Nathan selalu terbuka kepada Salma sehingga ia mengetahui kerapuhan Nathan di masa lampau.',

                'image' => 'img/books/Dear Nathan.jpg',
                'status' => false,
            ],
            [
                'name' => 'Hello Salma',
                'books_category_id' => 1,
                'synopsis' => 'Novel Hello Salma ini merupakan lanjutan dari kisah asmara Nathan dan Salma. Nathan merupakan sosok laki-laki bad boy, tampan, kaya, dan idola di SMA Garuda, yang menyukai gadis bernama Salma. Berbeda dengan Nathan, Salma adalah sosok yang pendiam, pintar, dan aktif di organisasi. Hubungan mereka baik-baik saja sampai suatu hari terjadi sesuatu yang menyebabkan Salma dengan mudahnya memutuskan Nathan, dan karena kejadian itu pula Nathan juga dikeluarkan dari sekolahnya.

                Dalam novel ini menceritakan kisah setelah Nathan dan salma mengakhiri hubungan mereka dan juga kehidupan Nathan di sekolah barunya, yang mana ia mengenal sosok Rebecca. Tokoh baru yang hadir. Sehingga dalam novel ini menjadikan pembaca lebih penasaran. Bagaimanakan kisah Nathan dan Salma selanjutnya? Apakah Nathan dan Salma akan kembali lagi menjalin hubungan? Pertanyaan-pertanyaan semacam itu akan senantiasa muncul di benak kita.',

                'image' => 'img/books/Hello Salma.jpg',
                'status' => false,
            ],
            [
                'name' => 'My Perfect Husband',
                'books_category_id' => 1,
                'synopsis' => 'Mengisahkan tentang kehidupan seorang laki-laki yang bernama Arsen dan seorang wanita bernama Ayla. Bermula dari pertemuannya di masa kecil dan berlanjut hingga mereka menikah dan memiliki banyak sekali tantangan yang harus mereka lewati.

                Ayla, seorang wanita diambang drop out dari kuliah harus mengikhlaskan dirinya ketika terjadi perjodohan dengan Arsen. Ayla yang selalu bersikap kasar kepada Arsen bertekad dengan segala cara untuk membatalkan pernikahan mereka. Dengan kesabaran dan kebulatan tekad Arsen, akhirnya mereka menikah.
                Dia yang mencintaiku, tetapi aku justru mengabaikannya

                Tabiat Ayla yang keras dan kasar kepada Arsen membuat biduk pernikahan mereka terasa hambar. Hingga saat kesabaran Arsen sudah tak berbatas, Arsen pergi dan Aylapun depresi karena kepergiannya.

                Problem rumah tangga dalam kisah sepasang suami istri ini terus menerus menggelayuti kehidupan mereka hingga terpaan dahsyat badai pernikahan mereka dapat mereka lalui.
                ',

                'image' => 'img/books/My Perfect Husband.jpg',
                'status' => false,
            ],
            [
                'name' => 'My Perfect Sunset',
                'books_category_id' => 1,
                'synopsis' => 'Petemuan tak disengaja seorang Indah dengan Satria siapa sangka adalah awal yang membuat hidup Indah menjadi berantakan. Berbagai masalah mulai datang silih berganti kepadanya. Pekerjaannya yang sudah tak lagi membuatnya nyaman, perubahan dirinya yang tak bersikap seperti biasa, sampai hubungan asmaranya dengan sang kekasih bernama Kevin harus kandas dikarenakan perselingkuhan Kevin dengan wanita bernama Karina. Masa depan cerah yang telah direncanakan Indah untuk hidupnya seakan mengambang tak pasti. Ia mengalami titik hitam untuk jalan hidupnya. Lalu Satria hadir dan memaksanya untuk kembali meraih cahaya kehidupannya. Kehadiran Satria yang tiba-tiba mampu membuat Indah kembali pada hidupnya yang lebih baik dan tanpa sadar memberi posisi tersendiri bagi pria itu dihatinya.

                Permasalahan Indah dengan Kevin tak berakhir begitu saja. Indah kembali harus menemukan titik hitam dihadapannya perihal perasaannya terhadap Kevin dan Satria, dua pria yang memiliki hatinya diposisi yang berbeda. Namun tak ada lagi Satria yang dapat membantunya untuk keluar dari permasalahan itu, karena perasaan Indah terhadap Satria lah yang membuatnya semakin terpojok oleh masalah.

                Ada cinta, air mata, pengorbanan, perjuangan, serta kelicikan menjadi bumbu yang pas dalam permasalahan yang harus dihadapi oleh tokoh-tokoh dalam cerita ini. Saat satu masalah terselesaikan, ada senyum dan bahagia yang terbit, setelah itu akan ada masalah baru yang kembali muncul, mengharuskan kembali berjuang dan menguras air mata, seolah Kyria sangat senang memainkan kehidupan para tokoh-tokoh ceritanya.

                Ketika permasalahan Indah bagai benang kusut yang tak mampu lagi diselesaikan, maka ada Tuhan yang memberi jalan untuk membawa semuanya keluar dari gerbang masalah itu. Yang benar akan menerima buah dari kesabarannya, sedangkan yang salah tetaplah menerima hukumannya. Satria tak pernah berharap bahwa Indah akan membalas perasaannya, namun Tuhan menginginkan itulah yang harus terjadi.

                Semangat cinta Indah dan Satria yang hangat bagai kesempurnaan sunset yang indah. Namun Kyria belum menginginkan itu untuk kisah tokoh-tokohnya. Kembali ombak kehidupan menghempaskan segala hal yang sudah hampir sempurna, meluluhlantakkan segalanya, dan hanya menyisakan kesunyian. Membuat para tokoh harus menyimpan cinta mereka di hati masing-masing.
                ',

                'image' => 'img/books/my perfect sunset.jpg',
                'status' => false,
            ],
            [
                'name' => 'The Perfect Love',
                'books_category_id' => 1,
                'synopsis' => 'Buku ini mengisahkan dua keluarga di mana kepala keluarganya adalah seorang pilot. Meskipun memiliki profesi yang sama, tetapi sikap mereka terhadap keluarga masing-masing.

                Arsen dan Ayla keluarga yang sangat harmonis. Namun tidak ada yang sempurna, Ayla yang overprotektif harus bentrok dengan Nimas, anak perempuan mereka yang beranjak dewasa.

                Awan dan Viana dengan anak tunggal mereka, Khanza, malah menghadapi hal yang lebih rumit lagi. Baik Awan dan Viana sama-sama sibuk bekerja, meninggalkan Khanza yang haus akan kasih sayang dari kedua orang tuanya. Situasi rumah tangga mereka diperkeruh karena meninggalnya anak laki-laki kedua mereka karena Viana lebih mementingkan pekerjaannya.

                Nimas dan Khanza bersahabat sejak lama karena kedekatan orang tua mereka. Namun, masing-masing dari mereka memiliki masalah sendiri yang akhirnya menimbulkan jarak di antara mereka.

                Aku gemes sama Nimas yang tingkahnya tengil dan selalu berantem sama mamanya. Dia belum mengerti bahwa apa yang dilakukan mamanya adalah untuk kebaikan. Ayla sendiri juga berlebihan melarang Nimas ini itu. Lain dengan Khanza yang pasrah dan menyimpan sendiri kesepiannya.

                "Kamu, Ayah, Mas Dio adalah laki-laki pendekar yang selalu setia menjaga Bunda. Jadi, ayo sama-sama kita bikin Bunda tersenyum." (hal 134)

                Di tengah perdebatan antara Ayla dan Nimas, Arsen berusaha ada di kedua pihak, tidak ingin berat sebelah. Dia bahkan membuat Naufal juga ikut bisa menghibur Ayla dari kelakuan Nimas.

                Namun, bukannya selesai, masalah malah bertambah. Nimas semakin berani melawan Ayla dan terus-menerus menyakiti Bundanya.

                Lain halnya dengan Nimas, Khanza sendiri sedang dirudung masalah dalam keluarganya. Kelakuan Nimas malah tidak membantu sama sekali, cenderung memperburuk keadaan. Perpecahan di antara keduanya tidak terelakan.

                Kondisi keluarga Khanza semakin kacau. Rahasia terbesar Awan, papa Khanza terungkap sudah oleh Viana. Viana mengambil langkah bijak untuk tidak memperpanjang masalah itu dengan Awan. Dan itu membuat Khanza kehilangan kesabarannya.

                Sementara Nimas masih saja keras kepala dan tidak mau pulang ke rumah. Ayla sangat sedih dan sulit dibujuk oleh Arsen dan kedua anak lelakinya. Persahabatannya dengan Khanza pun tidak ada tanda-tanda membaik. Akan tetapi, Nimas membela Khanza waktu salah seorang temannya menyinggung Khanza.

',
                'image' => 'img/books/the perfect love.jpg',
                'status' => false,
            ],
            [
                'name' => 'Sang Pemimpi',
                'books_category_id' => 4,
                'synopsis' => 'Novel ini adalah novel kedua dari tetralogi Laskar pelangi karya Andrea Hirata. Sang Pemimpi adalah sebuah kisah kehidupan yang mempesona yang akan membuat pembacanya percaya akan tenaga cinta, percaya pada kekuatan mimpi dan pengorbanan, selin itu juga memperkuat kepercayaan kepada Tuhan. Andrea berkelana menerobos sudut-sudut pemikiran di mana pembaca akan menemukan pandangan yang berbeda tentang nasib, tantangan intelektualitas, dan kegembiraan yang meluap-luap, sekaligus kesedihan yang mengharu biru. Selayaknya kenakalan remaja biasa, tetapi kemudian tanpa disadari kisah dan karakter-karakter dalam buku ini lambat laun menguasai, potret-potret kecil yang menawan akan menghentakkan pembaca pada rasa humor yang halus namun memiliki efek filosofis yang meresonansi.

                Tiga orang pemimpi. Setelah tamat SMP, melanjutkan ke SMA Bukan Main, di sinilah perjuangan dan mimpi ketiga pemberani ini dimulai. Ikal salah satu dari anggota Laskar Pelangi dan Arai yang merupakan saudara sepupu Ikal yang sudah yatim piatu sejak SD dan tinggal di rumah Ikal, sudah dianggap seperti anak sendiri oleh Ayah dan Ibu Ikal, dan Jimbron, anak angkat seorang pendeta karena yatim piatu juga sejak kecil. Namun, pendeta yang sangat baik dan tidak memaksakan keyakinan Jimbron, malah mengantarkan Jimbron menjadi muslim yang taat.

                Arai dan Ikal begitu pintar di sekolahnya, sedangkan Jimbron, si penggemar kuda ini biasa-biasa saja. Malah menduduki rangking 78 dari 160 siswa. Sedangkan Ikal dan Arai selalu menjadi lima dan tiga besar. Mimpi mereka sangat tinggi, karena bagi Arai, orang susah seperti mereka tidak akan berguna tanpa mimpi-mimpi. Mereka berdua mempunyai mimpi yang tinggi yaitu melanjutkan belajar ke Sorbonne Perancis. Mereka terpukau dengan cerita Pak Balia, kepala sekolahnya, yang selalu meyebut-nyebut indahnya kota itu. Kerja keras menjadi kuli ngambat mulai pukul dua pagi sampai jam tujuh dan dilanjutkan dengan sekolah, itulah perjuangan ketiga pemuda itu. Mati-matian menabung demi mewujudkan impiannya. Meskipun kalau dilogika, tabungan mereka tidak akan cukup untuk sampi ke sana. Tapi jiwa optimisme Arai tak terbantahkan.
                ',
                'image' => 'img/books/sang pemimpi.jpg',
                'status' => false,
            ],
            [
                'name' => 'Serendipity',
                'books_category_id' => 1,
                'synopsis' => 'Setelah ayahnya meninggal dunia, Rani mengalami masa yang sulit. Ayahnya meninggalkan utang yang cukup besar yang membuat Rani harus membayarnya dengan menjadi seorang lady escort. Setelah mengetahui Rani jalan dengan pria lain, pacar Rani yang bernama Arkan memutuskan hubungan. Masalah bertambah setelah Lola menyebarkan foto-foto Rani yang sedang jalan dengan om-om. Sahabat dekatnya, Jean juga menjauh darinya. Hanya Gibran, murid baru di kelasnya yang mau menjadi sahabat dan sering membantunya. Gibran menyukai Rani, tapi Rani tidak bisa menerima cinta Gibran karena di hatinya masih ada Arkan.

                Di dalam hati Arkan pun masih ada cinta untuk Rani. Namun masalah mereka menjadi lebih rumit karena ada yang tak terkatakan. Cinta bukanlah sekadar persoalan hitam putih, yang seringkali menjadi lebih rumit karena adanya ego. Ketulusan menjadi penting agar saling memahami isi hati satu sama lain.
                ',

                'image' => 'img/books/serendipity.jpg',
                'status' => false,
            ],
            [
                'name' => 'Surat Kecil untuk Ayah',
                'books_category_id' => 4,
                'synopsis' => 'Dalam Surat Kecil untuk Ayah terdapat kisah-kisah tetang para ayah yang selalu meyisihkan waktu, bekerja keras seolah tanpa batas, dan

                dipenuhi cinta untuk keluarga. Namun, Ayah juga tetap manusia yang  punya ceritanya sendiri. Dia mungkin tidak selalu tegap dan jalannya sesekali meragu.

                Memang, ketegaran seorang ayah kadang membuat kita lupa, bahwa dia juga seorang manusia....
                ',

                'image' => 'img/books/surat kecil untuk ayah.jpg',
                'status' => false,
            ],
            [
                'name' => 'Surat kecil untuk Tuhan',
                'books_category_id' => 4,
                'synopsis' => 'Novel ini menceritakan tentang perjuangan gadis remaja yang melawan kanker ganas, yakni Rabdomiosarkoma (kanker jaringan lunak ).

                Dia adalah Gita Sesa Wanda Cantika, kita mengenalnya sebagai mantan artis cilik era 1998. Gadis kecil inilah yang menjadi tokoh utama dalam novel Surat Kecil Untuk Tuhan.

                Dalam cerita ini sendiri Gita atau yang lebih dikenal dengan nama Keke divonis menderita kanker ganas dan diprediksi hidupnya tinggal lima hari lagi. Kanker jaringan lunak itu

                menggerogoti bagian wajahnya sehingga terlihat buruk seperti monster. Walau dalam keadaan sulit, Keke terus berjuang untuk tetap bersekolah layaknya gadis remaja lainnya.',

                'image' => 'img/books/surat kecil untuk tuhan.jpg',
                'status' => false,
            ],
            [
                'name' => 'Jomblo Rapopo',
                'books_category_id' => 3,
                'synopsis' => 'Buku ini mengisahkan betapa menderitanya seorang jomblo. Parahnya lagi, jomblo yang satu ini sangat pesimis. Sulit baginya untuk mengembangkan diri.

                Terlihat sekali buku ini ditujukan untuk kalangan remaja yang butuh hiburan untuk menertawakan penyakit ‘jomblo’, yang sebenarnya diderita oleh banyak remaja.

                Cerita dalam buku ini juga menggunakan sudut pandang orang pertama ‘gue’ yang interaktif. Persepsi bahwa jomblo adalah makhluk hina memang sangat cocok dengan perilaku remaja masa kini yang penuh dengan percintaan dan kesetiakawanan.
',

                'image' => 'img/books/jomblo rapopo.jpg',
                'status' => false,
            ],
            [
                'name' => 'Bukan Salah Hujan',
                'books_category_id' => 5,
                'synopsis' => 'Nadi –Nadila Adara Abraham memutuskan untuk kembali ke Yogyakarta setelah berkuliah dan bekerja di Ibukota. Ia menerima pekerjaan sebagai editor di sebuah penerbitan. Meskipun tidak tinggal di rumah setidaknya ia akan lebih dekat mengunjungi Pak Tua, lelaki tua yang membesarkannya. Di sebelah kantor Nadi, ada sebuah kios yang menjual hotdog. Kios itu dikelola oleh sepasang kekasih, Randu dan Rindu. Kios itu selalu ramai karena hotdog yang dijual berbeda dari yang lain, rasanya juga sangat enak. Sama seperti pelanggan lainnya, Nadi jatuh cinta sejak gigitan pertama.

                Namun tiba-tiba semuanya berubah. Kios tiba-tiba tutup. Baik Randu, Rindu maupun Yoga, yang membantu melayani pembeli di kios itu benar-benar menghilang. Nadi seolah kehilangan nyawanya, tidak ada lagi hotdog terenak yang pernah ia makan, tidak ada lagi kios yang dianggap kantor keduanya. Setelah sekian lamanya, Nadi kembali bertemu dengan Randu. Laki-laki itu berubah, tidak seperti Randu yang dikenalnya dulu.. Berhasilkah Nadi membuat Randu kembali seperti dulu, kembali membuka kios, membuat hotdog dan menikmati hujan?
                ',

                'image' => 'img/books/bukan salah hujan.jpg',
                'status' => false,
            ],
            [
                'name' => 'Bukan untuk dibaca',
                'books_category_id' => 4,
                'synopsis' => 'Alkisah ada seorang ibu bermata satu yang sangat dibenci anak kandungnya sendiri. Anak itu merasa sangat malu memiliki ibu yang sangat menakutkan itu.

                Baginya ibunya sangat memalukan. Setiap hari ia mendapat cacian dari teman-teman sekolahnya. Dia merasa tertekan dan ingin segera keluar dari rumah dan tidak berhubungan

                lagi dengan ibunya. Suatu kali ia membentak ibunya dengan suara amat keras “Kalau ingin membuatku jadi bahan tertawaan dan ejekan, kenapa tidak mati saja?!” ucapnya dengan sangat marah.
                ',

                'image' => 'img/books/bukan untuk dibaca.jpg',
                'status' => false,
            ],
            [
                'name' => 'Kutukan Di Hari Ulang Tahun',
                'books_category_id' => 6,
                'synopsis' => 'Menceritakan sesosok gadis remaja yang tidak pernah merayakan hari ulang tahunnya dikarenakan hidupnya yang serba pas-pasan. Ayahnya hanya bekerja menjaga toko mainan, sedangkan ibunya hanya

                sebagai tukang cuci di rumah orang-orang kaya. Hingga pada akhirnya datang sesosok pria tua yang terlahir dari negeri perbatasan cahaya dan kegelapan, yang tentunya akan merayakan hari ulang tahun gadis remaja ini

                dengan syarat : harus meniup lilin yang tertancap di kue ulang tahun yang dibawanya dan setelah itu terjadi. Pria tua ini memberikan hadiah kepada gadis remaja itu. Yaitu hadiah: sebuah permintaan sebanyak (14) kali yang

                tentunya setiap permintaan itu akan langsung terkabulkan. Namun ada sebuah perjanjian yang dilanggar oleh gadis remaja itu. Hingga pada akhirnya gadis remaja ini mendapatkan sebuah kutukan yang mengerikan.
                ',
                'image' => 'img/books/kutukan di hari ulang tahun.jpg',
                'status' => false,
            ],
            [
                'name' => 'Harry Potter And The Cursed Child',
                'books_category_id' => 5,
                'synopsis' => 'Novel ini masih menceritakan Harry Potter, namun versi dewasanya. Harry kini menjadi pegawai kementerian sihir. Dia juga seorang suami, sekaligus

                ayah dari tiga anak usia sekolah. Buku ini awalnya berupa naskah pementasan. Di mana saat dipentaskan di West End London pada musim panas 2016, drama ini mendapat sambutan baik.',

                'image' => 'img/books/harry potter and the cursed child.jpg',
                'status' => false,
            ],
            [
                'name' => 'Sherlock Hormes',
                'books_category_id' => 2,
                'synopsis' => 'novel ini menceritakan kisah-kisahnya dalam mengungkap kasus-kasus kejahatan. Juga ada cerita tentang kelihaian-kelihaiannya dalam melawan kejahatan musuh bebuyutannya, Profesor Moriarty.

                Gaya berceritanya yang straight, detail, tidak bertele-tele dan cerdas, diceritakan dari sudut pandang orang pertama. Sir arthur Conan Doyle yang sangat bagus dan perfecto-numero uno dalam membangun ceritanya untuk

                menggambarkan cerita dalam novelnya begitu hidup, begitu mengalir, detail-detailnya, kasus-kasus yang ditangani Holmes begitu unik dan menggelitik, deduksi dan fakta beradu dalam narasi, karakter-karakter aristokrat serta

                penjahat kelas teri yang berdalih, di-mix jadi satu dan divisualisasikan. Sherlock Holmes adalah tokoh detektif rekaan yang terkenal, fenomenal dan legendaris. Dalam petualangan-petualangannya Sherlock Holmes selalu ditemani sama partner

                sekaligus sahabat setianya, Dr. John H. Watson. Awal pertama kali mereka bertemu adalah saat Holmes tengah mencari teman sekamar untuk berbagi uang sewa menyewa sebuah kamar kos di Baker Street 221 B.
                ',

                'image' => 'img/books/sherlock hormes.jpg',
                'status' => false,
            ],
            [
                'name'  => 'Ha rry Potter and the S orcerer`s Ston e',
                'books_category_  id' =>  5,
                'synop sis' => 'Seumur hidup, Harry  Potter tidak pernah berurusan d engan sihir. Dia tinggal bersama keluarga Dursley  yang kejam dan Dudley, putra  mereka yang menyebalkan. Kamar Harry cuma lemari sempit di kolong ta ngga, dan selama sebelas tahun, ulang tahunnya tak pernah diray a kan. Namun, tiba-tiba datang burung hantu membawa surat mis terius, surat berisi undanga n ke tempat menakjubkan bernama Sekolah Sihir Hogwarts. Dan di sana bukan hanya ada banyak teman, pertandingan olahraga naik sapu terbang, dan sihir dalam segala hal—dari pelajara n sampai mak anan,
                tapi juga ada takdir luar biasa yang sudah lama menantinya. Jika Harry mampu bertahan hidup.',
                'image' => 'img/books/harry potter and the sorcerer`s stone.jpg',
                'status' => false,
            ],
            [
                'name' => 'Hurt',
                'books_category_id' => 1,
                'synopsis' => 'Novel ini menceritakan menceritakan tentang keluarga seorang gadis yang bernama Nabila. Ia sekarang tinggal hanya dengan ibunya, karena ayahnya telah meninggal pada saat ia masih berusia satu tahun.

                Ibunya bekerja sebagai wirausaha yang meneruskan usaha toko besi peninggalan ayahnya. Pada saat Nabila disekolah dan tiba-tiba ia melihat seorang pria yang ada pada mimpinya. Nabila pun jatuh cinta pada pandangan pertama.

                Saat ia sedang melamunkan pria itu, ia pun di kagetkan kadatangan sahabatnya yang bernama nico yang kerap dipanggil bule. Nabila menceritakan bertemu dan berkenalan dengan seseorang yang disukainya saat ia sedang makan di kantin bersama Nico. Nama pria itu adalah Malik.
                ',
                'image' => 'img/books/Hurt.jpg',
                'status' => false,
            ],
            [
                'name' => 'Teror di Radio',
                'books_category_id' => 6,
                'synopsis' => ' Mengisahkan dengan lembut namun kejam sesosok anak muda bernama Donal yang sangat menyayangi ibunya. Donal selalu mau bila disuruh oleh ibunya untuk pergi ke warung, untuk berbelanja kebutuhan dapur. Anak muda ini sebenarnya sangat baik dan begitu menyayangi ibunya.

                Tetapi ada yang salah dengan jalan pikiran Donal setelah dirinya berbicara dengan penyiar radio lewat radio peninggalan ayahnya yang sudah lama menghilang dan tak ada kabar lagi semenjak dua puluh tahun yang lalu. Selesai berbicara dengan penyiar radio misterius tersebut! Donal selalu membunuh

                orang-orang yang sebelumnya pernah melukai hatinya maupun menyakiti perasaan ibunya. Hingga Donal terus meneror dan membunuh setiap orang-orang yang menyakiti hatinya. Kejadian mengerikan itu selalu dilakukan olehnya setelah berbicara dengan sosok penyiar radio yang misterius tersebut.
                ',
                'image' => 'img/books/teror di radio.jpg',
                'status' => false,
            ],
            [
                'name' => 'Crazy Rich Asians',
                'books_category_id' => 5,
                'synopsis' => 'Novel ini merupakan salah satu dari trilogi novel populer karya Kevin Kwan, penulis asal Singapura. Novel ini bercerita tentang kehidupan kaum jetset keturunan Tionghoa di Singapura dengan segala lika-likunya.
                ',

                'image' => 'img/books/crazy rich asians.jpg',
                'status' => false,
            ],
            [
                'name' => 'China Rich Girlfriend',
                'books_category_id' => 5,
                'synopsis' => ' Cerita di Crazy Rich Asians bergulir pada sebuah pernikahan mewah. Di buku kedua ini, bercerita tentang pernikahan mewah Rachel Chu. Rachel memakai cincin bermata berlian Asscher-cut.

                Ia juga memakai gaun yang disukainya. Namun kesedihan dirasakannya saat mengingat sosok ayah kandung yang tak bisa menemaninya ke altar pernikahan. Rachel kemudian terseret ke dalam dunia gemerlap Shanghai yang berisi kemewahan tak terbayangkan.

                Secara mendadak, sosok pria itu muncul dengan identitas yang tak diduga-duga.
                ',

                'image' => 'img/books/china rich girlfriend.jpg',
                'status' => false,
            ],
            [
                'name' => 'Me and My Broken Heart ',
                'books_category_id' => 1,
                'synopsis' => 'Me and My Broken Heart adalah novel terbaru karya Wulanfadi yang sebelumnya sudah menerbitkan novel best seller, Matt & Mou. Bercerita tentang Luna dan Mika, kedua remaja yang menimba ilmu di sekolah yang sama. Keduanya sama-sama pernah patah hati.

                Bahkan Luna sendiri masih setengah berharap untuk bisa balikan dengan mantannya. Namun, Luna dan Mika yang awalnya hanya menjadi teman berbagi cerita, tanpa disadari mulai saling memendam rasa di hati.
                ',
                'image' => 'img/books/me and my broken heart.jpg',
                'status' => false,
            ],
            [
                'name' => 'Memories TO Forget',
                'books_category_id' => 1,
                'synopsis' => 'Novel ini menceritakan tentang kisah Satria dan Lara. Keterpaksaan satria untuk meninggalkan Lara ke tempat yang jauh memang sebuah keputusan yang sangat berat.

                Begitu juga dengan Lara yang menyadari betapa besarnya rasa sayangnya kepada Satria setelah kepergiannya. Pada cerita ini, pembaca akan dibuat gelisah dengan konten permasalahan masa lalu dan kenangan indah yang tetap menjadi relik di antara Satria dan Lara.
                ',

                'image' => 'img/books/memories to forget.jpg',
                'status' => false,
            ],
            [
                'name' => 'The Choice We Make',
                'books_category_id' => 1,
                'synopsis' => 'Novel ini bercerita tentang kisah persahabatan Kate dan Hannah dari kecil bahkan sampai menikah. Kate memiliki keluarga kecil dengan dua anak.

                Sedangkan, Hannah hampir putus harapan untuk memiliki anak. Kate pun bersedia menjalani surogasi. Namun, suatu ketika Kate mengalami aneurisme yang bisa mengancam hidup Kate dan calon bayi Hannah.

                ',

                'image' => 'img/books/the choice we make.jpg',
                'status' => false,
            ],
            [
                'name' => 'Anna Dressed in Blood ',
                'books_category_id' => 6,
                'synopsis' => 'Anna Korlov, yang muncul dalam sampul muka buku ini, adalah sesosok hantu ganas pembunuh siapa pun yang menjejakkan kaki ke dalam rumahnya.

                Cas, seorang pemuda pemburu hantu, bertekad untuk mengenyahkan keberadaan Anna. Namun ternyata Cas menemukan suatu kutukan penyebab sosok Anna menjadi beringas, dan mereka berdua pun bekerja sama untuk memusnahkan kutukan tersebut.

                Dengan tokoh utama seorang pemuda belasan tahun, Anna Dressed in Blood memang ditujukan untuk para pembaca remaja dan dewasa muda. Ada romansa di dalamnya, meskipun tidak terlalu kental.
                ',
                'image' => 'img/books/anna dressed in blood.jpg',
                'status' => false,
            ],
            [
                'name' => 'A Head Full Ghost',
                'books_category_id' => 6,
                'synopsis' => ' Merry tidak percaya pada orang-orang dewasa yang mengatakan bahwa kakaknya, Marjorie, kerasukan. Ya, Marjorie memang melakukan hal-hal aneh. Mengisahkan cerita-cerita horor, masuk ke kamar Merry diam-diam, mengeluarkan suara-suara mengerikan dan

                ada luka-luka misterius di tubuh Marjorie yang tak bisa dijelaskan. Ayah mereka yakin ada iblis jahat di dalam tubuh Marjorie. Namun, Marjorie bilang, ayah merekalah yang jahat. Paul Tremblay adalah nama yang cukup terkenal di kalangan para pencinta novel horor.

                Dia terkenal suka membuat kisah yang mempermainkan emosi para pembaca, dan akhir cerita yang terbuka, sehingga pembaca diajak untuk membuat kesimpulan sendiri.
                ',
                'image' => 'img/books/a head full ghost.jpg',
                'status' => false,
            ],
            [
                'name' => 'Melody Of The Darkness',
                'books_category_id' => 6,
                'synopsis' => 'Gabriella Hudson adalah seorang gadis biasa yang bekerja sebagai sekretaris di salah satu perusahaan multisektor Washington. Tapi, dibalik semua hal normal dalam diri Gabby, gadis itu memiliki rahasia besar yang bahkan tidak diketahuinya.

                Apalagi Gabby memiliki seorang tunangan yang benar-benar tidak biasa dan mengetahui hal paling gelap dalam diri Gabby. Suatu malam saat dia menghadiri sebuah acara amal menggantikan atasannya, Gabby mengalami malam paling memalukan dalam hidupnya. Pingsan di hadapan para tamu undangan.

                Bukannya terbangun di rumah sakit atau rumahnya sendiri, Gabby malah mendapati dirinya terbangun di ranjang bersama seorang pria tampan berambut pirang. Dan hal pertama yang seharusnya dilakukan Gabby setelah tahu siapa pria itu adalah melarikan diri. Kris, sang nosferatu, bertugas mempertahankan kedamaian antara

                berbagai ras iblis dan makhluk non manusia lainnya. Awalnya dia sengaja mendekati Gabby dan bermaksud untuk menggunakan Gabby sebagai alat negosiasi dengan salah satu ras iblis pemberontak. Tapi setelah menghabiskan sehari bersama Gabby Kris menyadari kalau menyerahkan gadis itu adalah hal yang tidak akan pernah dia lakukan.

                Kris menginginkan Gabby untuk dirinya sendiri. Di lain pihak, Gabby merasakan kalau dirinya nyaman dengan keberadaan dan perhatian Kris, tidak seperti saat dia bersama tunangannya. Gabby membuat Kris mampu merasakan emosi, yang menjadi berkah sekaligus kutukan bagi sang vampir.
                ',
                'image' => 'img/books/melody of the darkness.jpg',
                'status' => false,
            ],
            [
                'name' => 'Marmut Merah Jambu',
                'books_category_id' => 3,
                'synopsis' => 'Novel ini menceritakan kisah cinta mulai dari cinta diam-diam, indahnya PDKT, sampai ditolak mentah-mentah. Buku ini keseluruhan sangat menarik dibaca karena sesuai dengan kehidupan sehari-hari seperti cinta diam-diam karena takut mengungkapkan isi hatinya.

                Keahlian Radit dalam mengolah kata dan sebagian curahan dari teman-temannya menjadi salah satu isi dalam buku ini bahkan mulai dari perhatian orang tuanya, adiknya(Edgar), bahkan sampai kucing peliharaan keluarganya yang dibuat tokoh utama disalah satu bab dimana sang kucing dimanusiakan.
                ',
                'image' => 'img/books/marmut merah jambu.jpg',
                'status' => false,
            ],
        ]);
    }
}
