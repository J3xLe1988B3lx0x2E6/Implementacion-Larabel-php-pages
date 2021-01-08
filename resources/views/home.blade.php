@extends('layouts.app')

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{asset('img/tucan.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Hablemos de los tucanes y su pico</h5>
            <p>3 ENERO, 2021</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{asset('img/lengua.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>La lengua no detecta los sabores por zonas</h5>
            <p>2 ENERO, 2021</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{asset('img/agujeros.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Fisicos buscan agujeros negros para resolver el misterio de la materia oscura</h5>
            <p>2 ENERO, 2021</p>
        </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>


    <section>
    <dir>
        <h1>Creador de las noticias</h1>
    </dir>
    <dir>
        <h3>Youtube</h3>
    </dir>
        <dir style="text-align: center;">
        
        <iframe width="1280" height="720" src="https://www.youtube.com/embed/kL7KOjYbzUg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 90vw;height: 50vw;"></iframe>
        </dir>
        <section style="text-align: center;">
        <dir class="fate" > 
        <h3>Facebook</h3>
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FHolasoyTITUS%2Fposts%2F205668974522155&width=500&show_text=true&height=529&appId" width="500" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </dir>
        <dir class="fate">
            <h3>Twetter</h3>
            <blockquote class="twitter-tweet"><p lang="es" dir="ltr">Ya pueden descargarse la aplicación Robotitus para tener las noticias científicas al alcance de su mano 🪐🔭🔬🧬 <a href="https://t.co/tHrKmTZjDA">pic.twitter.com/tHrKmTZjDA</a></p>&mdash; Aldo Bartra (@ldobartra) <a href="https://twitter.com/ldobartra/status/1340015062124130304?ref_src=twsrc%5Etfw">December 18, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </dir>
    </section>
        <dir>
        <h3>Pagina web</h3>
        </dir>
        <dir style="text-align: center;">
            
            <a href="https://robotitus.com/"><img src="{{asset('img/robotitus.png')}}" alt="robotitus" style="height: 40vw;text-align: center;"></a>
        </dir>
    </section>
@endsection

