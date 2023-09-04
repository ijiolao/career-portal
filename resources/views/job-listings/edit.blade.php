<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Job Listing') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl mx-auto">
                <p class="text-gray-800 uppercase text-sm">Fill all the required fields</p>

                <form method="post" action="{{ route('update') }}" class="mt-6 space-y-6">
                    @csrf
                   
            
                    <div>
                        <x-input-label for="title" :value="__('Job Title')" />
                        <x-text-input id="title" name="title" value="{{$listing->title}}" type="text" class="mt-1 block w-full" autocomplete="title" />
                        <x-input-error :messages="$errors->updatePassword->get('title')" class="mt-2" />
                    </div>
            
                    <div>
                        <x-input-label for="description" :value="__('Desciption')" />
                        <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" autocomplete="description">
                            {{$listing->description}}
                        </textarea>
                        <x-input-error :messages="$errors->updatePassword->get('description')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="requirements" :value="__('Requirements')" />
                        <textarea id="requirements" name="requirements" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" autocomplete="requirements">
                            {{$listing->requirements}}
                        </textarea>
                        <x-input-error :messages="$errors->updatePassword->get('requirements')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="location" :value="__('Job Location')" />
                        <x-text-input id="location" name="location" value="{{$listing->location}}" type="text" class="mt-1 block w-full" autocomplete="title" />
                        <x-input-error :messages="$errors->updatePassword->get('location')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="salary" :value="__('Salary')" />
                        <x-text-input id="salary" name="salary" value="{{$listing->salary}}" type="text" class="mt-1 block w-full" autocomplete="title" />
                        <x-input-error :messages="$errors->updatePassword->get('salary')" class="mt-2" />
                    </div>

                    <x-input-label for="deadline" :value="__('Deadline')" />
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                          </svg>
                        </div>
                        <input datepicker type="text" value="{{$date}}" name="deadline" class="pr-10 -mt-3 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" placeholder="   Select date">
                    </div>
                    
                    <x-input-label for="type" :value="__('Type')" />
                    <select id="type" name="type" class="py-2 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" autocomplete="requirements">
                        <option value="remote">Remote</option>
                        <option value="hybrid">Hybrid</option>
                        <option value="office">Office</option>
                    </select>
                    <x-input-label for="schedule" :value="__('Schedule')" />
                    <select id="schedule" name="schedule" class="py-2 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" autocomplete="requirements">
                        <option value="remote">Full Time</option>
                        <option value="hybrid">Part Time</option>
                    </select>
                    <input type="hidden" name="job_id" value="{{$listing->id}}" />

                   
            
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
            
                    </div>
                </form>
    </div>
</div>
    </div>
    </div>
</x-app-layout>