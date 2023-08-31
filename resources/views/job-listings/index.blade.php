<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Job Listings') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <a href="/create" class="block w-32 rounded-sm ring-1 ring-green-700 bg-green-800 text-white text-center p-3">Add Listing</a>
                <div class="relative rounded-xl overflow-auto"><div class="shadow-sm my-8">
                    <div class="table border-collapse table-auto w-full text-sm">
                      <div class="table-header-group">
                        <div class="table-row">
                          <div class="table-cell border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Created By</div>
                          <div class="table-cell border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Job Title</div>
                          <div class="table-cell border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Location</div>
                          <div class="table-cell border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Salary</div>
                          <div class="table-cell border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Job Type</div>
                          <div class="table-cell border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Deadline</div>
                          <div class="table-cell border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Date Created</div>
                          <div class="table-cell border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Edit</div>

                        </div>
                      </div>
                      <div class="table-row-group bg-white dark:bg-slate-800">
                        @foreach ($listings as $listing)
                        <div class="table-row">
                            <div class="table-cell border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"></div>
                            <div class="table-cell border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{$listing->title}}</div>
                            <div class="table-cell border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$listing->location}}</div>
                            <div class="table-cell border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$listing->salary}}</div>
                            <div class="table-cell border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$listing->type}}</div>
                            <div class="table-cell border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$listing->deadline}}</div>
                            <div class="table-cell border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{$listing->created_at}}</div>
                            <div class="table-cell border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400"><a href="listings/edit/{{$listing->id}}">Edit</a></div>

                        </div>
                        @endforeach
                        
                      </div>
                    </div>
                  </div>
        </div>
    </div>
</div>
</div>
</x-app-layout>