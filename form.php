<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form class="bg-white p-8 rounded-lg shadow-md w-96" action="crud.php" method="post">
        <h2 class="text-2xl font-bold mb-6 text-center">Student Form</h2>

        <div class="mb-4">
            <label for="student-id" class="block text-sm font-medium text-gray-700">Student ID</label>
            <input type="text" id="student-id" name="student_id"  class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="student-name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="student-name" name="student_name"  class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="student-class" class="block text-sm font-medium text-gray-700">Class</label>
            <input type="text" id="student-class" name="student_class"  class="mt-1 p-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:ring-blue-500">
        </div>

        <button type="submit" name="insert" class="w-16 bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            Save
        </button>

        <button type="submit" name="update" class="w-16 bg-yellow-500 text-white font-semibold py-2 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            Edit
        </button>
    </form>
</body>
</html>
