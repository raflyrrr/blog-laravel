@extends('template_backend.home')
@section('title','Tag')
@section('subjudul','Add Tag')
@section('content')

    @if(count($errors)>0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
            </div>
        @endforeach
        @endif

    
<form action=" {{route('tag.store')}} " method="POST">
@csrf
<div class="form-group">
    <label>Tag</label>
    <input type="text"class="form-control col-3" name="name"autocomplete="off">
</div>
<div class="form-group">
    <button class="btn btn-primary">Save</button>
</div>
</form>
@endsection