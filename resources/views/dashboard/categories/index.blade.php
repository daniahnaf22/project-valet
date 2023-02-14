@extends('dashboard.layouts.main')

@section('admin')
    <div class="table-responsive-lg">
        <table class="table table-stripped hover-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr class="">
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>Action</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
