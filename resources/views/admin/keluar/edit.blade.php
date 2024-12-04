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

        <h3 class="mb-4">Edit Surat Keluar</h3>

        <form action="{{ route('keluar.update', $suratKeluar->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nomor_surat" class="form-label">Nomor Surat</label>
                <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" value="{{ $suratKeluar->nomor_surat }}" required>
            </div>

            <div class="mb-3">
                <label for="isi_surat" class="form-label">Isi Surat</label>
                <input type="text" class="form-control" id="isi_surat" name="isi_surat" value="{{ $suratKeluar->isi_surat }}" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                <input type="date" class="form-control" id="tanggal_surat" name="tanggal_surat" value="{{ $suratKeluar->tanggal_surat }}" required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Jenis Surat</label>
                <select class="form-select" name="category_id" id="category_id" required>
                    <option selected disabled>--Jenis Surat--</option>
                    @foreach ($category as $row)
                        <option value="{{ $row->id }}" {{ $row->id == $suratKeluar->category_id ? 'selected' : '' }}>{{ $row->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="link" class="form-label">Link Surat</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $suratKeluar->link }}">
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success mt-2">
                    <i class="bi bi-clipboard-plus"></i> Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
