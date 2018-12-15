@extends('admin.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center" style="margin-bottom: 20px">All Agents</h2>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Facebook</th>
                    <th>Total property</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->profile->phone ? $user->profile->phone : "Not Available" }}</td>
                        <td>{{ $user->profile->facebook ? $user->profile->facebook : "Not Available" }}</td>
                        <td>{{ count($user->properties) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection