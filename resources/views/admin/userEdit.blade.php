@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

             

            @if (isset($user))
                @foreach ($user as $someone)
                    {{$id=$someone->id}}
                    {{$name=$someone->name}}
                    {{$username=$someone->username}}
                    {{$city=$someone->city}}
                    {{$email=$someone->email}}
                    {{$profile=$someone->profile}}

                @endforeach
            @endif

            <div class="card">
                <div class="card-header">{{ __('Editar cuenta') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.update') }}">
                        @csrf


                        <div class="form-group row">
                                <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('id') }}</label>

                                <div class="col-md-6">
                                <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="@if (isset($id)){{ $id  }}  @else {{Auth::user()->id}} @endif " required autocomplete="id" autofocus>

                                    @error('id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="@if (isset($name)){{ $name  }}  @else {{Auth::user()->name}} @endif " required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de usuario') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="@if (isset($username)){{ $username  }}  @else {{Auth::user()->username}} @endif" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="@if (isset($city)){{ $city  }}  @else {{Auth::user()->city}} @endif" required autocomplete="city" autofocus>

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value=" @if (isset($email)){{ $email  }}  @else {{Auth::user()->email}} @endif " required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profile" class="col-md-4 col-form-label text-md-right">{{ __('profile') }}</label>

                            <div class="col-md-6">
                                <input id="profile" type="text" class="form-control @error('profile') is-invalid @enderror" name="profile" value=" @if (isset($profile)){{ $profile  }}  @else {{Auth::user()->profile}} @endif" required autocomplete="name" autofocus>

                                @error('profile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar cambios') }}
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
