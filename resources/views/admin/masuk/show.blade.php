@extends('admin.include.parent')

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">Detail Surat Masuk</h5>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('masuk.index') }}">Surat Masuk</a></li>
                <li class="breadcrumb-item active">Detail Surat</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Detail Surat</h5>

        <!-- Table with stripped rows -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nomor Surat</th>
                    <td scope="col">{{ $suratMasuk->nomor_surat }}</td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Surat</th>
                    <td>{{ $suratMasuk->tanggal_surat }}</td>
                </tr>
                <tr>
                    <th scope="row">Kategori Surat</th>
                    <td>{{ $suratMasuk->category->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Isi Surat</th>
                    <td>{{ $suratMasuk->isi_surat }}</td>
                </tr>
                <tr>
                    <th scope="row">Link Surat</th>
                    <td>
                        <a href="{{ $suratMasuk->link }}" target="_blank" class="btn btn-primary btn-sm">
                            Buka Link
                        </a>
                    </td>
                </tr>
            </thead>
        </table>
        <!-- End Table with stripped rows -->

    </div>
</div>
@endsection
