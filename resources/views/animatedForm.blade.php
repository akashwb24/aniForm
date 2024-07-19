<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>User Registration Animated From</title>
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">
    <div class="w-full max-w-md p-8 bg-gray-800 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-white text-center mb-6">USER REGISTRATION FORM</h2>
        <form action="processdata" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-300 text-sm mb-2">Your Name</label>
                <input type="text" id="name" name="name"
                    class="w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:border-blue-500"
                    placeholder="Your Name">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-300 text-sm mb-2">Your Email</label>
                <input type="email" id="email" name="email"
                    class="w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:border-blue-500"
                    placeholder="Your Email">
            </div>
            <div class="mb-4">
                <label for="mobile" class="block text-gray-300 text-sm mb-2">Your Mobile</label>
                <input type="text" id="mobile" name="mobile"
                    class="w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:border-blue-500"
                    placeholder="Your Mobile">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-300 text-sm mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:border-blue-500"
                    placeholder="Password">
            </div>
            <div>
                <button type="submit"
                    class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:bg-blue-700">REGISTER</button>
            </div>
            @if (Session('success'))
            <div class="mt-4 text-center">
              <a href="#" class="text-green-500 hover:text-green-400">{{Session::get('success')}}</a>
          </div>
            @else
            <div class="mt-4 text-center">
              <a href="#" class="text-green-500 hover:text-green-400">Already Registered? Login now</a>
          </div>
            @endif
        </form>
    </div>
</body>
</html>