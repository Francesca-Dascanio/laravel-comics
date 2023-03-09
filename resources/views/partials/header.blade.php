<header>
    <!-- Header-top -->
    <div class="text-bg-primary">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-end">
                        <div class="my-sm-size ">
                            DC Power VISA
                        </div>
                        <div class="ps-4 my-sm-size ">
                            ADDITIONAL DC SITE &#9662;
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header-bottom -->
    <div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-between align-items-center py-4">
                        <!-- Logo -->
                        <div class="logo">
                            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
                        </div>

                        <!-- Nav -->
                        <nav>
                            <ul class="d-flex list-unstyled my-size">
                                @foreach ($menu as $item)
                                    <li class="ps-4">
                                        <a href="" class="text-decoration-none text-dark">
                                            {{$item}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>

                        <!-- Search -->
                        <div class="search my-size text-right">
                            <strong>
                                Search 
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>