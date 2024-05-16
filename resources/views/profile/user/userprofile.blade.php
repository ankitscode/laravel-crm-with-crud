@extends('layouts.layout')
@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('profile.update',$users->id) }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <input type="text" name="name" class="form-control" value="{{ $users->name }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <input type="text" name="email" class="form-control"
                        value="{{ $users->email }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <input type="text" name="phone_number" class="form-control"
                        value="{{ $users->phone_number }}">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                    <input type="submit" class="btn btn-primary px-4" value="Edit profile">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection