@extends('frontend.main_master')
@section('main')
<section class="about-text-section pt-5 pb-xl-4 mb-5">
        <div class="container">
            <h2 class="hd-typ1 mb-xl-3">
                Who are we?
            </h2>
            <p class="fs-22 fw-300 fs-18-xl fs-16-md fs-14-m mb-xl-4">
                Reubro Internationl is a leading web design and web development company in Kochi,Kerala, that also caters to branding and marketing services for clients. Our team of high-performing, digitally transformative, experienced trainers ensure that the clients get a hands-on experience with the end result. Our web experiences are designed and developed to be user-friendly, feature-packed, fully efficient, super reliable, and capable of maintaining the balance as your enterprise grows.
            </p>
           
        </div>
    </section>
    <section class="mb-5">
        <div class="container">
            <h3 class="hd-typ7 fs-25-md fs-23-sm fs-20-m pb-xl-4 mb-5">
                Our Values
            </h3>
            <div class="row">
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="hd-typ7 fs-25-md fs-23-sm fs-20-m">01</div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-600 pb-xl-3 mb-3">Quality</div>
                        <p class="fs-18 fw-300 fs-16-xl fs-14-md fs-13-m">We promise to deliver the highest quality work every single time and ensure that you get the results you want.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="hd-typ7 fs-25-md fs-23-sm fs-20-m">02</div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-600 pb-xl-3 mb-3">Commitment</div>
                        <p class="fs-18 fw-300 fs-16-xl fs-14-md fs-13-m">We promise to deliver the highest quality work every single time and ensure that you get the results you want.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="hd-typ7 fs-25-md fs-23-sm fs-20-m">03</div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-600 pb-xl-3 mb-3">Efficient</div>
                        <p class="fs-18 fw-300 fs-16-xl fs-14-md fs-13-m">Using our tried and tested formulas we offer a more efficient, valuable service, without sacrificing quality.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="hd-typ7 fs-25-md fs-23-sm fs-20-m">04</div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-600 mb-3">Integrity</div>
                        <p class="fs-18 fw-300 fs-16-xl fs-14-md fs-13-m">We promise to deliver the highest quality work every single time and ensure that you get the results you want.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-lg-5 mb-4">
                    <div class="card-typ1 pb-xl-2 me-xl-5">
                        <div class="hd-typ7 fs-25-md fs-23-sm fs-20-m">05</div>
                        <div class="hd-typ3 fs-22-xl fs-20-md fs-18-m fw-600 mb-3">Best Practices</div>
                        <p class="fs-18 fw-300 fs-16-xl fs-14-md fs-13-m">We enforce best practices on all services provided, ensuring every client receives the same high-quality service throughout.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.body.meetteam')
    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = jQuery('header').outerHeight();

        jQuery(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = jQuery(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                jQuery('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + jQuery(window).height() < jQuery(document).height()) {
                    jQuery('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
        
        $(document).ready(function(){
            $("#grid-filter > li").click(function(){
                $(this).addClass("active");
                $(this).siblings().removeClass("active");
            });

            $('#masonry-grid').masonry({
                columnWidth: '.gutter-sizer',
                gutter: 30,
                itemSelector: '.grid-item'
            });
            // This does the filter by binding an event on the change of a select box
            $("#grid-filter li").click(function () {
                var group = $(this).data('category');
                var group_class = "." + group;

                if (group == "*") {
                    $(".grid-item").show();
                    $('#masonry-grid').masonry('layout');
                }
                else if (group != "") {
                    $(".grid-item").hide();
                    $(group_class).show();
                    $('#masonry-grid').masonry('layout');
                } else {
                    $(".grid-item").show();
                    $('#masonry-grid').masonry('layout');
                }
            });
        });
    </script>
@endsection