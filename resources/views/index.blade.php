<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('icon.png') }}">
    <!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- JS (optional) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

<!-- JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
{{-- jquery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- css --}}
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Sup'com Press</title>
</head>
<body>
    <section class="top container" id="first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('images\nobglogo.png')}}" class="logo"alt="" width="80rem">
                </div>
                <div class="col-md-4"> <h1>Sup'Com Press <span class="point">
                    .</span></h1>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <a class="iconlink" href=""><img src="{{asset('images\fb.png')}}" alt="" height="30vh" class="icon"></a>
                    <a  class="iconlink" href=""><img src="{{asset('images\insta.png')}}" alt="" height="35vh" class="icon"></a>
                </div>

            </div>
       
  
</div>
<nav class="navbar navbar-expand-lg bg-transparent ">
  <div class="container-fluid justify-content-between">
    <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="#first-section">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#second-section">Interviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#third-section">About Sup'com</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#fourth-section">Pacte Projects</a>
        </li>
      </ul>
    </div>
  </div>
   
</nav>          
{{--------------------------Article Section--------------------------}}
<div class="container">
  <div class="title"><h2><span>News</span></h2></div>
  <div class="article container">
    <div class="row" style="height:60vh;">
      <div class="col-md-8 article-image">
      <img src="{{asset('images\article\challenge.jpeg')}}" width="100%"alt="">
      </div>
      <div class="col-md-4 article-header"><div class="article-title"><h1> Challenge Projets d'Entreprendre. </h1></div>
    <div class="description">Nous sommes fiers de vous présenter les moments forts de cette semaine riche en créativité, innovation et esprit d'équipe. Merci à tous les participants pour leur engagement et leur passion pour l'entrepreneuriat !
      </div></div>
    </div>
  </div>
