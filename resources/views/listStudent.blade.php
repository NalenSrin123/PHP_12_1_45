<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Data Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen py-8">
    <div class="w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">Registration Data</h2>
                    <p class="text-gray-600 mt-1">Manage and view registered users</p>
                </div>
                <div>
                    <a href="">Register Student</a>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sex</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date of Birth</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">001</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">John Smith</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Male</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">john.smith@email.com</td>
                            <td class="px-6 py-4 text-sm text-gray-900 max-w-xs truncate">123 Main Street, New York, NY 10001</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1990-05-15</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">+1 (555) 123-4567</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                                <button class="text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">002</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Sarah Johnson</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-pink-100 text-pink-800">Female</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">sarah.johnson@email.com</td>
                            <td class="px-6 py-4 text-sm text-gray-900 max-w-xs truncate">456 Oak Avenue, Los Angeles, CA 90210</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1985-12-03</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">+1 (555) 987-6543</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                                <button class="text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">003</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Michael Brown</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Male</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">michael.brown@email.com</td>
                            <td class="px-6 py-4 text-sm text-gray-900 max-w-xs truncate">789 Pine Road, Chicago, IL 60601</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1992-08-22</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">+1 (555) 456-7890</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                                <button class="text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">004</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Emily Davis</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-pink-100 text-pink-800">Female</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">emily.davis@email.com</td>
                            <td class="px-6 py-4 text-sm text-gray-900 max-w-xs truncate">321 Elm Street, Miami, FL 33101</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1988-03-10</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">+1 (555) 234-5678</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                                <button class="text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">005</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">David Wilson</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Male</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">david.wilson@email.com</td>
                            <td class="px-6 py-4 text-sm text-gray-900 max-w-xs truncate">654 Maple Drive, Seattle, WA 98101</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1995-11-28</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">+1 (555) 345-6789</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</button>
                                <button class="text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
