<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Person') }} : {{ $person->firstname}} {{$person->lastname}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 sm:grid-cols-6 gap-y-6 gap-x-6">
                        <div class="sm:col-span-3">
                            <h3>Person detail</h3>
                            <dl>
                                <dt class="font-semibold">Name</dt>
                                <dd>{{ $person->firstname}} {{$person->lastname}}</dd>
                                <dt class="font-semibold">Phone</dt>
                                <dd>{{ $person->phone}}</dd>
                                <dt class="font-semibold">Email</dt>
                                <dd>{{ $person->email}}</dd>
                                
                            </dl>
                            <div class="pt-3">
                                <a href="{{route('person.edit', $person->id)}}" class="bg-blue-600 text-white py-2 px-3 rounded-full">Edit Person</a>

                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <h3 class="font-semibold pb-5 text-lg">Task</h3>
                            @foreach ($person->tasks as $task)
                                <h4 class="font-semibold">{{ $task->title}}</h4> 
                                <p>{{$task->description}}</p>
                                <p>Status: {{$task->status}}</p>
                                
                            @endforeach
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
