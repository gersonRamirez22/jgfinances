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
        <div class="flex justify-around  w-full h-[100vh]" >
            <div class= "w-[50%] gap-7 flex flex-col p-10">

                <div>
                <img src="{{URL::asset('images/Logo.svg')}}" alt="logo">
                </div>

                <div class="flex flex-col gap-2 ">
                    <h1 class="font-sans text-3xl">Login to you account</h1>
                    <p class="font-sans text-base text-gray-500">Please enter your details to acess your account.</p>
                </div>
                
                
                <form class="flex flex-col gap-2">
                    <label class="text-lg" for="">Email</label>
                    <input class="rounded-md p-2 border-solid border-[#D0D0D0] border shadow-md" type="email"  placeholder="name@company.com">
                    
                    <label class="text-lg" for="password">Password</label>
                    <input class="rounded-md p-2 border-solid border-[#D0D0D0] border shadow-md" type="password" placeholder="****************">
                </form>

                    <div class="flex justify-between">

                        <div> 
                            <input  class="border-white sol border-solid" type="checkbox" name="" id="" value=>
                            <label class="text-gray-400  text-base " for="">Remember me</label>
                        </div>
    
                       <p class="text-purple-600 text-base">Forgot you password</p>
                    </div>
                    
                <button class=" p-4 rounded-md bg-purple-700 text-xl text-white " type="submit">Sign In</button>
                <div>
                   <p>Not a member? <a class="text-purple-600" href="auth/loginRegistre">Sign up now</a></p>
                </div>
                    
                

            </div>

            <div class="w-[50%] flex justify-center items-center bg-[#F8F8F8]">
                <img class="w-5/6 h-5/6 " src="{{URL::asset('images/undraw.svg')}}"alt="">
            </div>

            
        </div>
</body>
</html>