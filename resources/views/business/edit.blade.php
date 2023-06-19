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

                    <h3 class="font-semibold pb-5">Edit a Business: {{ $business->business_name}}</h3>
                    <form action="{{ route('business.update', $business->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-6">
                            <span class="sm:col-span-3">
                                <label class="block" for="business_name">Company Name</label>
                                <input class="block w-full" type="text" id="business_name" name="business_name"
                                    value="{{ old('business_name', $business->business_name)  }}">
                            </span>
                            <span class="sm:col-span-3">
                                <label class="block" for="contact_email">Contact Email</label>
                                <input class="block w-full" type="email" id="contact_email" name="contact_email"
                                    value="{{ old('contact_email', $business->contact_email) }}">
                            </span>
                                          
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="{{ route('person.index')}}">Cancel</a>
                            <button class="bg-blue-600 text-white py-2 px-3 rounded-lg" type="submit">Update</button>
                        </div>

                    </form>
                    <form action="{{route('business.destroy', $business->id)}}" method="post">
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