</div>
</section>
<section class="second container">  <div class="container mt-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Card 1 -->
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('images\article\chrif.jpeg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Une pensée de réconfort et de condoléances à la famille en deuil de M.Cherif.</h5>
              <p class="card-text">En tant que membres de la communauté Supcom, il est de notre responsabilité de reconnaître et de célébrer les contributions de notre administrateur.</p>
              <a href="https://www.instagram.com/p/CpQe147NjY1/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==" class="btn btn-primary">Lire</a>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('images\article\acm.jpeg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">3ème édition de “EPT solving cup”</h5>
              <p class="card-text">á l’école polytechnique de Tunisie</p>
              <a href="https://www.instagram.com/p/CptF96RtHrA/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==" class="btn btn-primary">Lire</a>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('images\article\cancer.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Le cancer chez l’enfant est la deuxième cause de mortalité </h5>
              <p class="card-text">Restons mobilisés contre les cancers pédiatriques !</p>
              <a href="https://www.instagram.com/p/CorIV5iNaUE/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==" class="btn btn-primary">Lire</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{--------------------------Interview Section--------------------------}}
    <section class="Interview" id="second-section" style="height:100%;">
       <div class="title"><h2><span>Interviews</span></h2></div>
       <div class="interview container">
    <div class="row" style="height:60vh;">
      <div class="col-md-8 interview-image">
     
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <video class="img-fluid" autoplay loop muted>
        <source src={{asset("videos/intAnas.mp4")}} type="video/mp4" />
      </video>
    </div>
    <div class="carousel-item">
       <video class="img-fluid" autoplay loop muted>
        <source src={{asset("videos/IMG_5983.MOV")}} type="video/mp4" />
      </video>
    </div>
    <div class="carousel-item">
      <video class="img-fluid" autoplay loop muted>
        <source
          src={{asset("videos/intHamza.mp4")}}
          type="video/mp4"
        />
      </video>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>
      <div class="col-md-4 interview-list">
    <div class="description">
      <h2>What do people have to say about Sup'Com</h2>
      <p>Let's go through some interviews</p>
    </div>
    </div>
  </div>
 </section>
 {{--------------------------Sup'Com Section--------------------------}}
    <section class="supcom" id="third-section">
      <div class="container">
          <div class="title"><h2><span>About Sup'Com</span></h2></div>
         <div class="gallery">
    {{-- <h1 class="text-black my-5 py-4 ">Gallery</h1> --}}
    <div class="ring-container">
        <div id="ring">
            
                <div class="img" style="background-image: url('{{ asset('images/about/tt.jpg') }}');"></div>
                <div class="img" style="background-image: url('{{ asset('images/about/2.jpg') }}');"></div>
                <div class="img" style="background-image: url('{{ asset('images/about/3.jpg') }}');"></div>
                <div class="img" style="background-image: url('{{ asset('images/about/4.jpg') }}');"></div>
                <div class="img" style="background-image: url('{{ asset('images/about/5.jpeg') }}');"></div>
                <div class="img" style="background-image: url('{{ asset('images/about/6.jpg') }}');"></div>
                <div class="img" style="background-image: url('{{ asset('images/about/7.jpg') }}');"></div>
                <div class="img" style="background-image: url('{{ asset('images/about/8.jpg') }}');"></div>
                <div class="img" style="background-image: url('{{ asset('images/about/9.jpg') }}');"></div>
                <div class="img" style="background-image: url('{{ asset('images/about/10.jpg') }}');"></div>
          
        </div>
    </div>
    <div class="vignette"></div>
    <div id="dragger"></div>
</div>
</div>
     
      </div>
    </section>
    {{--------------------------Pacte Section--------------------------}}
<section class="pacte" id="fourth-section">
  <div class="title"><h2><span>Pacte Projects</span></h2></div>
  <div class="container">
    <ul class="gallery_box">
	<li>
		<a href="https://www.facebook.com/SUPCRT"><img src={{asset('images/pacte/p7.jpg')}} style="height:100%;">
		<div class="box_data">
			<span>Pacte n°7</span>
		</div></a>
	</li>
		<li>
		<a href="https://www.facebook.com/SUPBIKE29"><img src={{asset("images/pacte/p5.jpg")}} style="height:100%;">
		<div class="box_data">
			<span>Pacte n°5</span>
		</div></a>
	</li>
		<li>
		<a href="https://www.facebook.com/profile.php?id=100092609795578"><img src={{asset("images/pacte/p20.jpg")}}>
		<div class="box_data">
			<span>Pacte n°20</span>
		</div></a>
	</li>
			<li>
		<a href="https://www.facebook.com/photo?fbid=178561231815762&set=a.107850325553520"><img src={{asset("images/pacte/p14.jpg")}}>
		<div class="box_data">
			<span>Pacte n°14</span>
		</div></a>
	</li>
			<li style="    position: relative;
    top: -134px;">
		<a href="https://www.facebook.com/permalink.php?story_fbid=pfbid02AEq4pGsEWmuYtHEM1MtMPWDVbf76gaMPsXneA8C9aFotsdoUGaqMbzQsLSTGXvYol&id=100089856585334"><img src={{asset("images/pacte/p10.jpg")}}>
		<div class="box_data">
			<span>Pacten°10</span>
		</div></a>
	</li>
			<li>
		<a href="https://www.facebook.com/photo/?fbid=163700509968501&set=a.107850325553520"><img src="{{asset("images/pacte/p17.jpg")}}">
		<div class="box_data">
			<span>Pacte n°17</span>
		</div></a>
	</li>
	
</ul>
  
  </div>

</section>
<footer>
&copy;Sup'Com Press Pacte 2023|Roua Ben Mimoun
</footer>



<script>
        $(window).scroll(function() {
        if ($(document).scrollTop() > 90) {
            $('nav').addClass('fixed-top');
           
               $('nav').addClass('scrolled');
               $('nav').removeClass('bg-transparent');
              
             
        } else {
            $('nav').removeClass('fixed-top');
            
              $('nav').addClass('bg-transparent');
            
        }
        });
 </script>
 {{-- gallery scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/Draggable.min.js"></script>
    <script >
      let xPos = 0;

gsap.timeline()
    .set(dragger, { opacity: 0 }) //make the drag layer invisible
    .set(ring, { rotationY: 180 }) //set initial rotationY so the parallax jump happens off screen
    .set('.img', { // apply transform rotations to each image
        rotateY: (i) => i * -36,
        transformOrigin: '50% 50% 500px',
        z: -500,
        // backgroundImage:(i)=>'url(https://picsum.photos/id/'+(i+32)+'/700/300/)',
        // backgroundPosition:(i)=>getBgPos(i),
        backfaceVisibility: 'hidden'
    })
    .from('.img', {
        duration: 1.5,
        y: 200,
        opacity: 0,
        stagger: 0.1,
        ease: 'expo'
    })

Draggable.create(dragger, {

    onDragStart: (e) => {
        if (e.touches) e.clientX = e.touches[0].clientX;
        xPos = Math.round(e.clientX);
    },

    onDrag: (e) => {
        if (e.touches) e.clientX = e.touches[0].clientX;

        gsap.to(ring, {
            rotationY: '-=' + ((Math.round(e.clientX) - xPos) % 360),
            onUpdate: () => { gsap.set('.img', { backgroundPosition: (i) => getBgPos(i) }) }
        });

        xPos = Math.round(e.clientX);
    },

    onDragEnd: () => {
        // gsap.to(ring, { rotationY: Math.round(gsap.getProperty(ring,'rotationY')/36)*36 }) // move to nearest photo...at the expense of the inertia effect
        gsap.set(dragger, { x: 0, y: 0 }) // reset drag layer
    }

})


function getBgPos(i) { //returns the background-position string to create parallax movement in each image
    return (-gsap.utils.wrap(0, 360, gsap.getProperty(ring, 'rotationY') - 180 - i * 36) / 360 * 400) + 'px 0px';
}
    </script>



    
</body>
</html>