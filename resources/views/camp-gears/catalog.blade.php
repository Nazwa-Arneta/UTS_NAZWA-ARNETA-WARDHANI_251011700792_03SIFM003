@extends('layouts.app')

@section('title', 'Catalog | TERRAVA')

@section('content')

<section class="catalog-page-heading">
    <div class="container">
        <span class="section-eyebrow">OUR COLLECTION</span>

        <h1 class="section-title mt-2">
            Explore our equipment.
        </h1>

        <p class="section-description">
            Semua perlengkapan untuk menemani perjalananmu di alam terbuka.
        </p>

        <span class="product-count">
            {{ $campGears->count() }} perlengkapan
        </span>
    </div>
</section>

<section class="catalog-section catalog-page-section">
    <div class="container">
        <div class="row g-4">

            @forelse ($campGears as $gear)

            <div class="col-sm-6 col-lg-4 col-xl-3">
                <article class="gear-card">

                    <a href="{{ route('camp-gears.show', $gear->id) }}"
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

                        <h2 class="gear-name">
                            <a href="{{ route('camp-gears.show', $gear->id) }}">
                                {{ $gear->name }}
                            </a>
                        </h2>

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
                                <span class="price-label">Harga sewa</span>

                                <div class="gear-price">
                                    Rp{{ number_format($gear->rent_price, 0, ',', '.') }}
                                    <span>/ hari</span>
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
                    <h3>Belum ada produk</h3>
                    <p>Data produk belum tersedia.</p>
                </div>
            </div>

            @endforelse

        </div>

        <div class="text-center mt-5">
            <a href="{{ route('home') }}" class="btn btn-outline-terra">
                ← Back to Home
            </a>
        </div>
    </div>
</section>

@endsection