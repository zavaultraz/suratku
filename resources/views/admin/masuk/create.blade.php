@extends('admin.include.parent')
@section('content')
<div class="row">
    <div class="card p-4">
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <div class="d-flex align-items-center">
            <i class="bi bi-exclamation-octagon me-2"></i>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
        <h3>create surat masuk</h3>
        <!-- route store -->
        <!-- untuk melakukan penambahan -->
        <!-- enctype melakukan input  data dalam bentuk file -->
        <form action="{{route('masuk.store')}}" method="post" enctype="multipart/form-data">
            <!-- csrf sebagai token atentifikasi  -->
@csrf
<!-- metod jenis yang digunakan -->
@method('POST')
            <div class="col-12">
                <label for="InputName" class="form-label">Nomor Surat</label>
                <input type="text" class="form-control" id="InputName" name="nomor_surat" value="{{old('nomor_surat')}}">
            </div>
            <div class="col-12">
                <label for="InputName" class="form-label">Isi Surat</label>
                <input type="text" class="form-control" id="InputName" name="isi_surat" value="{{old('isi_surat')}}">
            </div>
            <div class="mb-3">
            <label class="col-sm-2 col-form-label">Jenis Surat</label>
            <div class="col-sm-10">
                <select class="form-select" name="category_id" aria-label="Default select example">
                    <option selected>--Jenis Surat--</option>
            @foreach ($category as $row)
            <option value="{{$row->id}}">{{$row->name}}</option>
                    
            @endforeach
                </select>
            </div>
            </div>
            <div class="col-12">
                <label for="InputName" class="form-label">Tanggal Surat</label>
                <input type="date" class="form-control" id="InputName" name="tanggal_surat" value="{{old('tanggal_surat')}}">
            </div>
            <div class="col-12">
                <label for="InputName" class="form-label">link surat</label>
                <input type="text" class="form-control" id="InputName" name="link" value="{{old('link')}}">
            </div>
            <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success mt-2">
                <i class="bi  bi-clipboard-plus"></i> Tambah
            </button>
            </div>
            
        </form>
    </div>
</div>

@endsection