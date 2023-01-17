<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Login</title>
</head>

<body>
    <div class="container w-5/12 h-5/6 m-auto mt-32 py-4 px-2 bg-[#f4f5fd] shadow-md">
        <h1 class="">Login</h1>
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
        <div class="card">
            <div class="card-body">
                <form action="{{ route('users.userLogin') }}" method="POST">
                    @csrf
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
