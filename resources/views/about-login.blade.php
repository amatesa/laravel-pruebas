@extends('layouts.fixed_menu')
@section('title')
  Index
@stop

@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="nav_top_align">
                        <i class="fa fa-question-circle"></i>
                        FAQs
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
      <div class="backgroundAbout">
        <img src="{{asset ('assets/img/preguntas.jpg')}}" width="100%" />
      </div>

      <div class="about">
        <article class="about_container">
          <h3>Preguntas Frecuentes</h3>
          <div class="faqsContainer">
            <p class="question"><a href="#" class="alternar-respuesta">¿Qué es Borrowin?</a></p>
            <p id="test"class="respuesta" style="display:none">Es una red social que permite a sus miembros intercambiar productos en forma de préstamo temporal.</p>
          </div>
          <div class="faqsContainer">
            <p class="question"><a href="#" class="alternar-respuesta">¿Cómo funciona si quiero pedir prestado?</a></p>
            <p id="test"class="respuesta" style="display:none"><strong>1-</strong> Teniendo ya agregados a tus contactos a tus amigos. <br>
            <strong>2-</strong> Buscas el producto que necesitas, la búsqueda se realiza entre tu lista de amigos. <br>
            <strong>3-</strong> Retiras el producto que solicitaste. <br>
            <strong>4-</strong> Después del tiempo pactado devuelves el producto.</p>
          </div>

          <div class="faqsContainer">
            <p class="question"><a href="#" class="alternar-respuesta">¿Cómo funciona si quiero prestar algo?</a></p>
            <p id="test"class="respuesta" style="display:none">
                <strong>1-</strong> Teniendo ya agregados a tus contactos a tus amigos. <br>
                <strong>2-</strong> Realizas una publicación del producto que quisieras prestar. <br>
                <strong>3-</strong> Esperas a que se contacten contigo, y organizas la entrega. <br>
                <strong>4-</strong> Después del tiempo pactado te retornan el producto.
            </p>
          </div>

          <div class="faqsContainer">
            <p class="question"><a href="#" class="alternar-respuesta">¿Y si se daña el producto?</a></p>
            <p id="test"class="respuesta" style="display:none">
              Cuando aceptas las condiciones estas aceptando el compromiso de cuidar los productos como si fueran propios.
              Por lo que, en caso de daños, deberás pagar los costos de las reparaciones. Es por esto que recomendamos
              probar el producto al momento de retirarlo. <br> Recorda también que son tus amigos, no van a romper tus cosas.
            </p>
          </div>

          <div class="faqsContainer">
            <p class="question"><a href="#" class="alternar-respuesta">¿Tiene costos el servicio?</a></p>
            <p id="test"class="respuesta" style="display:none">
              Borrowin no tiene costos, los cargos por entregar o retirar un producto estan a cargo de los miembros de la comunidad que estan interesados en realizar una operación.
              Los medios por los cuales dispongan realizar la misma dependerá única y excusivamente de ellos.
            </p>
          </div>

          <div class="faqsContainer">
            <p class="question"><a href="#" class="alternar-respuesta">¿Cómo publico algo que quiero prestar?</a></p>
            <p id="test"class="respuesta" style="display:none">
              Es totalmente intuitivo. Una vez logueado, podras acceder al menú de "mis artículos", donde podras publicar el producto que deseas prestar, indicando el período durante el cual estará disponible, la zona de entrega y las fotos del mismo, junto con una descripción del mismo.
            </p>
          </div>

          <div class="faqsContainer">
            <p class="question"><a href="#" class="alternar-respuesta">¿Cómo hago un seguimiento de los artículos que preste?</a></p>
            <p id="test"class="respuesta" style="display:none">
              Borrowin mandará un mensaje a la cuenta del usuario que presto el artículo, como al usuario al cual se le realizo el préstamo, días antes del vencimiento del plazo. Sea dicho, los usuarios deben ponerse en contacto y coordinar la devolución del producto.
            </p>
          </div>

          <div class="faqsContainer">
            <p class="question"><a href="#" class="alternar-respuesta">¿Cómo funciona y para que sirve la reputación del usuario?</a></p>
            <p id="test"class="respuesta" style="display:none">
              Es fácil, borrowin no se limita unicamente a tus amigos, podes incorporar a tus contactos a otros usuarios. Y para esto, que mejor que saber las experiencias anteriores de otros usuarios. Podes clasificar, opinar y recomendar a otros miembros de la comunidad para que otras personas sepan que sus artículos estan en buenas manos y van a ser cuidados.
            </p>
          </div>
      </article>
      </div>
    </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="{{asset('assets/js/pages/about.js')}}"></script>
@stop
