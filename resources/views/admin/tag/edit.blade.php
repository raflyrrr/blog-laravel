@extends('template_backend.home')
@section('title','Tag')
@section('subjudul','Edit Tag')
@section('content')

    @if(count($errors)>0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
            </div>
        @endforeach
        @endif

    
<form action="{{ route('tag.update',$tags->id)}} " method="POST">
@csrf
@method('patch')
<div class="form-group">
    <label>Category</label>
    <input type="text"class="form-control col-3" autocomplete="off" name="name"value={{$tags->name}}>
</div>
<div class="form-group">
    <button class="btn btn-primary">Update</button>
</div>
</form>
@endsection