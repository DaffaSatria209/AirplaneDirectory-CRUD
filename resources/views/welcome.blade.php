

@extends("layout")
@section("content")

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Selamat Datang</h1>
            <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>
                <a href="/add/addPost" class="btn btn-primary my-2">Add New Aircraft</a>
            </p>
      </div>
    </div>
    </section>



    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach($posts as $post)
                    <div class="col">
                        <div class="card shadow-sm">
                            <a href="/detail/{{$post->id}}">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{asset($post->image)}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                            </a>
            

                        <div class="card-body">
                            <p class="card-text">{{$post->content}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="detail/{{$post->id}}">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        </a>
                                        <a href="edit/{{$post->id}}">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </a>
                                    </div>
                                    <small class="text-muted">{{$post->created_at}}</small>
                                </div>
                            </div>
                        </div>
                     </div>
                @endforeach
    
            </div>
        </div>
  </div>
@endsection




        
        
