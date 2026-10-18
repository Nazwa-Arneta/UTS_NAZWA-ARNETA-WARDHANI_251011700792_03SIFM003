@extends('layouts.app')

@section('title', 'About Us | TERRAVA')

@section('content')

<section class="about-hero">
    <div class="container">
        <span class="section-eyebrow">ABOUT TERRAVA</span>

        <h1 class="about-title">
            The world is bigger
            <span>than your comfort zone.</span>
        </h1>

        <p class="about-intro">
            TERRAVA merupakan konsep layanan penyewaan perlengkapan
            camping yang membantu petualang mempersiapkan perjalanan
            dengan lebih praktis. Karena pengalaman di alam seharusnya
            lebih mudah untuk dimulai.
        </p>
    </div>
</section>

<section class="about-content">
    <div class="container">

        <div class="row g-4">

            <div class="col-md-4">
                <article class="about-card h-100">
                    <span class="about-number">01 / OUR APPROACH</span>

                    <h2>Practical by design.</h2>

                    <p>
                        Menyewa perlengkapan menjadi alternatif praktis
                        bagi orang yang ingin camping tanpa harus membeli
                        semua peralatan sendiri.
                    </p>
                </article>
            </div>

            <div class="col-md-4">
                <article class="about-card h-100">
                    <span class="about-number">02 / OUR FOCUS</span>

                    <h2>Ready to explore.</h2>

                    <p>
                        Katalog perlengkapan membantu pengguna mengenali
                        kebutuhan dan mempersiapkan perjalanan outdoor.
                    </p>
                </article>
            </div>

            <div class="col-md-4">
                <article class="about-card h-100">
                    <span class="about-number">03 / OUR BELIEF</span>

                    <h2>Experience matters.</h2>

                    <p>
                        Pengalaman, pemandangan, dan cerita perjalanan
                        adalah bagian berharga dari petualangan.
                    </p>
                </article>
            </div>

        </div>

        <div class="about-mission">
            <span class="section-eyebrow">OUR PURPOSE</span>

            <h2>Gear up. Get out. Find your adventure.</h2>

            <p>
                TERRAVA membawa gagasan bahwa petualangan tidak harus
                dimulai dengan memiliki banyak barang. Dengan perencanaan
                yang tepat dan perlengkapan yang sesuai, setiap orang
                dapat mulai menjelajahi alam dengan lebih siap.
            </p>
        </div>

    </div>
</section>

@endsection