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

        {!! Form::open(array('route' => 'posts.store', 'method'=>'POST')) !!}
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center"><span>Create post</span>
                <span class="ms-auto">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Posts</a>
                </span>
            </div>

            <div class="container">
                <div class="row">



            <div class="col-9">
            
                <div class="card-body">
                        <div class="form-group my-3">
                            <strong>Title:</strong>
                            {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group my-3">
                            <strong>Body:</strong>
                            {!! Form::textarea('body', null, array('id' => 'summary-ckeditor')) !!}
                        </div>
    
                        
                        <button type="submit" class="btn btn-primary my-3">Submit</button>
                </div>
            </div>
        
        <div class="col-3">

            <div class="form-group my-3">
                <strong>Images:</strong>
                <div>
                    {!! Form::file('image[]', ['multiple' => true, 'class' => 'form-control']) !!}
                </div>
              </div>

              <div class="form-group my-3">
                <strong>Old Price:</strong>
                {!! Form::number('old_price', null, array('placeholder' => 'Old Price','class' => 'form-control')) !!}
            </div>

              <div class="form-group my-3">
                <strong>Price:</strong>
                {!! Form::number('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
            </div>

            <div class="form-group my-3">
                <strong>Currency:</strong>
                {!! Form::select('currency',['dinar' => 'Dinar','euro'=>'Euro','without_price' => 'Witout price'],'dinar',['class'=>'form-control']) !!}
            </div>


            

            <div class="form-group my-4">

                <strong>Categories:</strong>
            <div class="form-check">
                {!! Form::checkbox('categories[]',  'true', $value = '', ['class' => 'form-check-input']) !!}
                <label class="form-check-label" for="flexCheckDefault">
                  Default checkbox
                </label>
              </div>
              <div class="form-check">
                {!! Form::checkbox('categories[]',  'true', $value = '', ['class' => 'form-check-input']) !!}
                <label class="form-check-label" for="flexCheckChecked">
                  Checked checkbox
                </label>
              </div>
            </div>

        </div>

    </div>
</div>

    </div>
        {!! Form::close() !!}
        
    </div>
</div>
@endsection