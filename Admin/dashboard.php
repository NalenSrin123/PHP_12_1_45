
<?php include 'sidebar.php' ?>
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-sm p-6 card-hover">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Enrolled Courses</p>
                            <p class="text-3xl font-bold text-gray-900">12</p>
                        </div>
                        <div class="p-3 bg-cyan-100 rounded-full">
                            <svg class="w-6 h-6 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="text-green-500 text-sm font-medium">+2 this month</span>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 card-hover">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Completed</p>
                            <p class="text-3xl font-bold text-gray-900">8</p>
                        </div>
                        <div class="p-3 bg-green-100 rounded-full">
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="text-green-500 text-sm font-medium">+3 this month</span>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 card-hover">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Study Hours</p>
                            <p class="text-3xl font-bold text-gray-900">156</p>
                        </div>
                        <div class="p-3 bg-purple-100 rounded-full">
                            <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="text-green-500 text-sm font-medium">+12 this week</span>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm p-6 card-hover">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Certificates</p>
                            <p class="text-3xl font-bold text-gray-900">5</p>
                        </div>
                        <div class="p-3 bg-yellow-100 rounded-full">
                            <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="text-green-500 text-sm font-medium">+1 this month</span>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Current Courses -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-xl font-heading font-semibold text-gray-800">Current Courses</h3>
                            <button class="text-cyan-600 hover:text-cyan-800 text-sm font-medium">View All</button>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-center p-4 border border-gray-200 rounded-lg hover:border-cyan-300 transition-colors">
                                <img src="/placeholder.svg?height=60&width=60" alt="Course" class="w-15 h-15 rounded-lg object-cover">
                                <div class="ml-4 flex-1">
                                    <h4 class="font-semibold text-gray-800">Advanced React Development</h4>
                                    <p class="text-sm text-gray-600">by John Smith • 24 lessons</p>
                                    <div class="mt-2">
                                        <div class="flex items-center justify-between text-sm">
                                            <span class="text-gray-600">Progress</span>
                                            <span class="font-medium text-cyan-600">75%</span>
                                        </div>
                                        <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-cyan-600 h-2 rounded-full" style="width: 75%"></div>
                                        </div>
                                    </div>
                                </div>
                                <button class="ml-4 px-4 py-2 bg-cyan-600 text-white rounded-lg hover:bg-cyan-700 transition-colors">Continue</button>
                            </div>

                            <div class="flex items-center p-4 border border-gray-200 rounded-lg hover:border-cyan-300 transition-colors">
                                <img src="/placeholder.svg?height=60&width=60" alt="Course" class="w-15 h-15 rounded-lg object-cover">
                                <div class="ml-4 flex-1">
                                    <h4 class="font-semibold text-gray-800">Python for Data Science</h4>
                                    <p class="text-sm text-gray-600">by Dr. Emily Chen • 32 lessons</p>
                                    <div class="mt-2">
                                        <div class="flex items-center justify-between text-sm">
                                            <span class="text-gray-600">Progress</span>
                                            <span class="font-medium text-cyan-600">45%</span>
                                        </div>
                                        <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-cyan-600 h-2 rounded-full" style="width: 45%"></div>
                                        </div>
                                    </div>
                                </div>
                                <button class="ml-4 px-4 py-2 bg-cyan-600 text-white rounded-lg hover:bg-cyan-700 transition-colors">Continue</button>
                            </div>

                            <div class="flex items-center p-4 border border-gray-200 rounded-lg hover:border-cyan-300 transition-colors">
                                <img src="/placeholder.svg?height=60&width=60" alt="Course" class="w-15 h-15 rounded-lg object-cover">
                                <div class="ml-4 flex-1">
                                    <h4 class="font-semibold text-gray-800">UI/UX Design Fundamentals</h4>
                                    <p class="text-sm text-gray-600">by Sarah Wilson • 18 lessons</p>
                                    <div class="mt-2">
                                        <div class="flex items-center justify-between text-sm">
                                            <span class="text-gray-600">Progress</span>
                                            <span class="font-medium text-cyan-600">90%</span>
                                        </div>
                                        <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                            <div class="bg-cyan-600 h-2 rounded-full" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>
                                <button class="ml-4 px-4 py-2 bg-cyan-600 text-white rounded-lg hover:bg-cyan-700 transition-colors">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Content -->
                <div class="space-y-6">
                    <!-- Learning Progress -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-heading font-semibold text-gray-800 mb-4">Weekly Progress</h3>
                        <div class="space-y-4">
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-600">Mon</span>
                                    <span class="font-medium">2.5h</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-cyan-600 h-2 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-600">Tue</span>
                                    <span class="font-medium">1.8h</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-cyan-600 h-2 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-600">Wed</span>
                                    <span class="font-medium">3.2h</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-cyan-600 h-2 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-600">Thu</span>
                                    <span class="font-medium">2.1h</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-cyan-600 h-2 rounded-full" style="width: 70%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm mb-1">
                                    <span class="text-gray-600">Fri</span>
                                    <span class="font-medium">1.5h</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-gray-300 h-2 rounded-full" style="width: 50%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Deadlines -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-heading font-semibold text-gray-800 mb-4">Upcoming Deadlines</h3>
                        <div class="space-y-3">
                            <div class="flex items-center p-3 bg-red-50 rounded-lg border-l-4 border-red-400">
                                <div class="flex-1">
                                    <p class="font-medium text-gray-800">React Project</p>
                                    <p class="text-sm text-gray-600">Due in 2 days</p>
                                </div>
                                <span class="text-red-600 text-sm font-medium">High</span>
                            </div>
                            <div class="flex items-center p-3 bg-yellow-50 rounded-lg border-l-4 border-yellow-400">
                                <div class="flex-1">
                                    <p class="font-medium text-gray-800">Python Quiz</p>
                                    <p class="text-sm text-gray-600">Due in 5 days</p>
                                </div>
                                <span class="text-yellow-600 text-sm font-medium">Medium</span>
                            </div>
                            <div class="flex items-center p-3 bg-green-50 rounded-lg border-l-4 border-green-400">
                                <div class="flex-1">
                                    <p class="font-medium text-gray-800">Design Portfolio</p>
                                    <p class="text-sm text-gray-600">Due in 1 week</p>
                                </div>
                                <span class="text-green-600 text-sm font-medium">Low</span>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Achievements -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h3 class="text-lg font-heading font-semibold text-gray-800 mb-4">Recent Achievements</h3>
                        <div class="space-y-3">
                            <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                                <div class="p-2 bg-purple-100 rounded-full mr-3">
                                    <svg class="w-4 h-4 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-800">JavaScript Master</p>
                                    <p class="text-sm text-gray-600">Completed advanced JS course</p>
                                </div>
                            </div>
                            <div class="flex items-center p-3 bg-cyan-50 rounded-lg">
                                <div class="p-2 bg-cyan-100 rounded-full mr-3">
                                    <svg class="w-4 h-4 text-cyan-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-gray-800">Perfect Score</p>
                                    <p class="text-sm text-gray-600">100% on HTML/CSS quiz</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>