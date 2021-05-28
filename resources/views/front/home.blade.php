@extends('front.master.master')

@section('menu-incluir')
<li class="btn-cta"><a href="#fh5co-steps"><span>Skills</span></a></li>
<li class="btn-cta"><a href="#fh5co-explore"><span>Sobre</span></a></li>
<li class="btn-cta"><a href="#fh5co-project"><span>Portifólio</span></a></li>
@endsection

@section('content')

    <header id="fh5co-header" class="fh5co-cover" style="background-image:url(front/assets/images/fundoSite.jpg); background-position: center bottom !important; background-attachment: fixed !important;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>O aprendizado é continuo e o próximo nível nunca será o último <span style="color: #FFB400">#BORAPROGRAMAR</span></h1>
                            <p><a class="btn btn-primary btn-lg btn-learn" href="#fh5co-project">Portifólio</a>
                                {{-- <a class="btn btn-primary btn-lg popup-vimeo btn-video"
                                        href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i>
                                    Blog</a></p> --}}
                                    <a class="btn btn-primary btn-lg btn-video"
                                    href="{{ route('blog') }}"><i class="icon-play"></i>
                                Blog</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- <div id="fh5co-counter" class="fh5co-counters">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="13" data-speed="3000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Módulos</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="82" data-speed="3000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Aulas</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="16" data-speed="3000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Horas</span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="500" data-speed="3000"
                          data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Alunos</span>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="fh5co-explore" class="fh5co-bg-section sobre">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Leonardo Guimarães França</h2>
                    <h3>Um pouco da minha trajétoria</h3>
                    <p>Comecei a estudar informática por volta de 2008, entrei em um curso técnico de manutenção e redes de computadores, nesse curso aprendi muito sobre o funcionamento dos computadores e o básico sobre redes.</p>
                    <p>Em 2013 entrei para um curso oferecido pelo governo, Técnico de informática e foi nesse curso que tive o primeiro contato com programação, aprendi o portugol com visaulg, um pouco sobre banco de dados, HTML, CSS, Javascript.</p>
                    <p>E finalmente em 2015 entrei para a faculdade de analise e desenvolvimento de sistemas, aprendemos muito sobre desenvolveimento, em meu tcc desenvolvi um programa de controle de serviço, o sistema controlava os agendamentos dos serviços. O sistema foi desenvolvido na liguagem C# utilizando windows forms, o banco de dados foi em sql server, enfim aprendi bastante.</p>
                    <p>E depois dessa bagagem de apredizados nunca mais parei de fazer cursos e projetos pessoais.</p>
                </div>
            </div>
        </div>
        {{-- <div class="fh5co-explore fh5co-explore1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-5 animate-box">
                        <img class="img-responsive" src="front/assets/images/work_1.png" alt="work">
                    </div>
                    <div class="col-md-4 col-md-pull-8 animate-box">
                        <div class="mt">
                            <h3>Vem aprender com a gente!</h3>
                            <p>Confira a grade completa de aulas e aproveite para assitir algumas delas para conhecer nossa metodologia.</p>
                            <ul class="list-nav">
                                <li><i class="icon-check2"></i>Suporte Exclusivo um a um</li>
                                <li><i class="icon-check2"></i>Conteúdo 100% online</li>
                                <li><i class="icon-check2"></i>Material de Apoio</li>
                            </ul>
                            <p><a class="btn btn-primary btn-lg popup-vimeo btn-video"
                                  href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Assistir uma aula</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="fh5co-explore">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-pull-1 animate-box">
                        <img class="img-responsive" src="front/assets/images/work_1.png" alt="work">
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="mt">
                            <div>
                                <h4><i class="icon-trophy"></i>Certificado de Conclusão</h4>
                                <p>Certificado da Escola eleita a melhor do Segmento pela LAQI com reconhecimento em 17 países da América Latina</p>
                            </div>
                            <div>
                                <h4><i class="icon-add-user"></i>Recomendações da Comunidade</h4>
                                <p>Trabalhe de forma mais ágil com o framework utilizando boas práticas e PSR's para ter um código padronizado.</p>
                            </div>
                            <div>
                                <h4><i class="icon-shield"></i>Projetos Reais e Soluções Reais</h4>
                                <p>Desenvolva 4 projetos para aplicar o conhecimento adquirido em uma solução de verdade.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="fh5co-project">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Meus projetos</h2>
                    <p>Sistemas desenvolvidos para clientes e estão em pleno funcionamento até os dias atuais</p>
                </div>
            </div>
        </div>
        <div class="container-fluid proj-bottom">
            <div class="row">
                <div class="col-md-6 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="front/assets/images/login.png" alt="Imagem do software Easy caixa"
                                     class="img-responsive">
                        <h3>Easy caixa</h3>
                        <span>Sistema de frente de caixa com controle de estoque</span>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="front/assets/images/vendaG.png" alt="Imagem do software Easy caixa"
                                     class="img-responsive">
                        <h3>Easy caixa</h3>
                        <span>Sistema de frente de caixa com controle de estoque</span>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="front/assets/images/relátoriosG.png" alt="Imagem do software Easy caixa"
                                     class="img-responsive">
                        <h3>Easy caixa</h3>
                        <span>Sistema de frente de caixa com controle de estoque</span>
                    </a>
                </div>

                <div class="col-md-6 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="front/assets/images/easy.png" alt="Imagem do software Easy caixa"
                                     class="img-responsive">
                        <h3>Easy caixa</h3>
                        <span>Sistema de frente de caixa com controle de estoque</span>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="front/assets/images/usuariosG.jpeg" alt="Placar Jiu Jitsu"
                                     class="img-responsive">
                        <h3>Placar Jiu jitsu</h3>
                        <span>Placar desenvolvido e utilizado em um campeonato regional</span>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                    <a href="#"><img src="front/assets/images/tela-lutadoresG.jpeg" alt="Placar Jiu Jitsu"
                                     class="img-responsive">
                        <h3>Placar Jiu jitsu</h3>
                        <span>Placar desenvolvido e utilizado em um campeonato regional</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="features">
                    {{-- <div class="col-md-4 animate-box text-center">
                        <h4>Passo a passo e Plano de Carreira</h4>
                        <p>Mais do que aprender a trabalhar com o framework, aqui você vai ter um mapa para entrar no mercado já faturando.</p>
                    </div>
                    <div class="col-md-4 animate-box text-center">
                        <h4>3 cursos a mais para Complementar</h4>
                        <p>Para somar nas suas skills e dominar todo o cenário, você conta com mais 3 cursos completos. Todos com suporte!</p>
                    </div>
                    <div class="col-md-4 animate-box text-center">
                        <h4>30 Dias de Garantia</h4>
                        <p>Se em 30 dias você não estiver passado de 30% de progresso no curso e decidir que o curso não é para você... Nós devolvemos seu dinheiro.</p>
                    </div>
                </div> --}}
                <div class="col-md-12 text-center animate-box">
                    <p><a class="btn btn-primary btn-lg btn-learn" href="{{getenv('CLIENT_DATA_LINK_GITHUB')}}" target="_blank">Para mais projetos clique aqui</a></p>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-steps">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Softwares Skill</h2>
                    <p>Sempre estou em constante apredizado, estudo muito sobre novas tecnologias, mas abaixo estão algumas que eu tenho um conhecimento maior.</p>
                </div>
            </div>

            <div class="col-md-4">
                <img style="width: 300px; margin-bottom:30px;" src="front/assets/images/php.png" alt="">
            </div>
            <div class="col-md-4">
                <img style="width: 300px; margin-bottom:30px;" src="front/assets/images/cSharp.png" alt="">
            </div>
            <div class="col-md-4">
                <img style="width: 300px; margin-bottom:30px;" src="front/assets/images/html.png" alt="">
            </div>
            <div class="col-md-4">
                <img style="width: 300px; margin-bottom:30px;" src="front/assets/images/css.png" alt="">
            </div>
            <div class="col-md-4">
                <img style="width: 300px; margin-bottom:30px;" src="front/assets/images/js.png" alt="">
            </div>
            <div class="col-md-4">
                <img style="width: 300px; margin-bottom:30px;" src="front/assets/images/outras.png" alt="">
            </div>

            {{-- <div class="row bs-wizard animate-box" style="border-bottom:0;">

                <div class="col-xs-3 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum"><h4>Introdução</h4></div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Conheça o framework</p></div>
                </div>

                <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
                    <div class="text-center bs-wizard-stepnum"><h4>Primeiro Contato</h4></div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>É Fácil mas não é Simples</p></div>
                </div>

                <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
                    <div class="text-center bs-wizard-stepnum"><h4>Comportamento</h4></div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Conhecendo todas as peças</p></div>
                </div>

                <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                    <div class="text-center bs-wizard-stepnum"><h4>Projeto Prático</h4></div>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Aplicando tudo o que aprendeu</p></div>
                </div>
            </div> --}}

        </div>
    </div>

    {{-- @include('front.includes.testimonials') --}}

    <div id="fh5co-blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Artigos Recentes</h2>
                    <p>Confira aqui nossos últimos artigos!<br>Conteúdo exclusivo sobre o Laravel FrameWork.</p>
                </div>
            </div>
            <div class="row">

                @isset($posts)
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-4">
                            <div class="fh5co-blog animate-box">
                                <a href="{{ route('article', $post->uri) }}"><img class="img-responsive" src="{{ Storage::url(\App\Support\Cropper::thumb($post->cover, 800, 450)) }}" alt=""></a>
                                <div class="blog-text">
                                    <h3><a href="{{ route('article', $post->uri) }}">{{ $post->title }}</a></h3>
                                    <span class="posted_on">{{ $post->created_at }}</span>
                                    <span class="comment"><a href="{{ 'article', $post->uri }}">21<i class="icon-speech-bubble"></i></a></span>
                                    <p>{{ $post->subtitle }}</p>
                                    <a href="{{ route('article', $post->uri) }}" class="btn btn-primary">Leia mais</a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @endisset
            </div>
        </div>
    </div>


    @include('front.includes.optin')

@endsection
