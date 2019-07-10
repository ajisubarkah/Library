@extends('layouts.default')
@push('head')
    <link href="{{ asset('css/agency.min.css') }}" rel="stylesheet" xmlns:v-bind="http://www.w3.org/1999/xhtml"
          xmlns:v-bind="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"
          xmlns:v-bind="http://www.w3.org/1999/xhtml">
@endpush
@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Library</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                Menu<i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#popular">Popular</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link searchbtn" href="#"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
            </div>
            <form class="navbar searchform" method="POST" action="{{ route('search') }}/">
                @csrf
                <input class="searchfield" name="field" type="search"
                    placeholder="Search"/>
            </form>
        </div>
    </nav>
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Library!</div>
                <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#popular">Look Book More</a>
            </div>
        </div>
    </header>
    <section class="bg-light page-section" id="popular">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                    <h2 class="section-heading text-uppercase">Collection Book</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                @foreach( $books as $book)
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a class="portfolio-link text-center" onclick="showModal( '{{ $book->name }}', '{{ $book->synopsis }}', '{{ $book->image }}')">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" width="200"
                                 src="{{ asset($book->image ?? 'img/default-book.jpg') }}">
                        </a>
                        <div class="portfolio-caption">
                            <h4>{{ $book->name }}</h4>
                            <button type="button" onclick="showModal('{!!$book->name!!}', 'null', '{!!$book->image!!}')"
                               class="btn btn-primary text-uppercase js-scroll-trigger">Read More</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="modalReview" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2 id="reviewNameBook" class="text-uppercase"></h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img id="reviewImgBook" class="img-fluid d-block mx-auto" src="img/books/dilan-1990.jpg" >
                                    <p id="reviewSynopsisBook"></p>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="copyright">Copyright &copy; Library 2019</span>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection

@push('script')
    <script src="{{ asset('js/agency.min.js') }}"></script>
    <script>
        function showModal($name, $synopsis, $image) {
            $('#reviewNameBook').replaceWith($name);
            $('#reviewSynopsisBook').replaceWith($synopsis);
            $('#reviewImgBook').src($image);

            $('#modalReview').modal('show');
        };
    </script>
    <script>
        $( document ).ready(function() {
            $(".searchbtn").click(function(){
                $(".searchform").slideToggle("0");
            });
        });
       </script>
@endpush
