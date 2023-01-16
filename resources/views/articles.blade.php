<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Articles</title>
</head>

<body>
    <div class="container m-auto pt-16 space-y-12 flex flex-col justify-center items-center">
        <h1 class="text-2xl text-blue-600">Articles</h1>
        <ul class="w-7/12 flex justify-center">
            @csrf
            @if(session())
            @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session()->get('success') }}</span>
            </div>
            @endif
            <!-- Destroy user session -->
            <form action="{{ route('users.destroy') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
            </form>
            @foreach ($articles as $article)
            <li class="w-full shadow-md p-4 bg-[#fafafa]">
                <h2 class="text-xl font-bold text-gray-600 mb-4">{{ $article->title }}</h2>
                <div class="w-full flex space-x-4">
                    <img src="{{ $article->image }}" alt="apple watch" class="w-6/12">
                    <p class="text-gray-500">{{ $article->description }}</p>
                </div>
            </li>
            @endforeach
            @endif
        </ul>
    </div>
</body>

</html>
