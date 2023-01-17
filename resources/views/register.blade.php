<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet">
    <title>Register</title>
</head>

<body>
    <div class="container-fluid w-full h-screen flex">
        <div class="container w-6/12 relative">
            <img src="{{URL::asset('/images/background.AVIF')}}" alt="background" class="h-full w-full z-10 absolute left-0 right-0 mr-auto ml-auto">
            <div class="bg-black w-full h-full z-20 absolute left-0 right-0 mr-auto ml-auto opacity-75"></div>
            <div class="w-full h-full z-30 absolute flex flex-col justify-center items-center left-0 right-0 mr-auto ml-auto px-16">
                <div class="flex items-baseline space-x-2">
                    <span class="w-32 border-b border-orange-600"></span>
                    <img src="{{URL::asset('/images/logo.svg')}}" alt="background" class="w-56">
                    <span class="w-32 border-b border-orange-600"></span>
                </div>
                <p class="text-gray-400 my-12 text-center uppercase">The sky is the limit. <br /> Reach for the stars and never give up.</p>
                <div class="container w-8/12 flex justify-between space-x-8">
                    <span class="w-6/12">
                        <a href="/">
                            <button type=" button" class="w-full px-8 py-2 text-white border border-orange-600 bg-orange-600 rounded hover:bg-orange-700">REGISTER</button>
                        </a>
                    </span>
                    <span class="w-6/12">
                        <a href="/login">
                            <button type=" button" class="w-full px-8 py-2 text-white border border-orange-600 rounded hover:text-gray-400">LOGIN</button>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <div class="container w-6/12 px-16 flex flex-col justify-center">
            <div class="w-full bg-white rounded-md p-4 relative">
                <h1 class="text-4xl text-gray-600 font-bold mb-4">Register</h1>
                @if ($errors->any())
                <div class="container bg-red-100 border border-red-400 text-red-700 p-4 my-8 rounded relative" role="alert">
                    <strong class="font-bold text-center">Whoops!</strong>
                    <span class="block sm:inline">There were some problems with your input.</span>
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="flex flex-col space-y-3">
                            <input type="text" name="name" id="name" placeholder="Full Name" class="border-b border-orange-600 outline-none w-full p-2" value="{{ old('name') }}">
                            <input type="text" name="email" id="email" placeholder="Email" class="border-b border-orange-600 outline-none w-full p-2" value="{{ old('email') }}">
                            <input type="password" name="password" id="password" placeholder="Choose a password" class="border-b border-orange-600 outline-none w-full p-2" value="{{ old('password') }}">
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" class="border-b border-orange-600 outline-none w-full p-2" value="{{ old('password_confirmation') }}">
                            <div class="flex justify-start items-center space-x-2">
                                <input type="checkbox" name="remember_token" class="h-12">
                                <label for="remember" class="text-gray-600">Remember me</label>
                            </div>
                        </div>
                        <div class="flex justify-end items-center">
                            <button type="submit" class="w-3/12 bg-orange-600 text-white hover:bg-orange-700 px-4 py-3 mt-4 rounded font-medium">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
