@extends('layouts.app')

@section('title', 'TERRAVA | Find Your Wild')

@section('meta_description', 'Temukan perlengkapan camping dan trekking untuk petualangan berikutnya bersama TERRAVA.')

@section('content')

{{-- HERO: bagian utama tepat di bawah navbar --}}
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <span class="hero-label">
                    YOUR NEXT OUTDOOR EXPERIENCE
                </span>

                <h1 class="hero-title">
                    Find your wild.
                    <span>Leave the ordinary behind.</span>
                </h1>

                <p class="hero-description">
                    Dari perjalanan singkat sampai petualangan di alam terbuka,
                    siapkan perlengkapanmu dan fokus menikmati setiap momen.
                    Rent your gear. Make your story.
                </p>

                <div class="hero-actions">
                    <a href="{{ route('catalog') }}" class="btn btn-terra">
                        Explore Equipment <span aria-hidden="true">↗</span>
                    </a>

                    <a href="{{ route('about') }}" class="hero-secondary-link">
                        Get to know us
                    </a>
                </div>

                <div class="hero-stats">
                    <div>
                        <strong>15</strong>
                        <span>Outdoor essentials</span>
                    </div>

                    <div>
                        <strong>One destination</strong>
                        <span>Your next adventure</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-image-wrap">
                    <img
                        src="{{ asset('assets/images/vibes.jpg') }}"
                        alt="Pemandangan alam untuk inspirasi petualangan TERRAVA"
                        class="hero-image">

                    <div class="hero-image-caption">
                        <span class="caption-mark"></span>

                        <div>
                            <span class="caption-eyebrow">TAKE THE SCENIC ROUTE</span>
                            <strong>Somewhere worth getting lost.</strong>
                        </div>
                    </div>

                    <span class="hero-image-index">01 / EXPLORE</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- INTRO --}}
<section class="intro-section">
    <div class="container">
        <div class="intro-copy">
            <span class="section-eyebrow">THE TERRAVA WAY</span>

            <h2>Less gear to own. More places to explore.</h2>

            <p>
                Nggak semua petualangan harus dimulai dengan membeli
                banyak perlengkapan. Temukan kebutuhanmu, sewa peralatan
                yang sesuai, lalu berangkat menciptakan cerita baru.
            </p>
        </div>
    </div>
</section>

{{-- 4 PRODUK DI BERANDA --}}
<section class="catalog-section">
    <div class="container">

        <div class="catalog-heading">
            <div>
                <span class="section-eyebrow">SELECTED FOR YOUR NEXT TRIP</span>

                <h2 class="section-title mt-2 mb-2">
                    Gear up for the outdoors.
                </h2>

                <p class="section-description">
                    Pilihan perlengkapan untuk menemani petualanganmu.
                </p>
            </div>

            <a href="{{ route('catalog') }}" class="text-link">
                View all 15 items <span aria-hidden="true">↗</span>
            </a>
        </div>

        <div class="row g-4">
            @forelse ($campGears as $gear)

            <div class="col-sm-6 col-lg-3">
                <article class="gear-card">

                    <a
                        href="{{ route('camp-gears.show', $gear->id) }}"
                        class="gear-image-link">
                        <div class="gear-image-box">
                            <img
                                src="{{ asset($gear->image) }}"
                                alt="{{ $gear->name }}"
                                class="gear-image"
                                loading="lazy">

                            <span class="gear-category">
                                {{ $gear->category }}
                            </span>
                        </div>
                    </a>

                    <div class="gear-card-body">

                        <h3 class="gear-name">
                            <a href="{{ route('camp-gears.show', $gear->id) }}">
                                {{ $gear->name }}
                            </a>
                        </h3>

                        <p class="gear-description">
                            {{ \Illuminate\Support\Str::limit($gear->description, 85) }}
                        </p>

                        <div class="gear-stock">
                            <span class="stock-dot {{ $gear->stock < 1 ? 'stock-dot-empty' : '' }}"></span>

                            @if ($gear->stock > 0)
                            {{ $gear->stock }} unit tersedia
                            @else
                            Stok habis
                            @endif
                        </div>

                        <div class="gear-card-bottom">
                            <div>
                                <span class="price-label">Rental price</span>

                                <div class="gear-price">
                                    Rp{{ number_format($gear->rent_price, 0, ',', '.') }}
                                    <span>/ day</span>
                                </div>
                            </div>

                            <a
                                href="{{ route('camp-gears.show', $gear->id) }}"
                                class="gear-detail-link"
                                aria-label="Lihat detail {{ $gear->name }}">
                                →
                            </a>
                        </div>

                    </div>
                </article>
            </div>

            @empty

            <div class="col-12">
                <div class="empty-catalog">
                    <h3>Belum ada perlengkapan</h3>
                    <p>Pastikan data produk sudah dimasukkan ke database.</p>
                </div>
            </div>

            @endforelse
        </div>

        <div class="catalog-bottom-link">
            <a href="{{ route('catalog') }}" class="btn btn-outline-terra">
                Explore the full collection →
            </a>
        </div>

    </div>
</section>

@endsection