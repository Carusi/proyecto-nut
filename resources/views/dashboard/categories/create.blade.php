@extends('layouts/layoutsAdmin/layoutA')
@section('title', "")
@section('contenido')

<div class="container-fluid py-10 px-5">
   
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'dashboard.categories.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}


                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
               {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoria' ]) !!} {{-- 'readonly'--}}
            </div>

            @error('slug')
                <span class="text-danger">{{$message}}</span>
            @enderror

            {!! Form::submit('Crear categoria', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>

@stop

@section('js')

<script src="{{asset('public/assets/vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min')}}"></script>

<script>
    $(document).ready( function() {
  $("#name").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#slug',
    space: '-'
  });
});
</script>

@stop