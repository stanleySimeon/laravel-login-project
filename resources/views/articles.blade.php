<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Success</title>
</head>

<body>
    <div class="container m-auto pt-16 space-y-12 flex flex-col justify-center items-center">
        <ul class="w-7/12 flex justify-center">
            @csrf
            @if(session()->has('user'))
            <div class="flex flex-col items-center space-y-4">
                <img src="{{ URL::asset('images/success.svg') }}" alt="articles" class="w-3/12">
                <h1 class="text-2xl text-blue-600">You have been Login successfully</h1>
                <form action="{{ route('users.destroy') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
                </form>
            </div>
            @else
            <div class="flex flex-col items-center">
                <p class="text-xl text-orange-600">You don't have access to this page, your should <a href="{{ route('users.index') }}" class="text-blue-500">Register</a>
                    or
                    <a href="{{ route('users.userLogin') }}" class="text-blue-500">Login</a>!
                </p>
            </div>
            @endif
        </ul>
    </div>
</body>

</html>
