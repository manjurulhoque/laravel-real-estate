@extends('admin.app')

@section('content')

    <!-- Icon Cards-->
    <div class="row">
        <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-5">{{ \App\Property::all()->count() }} Properties!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.dashboard.users') }}">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">{{ \App\User::where('is_admin', '!=', auth()->user()->id)->count() }} users!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.dashboard.properties') }}">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
            </div>
        </div>
    </div>

@endsection