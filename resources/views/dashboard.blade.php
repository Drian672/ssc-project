<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - SSC Project Management Tool</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-[#1e3a8a] text-white fixed h-full">
            <!-- Yellow Header -->
            <div class="bg-yellow-300 h-16 p-4">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('images/mama-merry.png') }}" alt="Mama Mary" class="h-12">
                    <img src="{{ asset('images/ssc-logo.png') }}" alt="SSC Logo" class="h-8">
                </div>
            </div>
            <nav class="mt-8">
                <a href="{{ route('dashboard') }}" class="flex items-center px-6 py-3 text-white hover:bg-blue-700">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    HOME
                </a>
                <a href="{{ route('projects.index') }}" class="flex items-center px-6 py-3 text-white hover:bg-blue-700">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    PROJECT
                </a>
                <a href="{{ route('tasks.index') }}" class="flex items-center px-6 py-3 text-white hover:bg-blue-700">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    TASK
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-blue-700">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                    LEADERBOARD
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-blue-700">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    REPORT
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-blue-700">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    USER
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-white hover:bg-blue-700">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                    </svg>
                    DISCUSSION BOARD
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 ml-64">
            <!-- Top Navigation -->
            <div class="bg-yellow-300 h-16 p-4 fixed w-[calc(100%-16rem)] z-10">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold">SSC PROJECT MANAGEMENT TOOL</h1>
                    <div class="flex items-center space-x-4">
                        <!-- Notification Button -->
                        <div class="relative">
                            <button id="notificationButton" class="text-gray-800 hover:text-gray-600 focus:outline-none">
                                <div class="relative">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                    </svg>
                                    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                                </div>
                            </button>

                            <!-- Notification Dropdown -->
                            <div id="notificationMenu" class="hidden absolute right-0 mt-2 w-80 bg-white rounded-md shadow-lg py-1 z-50">
                                <div class="px-4 py-2 border-b border-gray-200">
                                    <h3 class="text-sm font-semibold">Notifications</h3>
                                </div>
                                <div class="max-h-64 overflow-y-auto">
                                    <!-- Sample notifications -->
                                    <a href="#" class="block px-4 py-3 hover:bg-gray-100 transition duration-150 ease-in-out">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm text-gray-700">New task assigned to you</p>
                                                <p class="text-xs text-gray-500">2 minutes ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Add more notification items as needed -->
                                </div>
                                <div class="px-4 py-2 border-t border-gray-200">
                                    <a href="#" class="text-sm text-blue-600 hover:text-blue-800">View all notifications</a>
                                </div>
                            </div>
                        </div>

                        <!-- Administrator Dropdown (existing code) -->
                        <div class="relative">
                            <button id="adminDropdown" class="flex items-center space-x-2 focus:outline-none">
                                <span class="font-semibold">Administrator</span>
                                <svg class="w-4 h-4 transition-transform" id="adminArrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            
                            <!-- Dropdown Menu -->
                            <div id="adminMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                                <a href="#profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <svg class="inline-block w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    Profile
                                </a>
                                <a href="#settings" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <svg class="inline-block w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    Settings
                                </a>
                                <hr class="my-1 border-gray-200">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                        <svg class="inline-block w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="p-6 mt-20">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold">HOME</h2>
                    <p class="text-lg">Welcome Administrator!</p>
                </div>

                <!-- Stats Bar -->
                <div class="bg-[#1e3a8a] text-white rounded-lg p-6 mb-6">
                    <div class="flex justify-between items-center">
                        <select class="bg-transparent border-none">
                            <option>Weekly</option>
                            <option>Monthly</option>
                            <option>Yearly</option>
                        </select>
                        <div class="flex space-x-16">
                            <div class="text-center">
                                <div class="text-4xl font-bold">0</div>
                                <div>Total Tasks</div>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold">0</div>
                                <div>Total Projects</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Table and Ranking -->
                <div class="grid grid-cols-12 gap-6">
                    <!-- Project Table -->
                    <div class="col-span-8 bg-white rounded-lg shadow">
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="text-2xl font-bold">Projects Overview</h3>
                                <a href="{{ route('projects.index') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                    View
                                </a>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full whitespace-nowrap">
                                    <thead>
                                        <tr class="bg-[#1e3a8a] text-white">
                                            <th class="px-6 py-4 text-center">#</th>
                                            <th class="px-6 py-4 text-left">Project</th>
                                            <th class="px-6 py-4 text-center">Number of Task</th>
                                            <th class="px-6 py-4 text-center">Status</th>
                                            <th class="px-6 py-4 text-center">Start Date</th>
                                            <th class="px-6 py-4 text-center">End Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        @forelse($projects as $project)
                                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                                <td class="px-6 py-4 text-center">{{ $project->id }}</td>
                                                <td class="px-6 py-4 font-medium">{{ $project->name }}</td>
                                                <td class="px-6 py-4 text-center">{{ $project->task_count }}</td>
                                                <td class="px-6 py-4">
                                                    <span class="inline-flex items-center justify-center px-3 py-1 text-sm font-medium rounded-full 
                                                        @if($project->status === 'todo') bg-gray-100 text-gray-800
                                                        @elseif($project->status === 'in_progress') bg-yellow-100 text-yellow-800
                                                        @elseif($project->status === 'completed') bg-green-100 text-green-800
                                                        @else bg-red-100 text-red-800
                                                        @endif">
                                                        {{ ucfirst(str_replace('_', ' ', $project->status)) }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 text-center">{{ $project->start_date->format('M d, Y') }}</td>
                                                <td class="px-6 py-4 text-center">{{ $project->end_date->format('M d, Y') }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="px-6 py-4 text-center text-gray-500">No projects found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Ranking -->
                    <div class="col-span-4 bg-white rounded-lg shadow">
                        <div class="p-4">
                            <h3 class="text-lg font-bold mb-4">Rankings</h3>
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                        <tr class="bg-[#1e3a8a] text-white">
                                            <th class="px-3 py-2 text-center">Rank</th>
                                            <th class="px-3 py-2 text-left">Name</th>
                                            <th class="px-3 py-2 text-center">Stars</th>
                                            <th class="px-3 py-2 text-center">Tasks</th>
                                            <th class="px-3 py-2 text-center">Projects</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-100">
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-3 py-2 text-center font-medium">1</td>
                                            <td class="px-3 py-2 text-left">Angelene S. Aquino</td>
                                            <td class="px-3 py-2 text-center">
                                                <span class="text-yellow-500">★</span> 15
                                            </td>
                                            <td class="px-3 py-2 text-center">3</td>
                                            <td class="px-3 py-2 text-center">1</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-3 py-2 text-center font-medium">2</td>
                                            <td class="px-3 py-2 text-left">Billy S. Ramirez</td>
                                            <td class="px-3 py-2 text-center">
                                                <span class="text-yellow-500">★</span> 10
                                            </td>
                                            <td class="px-3 py-2 text-center">2</td>
                                            <td class="px-3 py-2 text-center">1</td>
                                        </tr>
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-3 py-2 text-center font-medium">3</td>
                                            <td class="px-3 py-2 text-left">Dionabel T. De Guzman</td>
                                            <td class="px-3 py-2 text-center">
                                                <span class="text-yellow-500">★</span> 5
                                            </td>
                                            <td class="px-3 py-2 text-center">1</td>
                                            <td class="px-3 py-2 text-center">1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Administrator dropdown functionality
        const adminDropdown = document.getElementById('adminDropdown');
        const adminMenu = document.getElementById('adminMenu');
        const adminArrow = document.getElementById('adminArrow');
        
        function toggleDropdown() {
            adminMenu.classList.toggle('hidden');
            adminArrow.classList.toggle('rotate-180');
        }
        
        // Toggle dropdown on button click
        adminDropdown.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleDropdown();
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!adminDropdown.contains(e.target)) {
                adminMenu.classList.add('hidden');
                adminArrow.classList.remove('rotate-180');
            }
        });
        
        // Close dropdown when pressing escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                adminMenu.classList.add('hidden');
                adminArrow.classList.remove('rotate-180');
            }
        });

        // Notification dropdown functionality
        const notificationButton = document.getElementById('notificationButton');
        const notificationMenu = document.getElementById('notificationMenu');

        function toggleNotifications() {
            notificationMenu.classList.toggle('hidden');
        }

        // Toggle notifications on button click
        notificationButton.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleNotifications();
            // Close admin menu when opening notifications
            adminMenu.classList.add('hidden');
            adminArrow.classList.remove('rotate-180');
        });

        // Close notification menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!notificationButton.contains(e.target)) {
                notificationMenu.classList.add('hidden');
            }
        });

        // Close notification menu when pressing escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                notificationMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>