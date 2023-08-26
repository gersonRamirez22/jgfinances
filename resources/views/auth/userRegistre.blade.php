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
        <div class="flex justify-around h-[100vh]" >
            <div class= "w-[50%] gap-7 flex flex-col p-9">

                <div>
                <img src="{{URL::asset('images/Logo.svg')}}" alt="logo">
                </div>

                <div class="flex flex-col gap-2 ">
                    <h1 class="font-sans text-3xl">Create new account</h1>
                    <p class="font-sans text-base text-gray-500">Take control of your finances and make your dreams come true. Start for free.</p>
                </div>

                    <div class="flex"> 
                        <label class="text-sm " for="">Already A Member?</label>
                        <p class="text-purple-600 text-sm">Login in</p>
                    </div>

                   
                
                
                
                <form class="flex flex-col gap-2">
                    <label class="text-lg" for="">First Name</label>
                    <input class="rounded-md p-2 border-solid border-[#D0D0D0] border shadow-md" type="text"  placeholder="Richar">
                    
                    <label class="text-lg" for="password">Last Name</label>
                    <input class="rounded-md p-2 border-solid border-[#D0D0D0] border shadow-md" type="text" placeholder="Pied Piper">

                    <label class="text-lg" for="password">Email</label>
                    <input class="rounded-md p-2 border-solid border-[#D0D0D0] border shadow-md" type="email" placeholder="name@company.com"> 
                    
                    <label class="text-lg" for="password">Password</label>
                    <input class="rounded-md p-2 border-solid border-[#D0D0D0] border shadow-md" type="password" placeholder="****************">
                </form>
                    
                <button class=" p-3 rounded-md bg-purple-700 text-xl text-white " type="submit">Sign In</button>
            </div>

            <div class="w-[50%] flex justify-center items-center bg-[#F8F8F8]">
                <img class="w-5/6  h-5/6 " src="{{URL::asset('images/undraw.svg')}}"alt="">
            </div> 
        </div>
</body>
</html>