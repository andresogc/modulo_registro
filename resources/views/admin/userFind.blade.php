@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">{{ __('Buscar usuario a editar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.search') }}">
                        @csrf



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Buscar') }}
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
