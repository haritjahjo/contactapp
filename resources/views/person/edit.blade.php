<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('People') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="font-semibold pb-5">Edit a Person: {{ $person->firstname}} {{$person->lastname}}</h3>
                    <form action="{{ route('person.update', $person->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-6">
                            <span class="sm:col-span-3">
                                <label class="block" for="firstname">First Name</label>
                                <input class="block w-full" type="text" id="firstname" name="firstname"
                                    value="{{ old('firstname', $person->firstname)  }}">
                            </span>
                            <span class="sm:col-span-3">
                                <label class="block" for="lastname">Last Name</label>
                                <input class="block w-full" type="text" id="lastname" name="lastname"
                                    value="{{ old('lastname', $person->lastname) }}">
                            </span>
                            <span class="sm:col-span-3">
                                <label class="block" for="email">Email</label>
                                <input class="block w-full" type="email" id="email" name="email"
                                    value="{{ old('email', $person->email) }}">
                            </span>
                            <span class="sm:col-span-3">
                                <label class="block" for="phone">Phone</label>
                                <input class="block w-full" type="text" id="phone" name="phone"
                                    value="{{ old('phone', $person->phone) }}">
                            </span>                        
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="{{ route('person.index')}}">Cancel</a>
                            <button class="bg-blue-600 text-white py-2 px-3 rounded-lg" type="submit">Update</button>
                        </div>

                    </form>
                    <form action="{{route('person.destroy', $person->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="bg-red-600 text-white border mt-6 p-6">
                            <h3>Danger Zone</h3>
                            <p>You can delete person from here</p>
                            <button class="bg-white text-red-600 py-3 px-2 rounded-lg">Delete</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
