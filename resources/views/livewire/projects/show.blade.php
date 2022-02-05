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
                        <a href="{{ route('clients.show',['client' => $project->client->id]) }}">
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
           
        <!-- modal div -->
        <div class="mt-6" x-data="{ open: false }">
            <!-- Button (blue), duh! -->
            <button class="px-4 py-2 text-white bg-blue-500 rounded select-none no-outline focus:shadow-outline" @click="open = true">Open Modal</button>
            <!-- Dialog (full screen) -->
            <div class="absolute top-0 left-0 flex items-center justify-center w-full min-h-screen" style="background-color: rgba(0,0,0,.5);" x-show="open"  >
                <!-- A basic modal dialog with title, body and one button to close -->
                <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                        Modal Title Here
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm leading-5 text-gray-500">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                    </div>
                    <!-- One big close button.  --->
                    <div class="mt-5 sm:mt-6">
                        <span class="flex w-full rounded-md shadow-sm">
                            <button @click="open = false" class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                            Close this modal!
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
          
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

    <div x-data="{ open: false }">
        <!-- Button -->
        <button x-on:click="open = true" type="button" class="bg-white border border-black px-4 py-2 focus:outline-none focus:ring-4 focus:ring-aqua-400">
            Open dialog
        </button>
        
        
    
    </div>
</div>
