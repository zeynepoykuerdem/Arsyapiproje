@extends('layouts.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: {{url("public/img/breadcrumbs-bg.jpg")}};">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>İletişim</h2>
            <ol>
                <li><a href="{{url("/")}}">AnaSayfa</a></li>
                <li>İletişim</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-map"></i>
                        <h3>Adresimiz</h3>
                        <p>Şirintepe Mahallesi Anadolu Caddesi No:778 İzmir, Turkey</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h3>E-Mail Adresimiz</h3>
                        <p>umutkaanarslan@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-telephone"></i>
                        <h3>Bizimle Iletişime Geçin</h3>
                        <p>+90 542 680 9910</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">

                <div class="col-lg-6 ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3122.8300136036587!2d27.063992076227915!3d38.49156417054762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd0a6116426e7%3A0xcb0c8bc2a033ee40!2zxZ5pcmludGVwZSwgQW5hZG9sdSBDZC4gTm86Nzc4LCAzNTY0MCBBb3NiL8OHacSfbGkvxLB6bWly!5e0!3m2!1str!2str!4v1707340913320!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="col-lg-6">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                        <form action="{{ route('messages.store') }}" method="post" class="p-4 border rounded shadow-sm">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-12">
                                    <input type="text" name="customer_name" class="form-control" placeholder="İsminiz" required>
                                </div>
                                <div class="col-12">
                                    <input type="email" name="customer_email" class="form-control" placeholder="Email Adresiniz" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="subject" class="form-control" placeholder="Konu" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="customer_message" class="form-control" placeholder="Mesajınız" rows="4" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit"  >Gönder</button>
                                </div>
                            </div>
                        </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection
