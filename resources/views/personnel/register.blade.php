@extends('layouts.app')

@section('content')

            <div class="card col-lg-8 mx-auto">
                <div class="card-body">
                    <form action="{{ route('store.user') }}" method="POST">
                        @csrf

                        <h4>Registration Form</h4>
                        <div class="form-group mb-1 mt-3">
                            <label for="username">Username</label>
                            <input type="text" class="form-control form-control-md" name="username" placeholder="username..">
                            @error('username')
                                <small class="alert-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-1">
                            <label for="fName">First Name</label>
                            <input type="text" class="form-control form-control-md" name="fName" placeholder="firstname..">
                            @error('fName')
                                <small class="alert-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-groupm mb-2">
                            <label for="mName">Middle Name</label>
                            <input type="text" class="form-control form-control-md" name="mName" placeholder="middlename..">
                            @error('mName')
                                <small class="alert-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="lName">Last Name</label>
                            <input type="text" class="form-control form-control-md" name="lName" placeholder="lastname..">
                            @error('lName')
                                <small class="alert-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="email">Email</label>
                            <input type="email" class="form-control form-control-md" name="email" placeholder="email..">
                            @error('email')
                                <small class="alert-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control-md" name="password" placeholder="password..">
                            @error('password')
                                <small class="alert-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control form-control-md" name="confirmPassword" placeholder="password..">
                        </div>

                        <button class="btn btn-md btn-primary float-end">Register</button>
                    </form>
                </div>
            </div>


@endsection
