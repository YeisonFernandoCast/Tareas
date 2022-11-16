@extends('app')

@section('content')
<div class="container border p-4 mt-4">
    <form action="{{ route('todos-update' , ['id'=> $todo->id]) }}" method='POST'>
        @method('patch')
        <!--Directiva @csrf genera un token, para colocar seguridad-->
        @csrf

        @if(session('success'))
        <h6 class="alert alert-success">{{ session('success')}}</h6>
        @endif

        @error('title')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">
            <label for="title" class="form-label">Nombre de Tarea</label>
            <input type="text" class="form-control" value= "{{ $todo->title }}" name="title">
        </div>
            
        <button type="submit" class="btn btn-primary">Actualizar Tarea</button>
    </form>

</div>


@endsection