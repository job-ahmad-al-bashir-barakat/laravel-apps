@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mt-2">
                <div class="card-header">
                    Chat App
                    <a href="{{ url('/chat') }}" class="btn btn-sm btn-primary float-right">Visit chat app</a>
                </div>

                <div class="card-body">
                    Chat App Build With Laravel Echo and pusher.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mt-2">
                <div class="card-header">Chat</div>

                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ad aliquid asperiores delectus, dolorum harum itaque libero magni minus nisi,
                    nobis odio quam sapiente, voluptates? Adipisci blanditiis iusto nisi saepe voluptatibus.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
