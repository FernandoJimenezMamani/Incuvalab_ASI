@extends('layouts.Dashboard')


@section('script')

@stop
@section('content')
<div class="container">

    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Cambia tu contraseña</h6>
            
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <form action="{{ route('updatePass') }}" method="POST">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                @csrf
                <div class="mb-3">
                    <label for="oldPasswordInput" class="form-label">Contraseña anterior:</label>
                    <input name="old_password" id="oldPasswordInput" type="password" class="form-control @error('old_password') is-invalid @enderror">
                    @error('old_password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <br>
                <div class="mb-3">
                    <label for="newPasswordInput" class="form-label">Nueva contraseña:</label>
                    <input name="new_password" id="newPasswordInput" type="password" class="form-control @error('new_password') is-invalid @enderror" minlength="8">
                    @error('new_password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <br>
                <div class="mb-3">

                    <label for="confirmNewPasswordInput" class="form-label">Confirmar nueva contraseña:</label>
                    <input name="new_password_confirmation" id="confirmNewPasswordInput" type="password" class="form-control">
                </div>
                <br>
                <center>
                    <button type="submit" class="btn btn-primary"> Confirmar</button>
                </center>

            </form>

            
        </div>
    </div>
    
</div>
@stop