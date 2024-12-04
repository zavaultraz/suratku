@extends('admin.include.parent')

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">Detail Surat Keluar</h5>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('keluar.index') }}">Surat Keluar</a></li>
                <li class="breadcrumb-item active">Detail Surat</li>
            </ol>
        </nav>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">Informasi Surat</h5>

        <!-- Table with stripped rows -->
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th scope="row">Nomor Surat</th>
                    <td>{{ $suratKeluar->nomor_surat }}</td>
                </tr>
                <tr>
                    <th scope="row">Tanggal Surat</th>
                    <td>{{ $suratKeluar->tanggal_surat }}</td>
                </tr>
                <tr>
                    <th scope="row">Kategori Surat</th>
                    <td>{{ $suratKeluar->category->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Isi Surat</th>
                    <td>{{ $suratKeluar->isi_surat }}</td>
                </tr>
                <tr>
                    <th scope="row">Link Surat</th>
                    <td>
                        <a href="{{ $suratKeluar->link }}" target="_blank" class="btn btn-primary btn-sm">
                            Buka Link
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End Table with stripped rows -->
    </div>
</div>
@endsection
