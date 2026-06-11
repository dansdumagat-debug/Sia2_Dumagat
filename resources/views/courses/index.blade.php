<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Courses
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-semibold mb-6">Course List</h1>

                    @if($courses->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full border border-gray-200 dark:border-gray-700">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-4 py-3 text-left">Course Code</th>
                                        <th class="px-4 py-3 text-left">Course Name</th>
                                        <th class="px-4 py-3 text-left">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courses as $course)
                                        <tr class="border-t border-gray-200 dark:border-gray-700">
                                            <td class="px-4 py-3">{{ $course->course_code }}</td>
                                            <td class="px-4 py-3">{{ $course->course_name }}</td>
                                            <td class="px-4 py-3">{{ $course->description ?? 'No description' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>No courses available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
