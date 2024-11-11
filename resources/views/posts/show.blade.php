@extends("layouts.app")

@section("page-title", $post["title"])

@section("content")
<section class="container py-4">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bold text-center mb-3"> {{  $project["title"] }} Show Page </h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-8 card m-3">
            <ul>
                <li class="fw-bold fs-3 mb-3"> titolo del post: {{$post["title"]}} </li>
                <li class="mb-3 fw-bold"> Autore del post: {{ $post["author"] }}</li>
                <li class="mb-3"> Descrizione: {{$post["description"]}} </li>
            </ul>
        </div>
    </div>
</section>
@endsection
