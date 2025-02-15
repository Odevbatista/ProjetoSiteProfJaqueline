<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/cursos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/testimonials.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Landing page</title>

</head>

<body>

    <header>

        <nav id="navbar">

           <i id="nav-logo" class="fa-solid fa-school"> Cursos Para o Enem</i>



           <ul id="nav_list">
    <li class="nav-item"><a href="{{ url('/') }}">Início</a></li>
    <li class="nav-item"><a href="{{ route('professor.cursos.index') }}">Painel do Professor</a></li>
    <li class="nav-item"><a href="{{ route('aluno.cursos.index') }}">Portal do Aluno</a></li>
</ul>


            <button class="btn-default">

                Painel do Aluno

            </button>



            <button id="mobile_btn">

                <i class="fa-solid fa-bars"></i>

            </button>

        </nav>



        



        <div id="mobile_menu">

            <ul id="nav_list">
    <li class="nav-item"><a href="{{ url('/') }}">Início</a></li>
    <li class="nav-item"><a href="{{ route('professor.cursos.index') }}">Painel do Professor</a></li>
    <li class="nav-item"><a href="{{ route('aluno.cursos.index') }}">Portal do Aluno</a></li>
</ul>



            <button class="btn-default">

                Painel do Aluno

            </button>

        </div>

    </header>



    <main id="content">

       

        <section id="home">

        <img style="width: 300px;" src="{{ asset('images/foguete livro.jpg') }}" alt="">


            <h1>Prepare-se para o ENEM com os melhores cursos!</h1>

            <p>Aulas interativas, professores experientes e uma metodologia focada no seu sucesso.</p>

        </section>

        </section>



        <section id="menu">

       

            <h3 class="section-subtitle">Nossos Cursos</h3>



            <div id="dishes">

                <div class="dish">

                    <div class="dish-heart">

                        

                    </div>



                    

                    <h3 class="dish-title">

                        Lorem Ipsum

                    </h3>



                    <span class="dish-description">

                        Lorem ipsum dolor sit amet consectetur adipisicing elit.

                    </span>



                    <div class="dish-rate">

                        <span style="display: block; text-align: center;" id="break">Nota do Curso</span> 

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        

                        <span>(500+)</span>

                    </div>



                    <div class="dish-price">

                        <h4>Gratuito</h4>

                        <button class="btn-default">

                            <i class="fa-solid fa-basket-shopping"></i>

                        </button>

                    </div>

                </div>



                



                    </div>

                </div>

            </div>



            <div id="dishes">

                <div class="dish">

                    <div class="dish-heart">

                        

                    </div>



                    

                    <h3 class="dish-title">

                        Lorem Ipsum

                    </h3>



                    <span class="dish-description">

                        Lorem ipsum dolor sit amet consectetur adipisicing elit.

                    </span>



                    <div class="dish-rate">

                        <span style="display: block; text-align: center;" id="break">Nota do Curso</span> 

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        

                        <span>(500+)</span>

                    </div>



                    <div class="dish-price">

                        <h4>Gratuito</h4>

                        <button class="btn-default">

                            <i class="fa-solid fa-basket-shopping"></i>

                        </button>

                    </div>

                </div>



                



                    </div>

                </div>

            </div>



            <div id="dishes">

                <div class="dish">

                    <div class="dish-heart">

                        

                    </div>



                    

                    <h3 class="dish-title">

                        Lorem Ipsum

                    </h3>



                    <span class="dish-description">

                        Lorem ipsum dolor sit amet consectetur adipisicing elit.

                    </span>



                    <div class="dish-rate">

                        <span style="display: block; text-align: center;" id="break">Nota do Curso</span> 

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        

                        <span>(500+)</span>

                    </div>



                    <div class="dish-price">

                        <h4>Gratuito</h4>

                        <button class="btn-default">

                            <i class="fa-solid fa-basket-shopping"></i>

                        </button>

                    </div>

                </div>



                



                    </div>

                </div>

            </div>





            <div id="dishes">

                <div class="dish">

                    <div class="dish-heart">

                        

                    </div>



                    

                    <h3 class="dish-title">

                        Lorem Ipsum

                    </h3>



                    <span class="dish-description">

                        Lorem ipsum dolor sit amet consectetur adipisicing elit.

                    </span>



                    <div class="dish-rate">

                        <span style="display: block; text-align: center;" id="break">Nota do Curso</span> 

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        <i class="fa-solid fa-star"></i>

                        

                        <span>(500+)</span>

                    </div>



                    <div class="dish-price">

                        <h4>Gratuito</h4>

                        <button class="btn-default">

                            <i class="fa-solid fa-basket-shopping"></i>

                        </button>

                    </div>

                </div>



                



                    </div>

                </div>

            </div>

        </section>



        <section id="testimonials">

            <img src="src/images/garota-livro.jpg" id="testimonial_chef" alt="">



            <div id="testimonials_content">

                <h2 class="section-title">

                    Depoimentos

                </h2>

                <h3 class="section-subtitle">

                    Dos nossos alunos

                </h3>



                <div id="feedbacks">

                    <div class="feedback">

                    <img src="{{ asset('images/avatar.png') }}" alt="Avatar">



                        <div class="feedback-content">

                            <p>

                                Fulana de Tal

                                <span>

                                    <i class="fa-solid fa-star"></i>

                                    <i class="fa-solid fa-star"></i>

                                    <i class="fa-solid fa-star"></i>

                                    <i class="fa-solid fa-star"></i>

                                    <i class="fa-solid fa-star"></i>

                                </span>

                            </p>

                            <p>

                                "Lorem ipsum dolor sit, amet consectetur adipisicing elit.

                                Repellat voluptatibus cumque dolor ea est quae alias necessitatibus"

                            </p>

                        </div>

                    </div>



                    <div class="feedback">


                        <div class="feedback-content">

                            <p>

                                Fulana de Tal

                                <span>

                                    <i class="fa-solid fa-star"></i>

                                    <i class="fa-solid fa-star"></i>

                                    <i class="fa-solid fa-star"></i>

                                    <i class="fa-solid fa-star"></i>

                                    <i class="fa-solid fa-star"></i>

                                </span>

                            </p>

                            <p>

                                "Lorem ipsum dolor sit, amet consectetur adipisicing elit.

                                Repellat voluptatibus cumque dolor ea est quae alias necessitatibus"

                            </p>

                        </div>

                    </div>

                </div>



                <button class="btn-default">

                    Ver mais avaliações

                </button>

            </div>

        </section>

    </main>



    <footer>

    

        <div id="footer_items">

            <span id="copyright">

                &copy 2024 Leonardo Neto 32216

            </span>

    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
