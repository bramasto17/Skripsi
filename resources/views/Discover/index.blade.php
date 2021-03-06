@extends('Layout/master')
@section('Title')
Discover
@endsection
@section('Content')
<section class="gallery-area section-padding list" id="gallery_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-9 gallery-slider">
                <div class="gallery-slide">
                    @foreach($popular as $data)
                    <div class="item">
                        <a href="/movie/{{$data->id}}">
                            <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2{{$data->poster_path}}" alt="{{$data->title}}">
                            <div class="overlay">
                                <div class="text">{{$data->title}}</div>
                              </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <h1>Popular Movies</h1>
            </div>
        </div>
    </div>
</section>
<section class="gallery-area section-padding-child list" id="gallery_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <h1>Latest Movies</h1>
            </div>
            <div class="col-xs-12 col-sm-9 gallery-slider">
                <div class="gallery-slide">
                    @foreach($latest as $data)
                    <div class="item">
                        <a href="/movie/{{$data->id}}">
                            <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2{{$data->poster_path}}" alt="{{$data->title}}">
                            <div class="overlay">
                                <div class="text">{{$data->title}}</div>
                              </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@if(isset($history))
<section class="gallery-area section-padding-child list" id="gallery_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-9 gallery-slider">
                <div class="gallery-slide">
                    @foreach($history as $data)
                    <div class="item">
                        <a href="/movie/{{$data->id}}">
                            <img src="https://image.tmdb.org/t/p/w185_and_h278_bestv2{{$data->poster_path}}" alt="{{$data->title}}">
                            <div class="overlay">
                                <div class="text">{{$data->title}}</div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <h1>Recent Movies</h1>
            </div>
        </div>
    </div>
</section>
@endif
@endsection
@push('scripts')
<script type="text/javascript">
    $(function() {
        $("#discover").addClass("active");
    });
</script>
@endpush