<x-layout>
    <x-slot:pageHeading>
        Job Page
    </x-slot:pageHeading>
    <x-slot:heading>
        Job Details
    </x-slot:heading>
    <h2><strong>Job Name: </strong>{{ $job['title'] }}</h2>
    <h4><strong>Job Salary: </strong>{{ $job['salary'] }}</h4>
</x-layout>