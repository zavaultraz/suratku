@extends('admin.include.parent')
@section('content')

<div class="card">
    <div class="container p-4">
        <h1 class="text-center" style="color: #012970;">"kelola surat jadi lebih mudah"</h1>
    </div>
</div>
<div class="section dashboard">
    <div class="row">
        <div class="col-md-6">
            <div class="card info-card sales-card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-center">About User</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center me-3" style="background-color: #e9ecef;">
                            <i class="bi bi-person-fill" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <ul class="list-unstyled">
                                <li class="list-group-item">Username: <strong>{{ Auth::user()->name }}</strong></li>
                                @if (empty($profile->first_name))
                                    
                                @else
                                <li class="list-group-item">Company: <strong>{{ $profile->first_name }}</strong></li>
                                @endif
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card info-card sales-card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Tanggal Hari Ini</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center me-3" style="background-color: #ffff;">
                            <i class="bi bi-calendar" style="font-size: 1.5rem;"></i>
                        </div>
                        <div class="ps-3">
                            <h6 id="current-date">...</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section dashboard">
    <div class="row">
        <div class="col-md-12">
            <div class="card info-card customers-card ">
                <div class="card-body">
                    <h5 class="card-title">Category</h5>

                    <div class="d-flex align-items-center ">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-diagram-2"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{$category}} Type</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section dashboard">
    <div class="row">
        <div class="col-md-6">
            <div class="card info-card  revenue-card">
                <div class="card-body">
                    <h5 class="card-title">Surat Masuk</h5>

                    <div class="d-flex align-items-center ">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-arrow-down"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{$suratMasuk}} Surat</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card info-card customers-card ">
                <div class="card-body">
                    <h5 class="card-title">Surat Keluar</h5>

                    <div class="d-flex align-items-center ">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-arrow-up"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{$suratKeluar}} Surat</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function getCurrentDate() {
        const now = new Date();
        const day = now.getDate().toString().padStart(2, '0');
        const month = (now.getMonth() + 1).toString().padStart(2, '0'); // Januari = 0
        const year = now.getFullYear();
        return `${day}/${month}/${year}`; // Format tanggal DD/MM/YYYY
    }

    document.getElementById('current-date').textContent = getCurrentDate(); // Menampilkan tanggal
</script>

@endsection