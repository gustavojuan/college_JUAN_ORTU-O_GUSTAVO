




            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://placehold.co/600x100?text=Hello+World" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://placehold.co/600x100?text=Hello+World" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://placehold.co/600x100?text=Hello+World" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>






<nav class="navbar navbar-expand-lg navbar-light bg-light px-0">
    <div class="container">
        <a class="navbar-brand" href="#">Courses</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @foreach($courses as $course)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{$course->name}}
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($course->subjects as $subject)

                                <li><a class="dropdown-item" href="{{route('subjects.show',$subject->id)}}">{{$subject->name}}</a></li>
                            @endforeach

                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
