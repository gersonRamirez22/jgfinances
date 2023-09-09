@extends('layouts.layout')
@section('title', 'JGFinances - Login')
@section('content')
  <div class="grid h-[100vh] items-center md:grid-cols-2">
    <div class="p-10">
      <div class="pb-10">
        <x-logo />
      </div>
      <div class="pt-2">
        <h1 class="font-sans text-3xl">Login to your account</h1>
        <p class="font-sans text-base text-gray-500">Please enter your details to acess your account.</p>
      </div>
      <div>
        <x-LoginForm />
      </div>
      <x-button buttonTitle="Sign In" />
      <div>
        <p>Not a member? <a class="text-purple-600" href="auth/loginRegistre">Sign up now</a></p>
      </div>
    </div>
    <x-bannerImage />
  </div>
@endSection
