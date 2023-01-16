<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/app.css">
    <title>Register</title>
</head>

<body>
    <div class="container w-5/12 h-5/6 m-auto mt-32 py-4 px-2 bg-[#f4f5fd] shadow-md">
        <h1 class="">Register</h1>
        <div class="card">
            @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-4 rounded relative" role="alert">
                <strong class="font-bold">Whoops!</strong>
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
                    <div class="mb-4">
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('name') }}">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('email') }}">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                    </div>
                    <div class="flex justify-center items-start">
                        <input type="checkbox" name="remember_token" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
