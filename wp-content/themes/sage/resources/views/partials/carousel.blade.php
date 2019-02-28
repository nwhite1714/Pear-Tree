<script src="/new-site/wp-content/themes/sage/OwlCarousel/dist/owl.carousel.js"></script>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
            </div>
            <div class="owl-carousel">
                @if(have_rows('carousel_items'))
                    @while(have_rows('carousel_items'))
                        @php the_row() @endphp
                        <div>
                            <img src="{{ the_sub_field('image') }}">
                        </div>
                    @endwhile
                @endif
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
            </div>
        </div>
    </div>
</div>

<script>jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: false,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
</script>