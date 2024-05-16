@extends('layouts.layout')
@section('content')
    <div class="card cb">
        <div class="card header  cb">
            <div class="d-flex justify-content-between my-3">
                <div class="h2">Update</div>
                <a href="" class="btn btn-primary btn-lg">Back</a>
            </div>
            <div class="card body cb">
                <form action="{{ route('profile.update', $users->id) }}" method="POST">
                    @csrf
                    <div class="py-3">
                        <label for="" class="from-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $users->name }}">
                    </div>
                    <div class="py-3">
                        <label for="" class="from-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $users->email }}">
                    </div>
                    <div class="py-3">
                        <label for="phone_number" class="from-label">Phone Number</label>
                        <input type="number" class="form-control" name="phone_number"value="{{ $users->phone_number }}">
                        <button type="submit" class="btn btn-info my-2">Submit changes</button>
                </form>
            </div>
        </div>
    </div>
@endsection
