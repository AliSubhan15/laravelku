<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Book') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflowhidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- CONTENT HERE -->
                    <form method="post" action="{{ route('book.store') }}" enctype="multipart/form-data"
                        class="mt-6 space-y-6">
                        @csrf

                        <div class="max-w-xl">
                            <x-input-label for="title" value="Judul" />
                            <x-text-input id="title" type="text" name="title" class="mt-1 block w-full"
                                value="{{ old('title')}}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="author" value="Penulis" />
                            <x-text-input id="author" type="text" name="author" class="mt-1 block w-full"
                                value="{{ old('author')}}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('author')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="year" value="Tahun Terbit" />
                            <x-text-input id="year" type="number" name="year" class="mt-1 block w-full"
                                value="{{ old('year')}}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('year')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="publisher" value="Penerbit" />
                            <x-text-input id="publisher" type="text" name="publisher" class="mt-1 block w-full"
                                value="{{old('publisher')}}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('publisher')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="city" value="Kota Terbit" />
                            <x-text-input id="city" type="text" name="city" class="mt-1 block w-full"
                                value="{{ old('city')}}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('city')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="quantity" value="Jumlah Buku" />
                            <x-text-input id="quantity" type="number" name="quantity" class="mt-1 block w-full"
                                value="{{old('quantity')}}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('quantity')" />
                        </div>

                        <div class="max-w-xl">
                            <label for="bookshelf" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Kategori RakBuku</label>
                            <select id="bookshelf" name="bookshelf_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-indigo-600 dark:focus:border-indigo-600 dark:text-gray-300 sm:text-sm" required>
                                <option value=""disabled selected>Open this select menu</option>
                                @foreach($bookshelves as $bookshelf)
                                    <option value="{{ $bookshelf->id }}">
                                        {{ $bookshelf->code }} - {{ $bookshelf->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('bookshelf_id')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="max-w-xl">
                            <label for="cover" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Halaman Sampul Depan</label>
                            <input id="cover" name="cover" type="file" class="mt-1 block w-full">
                            @error('cover')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Akhir penambahan elemen formulir -->

                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('book') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-500 dark:hover:text-gray-300 focus:outline-none focus:text-gray-500 dark:focus:text-gray-300">
                                Cancel
                            </a>
                            <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                            <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save & Create Another
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
