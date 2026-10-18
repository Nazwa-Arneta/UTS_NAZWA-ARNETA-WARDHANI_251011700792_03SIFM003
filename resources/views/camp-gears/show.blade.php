@extends('layouts.app')

@section('title', $campGear->name . ' | TERRAVA')

@section('content')

<section class="detail-section">
    <div class="container">

        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb small">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}">Home</a>
                </li>

                <li class="breadcrumb-item">
                    <a href="{{ route('catalog') }}">Catalog</a>
                </li>

                <li class="breadcrumb-item active">
                    {{ $campGear->name }}
                </li>
            </ol>
        </nav>

        <div class="row g-5 align-items-start">

            <div class="col-lg-6">
                <div class="detail-image-wrap">
                    <img
                        src="{{ asset($campGear->image) }}"
                        alt="{{ $campGear->name }}"
                        class="detail-image">
                </div>
            </div>

            <div class="col-lg-6">

                <span class="section-eyebrow">
                    TERRAVA EQUIPMENT
                </span>

                <div class="mt-3">
                    <span class="detail-category">
                        {{ $campGear->category }}
                    </span>
                </div>

                <h1 class="detail-title">
                    {{ $campGear->name }}
                </h1>

                <div class="detail-price">
                    Rp{{ number_format($campGear->rent_price, 0, ',', '.') }}
                    <span>/ hari</span>
                </div>

                <div class="detail-stock mt-3">
                    <span class="stock-dot {{ $campGear->stock < 1 ? 'stock-dot-empty' : '' }}"></span>

                    @if ($campGear->stock > 0)
                    {{ $campGear->stock }} unit tersedia
                    @else
                    Stok sedang habis
                    @endif
                </div>

                <hr class="my-4">

                <h2 class="detail-subtitle">
                    Product description
                </h2>

                <p class="detail-description">
                    {{ $campGear->description }}
                </p>

                <div class="detail-note mt-4">
                    <strong>Rental information</strong>

                    <p class="mb-0">
                        Harga yang tertera merupakan harga sewa per hari.
                        Pastikan ketersediaan perlengkapan sebelum
                        merencanakan perjalanan.
                    </p>
                </div>

                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="{{ route('catalog') }}" class="btn btn-terra">
                        Back to Catalog
                    </a>

                    <a href="{{ route('contact') }}" class="btn btn-outline-terra">
                        Contact Us
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection