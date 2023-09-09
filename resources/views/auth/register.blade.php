<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @vite('resources/css/app.css')
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="grid items-center md:grid-cols-2 h-[100vh]">
        <div class="p-10">
            <div class="-mt-px">
                <x-logo />
            </div>
            <div class="mt-2">
                <h1 class="font-sans text-3xl">Create Account</h1>
                <p class="font-sans text-base text-gray-500">take control of your finances and make your dreams come true. Start for free</p>
            </div>
            <div class="mt-8">
                <p>Already a member? <a href="#" class=" font-medium text-[#754EFF]">Log in</a></p>
            </div>
            <div>
                <x-RegisterForm />
            </div>
            <x-button buttonTitle="Sign Up" />
        </div>
        <x-bannerImage />
    </div>
</body>

</html>