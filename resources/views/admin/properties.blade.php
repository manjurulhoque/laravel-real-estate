@extends('admin.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center" style="margin-bottom: 20px">All Agents</h2>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Property Name</th>
                    <th>Image</th>
                    <th>User</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($properties as $property)
                    <tr>
                        <td>{{ $property->title }}</td>
                        <td>
                            <img height="100" width="100"
                                 src="{{ asset('/images/uploads/'. $property->get_featured_image()->location) }}"
                                 alt="">
                        </td>
                        <td>{{ $property->user->name }}</td>
                        <td>{{ $property->price }} Tk</td>
                        <td>
                            @if(!$property->pending)
                                <a href="{{ route('admin.dashboard.accept', $property->id) }}"
                                   class="btn btn-success">Accept</a>
                            @else
                                @if(!$property->is_featured)
                                    <a href="{{ route('admin.dashboard.make.featured', $property->id) }}"
                                       class="btn btn-success">Add as FEATURED</a>
                                @else
                                    <a href="{{ route('admin.dashboard.remove.featured', $property->id) }}"
                                       class="btn btn-primary">FEATURED</a>
                                @endif
                                <a href="{{ route('admin.dashboard.reject', $property->id) }}"
                                   class="btn btn-primary">Reject</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection