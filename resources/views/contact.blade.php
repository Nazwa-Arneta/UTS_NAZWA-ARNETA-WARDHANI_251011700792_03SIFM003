@extends('layouts.app')

@section('title', 'Contact | TERRAVA')

@section('content')

<section class="about-hero">
    <div class="container">
        <span class="section-eyebrow">CONTACT TERRAVA</span>

        <h1 class="about-title">
            Let's make your next
            <span>adventure happen.</span>
        </h1>

        <p class="about-intro">
            Punya pertanyaan tentang perlengkapan camping atau
            penyewaan? Halaman ini menyediakan informasi kontak
            TERRAVA.
        </p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-5">
                <div class="contact-panel h-100">
                    <span class="section-eyebrow">GET IN TOUCH</span>

                    <h2 class="mt-3">We're here to help.</h2>

                    <p>
                        Jika kamu memiliki pertanyaan, saran, atau ingin
                        berbagi pengalaman petualanganmu, jangan ragu
                        untuk menghubungi kami. Tim TERRAVA siap membantu
                        dan memberikan informasi yang kamu butuhkan.
                    </p>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-panel h-100">
                    <span class="section-eyebrow">CONTACT INFORMATION</span>

                    <div class="contact-item mt-3">
                        <span class="contact-label">Email</span>
                        <span class="contact-value">
                            hello.terrava@gmail.com
                        </span>
                    </div>

                    <div class="contact-item">
                        <span class="contact-label">Phone / WhatsApp</span>
                        <span class="contact-value">
                            +62 812-3456-7890
                        </span>
                    </div>

                    <div class="contact-item">
                        <span class="contact-label">Location</span>
                        <span class="contact-value">
                            Jl. Terra Outdoor No. 123, Jakarta, Indonesia
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection