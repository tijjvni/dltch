<div>
    <x-modal wire:model="show">
        <x-slot name="title">
            {{ $project->title }}: Add Issue
        </x-slot>
        <x-slot name="trigger">
            <x-jet-secondary-button>
                Add Issue
            </x-jet-secondary-button>
        </x-slot>
          <x-jet-form-section  submit="addIssue">
            <x-slot name="title">
                {{ __('Issue Information') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Creating a new issue.') }}
            </x-slot>

            <x-slot name="form">
                
                <!-- Title -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="title" value="{{ __('Title') }}" />
                    <x-jet-input wire:model.defer="title" id="title" type="text" class="mt-1 block w-full" autocomplete="title"/>
                    <x-jet-input-error for="title" class="mt-2" />
                </div>

                <!-- priotity -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="priotity" value="{{ __('Priority') }}" />
                    <select wire:model.defer="priority" id="priotity" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" wire:model.defer="client">
                        <option>Select issue priotity</option>
                        <option value="1">Low</option>
                        <option value="2">Medium</option>
                        <option value="3">High</option>                    
                    </select>
                    <x-jet-input-error for="priority" class="mt-2" />
                </div>


                <!-- Summary -->
                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label for="summary" value="{{ __('Summary') }}" />
                    <textarea wire:model.defer="summary" id="summary" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"></textarea>
                    <x-jet-input-error for="summary" class="mt-2" />
                </div>

            </x-slot>

            <x-slot name="actions">
                <x-jet-action-message class="mr-3" on="saved">
                    {{ __('Issue added successfully.') }}
                </x-jet-action-message>

                <x-jet-button  wire:click="addIssue">
                    <i wire:loading  wire:target="addIssue" class="fa fa-spinner fa-spin"></i>
                    {{ __('Save') }}
                </x-jet-button>
            </x-slot>
        </x-jet-form-section>

    </x-modal> 
</div>
