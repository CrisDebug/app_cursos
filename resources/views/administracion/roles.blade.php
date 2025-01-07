@extends('layouts.plantilla')
@section('title','admin_roles')

@section('content')
<div class="container">
    <h1>Gestion de Roles</h1>
    
    <!--mensaje-->
    @if (session('succes'))
    <div class="alert alert-succes">
        {{ session('succes') }}
    </div>
    @endif

    <!--tabla-->
    <table class="table">
        <thead>
            <tr>
            <th>usuario</th>
            <th>Rol Actual</th>
            <th>Asignar Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->roles->pluck('name')->join(', ') }}</td>
                    <td>
                    <form action="{{ route('administracion.roles') }}" method="POST">
                        @csrf
                        <select name="role" class="form-select">
                            <option value="">Selecciona un Rol</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary mt-2">Asignar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection