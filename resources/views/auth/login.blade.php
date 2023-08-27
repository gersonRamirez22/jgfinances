<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body>
    <div class="grid items-center md:grid-cols-2 h-[100vh]">
        <div class="p-10">
            <div class="pb-10">
                <x-logo />
            </div>
            <div class="space-y-2">
                <h1 class="font-sans text-3xl">Login to you account</h1>
                <p class="font-sans text-base text-gray-500">Please enter your details to acess your account.</p>
            </div>
            <div>
                <x-LoginForm />
            </div>
            <x-Button />
            <div>
                <p>Not a member? <a class="text-purple-600" href="auth/loginRegistre">Sign up now</a></p>
            </div>
        </div>

        <div class="grid bg-[#F8F8F8] justify-center items-center h-full">
            <img class="w-full" src="{{URL::asset('images/undraw.svg')}}" alt="banner">
        </div>
    </div>
</body>

</html>