<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ALL CLUBS') }}
            <form action="{{ route('clubs.create') }}" method="POST" class="inline pointer-events-none">
                @csrf
                @method('post')
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-lg ml-2">Ajouter Post</button>
            </form>
            
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($posts as $post)
            <div class="bg-white rounded-lg shadow-md relative overflow-hidden">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-center">{{ $post->nom_ }}</h3>
                    <hr class="my-2">
                    <img src="{{ asset('images/club.jpg') }}" class="mx-auto w-32 h-32 rounded-full" alt="Club Image">
                    <p class="text-center mt-2">Responsable du club: {{ $club->rspnsbl_club }}</p>
                    <p class="text-center">{{Str::limit($club->description, 70, '...')  }}</p>
                    
                </div>
                {{-- <div class="absolute inset-0 bg-white bg-opacity-100 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
                    <div><p class="text-center ">{{ $club->description }}</p></div>
                  
                </div>  --}}
                <div>
                    <div class="block text-center m-4 pointer-events-none">
                        <a href="{{ route('clubs.edit', $club->id) }}" class="inline-block px-4 py-2 bg-blue-500 text-white rounded-lg shadow-lg">Edit</a>
                        <form action="{{ route('clubs.destroy', $club->id) }}" method="POST" class="inline pointer-events-none">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg shadow-lg ml-2">Delete</button>
                        </form>
                    </div>
                </div>
                
            </div>
        @endforeach
    </div>
    
    
</x-app-layout>
