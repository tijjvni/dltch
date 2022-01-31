<div>

    <!-- Code block starts -->
    <div class="my-6 lg:my-12 container px-6 mx-auto flex flex-row lg:flex-row items-start lg:items-center justify-between pb-4 border-b border-gray-300">
        <div class="flex-grow">
            <h4 class="text-2xl font-bold leading-tight text-gray-800 dark:text-gray-100">{{$project->title}}</h4>
            <p class="text-md leading-tight text-gray-800 dark:text-gray-100">
                <i class="fa fa-sign-in"></i> {{$project->description}}
            </p>
            <ul aria-label="current Status" class="flex flex-row items-start md:items-center text-gray-600 dark:text-gray-400 text-sm mt-3 gap-x-5">
                <li class="flex items-center mt-2 md:mt-0">
                    <strong class="inline-flex items-center p-2 space-x-2 text-sm font-medium border border-gray-200 rounded">
                        <span>For: </span>  
                        <a href="{{ route('clients.show',[client => $project->client->id]) }}">
                            <span class="font-bold"> &nbsp;&nbsp;{{$project->client->name}} </span>                            
                        </a>                    
                      </strong>
                </li>
            </ul>
        </div>
        <div class="flex-initial">
            <strong class="inline-block px-3 py-1 text-xs font-semibold text-green-600 bg-green-100 rounded-sm">
                On going
            </strong>      
        </div>
    </div>
    <!-- Code block ends -->
    

    <div class="container flex flex-col mx-auto w-full items-center justify-center">
        <div class="px-4 py-5 sm:px-6 flex w-full border dark:bg-gray-800 bg-white shadow mb-2 rounded-md">
            <div class="flex-grow">
                <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-white">
                    Issues
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">
                    All project's issues
                </p>
            </div>
            <div class="flex-initial justify-end">
            <button class="mx-2 my-2 bg-white border transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white hover:bg-gray-100 rounded text-indigo-700 px-6 py-2 text-lg"> + </button>
            </div> 
        </div>
        <div class="px-4 py-5 sm:px-6 flex flex-col divide-y divide-gray-500 w-full border dark:bg-gray-800 bg-white shadow mb-2 rounded-md">
            
            <div class="w-full flex flex-col">
                <div class="py-2 flex flex-row items-center justify-between">
                    <div class="flex flex-row items-center">
                    <a href="#" class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
                        <img class="rounded-full h-8 w-8 object-cover" src="https://images.unsplash.com/photo-1520065786657-b71a007dd8a5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" alt="">
                        <p class="ml-2 text-base font-medium">Jon Doe</p>
                    </a>
                    </div>
                    <div class="flex flex-row items-center">
                    <p class="text-xs font-semibold text-gray-500">2 hours ago</p>
                    </div>
                </div>
                <div class="py-2">
                    <p class="text-gray-500 leading-snug">Started project.</p>
                </div>                          
            </div>

            
            <div class="w-full flex flex-col">
                <div class="py-2 flex flex-row items-center justify-between">
                    <div class="flex flex-row items-center">
                    <a href="#" class="flex flex-row items-center focus:outline-none focus:shadow-outline rounded-lg">
                        <img class="rounded-full h-8 w-8 object-cover" src="https://images.unsplash.com/photo-1520065786657-b71a007dd8a5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=80" alt="">
                        <p class="ml-2 text-base font-medium">Jon Doe</p>
                    </a>
                    </div>
                    <div class="flex flex-row items-center">
                    <p class="text-xs font-semibold text-gray-500">2 hours ago</p>
                    </div>
                </div>
                <div class="py-2">
                    <p class="text-gray-500 leading-snug">Created an issue</p>
                </div>                          
            </div>

            
        </div>
    </div>
</div>
