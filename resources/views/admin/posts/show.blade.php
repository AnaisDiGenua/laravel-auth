@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{$post->title}}</h2>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        @if ($post->published)
                            <span class="badge badge-success">pubblicato</span>
                        @else
                            <span class="badge badge-secondary">bozza</span>
                        @endif
                    </div>
                    {{$post->content}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection