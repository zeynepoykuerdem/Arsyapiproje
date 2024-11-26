@extends('layouts.app')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: {{url("img/breadcrumbs-bg.jpg")}}">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Hakkımızda</h2>
                <ol>
                    <li><a href="index.html">Anasayfa</a></li>
                    <li>Hakkımızda</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img">
                        <img src="{{ asset('img/about.jpg') }}" class="img-fluid rounded shadow-lg" alt="About Image"style="width: 80%; max-width: 600px; height: auto; display: block; margin: 0 auto;">
                    </div>

                    <div class="col-lg-7">
                        <div class="our-story">
                            <h3 class="section-title">Hikayemiz</h3>
                            <p class="lead-text">Ars Yapı & Proje adı ile 2020 yılında hizmete başlayan firmamız, sanayi yapıları, alışveriş merkezi projeleri, otel ve konut projeleri dallarında çalışmalar yürütmektedir.</p>
                            <ul class="features-list">
                                <li><i class="bi bi-check-circle"></i> <span>Güçlü teknik ekibimiz, müşteri taleplerini titizlikle değerlendirerek, yapılan ön çalışmalarla alternatif projeler sunar ve en ekonomik ve güvenli tasarımı gerçekleştirir.</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Deneyimli ve yenilikçi kadromuzla, güncel yönetmeliklere uygun şekilde Bina Bilgi Modellemesi (BIM) disiplinine uygun projeler üretiyor ve inşaat sektöründe fark yaratıyoruz.</span></li>
                            </ul>
                            <p class="closing-text">Sizlere en iyi şekilde hizmet vermeye devam edeceğiz.</p>
                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter section-bg">
            <div class="container">

                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                      data-purecounter-duration="1" class="purecounter"></span>
                                <p>Mutlu Müşteriler</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                      data-purecounter-duration="1" class="purecounter"></span>
                                <p>Projelerimiz</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->


                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                      class="purecounter"></span>
                                <p>Çalışkan Ekibimiz</p>
                            </div>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>
        </section><!-- End Stats Counter Section -->
        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Takımımız</h2>
                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 offset-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src={{asset("img/team/umutkaanarslan.jpg")}} class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Umut Kaan Arslan</h4>
                            <span>CEO-Founder</span>
                            <p>Manisa Celal Bayar Üniversitesi İnşaat Mühendisliğinden 2020 yılından mezun olduğundan beri sayısız projelere imza atmıştır.</p>
                        </div>
                    </div><!-- End Team Member -->
                </div>
            </div>
        </section>

@endsection
