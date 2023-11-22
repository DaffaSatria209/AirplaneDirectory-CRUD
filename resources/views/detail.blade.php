

@extends("layout")
@section("content")
    <!-- Below is main content for details -->
        <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">{{$post->title}}</h1>
                    <h3 class="fw-light">{{$post->excerpt}} </h3>
                    <p class="lead text-muted">{{$post->content}}</p>
                    <img class="bd-placeholder-img card-img-top" width="100%" height="auto" src="{{asset($post->image)}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                    <a href="/edit/{{$post->id}}" class="btn btn-primary my-2">Edit</a>
                    <a href="/delete/{{$post->id}}" class="btn btn-danger my-2" onclick="confirmation(event)">Delete</a>
      
                </div>
            </div>
        </section>

    </main>

    <!-- end content for content for details -->



@endsection
