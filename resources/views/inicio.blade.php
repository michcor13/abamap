@extends('layouts.app')
@section('content')

    <body>
        <section>
            <div id="main-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item item-1 active" data-bs-interval="5000">
                        <div class="carousel-caption text-left d-flex h-100 align-items-center">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h1 class="headline-resp">
                                        <strong>Bienvenido a la mejor experiencia</strong><br> en materia prima de alimentos
                                    </h1>
                                    <p>
                                        {{-- <a class="btn btn-lg btn-second body-2" href="https://wa.me/524424269852">Hablar con un asesor</a> --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item item-2" data-bs-interval="5000">
                        <div class="carousel-caption text-left d-flex h-100 align-items-center">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h1 class="headline-resp">
                                        <strong>Contamos con la tecnología adecuada</strong><br>
                                         y alta experiencia en la distribución de insumos alimenticios.
                                    </h1>
                                    <p>
                                        {{-- <a class="btn btn-lg btn-second body-2" href="https://wa.me/524424269852">Hablar con un asesor</a> --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item item-3" data-bs-interval="5000">
                        <div class="carousel-caption text-left d-flex h-100 align-items-center">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h1 class="headline-resp">
                                        <strong>Amplia gama de productos</strong><br>
                                        con el servicio personalizado que se merece.
                                    </h1>
                                    <p>
                                        {{-- <a class="btn btn-lg btn-second body-2" href="https://wa.me/524424269852">Hablar con un asesor</a> --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Empresa nuevo -->
                <section class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4 align-self-center mt-3">
                            <div class="section-custom-img">
                                <img src="{{ Vite::asset('resources/image/Pagina/ABAMAP.png') }}" class="img-fluid custom-img">
                            </div>
                        </div>
                        <div class="col-12 col-lg-8 mt-5 text-center">
                            <h1 class="tituloemp text-center">¿Quienes somos?</h1>
                            <p class="body-2">Somos una empresa mexicana comprometida con la industria alimenticia entregando aditivos con la mejor calidad y prestigio.
                                <br>
                                Nos hemos mantenido en constante crecimiento en tecnología, infraestructura e insumos, atendiendo de manera óptima las necesidades y la demanda del mercado.
                            </p>


                            <h1 class="misvisval text-center">
                                Misión
                            </h1>

                            <p class="body-2">Ofrecer a nuestros clientes el mejor servicio, asesoría, calidad y variedad de productos aditivos alimentarios a la medida de sus necesidades.</p>
                            <h1 class="misvisval text-center">
                                Visión
                            </h1>
                            <p class="body-2">Consolidarnos como la empresa con mejor oferta de valor y experiencia de atención para nuestros clientes y la sociedad.</p>

                            <h1 class="misvisval text-center">
                                Valores
                            </h1>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent text-center"><strong class="fs-5">Trabajar con excelencia.</strong><br/>Cumpliendo cada compromiso con todos nuestros clientes en tiempo y forma. </li>
                                <li class="list-group-item bg-transparent text-center"><strong class="fs-5">Generar confianza.</strong><br/>Comprometiéndonos a que cada colaborador se desempeñe ética y eficientemente.</li>
                                <li class="list-group-item bg-transparent text-center"><strong class="fs-5">Dirigirse con respeto.</strong><br/>Hacia las personas e instituciones involucradas en todos los sentidos.</li>
                                <li class="list-group-item bg-transparent text-center"><strong class="fs-5">Vivir con pasión nuestro trabajo.</strong><br/>Mejora y evolución constante reflejada en la satisfacción global.</li>
                                {{-- <li class="list-group-item bg-transparent text-center">Respeto</li>
                                <li class="list-group-item bg-transparent text-center">Liderazgo</li>
                                <li class="list-group-item bg-transparent text-center">Unión</li>
                                <li class="list-group-item bg-transparent text-center">Mejora</li>
                                <li class="list-group-item bg-transparent text-center">Compromiso</li>
                                <li class="list-group-item bg-transparent text-center">Honestidad</li>
                                <li class="list-group-item bg-transparent text-center">Transparencia</li>
                                <li class="list-group-item bg-transparent text-center">Diferencia</li>
                                <li class="list-group-item bg-transparent text-center">Orientación al cliente</li>
                                <li class="list-group-item bg-transparent text-center">Calidad</li> --}}
                              </ul>
                            <p class="fw-bold fs-5 text-center">En ABAMAP somos los mejores en lo que hacemos.</p>
                        </div>

                    </div>
                </section>

                <!--Fin empresa nuevo-->

                <div class="container px-4 py-5" id="hanging-icons">
                    <h2 class="pb-2 border-bottom text-center">¿Que dicen nuestros clientes de ABAMAP?</h2>
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                        <div class="col d-flex align-items-start">
                            <div
                                class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#toggles2"></use>
                                </svg>
                            </div>
                            <div>
                                <h3 class="fs-2 text-body-emphasis">Alimentos premium prestige SA de CV</h3>
                                <p>La materia prima que ABAMAP nos provee ha sido siempre de primera calidad, por lo que
                                    nuestros insumos y productos que vendemos se han posicionado como los mejores dentro de
                                    nuestro mercado.</p>
                                <a href="contacto" class="btn btn-primary">
                                    Contacto
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start">
                            <div
                                class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#cpu-fill"></use>
                                </svg>
                            </div>
                            <div>
                                <h3 class="fs-2 text-body-emphasis">Charritos y frutiras José</h3>
                                <p>El mercado en el que nos movemos es muy amplio, sobre todo si compites con marcas grandes
                                    a nivel mundia.
                                    <br>
                                    Al comprar mis productos primarios con ABAMAP me ha garantizado una estabilidad de
                                    mercado, por eso y mas los recomiendo.
                                </p>
                                <a href="contacto" class="btn btn-primary">
                                    Contacto
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex align-items-start">
                            <div
                                class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                                <svg class="bi" width="1em" height="1em">
                                    <use xlink:href="#tools"></use>
                                </svg>
                            </div>
                            <div>
                                <h3 class="fs-2 text-body-emphasis">Productora de materias primas para alimentos SLP</h3>
                                <p>Una empresa a veces no puede siempre generar la materia prima desde cero o generar todo
                                    lo que existe, por lo que a veces nos toca buscar un proveedor que nos apoye.
                                    <br>
                                    La meteria que nos ofrece ABAMAP es de excelente calidad, por lo que seguiremos con
                                    ellos mucho mas tiempo.
                                </p>
                                <a href="productos-servicios" class="btn btn-primary">
                                    Productos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

        </section>
    </body>
@stop
