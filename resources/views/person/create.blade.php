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

                    <h3 class="font-semibold pb-5">Add New Person</h3>
                    <form action="{{ route('person.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-6 gap-x-6 gap-y-6">
                            <span class="sm:col-span-3">
                                <label class="block" for="firstname">First Name</label>
                                <input class="block w-full" type="text" id="firstname" name="firstname"
                                    value="{{ old('firstname') }}">
                            </span>
                            <span class="sm:col-span-3">
                                <label class="block" for="lastname">Last Name</label>
                                <input class="block w-full" type="text" id="lastname" name="lastname"
                                    value="{{ old('lastname') }}">
                            </span>
                            <span class="sm:col-span-3">
                                <label class="block" for="email">Email</label>
                                <input class="block w-full" type="email" id="email" name="email"
                                    value="{{ old('email') }}">
                            </span>
                            <span class="sm:col-span-3">
                                <label class="block" for="phone">Phone</label>
                                <input class="block w-full" type="text" id="phone" name="phone"
                                    value="{{ old('phone') }}">
                            </span>
                            <span class="sm:col-span-3">
                                <label for="businesses"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your
                                    business</label>
                                <select id="business_id" name="business_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="" selected>(No Business)</option>
                                    @foreach ($businesses as $business)
                                        <option value="{{ $business->id}}" @selected($business->id == old('business_id'))>
                                            {{ $business->business_name}}</option>
                                    @endforeach
                                    
                                    
                                </select>
                            </span>


                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <a href="{{ route('person.index') }}">Cancel</a>
                            <button class="bg-blue-600 text-white py-2 px-3 rounded-lg" type="submit">Save</button>
                        </div>

                    </form>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
