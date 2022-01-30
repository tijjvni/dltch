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
                        <span class="font-bold"> &nbsp;&nbsp;{{$project->client->name}} </span>
                      </strong>
                </li>
            </ul>
        </div>
        <div class="flex-initial">
            {{-- <button class="mx-2 my-2 bg-white transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white hover:bg-gray-100 rounded text-indigo-700 px-6 py-2 text-sm">Update</button> --}}
            <strong class="inline-block px-3 py-1 text-xs font-semibold text-green-600 bg-green-100 rounded-sm">
                On going
            </strong>      
        </div>
    </div>
    <!-- Code block ends -->
    
</div>
