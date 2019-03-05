<script src="/new-site/wp-content/themes/sage/OwlCarousel/dist/owl.carousel.js"></script>

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <div class="owl-carousel owl-drag owl-theme">
                @if(have_rows('carousel_items'))
                    @while(have_rows('carousel_items'))
                        @php the_row(); @endphp
                        @php $link = get_sub_field('link'); @endphp
                        <div class="tile-item">
                            <a class="item-field d-flex justify-content-center" style="background-image: url('{{ the_sub_field('image') }}');" href="{{ $link['url'] }}" target = "{{ $link['target'] }}" >
                                <p class="item-header">{{ $link['title'] }}</p>
                            </a>
                        </div>
                    @endwhile
                @endif
            </div>
        </div>
    </div>
</div>

<script>jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
</script>