<x-app-layout>
	<x-slot name="header">
        <div class="flex w-full">
            <div class="flex-grow">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Projects') }}
                </h2>
            </div>
            <div class="flex-initial">
				<a  href="{{ route('projects.create') }}" >
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create
                    </button>
                </a>   
            </div>
        </div>
    </x-slot>

	<!-- Component Start -->
	<div class="grid md:grid-cols-2 gap-2 w-full p-5">
		
		<!-- Tile 1 -->
		<div class="flex items-center p-4 bg-white rounded">
			<div class="flex flex-shrink-0 items-center justify-center bg-indigo-200 h-16 w-16 rounded">
				<i class="fa fa-tasks text-indigo-600"></i>
			</div>
			<div class="flex-grow flex flex-col ml-4">
				<span class="text-xl font-bold">{{ count($projects) }} </span>
				<div class="flex items-center justify-between">
					<span class="text-gray-500">All Projects</span>
					<!-- <span class="text-green-500 text-sm font-semibold ml-2">+12.6%</span> -->
				</div>
			</div>
		</div>
		
		<!-- Tile 2 -->
		<div class="flex items-center p-4 bg-white rounded">
			<div class="flex flex-shrink-0 items-center justify-center bg-indigo-200 h-16 w-16 rounded">
				<i class="fa fa-tasks text-indigo-600"></i>
			</div>
			<div class="flex-grow flex flex-col ml-4">
				{{-- <span class="text-xl font-bold">{{ count($projects) }} </span> --}}
				<span class="text-xl font-bold">{{ count($projects) }} </span>
				<div class="flex items-center justify-between">
					<span class="text-gray-500">Active Projects</span>
				</div>
			</div>
		</div>
		
	</div>
	<!-- Component End  -->


    <div class="p-5">
        @livewire('projects.index',['projects' => $projects])
    </div>

</x-app-layout>
