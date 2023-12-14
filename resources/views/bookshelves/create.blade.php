<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bookshelf Create') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflowhidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray100">
                    <!-- CONTENT HERE -->
                    <form method="post" action="{{ route('bookshelf.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                        <div class="max-w-xl">
                            <x-input-label for="code" value="Code Bookshelf" />
                            <x-text-input id="code" type="text" name="code" class="mt-1 block w-full"
                                value="{{ old('code')}}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('code')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="name" value="Nama Bookshelf" />
                            <x-text-input id="name" type="text" name="name" class="mt-1 block w-full"
                                value="{{ old('name')}}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="name" value="Image Bookshelf" />
                            <x-file-input id="image" name="image" class="mt-1
                            block w-full"/>
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>
                        <x-secondary-button tag="a" href="{{route('bookshelf.index')}}">Cancel</x-secondary-button>
                        <x-primary-button name="save_and_create" value="true">Save & Create Another</x-primary-button>
                        <x-primary-button name="save" value="true">Save</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
