<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ここは何かページの名前') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- {{ __("入ったぜ！") }} -->

                    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="teststyles.css">
</head>
<body>
    <header>
        <h1>Employee Management System</h1>
    </header>
    
    <main>
        <section class="employee-list">
            <h2>Employee List</h2>
            <ul id="employee-list">
                <!-- Employee items will be appended here -->
            </ul>
            <button id="add-employee-btn">Add Employee</button>
        </section>
        
        <section class="employee-details">
            <h2>Employee Details</h2>
            <form id="employee-form">
                <label for="employee-name">Name:</label>
                <input type="text" id="employee-name" name="name" required>
                
                <label for="employee-role">Role:</label>
                <input type="text" id="employee-role" name="role" required>
                
                <label for="employee-department">Department:</label>
                <input type="text" id="employee-department" name="department" required>
                
                <button type="submit">Save</button>
            </form>
        </section>
    </main>
    
    <script src="./script.js"></script>
</body>
</html>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
