@extends('layouts.app')
@section('content')
    <main class="pt-90">
        <div class="mb-4 pb-4"></div>
        <section class="contact-us container">
            <div class="mw-930">
                <h2 class="page-title">About US</h2>
            </div>

            <div class="about-us__content pb-5 mb-5">
                <p class="mb-5">
                    <img loading="lazy" class="w-100 h-auto d-block" src="{{ asset('assets/images/about/about-1.jpg') }}"
                        width="1410" height="550" alt="" />
                </p>
                <div class="mw-930">
                    <h3 class="mb-4">OUR STORY</h3>
                    <p class="fs-6 fw-medium mb-4">Our online shoe store is your one-stop destination for premium-quality
                        footwear. We offer a diverse collection ranging from trendy sneakers and stylish heels to durable
                        boots and comfortable casual wear. Each pair is selected with care, ensuring top-notch materials,
                        exceptional craftsmanship, and the latest designs. Whether you’re dressing for a special occasion, a
                        busy workday, or a weekend adventure, we have the perfect pair to match your style and comfort
                        needs. With fast delivery, secure payment options, and dedicated customer support, we make shoe
                        shopping effortless and enjoyable.</p>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="mb-3">Our Mission</h5>
                            <p class="mb-3">To provide high-quality, stylish, and comfortable footwear that suits every
                                occasion, while delivering a seamless and enjoyable online shopping experience for our
                                customers.</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="mb-3">Our Vision</h5>
                            <p class="mb-3">To become the most trusted and loved online shoe destination, recognized for
                                our commitment to quality, innovation, and customer care — inspiring confidence and style
                                with every step.</p>
                        </div>
                    </div>
                </div>
                <div class="mw-930 d-lg-flex align-items-lg-center">
                    <div class="image-wrapper col-lg-6">
                        <img class="h-auto" loading="lazy" src="{{ asset('assets/images/about/about-1.jpg') }}"
                            width="450" height="500" alt="">
                    </div>
                    <div class="content-wrapper col-lg-6 px-lg-4">
                        <h5 class="mb-3">The Company</h5>
                        <p>We are an innovative online shoe store dedicated to bringing style, comfort, and quality to your
                            doorstep. Our collection features a wide range of footwear — from casual sneakers to premium
                            leather formals — all carefully curated to match your lifestyle. With a passion for fashion and
                            a commitment to customer satisfaction, we make finding the perfect pair simple, enjoyable, and
                            affordable.</p>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
