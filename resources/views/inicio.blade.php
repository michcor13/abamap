@extends('layouts.app')
@section('content')

    <body>
        <section>
            <div id="main-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item item-1 active">
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
                    <div class="carousel-item item-2">
                        <div class="carousel-caption text-left d-flex h-100 align-items-center">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h1 class="headline-resp">
                                        <strong>Contamos con la mejor tecnología</strong><br> en la distrubucion de y
                                        comercializacion de insumos alimenticios
                                    </h1>
                                    <p>
                                        {{-- <a class="btn btn-lg btn-second body-2" href="https://wa.me/524424269852">Hablar con un asesor</a> --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item item-3">
                        <div class="carousel-caption text-left d-flex h-100 align-items-center">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h1 class="headline-resp">
                                        <strong>Amplios inventarios</strong><br> en nuestra gama de productos
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
                <div class="row my-4 pb-5">
          <div class="col-12 col-md-6 align-self-center">
            <div class="section-custom-img">
              <img src="\image\empresa.jpg" class="img-fluid custom-img">
            </div>
          </div>
          <div class="col-12 col-md-6 align-self-center">
          <div class="col-12 col-md-6 align-self-center mt-5 mt-md-0">
                <span class="tituloemp">¿Quienes somos?</span>
            <p class="body-2">Somos una empresa Mexicana comprometidos con la elaboracion de productos
                            con la mejor calidad y prestigio.
                        <br>
                        Nos hemos mantenido en constante crecimiento en tecnologia, infraestructura e insumos
                            atendiendo de manera optima las necesidades y la demanda de nuestro mercado. </p>
                            <h1 class="misvisval">
                            Misión
                        </h1>

                            <p class="body-2">Comercializar materias primas para la industria alimenticia, con los mejores precios y el mejor
                            servicio.</p>
                            <h1 class="misvisval">
                            Visión
                        </h1>
            <p class="body-2">busca ser una empresa lider en su ramo, continuando dando el mejor servicio y satisfaccion a
                            nuestros clientes.</p>

                            <h1 class="misvisval">
                            Valores
                        </h1>
            <p class="body-2">Integridad.
                <br>
                Confiabilidad.
                <br>
                Responsabilidad.
                <br>
                Humildad.
                <br>
                Respeto.
                <br>
                Liderazgo.
                <br>
                Uniòn.
                <br>
                Mejora.
                <br>
                Compromiso.
                <br>
                Honestidad.
                <br>
                Transparencia.
                <br>
                Diferencia.
                <br>
                Orientaciòn al cliente.
                <br>
                Calidad.
            </p>
            <p class="body-2">En ABAMAP somos los mejores en lo que hacemos.</p>
          </div>
        </div>
        
          </div>
          </section>

                <!--Fin empresa nuevo-->

                <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">¿Que dicen nuestros clientes de ABAMAP?</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Alimentos premium prestige SA de CV</h3>
          <p>La materia prima que ABAMAP nos provee ha sido siempre de primera calidad, por lo que nuestros insumos y productos que vendemos se han posicionado como los mejores dentro de nuestro mercado.</p>
          <a href="contacto" class="btn btn-primary">
            Contacto
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Charritos y frutiras Josè</h3>
          <p>El mercado en el que nos movemos es muy amplio, sobre todo si compites con marcas grandes a nivel mundia.
            <br>
            Al comprar mis productos primarios con ABAMAP me ha garantizado una estabilidad de mercado, por eso y mas los recomiendo.
          </p>
          <a href="contacto" class="btn btn-primary">
            Contacto
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Productora de materias primas para alimentos SLP</h3>
          <p>Una empresa a veces no puede siempre generar la materia prima desde cero o generar todo lo que existe, por lo que a veces nos toca buscar un proveedor que nos apoye.
            <br>
            La meteria que nos ofrece ABAMAP es de excelente calidad, por lo que seguiremos con ellos mucho mas tiempo.
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
