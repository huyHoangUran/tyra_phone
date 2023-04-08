<!--================ Hero banner start =================-->
<section class="hero-banner p-5">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banner as $key => $item)
                @if ($key == 0)
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ $item->image ? asset('storage/' . $item->image) : '' }}"
                            alt="First slide">
                    </div>
                @else
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="{{ $item->image ? asset('storage/' . $item->image) : '' }}   "
                            alt="First slide">
                    </div>
                @endif
            @endforeach


        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
