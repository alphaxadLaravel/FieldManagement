@section('title', 'Login - Field Management System')
@extends('layouts.outside')

@section('outside')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">

        <div class="card">
            <div class="card-body">
            
            <h4 class="mb-4 fw-bolder text-center">Sign in </h4>
            <p class="mb-4 text-center">Please provide your valid login credentials</p>

            <form id="formAuthentication" class="mb-3" action="/dashboard" method="GET">
                <div class="mb-3">
                <label for="email" class="form-label">Email or Username or Reg Number</label>
                <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email-username"
                    placeholder="Enter your email or username or reg number"
                    autofocus
                />
                </div>
                <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="/forgot">
                    <small>Forgot Password?</small>
                    </a>
                </div>
                <div class="input-group input-group-merge">
                    <input
                    type="password"
                    id="password"
                    class="form-control"
                    name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password"
                    />
                    <!-- <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span> -->
                </div>
                </div>
                <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
                </div>
                <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
            </form>

            <p class="text-center">
                <span>New on our platform?</span>
                <a href="/register">
                <span>Create an account</span>
                </a>
            </p>
            </div>
        </div>
        <!-- /Register -->
        </div>
    </div>
</div>
@endsection