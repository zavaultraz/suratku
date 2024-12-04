@extends('admin.include.parent')

@section('content')
<div class="row">
    <div class="card p-4">
        <h3 class="text-uppercase">Surat Masuk</h3>
        <h5 class="text">Data Surat Masuk</h5>
        <hr>
        <div class="d-flex justify-content-end">
            <a href="{{route('masuk.create')}}" class="btn btn-primary">
                <i class="bi bi-plus">
                    tambah surat masuk
                </i>
            </a>
        </div>
        @if (session('success'))
        <div class="alert alert-success mt-2 alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="container mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Surat Masuk</h5>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Surat</th>
                                <th>Isi Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($suratMasuk as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->nomor_surat}}</td>
                                <td>{{$row->isi_surat}}</td>
                                <td>{{$row->tanggal_surat}}</td>

                                <td class="gap-2">

                                    <!--  -->
                                    <a  class="btn btn-primary mt-2" href="{{route('masuk.show',$row->id)}}">
                                        <i class="bi bi-eye"></i> View
                                    </a>



                                    <a href="{{route('masuk.edit', $row->id)}}" class="btn btn-warning mt-2">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>
                                    <!-- button delate with route destroy row > id -->
                                    <form action="{{ route('masuk.destroy', $row-> id ) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger mt-2 "><i class="bi bi-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="text-center" colspan="4">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>
                    <!-- paginate -->
                    {{ $suratMasuk->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection