@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


                @if (session('message'))
                <div class="alert alert-success">

                    {{ session('message')}}
                </div>
            @endif


                <div class="card-header">
                        MIS PASATIEMPOS
                </div>

            @foreach ($hobbies as $hobbie)
                <div class="card">


                        @if($hobbie->user_id == Auth::user()->id)
                            <div class="card-body">

                                    {{$hobbie->hobbie->name_hobbie}}

                            </div>
                        @endif

                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
