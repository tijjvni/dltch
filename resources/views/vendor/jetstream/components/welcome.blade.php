<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>

    <div class="mt-8 text-2xl">
        Welcome back
    </div>
    
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <i class="fa fa-task fa-3x text-gray-400"></i>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('projects.index') }}">Projects</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Manage Projects. View existing and add new projects
            </div>

            <a  href="{{ route('projects.index') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                        <div>Go to Projects</div>

                        <div class="ml-1 text-indigo-500">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <i class="fa fa-users fa-3x text-gray-400"></i>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('clients.index') }}">Clients</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Manage Clients. View existing and add new clients
            </div>

            <a  href="{{ route('clients.index') }}">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                        <div>Go to Projects</div>

                        <div class="ml-1 text-indigo-500">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200">        
        <div class="flex items-center">
            <i class="fa fa-user-secret fa-3x text-gray-400"></i>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="">Staff</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Manage all staff
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">
            <i class="fa fa-lock fa-3x text-gray-400"></i>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="">Admin</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                System Administration
            </div>
        </div>
    </div>
</div>
