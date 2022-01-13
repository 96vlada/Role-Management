@extends('layouts.app')
@section('content')
<div class="container">
    <div class="justify-content-center">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center"><span>Edit permission</span>
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('permissions.index') }}">Permissions</a>
                </span>
            </div>
            <div class="card-body">
                {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method'=>'PATCH']) !!}
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection