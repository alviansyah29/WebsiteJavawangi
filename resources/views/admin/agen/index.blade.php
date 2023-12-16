@extends('admin.main')

@section('container')

@if(session()->has('sukses'))
<x-adminlte-alert theme="success" title="Success" dismissable>
    {{ session('sukses') }}
</x-adminlte-alert>
@endif

<a href="agen/create" class="btn btn-success mb-5 float-end"><i class="fa fa-plus" aria-hidden="true"></i> Agen Baru</a>
<!-- <table class="table table-bordered table-sm table-striped table-hover table-responsive">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col" class="w-25">Gambar</th>
      <th scope="col">Nama Agen</th>
      <th scope="col">Slug</th>      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($agen as $p)
    
    <tr>
      <th scope="row" class="align-middle">{{$loop->iteration}}</th>
      <td class="text-center"><img src="{{ asset('storage/' . $p->gambar) }}" class="h-50 w-50 img-thumbnail"></td>
      <td class="align-middle">{{ $p->nama_agen }}</td>
      <td class="align-middle">{{ $p->slug }}</td>      
      <td class="text-center align-middle">        
        <a href="agen/{{ $p->slug }}/edit" class="btn btn-outline-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
        <form action="agen/{{ $p-> slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?!')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
        </form>

      </td>
    </tr>

    @endforeach    
  </tbody>
</table> -->

@php
$heads = [
    ['label' => '#', 'width' => 3],
    ['label' => 'Foto', 'width' => 10],
    ['label' => 'Nama Agen', 'width' => 20],
    ['label' => 'Alamat', 'width' => 40],
    ['label' => 'Actions', 'no-export' => true, 'width' => 15],
];

$config = [
    
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, ['orderable' => false]],
];
@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table1" :heads="$heads" class="display">
    @foreach($agen as $p)
        <tr>
          <td class="align-middle">{{$loop->iteration}}</td>
          <td class="align-middle"><img src="{{ asset('storage/'. $p->gambar) }}" class="img-fluid img-thumbnail"></td>
          <td class="align-middle">{{ $p->nama_agen }}</td>
          <td><small>{!! $p->alamat !!}</small></td>
          <td class="align-middle">
            <a href="agen/{{ $p->slug }}/edit" class="btn btn-outline-info btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
            <form action="agen/{{ $p-> slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?!')"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
            </form>
          </td>
        </tr>
    @endforeach
</x-adminlte-datatable>


<script>
  new DataTable('#table1', {
    scrollX: true
});
</script>

@endsection

