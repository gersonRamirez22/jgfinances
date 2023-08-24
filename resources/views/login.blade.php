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
        <div class="flex justify-around">
            <div class= "border-red-600 border border-solid w-1/2 gap-10 flex flex-col">

                <div>
                <img src="{{URL::asset('images/Logo.png')}}" alt="logo">
                </div>

                <div class="flex flex-col gap-2 ">
                    <h1 class="font-sans text-3xl">Login to you account</h1>
                    <p class="font-sans text-base text-gray-500">Please enter your details to acess your account.</p>
                </div>
                
                
                <form class="flex flex-col gap-2">
                    <label for="">Email</label>
                    <input class="" type="email"  placeholder="name@company.com">
                    
                    <label for="password">Password</label>
                    <input type="password" placeholder="****************">
                </form>

                    <div class="flex justify-between">
                       <p>Remember me</p>
                       <p>Forgot you password</p>
                    </div>
                    
                    <button type="submit">Sing In</button>
                   <p>Not a menber?</p>
                   <p>Sing up now</p>  
                

            </div>

            <div class=" flex flex-col w-1/2 pt-141 pb-93.825 bg-gray-50 ">
                <img src="{{URL::asset('images/image.png')}}"alt="">
            </div>

            
        </div>
</body>
</html>