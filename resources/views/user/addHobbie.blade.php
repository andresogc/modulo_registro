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



            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('hobbie.save') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Selecciona un pasatiempo') }}</label>

                            <select name="hobbie[]" class="custom-select">
                                    @foreach($hobbies as $hobbie)
                            <option value="{{$hobbie->id}}" selected>{{$hobbie->name_hobbie}}</option>
                                    @endforeach

                            </select>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Agregar pasatiempo') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
