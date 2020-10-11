@extends('template_backend.home')
@section('title','Post')
@section('subjudul','Add Post')
@section('content')

    @if(count($errors)>0)
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
            </div>
        @endforeach
        @endif

    
<form action=" {{route('post.store')}} " method="POST" enctype="multipart/form-data" >
@csrf
<div class="form-group">
    <label>Judul</label>
    <input type="text"class="form-control col-3" name="judul"autocomplete="off">
</div>
<div class="form-group">
    <label>Kategori</label>
    <select class="form-control" name="category_id">
        <option value="" holder>Pilih Kategori</option>
        @foreach ($category as $result)
            
        
        <option value=" {{$result->id}} "> {{$result->name}} </option>
        @endforeach
    </select>
</div>
<div class="form-group">
                      <label>Pilih Tag</label>
                      <select class="form-control select2" multiple=""name="tags[]">
                      @foreach($tags as $tag)
                      <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        
                        @endforeach
                      </select>
                    </div>
<div class="form-group">
    <label>Konten</label>
    <textarea name="content" class="form-control" ></textarea>
</div>
<div class="form-group">
    <label>Thumbnail</label>
    <input type="file" name="gambar" class="form-control">
</div>
<div class="form-group">
    <button class="btn btn-primary">Save</button>
</div>
</form>
@endsection