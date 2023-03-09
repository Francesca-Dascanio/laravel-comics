<footer>
    
    <div class="footer-top">
        <div class="background">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-top-manager d-flex justify-content-between">

                            {{-- Liste --}}
                            <div class="lists footer-stuff text-light d-flex justify-content-between my-3">
                                <div class="list">
                                    <strong>
                                        DC COMICS
                                    </strong>
                                    <ul class="list-unstyled">
                                        @foreach ($footerComics as $item)
                                            <li>
                                                {{ $item }}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <strong>
                                        SHOP
                                    </strong>
                                    <ul class="list-unstyled">
                                        @foreach ($footerShop as $item)
                                            <li>
                                                {{ $item }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="list">
                                    <strong>
                                        DC
                                    </strong>
                                    <ul class="list-unstyled">
                                        @foreach ($footerDC as $item)
                                            <li>
                                                {{ $item }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="list">
                                    <strong>
                                        SITES
                                    </strong>
                                    <ul class="list-unstyled">
                                        @foreach ($footerSites as $item)
                                            <li>
                                                {{ $item }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            {{-- Logo Secondo --}}
                            <div class="second-logo footer-stuff">
                                {{-- <img src=" {{ Vite::asset('/resources/img/dc-logo-bg.png') }} " alt=""> --}}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-between align-items-center my-4">
                            <button type='button' class="btn btn-dark text-light border border-primary">
                                SIGN UP NOW
                            </button>

                            <div>
                                <ul class="d-flex justify-content-between align-items-center list-unstyled">
                                    <li class="text-primary pe-3">
                                        FOLLOW US
                                    </li>
                                    <li class="pe-3">
                                        <img src="{{ Vite::asset('/resources/img/footer-facebook.png')}}" alt="social"> 
                                    </li>
                                    <li class="pe-3">
                                        <img src="{{ Vite::asset('/resources/img/footer-periscope.png')}}" alt="social"> 
                                    </li>
                                    <li class="pe-3">
                                        <img src="{{ Vite::asset('/resources/img/footer-pinterest.png')}}" alt="social"> 
                                    </li>
                                    <li class="pe-3">
                                        <img src="{{ Vite::asset('/resources/img/footer-twitter.png')}}" alt="social"> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</footer>