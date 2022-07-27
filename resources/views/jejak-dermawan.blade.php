<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        
    </head>
    <body>

        <link href="{{ url('/jejak_dermawan/jejak-dermawan.css') }}" rel="stylesheet" type="text/css" />
        
        @php
            $contents = array(
                array( // 1
                    "background"    => url('jejak_dermawan/img/BG-Jejak-Dermawan_01.jpg'),
                    "judul"         => false,
                    "jejak"         => url('jejak_dermawan/img/Kaki_01.png'),
                    "position_img"  => 1, //right
                    "img"           => url('jejak_dermawan/img/section_1.png'),
                    "img_mobile"    => url('jejak_dermawan/img/section_1.png'),
                    "class_img"     => "top padding-title",
                    "class_text"    => "left",
                    "text"          => "2020 merupakan tahun yang berat bagi kita semua. 
                                        Berbeda dari tahun-tahun sebelumnya, tahun ini kita diuji bertubi-tubi. 
                                        Namun alhamdulillah kita bisa tetap kuat dan bangkit bersama!
                                        <br><br>
                                        Tak hanya bertahan sendiri, ternyata dalam keadaan sulit pun,
                                        kita masih bisa membantu sesama yang jauh lebih membutuhkan.
                                        <br><br>
                                        Terima kasih Dermawan, Jejak Kedermawananmu meninggalkan kesan begitu
                                        dalam untuk mereka yang sempat dirundung nestapa.
                                        ",
                ),
                array( // 2
                    "background"    => url('jejak_dermawan/img/BG-Jejak-Dermawan_02.jpg'),
                    "judul"         => false,
                    "jejak"         => url('jejak_dermawan/img/Kaki_02.png'),
                    "position_img"  => 2, //left
                    "img"           => url('jejak_dermawan/img/section_2.png'),
                    "img_mobile"    => url('jejak_dermawan/img/section_2.png'),
                    "class_img"     => "",
                    "class_text"    => "left middle",
                    "text"          => "Alhamdulillah,
                                        kedermawananmu tahun ini
                                        sudah banyak membantu
                                        saudara kita baik di dalam,
                                        maupun di luar negeri. Kamu
                                        sudah turut andil dalam <strong>".(isset($turut_andil) ? $turut_andil : '$turut_andil')."</strong>
                                        aksi kedermawanan.
                                    ",
                ), 
                array( // 3
                    "background"    => url('jejak_dermawan/img/BG-Jejak-Dermawan_03.jpg'),
                    "judul"         => "JUMLAH PENERIMA MANFAAT",
                    "jejak"         => url('jejak_dermawan/img/Kaki_02.png'),
                    "position_img"  => 1, //right
                    "img"           => url('jejak_dermawan/img/section_3.png'),
                    "img_mobile"    => url('jejak_dermawan/img/section_3.png'),
                    "class_img"     => "right",
                    "class_text"    => "text-green-jk right middle",
                    "text"          => "Sebanyak <strong>".number_format(10000)."</strong> saudara kita
                                        baik di dalam maupun di luar
                                        negeri sudah merasakan
                                        kedermawananmu.
                                        Semoga tahun depan, kamu
                                        bisa membantu kebih banyak
                                        saudara lagi, ya!",
                ),
                array( // 4
                    "background"    => url('jejak_dermawan/img/BG-Jejak-Dermawan_04.jpg'),
                    "judul"         => "AKSI INDONESIA DERMAWAN",
                    "jejak"         => url('jejak_dermawan/img/Kaki_02.png'),
                    "position_img"  => 2, //left
                    "img"           => url('jejak_dermawan/img/section_4.png'),
                    "img_mobile"    => url('jejak_dermawan/img/section_4_mobile.png'),
                    "class_img"     => "left m-right",
                    "class_text"    => "text-green-jk left middle",
                    "text"          => "Dari sekian banyak aksi di Indonesia Dermawan,
                                        ternayata tahun ini kamu paling banyak bersedekah
                                        untuk aksi <strong>".(isset($popular_aksi->title) ? $popular_aksi->title : '-')."</strong>
                                        barakallah kak! semoga sedekahmu, bisa terus membantu
                                        mereka yang membutuhkan ya",
                ), // 5
                array(
                    "background"    => url('jejak_dermawan/img/BG-Jejak-Dermawan_05.jpg'),
                    "judul"         => "KILAS BALIK DERMAWAN",
                    "jejak"         => url('jejak_dermawan/img/Kaki_02.png'),
                    "position_img"  => 1, //right
                    "img"           => url('jejak_dermawan/img/section_5.png'),
                    "img_mobile"    => url('jejak_dermawan/img/section_5.png'),
                    "class_img"     => "right",
                    "class_text"    => "right text-green-jk middle",
                    "text"          => "wah, ternyata tahun ini kamu sering bersedekah
                                        untuk kategori <strong>".(isset($popular_category->name) ? $popular_category->name : "-")."</strong> kira kira tahun depan, kamu
                                        paling banyak sedekah untuk kategori apa ya?",
                ),
                array( // 6
                    "background"    => url('jejak_dermawan/img/BG-Jejak-Dermawan_06.jpg'),
                    "judul"         => "TERTIMONI BENEFICIARIES",
                    "jejak"         => url('jejak_dermawan/img/Kaki_02.png'),
                    "position_img"  => 2, //left
                    "img"           => url('jejak_dermawan/img/section_6.png'),
                    "img_mobile"    => url('jejak_dermawan/img/section_6_mobile.png'),
                    "class_img"     => "left m-right",
                    "class_text"    => "text-green-jk left middle",
                    "text"          => "Terima kasih ACT
                                        sudah memberikan kami
                                        kesekian kalinya bantuan beras
                                        ini. semoga selalu menjadi yang
                                        terbaik untuk ACT.
                                        <br>-Pak Endah-",
                ),
                array( // 7
                    "background"    => url('jejak_dermawan/img/BG-Jejak-Dermawan_07.jpg'),
                    "judul"         => "TERTIMONI BENEFICIARIES",
                    "jejak"         => url('jejak_dermawan/img/Kaki_02.png'),
                    "position_img"  => 1, //right
                    "img"           => url('jejak_dermawan/img/section_7.png'),
                    "img_mobile"    => url('jejak_dermawan/img/section_7.png'),
                    "class_img"     => "right",
                    "class_text"    => "right text-green-jk middle",
                    "text"          => "“Terima kasih banyak untuk ACT
                                        dan masyarakat Indonesia
                                        yang terus menerus membantu
                                        kami, Muslim Rohingya bahkan
                                        Sampai saat ini.
                                        Terima kasih sekali, semoga
                                        Allah membalas kebaikan kalian”
                                        <br>-Rizwan, COxs Bazar-",
                ),
                array( // 8
                    "background"    => url('jejak_dermawan/img/BG-Jejak-Dermawan_08.jpg'),
                    "judul"         => false,
                    "jejak"         => url('jejak_dermawan/img/Kaki_03.png'),
                    "position_img"  => 2, //left
                    "img"           => url('jejak_dermawan/img/section_8.png'),
                    "img_mobile"    => url('jejak_dermawan/img/section_8_mobile.png'),
                    "class_img"     => "left m-right",
                    "class_text"    => "left text-green-jk top",
                    "text"          => "Semoga, Jejak Kedermawananmu akan
                                        selalu ada dan terpatri dalam hati para
                                        penerima manfaat. Dan semoga, Jejak
                                        Kedermawanan ini tak berhenti sampai
                                        di sini. Yuk, lanjut menghadirkan Jejak
                                        demi Jejak Kedermawanan untuk tahun
                                        depan dan seterusnya!
                                        <br>
                                        <section class='btn-home-share'>
                                            <a href='javascript:void(0)' id='btn-share'><img width='80%' src='".url('jejak_dermawan/img/Share.png')."' /></a>
                                            <a href='/'><img width='80%' src='".url('jejak_dermawan/img/Home.png')."' /></a>
                                        </section>
                                        ",
                )
            );
        @endphp

        <main class="timeline bg-jejak-kaki Loop js-loop">
            @foreach ($contents as $key => $content)
                <section id="timeline-content" class="timeline-content" style="background-image: url('{{$content['background']}}');">
                    <div class="timeline-bg {{$key == 0 ? 'first' : ($key == 7 ? 'last' : '')}}" style="background-image: url('{{$content['jejak']}}')"></div>
                    @if ($content['position_img'] == 1)
                        @desktop
                            <div class="timeline-left timeline-text {{$content['class_text']}}">
                                @if ($content['judul'])<h5 class="timeline-title">{{$content['judul']}}</h5>@endif
                                <span>{!! $content["text"] !!}</span>
                            </div>
                            <div class="timeline-right timeline-img {{$content['class_img']}}"><img src="{{ $content['img'] }}"></div>
                        @elsedesktop
                            <div class="timeline-right timeline-img {{$content['class_img']}}"><img src="{{ $content['img'] }}"></div>
                            <div class="timeline-left timeline-text {{$content['class_text']}}">
                                @if ($content['judul'])<h5 class="timeline-title">{{$content['judul']}}</h5>@endif
                                <span>{!! $content["text"] !!}</span>
                            </div>
                        @enddesktop
                    @else
                        @desktop
                            <div class="timeline-left timeline-img {{$content['class_img']}}"><img src="{{ $content['img'] }}"></div>
                            <div class="timeline-right timeline-text {{$content['class_text']}}">
                                @if ($content['judul'])<h5 class="timeline-title">{{$content['judul']}}</h5>@endif
                                <span>{!! $content["text"] !!}</span>
                            </div>
                        @enddesktop
                        @handheld
                            <div class="timeline-left timeline-img {{$content['class_img']}}"><img src="{{ $content['img'] }}"></div>
                            <div class="timeline-right timeline-text {{$content['class_text']}}">
                                @if ($content['judul'])<h5 class="timeline-title">{{$content['judul']}}</h5>@endif
                                <span>{!! $content["text"] !!}</span>
                            </div>
                        @endhandheld
                    @endif
                </section>
            @endforeach
        </main>
    
        <script src="{{ url('/jejak_dermawan/jejak-dermawan.js') }}" type="text/javascript"></script>
    </body>
</html>