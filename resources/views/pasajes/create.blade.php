@extends('layout.plantilla')
@section('title', 'Registro')
@section('card-title', 'Registrar Nuevo Pasaje')
@section('content')
    <form action={{ route('pasajes.create') }} method="post">
        @csrf
        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input type="number" class="form-control" name="dni" value={{ old('dni') }}>
            @error('dni')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" name="nombres" value={{ old('nombres') }}>
            @error('nombres')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" value={{ old('apellidos') }}>
            @error('apellidos')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" class="form-control" name="precio" value={{ old('precio') }}>
            @error('precio')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="destino" class="form-label">Destino</label>
            <input type="text" class="form-control" name="destino" value={{ old('destino') }}>
            @error('destino')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="fechaviaje" class="form-label">Fecha del viaje</label>
            <input type="date" class="form-control" name="fechaviaje" value={{ old('fechaviaje') }}>
            @error('fechaviaje')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="asiento" class="form-label">Asiento</label>
            <input type="number" class="form-control" name="asiento" value={{ old('asiento') }}>
            @error('asiento')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary w-100">
            <i class="fa-solid fa-plane"></i> Registrar</button>
    </form>
@endsection
