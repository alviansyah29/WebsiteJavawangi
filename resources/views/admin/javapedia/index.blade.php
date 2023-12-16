@extends('admin.main')

@section('container')

@if(session()->has('sukses'))
<x-adminlte-alert theme="success" title="Success" dismissable>
    {{ session('sukses') }}
</x-adminlte-alert>
@endif

<a href="javapedia/create" class="btn btn-success mb-5 mt-3"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Komoditas Baru</a>
<table class="table table-bordered table-sm table-striped table-hover table-responsive">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col" class="w-25">Gambar</th>
      <th scope="col">Komoditas</th>
      <th scope="col">Slug</th>      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produk as $p)
    
    <tr>
      <th scope="row" class="align-middle">{{$loop->iteration}}</th>
      <td class="text-center"><img src="{{ asset('storage/' . $p->gambar) }}" class="h-50 w-50 img-thumbnail"></td>
      <td class="align-middle">{{ $p->komoditas }}</td>
      <td class="align-middle">{{ $p->slug }}</td>      
      <td class="text-center align-middle">        
        <a href="javapedia/{{ $p->slug }}/edit" class="btn btn-outline-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
        <form action="javapedia/{{ $p-> slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Anda Yakin Ingin MEnghapus Data Ini?!')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
        </form>

      </td>
    </tr>

    @endforeach    
  </tbody>
</table>



@endsection

