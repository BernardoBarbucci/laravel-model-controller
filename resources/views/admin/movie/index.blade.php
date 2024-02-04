@extends('layout.app')

@section('main-content')
    <section class="container-fluid py-5 bg-warning border border-primary">
        <div class="text-center mb-5"> 
            <h1>
                Movie content 
            </h1>
        </div>

        <div class="container-fluid">
            <div class="row d-flex flex-wrap justify-content-center">
                {{-- struttura card --}}
                
                @forelse ($movies as $movie)
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-header text-center">
                            {{ $movie->title }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Original title: <br>
                                {{ $movie->original_title }}
                            </li>
                            <li class="list-group-item">
                                Nationality: {{ $movie->nationality }}
                            </li>
                            <li class="list-group-item">
                                Date: {{ $movie->date }}
                            </li>
                            <li class="list-group-item">
                                Vote: {{ $movie->vote }}
                            </li>
                        </ul>
                    </div> 
                @empty
                    <div>
                        <h1>
                            No movies to show :(
                        </h1>
                    </div>
                @endforelse



            </div>
        </div>

    </section>
@endsection