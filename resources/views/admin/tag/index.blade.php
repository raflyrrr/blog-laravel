@extends('template_backend.home')
@section('title','Tag')
@section('subjudul','Tag')
@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success')}}    
  </div>
    @endif
<a href=" {{route('tag.create')}} "class="btn btn-info">Add Tag</a>
<br>
<br>
<table class="table rable striped table hover table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Tag</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tag as $result =>$hasil)
            <tr>
                <td> {{$result + $tag->firstitem()}} </td>
                <td> {{$hasil->name}} </td>
                <td>
                    <form action=" {{route('tag.destroy', $hasil->id)}} " method="post">
                        @csrf
                        @method('delete')
                        <a href=" {{route('tag.edit',$hasil->id)}} " class="btn btn-primary btn-sm" >Edit</a>
                    <button type="submit" href="" class="btn btn-danger btn-sm"onclick="return confirm('Apakah anda ingin menghapus data?')">Delete</button></td>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$tag->links()}}
@endsection
