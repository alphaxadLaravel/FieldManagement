@section('title', 'Register - Field Management System')

@extends('layouts.outside')

@section('outside')
   
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register Card -->
        <div class="card">
          <div class="card-body">
            <h4 class="mb-4 fw-bolder text-center">Register Company 🚀</h4>
            @livewire('register')
            <p class="text-center">
              <span>Already have an account?</span>
              <a href="/">
              <span>Sign in instead</span>
              </a>
          </p>
          </div>
        </div>
        <!-- Register Card -->
      </div>
    </div>
  </div>
@endsection