<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2>
        {{ $job->title }}
    </h2>

    <p>
        This job pays {{ $job->salary }} per year.
    </p>
@can('edit',$job)
    <p class="mt-6">
       <x-button href="/jobs/{{$job->id}}/edit">Edit</x-button>
       <button form="delete-form" class="text-white bg-red-500 hover:bg-red-600 text-sm font-bold border border-red-500 rounded-md py-2 px-4 transition ease-in-out duration-150 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 active:bg-red-700">
        Delete
      </button>
    </p>
@endcan
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
      </form>
</x-layout>