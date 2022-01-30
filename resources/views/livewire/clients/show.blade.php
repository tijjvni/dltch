<div>

    <!-- Code block starts -->
    <div class="my-6 lg:my-12 container px-6 mx-auto flex flex-row lg:flex-row items-start lg:items-center justify-between pb-4 border-b border-gray-300">
        <div class="flex-grow">
            <h4 class="text-2xl font-bold leading-tight text-gray-800 dark:text-gray-100">{{$client->name}}</h4>
            <p class="text-md leading-tight text-gray-800 dark:text-gray-100">
                <i class="fa fa-sign-in"></i> {{$client->user->email}}
            </p>
            <ul aria-label="current Status" class="flex flex-row items-start md:items-center text-gray-600 dark:text-gray-400 text-sm mt-3 gap-x-5">
                <li class="flex items-center mt-2 md:mt-0">
                    <strong class="inline-flex items-center p-2 space-x-2 text-sm font-medium border border-gray-200 rounded">
                        <span>Status: </span>
                      
                        <span class="w-3 h-3 bg-green-600 rounded-full"></span>
                        <span class="font-medium text-green-600"> active</span>
                      </strong>
                </li>
            </ul>
        </div>
        <div class="flex-initial">
            <button class="mr-3 bg-gray-200 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out rounded hover:bg-gray-300 text-indigo-700 dark:hover:bg-gray-600 dark:text-indigo-600 px-5 py-2 text-sm">Update</button>
        </div>
    </div>
    <!-- Code block ends -->

    <div class="container flex flex-col mx-auto w-full items-center justify-center">
        <div class="px-4 py-5 sm:px-6 flex w-full border dark:bg-gray-800 bg-white shadow mb-2 rounded-md">
            <div class="flex-grow">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                    Projects
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">
                    All projects
                </p>
            </div>
            <div class="flex-initial justify-end">
                <a href="/projects/create?c={{$client->id}}">
                    <button class="ransition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">New project</button>
                </a>
            </div> 
        </div>
        <ul class="w-full flex flex-col">
            @forelse ($client->projects as $project)
                <a href="{{ route('projects.show', ['project' => $project->id]) }}">
                    <li class="border-gray-400 flex flex-row mb-2">
                        <div class="shadow border select-none cursor-pointer bg-white dark:bg-gray-800 rounded-md flex flex-1 items-center p-4">
                            <div class="flex-1 pl-1 md:mr-16">
                                <div class="font-medium dark:text-white">
                                    {{ $project->title }}
                                </div>
                                <div class="text-gray-600 dark:text-gray-200 text-xs">
                                    {{ $project->description }}
                                </div>
                            </div>
                            <div class="text-gray-600 dark:text-gray-200 text-xs">
                                {{ $project->status }}
                            </div>
                            <button class="text-right flex justify-end">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                    </li>            
                </a>
            @empty                    

                <div class="my-5 max-w-xl mx-auto text-center">
                    <h2 class="text-xl font-bold sm:text-3xl">
                        No Project
                    </h2>
                
                    <p class="text-sm mx-auto mt-4 text-gray-500">
                        No project yet
                    </p>
                
                    <a
                    href="{{ route('projects.create')}}"
                    class="flex items-center justify-between px-5 py-3 mt-8 text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-600 group"
                    >
                    <span class="text-lg font-medium group-hover:text-white">
                        Create First Project 
                        <i class="fa fa-chevron-right"></i>
                    </span>
                    </a>
                </div>

            @endforelse
            
        </ul>
    </div>


</div>
