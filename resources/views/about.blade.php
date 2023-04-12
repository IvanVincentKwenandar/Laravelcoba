@extends("layouts/main")


@section('konten')
    <p>WEREWOLF</p>
    <p>This is a copy of The About page</p>
    @for ($i = 0; $i < 10; $i++)
    <p>
        {{ $i }}
    </p>
    @endfor
@endsection
