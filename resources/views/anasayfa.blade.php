@extends('layouts.app')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container-fluid g-0">
            <img style="max-height: 400px;object-fit: cover;" class="img-fluid w-100 min-vh-25 min-vh-md-50 mb-n7" src="{{asset("img/arkaplan.jpg")}}" srcset="" sizes="" width="" height="" alt="Photo by Irene Dávila">
        </div>


        <div class="container p-5 body mt-md-n6 position-relative rounded" style="color: #0A1828 ">
            <div class="row">
                <div class="col-md-4 text-center align-self-center">
                    <div class="lc-block border-lg-end border-2 ">
                        <div editable="rich">
                            <p class="display-4 text-secondary">Ars Yapı ve Proje</p>
                        </div>
                    </div><!-- /lc-block -->
                </div><!-- /col -->
                <div class="col-md-8">
                    <div class="lc-block ">
                        <div editable="rich">
                            <p class=" display-4" style="color: white">Projelerimiz ile Sizlerin Yanınızdayız</p>
                        </div>
                    </div><!-- /lc-block -->
                </div><!-- /col -->
            </div>
        </div>

    </section>
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section">
        <div class="container">
            <div class="section-header">
                <h2>Referanslarımız</h2>
            </div>

            <div class="row" data-aos="zoom-in" id="client-slider">

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://www.alosbi.org.tr/themes/alosbiv1/assets/vendors/landing/img/logo.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://th.bing.com/th/id/OIP.3nDyTVcvcv51Z8q_N37yuwAAAA?pid=ImgDet&w=350&h=250&rs=1" class="img-fluid" alt="itob">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://th.bing.com/th/id/OIP.-yrktNTtP-nPGizuzh87hgAAAA?rs=1&pid=ImgDetMain" class="img-fluid" alt="lustre">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://th.bing.com/th/id/R.8174f1263a8b13db24f2cc73a3116747?rik=6vAGq12adjZ0UA&pid=ImgRaw&r=0" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://th.bing.com/th/id/OIP.azVlW_vOxxGLz9Eg4pTkuQHaHa?rs=1&pid=ImgDetMain" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://th.bing.com/th/id/OIP.fjZoKAm513KckGJ296CJDQAAAA?rs=1&pid=ImgDetMain" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://media.licdn.com/dms/image/C4D0BAQG-QF0H5QyQnw/company-logo_200_200/0/1675346426846?e=2147483647&v=beta&t=9HGJ5rTAgqYZ27WtufbJVSMQEuXOeTVTKI7HKi0QhsM" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://th.bing.com/th/id/R.c94dd2c417a465b624c0a318cd70e9bf?rik=me09SvPblpXJBg&pid=ImgRaw&r=0" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://th.bing.com/th/id/R.21aef840963e451b620deb7a45825883?rik=G5BIoVZM4v5FtQ&riu=http%3a%2f%2fwww.mallofantalya.com.tr%2fcontent%2fupload%2fimages%2flarge%2ftorun_gyo.png&ehk=XcLpyEST4lfjs6WEquqcK5omi4mSwZQvsS9jM7mjayM%3d&risl=&pid=ImgRaw&r=0" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://www.ozlemtarim.com.tr/img/1632318454.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src=" https://th.bing.com/th/id/OIP.AEVjz8k533TTKzlZwMSkJQHaEG?rs=1&pid=ImgDetMain" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="https://www.reweld.com.tr/Content/img/referanslar/cimentas.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src=" https://cdn1.gsb.gov.tr/img/logo/gsb-logotype-128px.png" class="img-fluid" alt="">
                </div>


            </div>

        </div>
    </section><!-- End Cliens Section -->


    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Hizmetlerimiz</h2>
                <p>İhtiyaçlarınıza özel sunduğumuz hizmetlerimiz.</p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa-solid fa-mountain-city"></i>
                        </div>
                        <h3>Danışmanlık Hizmetleri</h3>
                        <p>İnşaat projelerinizde uzman danışmanlık hizmetleri alın. Projelerinizin başarılı olması için tecrübemiz ve uzmanlığımızla yanınızdayız.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                        </div>
                        <h3>Proje Uygulama</h3>
                        <p>İnşaat projeleriniz için özgün tasarımlar ve çözümler sunuyoruz. Mimarlık ve mühendislik bilgimizle, projelerinizi hayal ettiğiniz gibi gerçeğe dönüştürmek için buradayız.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa-solid fa-compass-drafting"></i>
                        </div>
                        <h3>Proje Tasarımları</h3>
                        <p>Projelerinizin başından sonuna kadar yönetim ve uygulama hizmetleri sunuyoruz. Deneyimli ekibimiz, projelerinizi zamanında ve bütçe dahilinde başarıyla tamamlar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row  g-2 d-flex">

                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Keşif</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Planlama</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Projelendirme</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Uygulama</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <h3>KEŞİF</h3>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Projenin gereksinimleri ve hedefleri belirlenir.</li>
                                    <li><i class="bi bi-check2-all"></i> Arazi incelemeleri yapılır ve veriler toplanır.</li>
                                    <li><i class="bi bi-check2-all"></i> Mevcut koşulların değerlendirmesi gerçekleştirilir.</li>
                                </ul>
                                <p class="fst-italic">
                                    Projemizin başlangıç aşamasında gerçekleştirilen keşif sürecinde, mevcut durumun detaylı bir analizi yapılır. Bu aşamada, projenin gereksinimleri ve hedefleri belirlenir. Arazi incelemeleri yapılır, veriler toplanır ve mevcut koşulların değerlendirmesi gerçekleştirilir. Keşif aşaması, projenin kapsamının netleştirilmesine ve ilerleyen aşamalar için temel oluşturulmasına yardımcı olur.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{asset("img/features-1.jpg")}}" alt="Keşif" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->


                    <!-- PLANLAMA -->
                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <h3>Planlama</h3>
                                <p class="fst-italic">
                                    Projemizin PLANLAMA aşamasında, keşif aşamasında belirlenen gereksinimler ve hedefler temel alınarak detaylı bir planlama süreci gerçekleştirilir. Projenin teknik gereksinimleri belirlenir, kaynaklar tahsis edilir ve zaman çizelgesi oluşturulur. Bu aşama, projenin tüm bileşenlerinin koordinasyonunu sağlayarak başarılı bir şekilde uygulanmasını destekler.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Projenin teknik gereksinimleri belirlenir.</li>
                                    <li><i class="bi bi-check2-all"></i> Kaynaklar tahsis edilir ve zaman çizelgesi oluşturulur.</li>
                                    <li><i class="bi bi-check2-all"></i> Tüm bileşenlerin koordinasyonu sağlanır.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{asset("img/features-2.jpg")}}" alt="Planlama" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->


                    <!-- PROJELENDİRME -->
                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <h3>Projelendirme</h3>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Mimari, yapısal, mekanik ve elektrik projeleri gibi farklı disiplinlerde detaylı çalışmalar yapılır.</li>
                                    <li><i class="bi bi-check2-all"></i> Projeleştirme süreci, projenin fiziksel olarak hayata geçirilmesi için gerekli olan tüm teknik detayları içerir.</li>
                                    <li><i class="bi bi-check2-all"></i> Projeleştirme süreci, tüm paydaşların beklentilerini ve gereksinimlerini karşılayacak şekilde tasarlanır.</li>
                                </ul>
                                <p class="fst-italic">
                                    Projemizin PROJELENDİRME aşamasında, PLANLAMA aşamasında belirlenen gereksinimler ve hedefler doğrultusunda detaylı projeler oluşturulur. Bu aşamada, mimari, yapısal, mekanik ve elektrik projeleri gibi farklı disiplinlerde detaylı çalışmalar yapılır. Projeleştirme süreci, projenin fiziksel olarak hayata geçirilmesi için gerekli olan tüm teknik detayları içerir.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{asset("img/features-2.jpg")}}" alt="Projelendirme" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->


                    <!-- UYGULAMA -->
                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <h3>Uygulama</h3>
                                <p class="fst-italic">
                                    Projemizin UYGULAMA aşamasında, planlama ve projelendirme aşamalarında belirlenen planlar harekete geçirilir. Bu aşamada, tasarım çalışmaları detaylandırılır, malzeme ve ekipman temin edilir, inşaat işleri başlatılır ve proje hayata geçirilir. Proje ilerlemesi yakından takip edilir ve gerekirse revizyonlar yapılır.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Tasarım çalışmaları detaylandırılır ve uygulanabilir hale getirilir.</li>
                                    <li><i class="bi bi-check2-all"></i> Malzeme ve ekipman temini sağlanır ve inşaat işleri başlatılır.</li>
                                    <li><i class="bi bi-check2-all"></i> Proje ilerlemesi düzenli olarak takip edilir ve gerektiğinde düzeltmeler yapılır.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{asset("img/features-3.jpg")}}" alt="Uygulama" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->


                </div>

            </div>
        </section><!-- End Features Section -->

@endsection


