<x-layout>
    <x-slot:pageHeading>
        Job Page
    </x-slot:pageHeading>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>
    <div>
        @foreach ($jobs as $job)
            <a href="/job/{{ $job['id'] }}" class="text-blue-500 block px-4 py-2 border rounded-lg">
                <div class="text-bold text-blud-500 text-sm">
                    {{ $job->employer->name }}
                </div>
                <div class="hover:underline">
                    <strong>{{ $job['title'] }} : </strong> pay {{ $job['salary'] }}
                </div>
            </a> <br>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>