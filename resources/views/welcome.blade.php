@extends('layouts.main')

@section('test')
    <!-- Qui dentro codice del main -->
    
    <section class="section-1">
        <div class="jumbotron img-manager">
            <img src="{{ Vite::asset('/resources/img/jumbotron.jpg') }}" class="jumbo" alt="Jumbo">
        </div>

        <div class="section-cards my-bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="cards d-flex justify-content-between flex-wrap my-5">
                            @foreach ($comics as $comic)
                                <div class="my-card my-card-size">
                                    <div>
                                        <img src="https://6.allegroimg.com/s1024/0cc9e1/a3a876424ac0800c035888f73286" class="my-card-img" alt="card"/>
                                    </div>

                                    <div class="my-text">
                                        {{ $comic['title']}}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="my-btn btn btn-primary" type="button">
                            Load more
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="section-2">
        <div class="bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="d-flex justify-content-between">
                            <div class="text-icon my-4">
                                <span>
                                    <img src=" {{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="icon" class="icon">
                                </span>
                                
                                <span class="text text-light">
                                    DIGITAL COMICS
                                </span>
                            </div>
    
                            <div class="text-icon my-4">
                                <span>
                                    <img src=" {{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="icon" class="icon">
                                </span>
                                
                                <span class="text text-light">
                                    DC MERCHANDISE
                                </span>
                            </div>
    
                            <div class="text-icon my-4">
                                <span>
                                    <img src=" {{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="icon" class="icon">
                                </span>
                                
                                <span class="text text-light">
                                    SUBSCRIPTION
                                </span>
                            </div>
    
                            <div class="text-icon my-4">
                                <span>
                                    <img src=" {{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="icon" class="icon">
                                </span>
                                
                                <span class="text text-light">
                                    COMIC SHOP LOCATOR
                                </span>
                            </div>
    
                            <div class="text-icon my-4">
                                <span>
                                    <img src=" {{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="icon" class="icon">
                                </span>
                                
                                <span class="text text-light">
                                    DC POWER VISA
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection