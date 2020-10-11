@extends('template_backend.home')
@section('title','Post')
@section('subjudul','Post')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success')}}    
  </div>
    @endif
<a href=" {{route('post.create')}} "class="btn btn-info">Add Post</a>
<br>
<br>
<table class="table rable striped table hover table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Post</th>
            <th>Kategori</th>
            <th>Daftar Tags</th>
            <th>Creator</th>
            <th>Thumbnail</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($post as $result =>$hasil)
            <tr>
                <td> {{$result + $post->firstitem()}} </td>
                <td> {{$hasil->judul}} </td>
                <td> {{$hasil->category->name}} </td>
                <td>@foreach($hasil->tags as $tag)
                    <ul>
                    <h6>
                    </ul> <span class="badge badge-info">{{ $tag->name }}</span></h6> 
                    @endforeach
                    </td>
                    <td> {{$hasil->users->name}} </td>
                <td><img src=" {{asset( $hasil->gambar )}}  " class="img-fluid" style="width:100px"></td>
                <td>
                    <form action=" {{route('post.destroy', $hasil->id)}} " method="post">
                        @csrf
                        @method('delete')
                        <a href=" {{route('post.edit',$hasil->id)}} " class="btn btn-primary btn-sm" >Edit</a>
                    <button type="submit" href="" class="btn btn-danger btn-sm"onclick="return confirm('Apakah anda ingin menghapus data?')">Delete</button></td>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$post->links()}}
@endsection
