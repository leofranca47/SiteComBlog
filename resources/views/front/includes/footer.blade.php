<footer id="fh5co-footer" role="contentinfo">
    <div class="container">
        <div class="row row-pb-md">

            <div class="col-md-3 fh5co-widget">
                <h4>Um pouco sobre Leonardo</h4>
                <p>Desde 2018 venho embusca de conhecimento na área da informática e desde então a busca é continua.</p>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                <h4>Páginas</h4>
                <ul class="fh5co-footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contato</a></li>
                    <li><a href="#"><span>Login</span></a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                <h4>Links Importantes</h4>
                <ul class="fh5co-footer-links">
                    <li><a href="https://leofrancadev.com.br/">Site Pessoal</a></li>
                    <li><a href="https://laravel.com/">Laravel</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-sm-8 col-xs-12 col-md-push-1">
                <h4>Precisa de ajuda?</h4>
                <ul class="fh5co-footer-links">
                    <li><p>Entre em contato com nossa equipe de suporte comercial nos canais abaixo:</p></li>
                    <li><a href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">{{ env('MAIL_FROM_ADDRESS') }}</a></li>
                    <li><p>{{ env('CLIENT_DATA_TELEPHONE') }}</p></li>
                </ul>
            </div>
        </div>

        <div class="row copyright">
            <div class="col-md-12 text-center">

                <p>
                    <small class="block">&copy; {{ date('Y') }} Leonardo G. França. Todos os Direitos Reservados.
                    </small>
                    <small class="block">
                        <a href="https://www.upinside.com.br/termos" target="_blank">Termos de Uso</a>
                    </small>
                </p>

                <p>
                <ul class="fh5co-social-icons">
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
                </p>

            </div>
        </div>

    </div>
</footer>
