<nav class="fh5co-nav" role="navigation">

    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-right">

                    <p class="num">Ligue: {{ env('CLIENT_DATA_TELEPHONE') }}</p>

                    <ul class="fh5co-social">
                        <li>
                            <a href="{{ env('CLIENT_DATA_LINK_FACEBOOK') }}" target="_blank">
                                <i class="icon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ env('CLIENT_DATA_LINK_LINKEDIN') }}" target="_blank">
                                <i class="icon-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ env('CLIENT_DATA_LINK_GITHUB') }}" target="_blank">
                                <i class="icon-github"></i>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="top-menu">
        <div class="container">
            <div class="row">

                <div class="col-xs-1">
                    <div id="fh5co-logo"><a href="{{ route('home') }}">Leonardo<span>Developer</span></a></div>
                </div>

                <div class="col-xs-11 text-right menu-1">
                    <ul>
                        <li class="btn-cta"><a href="{{ route('home') }}"><span>Home</span></a></li>
                        <li class="btn-cta"><a href="{{ route('blog') }}"><span>Blog</span></a></li>
                        @yield('menu-incluir')
                        <li class="btn-cta"><a href="{{ route('contact') }}"><span>Contato</span></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</nav>
