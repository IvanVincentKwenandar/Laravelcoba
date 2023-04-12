@extends("layouts/main")


@section('konten')
    <p>WEREWOLFKW</p>
    <p>This is a copy of The BLOG page</p>
    @foreach ($postings as $post)
        <h2>
            {{ 
                $post["title"]
             }}
        </h2>

        <h5>
            {{ 
                $post["author"]
             }}
        </h5>

        <p>
            {{ 
                $post["body"]
             }}
        </p>
    @endforeach
@endsection
