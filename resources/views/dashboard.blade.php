<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/flowbite.min.css" />
    <script src="js/flowbite.min.js"></script>
</head>
<body>
    <div class="flex h-screen bg-gray-100 border-gray-200">
        <div class="flex flex-col w-64 bg-white border-r border-gray-200">
            <div class="flex items-center justify-center h-16 bg-gray-800 text-white">
                <h1 class="text-lg font-bold">Dashboard</h1>
            </div>
            <nav class="flex flex-col p-4 space-y-2">
                <a href="#" class="text-gray-700 hover:bg-gray-100 p-2 rounded">Home</a>
                <a href="#" class="text-gray-700 hover:bg-gray-100 p-2 rounded">Profile</a>
                <a href="#" class="text-gray-700 hover:bg-gray-100 p-2 rounded">Settings</a>
                <a href="#" class="text-gray-700 hover:bg-gray-100 p-2 rounded">Logout</a>
            </nav>
        </div>

        <div class="flex-grow p-6 flex flex-col w-full">
            <h2 class="text-xl font-semibold mb-4">Welcome to the Dashboard!</h2>
            <br><br>
            <div class="bg-white rounded-md px-2 shadow-md">
                <table class="table-auto w-full text-sm text-left">
                    <thead>
                        <tr>
                            <th class="py-4 text-center">No.</th>
                            <th class="py-4">Nama</th>
                            <th class="py-4">Email</th>
                            <th class="py-4">Phone</th>
                            <th class="py-4 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $user)
                            <tr>
                                <td class="border-t border-gray-400 py-4 text-center">{{ $index + 1 }}</td>
                                <td class="border-t border-gray-400 py-4">{{ $user->name }}</td>
                                <td class="border-t border-gray-400 py-4">{{ $user->email }}</td>
                                <td class="border-t border-gray-400 py-4">{{ $user->phone }}</td>
                                <td class="border-t border-gray-400 py-4 text-center">
                                    <a href="#" class="bg-yellow-400 text-white py-2 px-4 rounded-md">Edit</a> |
                                    <a href="#" class="bg-red-400 text-white py-2 px-4 rounded-md">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    
</body>
</html>