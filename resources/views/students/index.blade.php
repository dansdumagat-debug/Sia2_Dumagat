<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Students
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-semibold mb-6">Student List</h1>

                    @if($students->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full border border-gray-200 dark:border-gray-700">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-4 py-3 text-left">Student No.</th>
                                        <th class="px-4 py-3 text-left">First Name</th>
                                        <th class="px-4 py-3 text-left">Last Name</th>
                                        <th class="px-4 py-3 text-left">Email</th>
                                        <th class="px-4 py-3 text-left">Course</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $student)
                                        <tr class="border-t border-gray-200 dark:border-gray-700">
                                            <td class="px-4 py-3">{{ $student->student_no }}</td>
                                            <td class="px-4 py-3">{{ $student->first_name }}</td>
                                            <td class="px-4 py-3">{{ $student->last_name }}</td>
                                            <td class="px-4 py-3">{{ $student->email }}</td>
                                            <td class="px-4 py-3">{{ $student->course }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>No students available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
