@extends('admin.include.parent')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-4 text-center">
                <div class="row">
                    <div class="col-md-4">
                        @if (empty($profile->image))
                        <img src="https://ui-avatars.com/api/background=012970&color=fff?name={{ Auth::user()->name }}" alt="" class="img-fluid w-100 rounded-circle">
                        @else
                        <img src="{{ $profile->image }}" alt="pp" class="img-fluid w-100 rounded-circle">
                        @endif

                    </div>
                    <div class="col-md-8 align-self-center">
                        <h3 class="fw-semibold">Profile</h3>
                        <hr>    
                        <div class="text-left">
                            <p><strong>Username :</strong> <strong>{{ Auth::user()->name }}</strong></p>
                        
                            @if (empty($profile->first_name))
                            <p><strong>Company: <strong>Not Set Yet!</strong></p>
                                    @else
                                    <p><strong>Company: <strong>{{$profile->first_name}}</strong></p>
                                    @endif
                           
                           
                            <p><strong>E-Mail :</strong> {{ Auth::user()->email }}</p>
                        </div>
                        <div class="d-flex justify-content-end">
                        @if (empty($profile->image))
                        <a href="{{route('createprofile')}}" class="btn btn-outline-primary ">
                                <i class="bi bi-arrow-up-circle w-2"></i> Create Profile
                            </a>
                        @else
                        <a href="{{route('editProfile')}}" class="btn btn-outline-success ">
                                <i class="bi bi-arrow-up-circle w-2"></i> Edit Profile
                            </a>
                        @endif
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div @endsection