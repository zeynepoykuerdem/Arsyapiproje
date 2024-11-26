
<?php
$menu = [
    [
        'url' => '',
        'title' => 'Anasayfa',
    ],
    [
        'url' => 'Hakkımızda',
        'title' => 'Hakkımızda',
    ],
    [
        'url' => 'Projelerimiz',
        'title' => 'Projelerimiz',
    ],

    [
        'url' => 'İletişim',
        'title' => 'İletişim',
    ],

];
?>

    <!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <div class="col-auto">
            <a href="{{url("/")}}" class="logo d-flex align-items-center">
                <h1 class="m-0">Ars Yapı ve Proje<span>.</span></h1>
            </a>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                @foreach ($menu as $m)
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is(trim($m['url'], '#')) ? 'active' : '' }}"
                           aria-current="page"
                           href="{{url($m['url'])}}">{{$m['title']}}</a>
                    </li>
                @endforeach
            </ul>


        </nav><!-- .navbar -->
        <div class="col-auto d-flex align-items-center">
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </div>
</header><!-- End Header -->

