<section class="home flex-center" id="home" >
        <video autoplay muted loop id="video-background" >
            <source src="assets/vid/blue.mp4" type="video/mp4">
           
            Your browser does not support the video tag.
        </video>
       <div class="home-container">
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="info">
            @foreach ( $home as $item )
            <h2>Hi, I am {{$item->name}}</h2>
            <h3>{{$item->role}}</h3>
            <p> {{$item->description}}
                </p>
                   <a href="#contact" class="btn">Contact Me <i class="fas fa-arrow-circle-right"></i></a>
        </div>
        @endforeach
        <div class="home-img">
            <img src="{{ asset ('image/bazan.png')}}" alt="">
        </div>
       </div>
       <a href="#about" class="scroll-down">Scroll Down <i class="fas fa-arrow-down"></i></a>
    </section>