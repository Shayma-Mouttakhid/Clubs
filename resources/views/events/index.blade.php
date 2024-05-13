<x-app-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-between items-center">
        <span>{{ __('Tous les evenements') }}</span>
        <a href="events/create" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-lg">Ajouter evenement</a>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($events as $event)
            <div class="bg-white rounded-lg shadow-md p-4">
                <h2 class="text-lg font-semibold mb-2">{{ $event->title }}</h2>
                <p class="text-sm text-gray-500 mb-2">Date: {{ $event->event_date }}</p>
                <p class="text-sm mb-4">{{ Str::limit($event->description, 100) }}</p>
                <p class="text-sm text-blue-500 hover:underline">{{ $event->club->name }}</p>
                {{-- <p class="text-sm">Responsable: {{ $event->club_responsable }}</p> --}}
                
                <!-- Boutons Modifier et Supprimer -->
                <div class="flex justify-between mt-4">
                    <a href="{{ route('events.edit', $event->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-lg">Modifier</a>
                    <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2 bg-blue-300 text-white rounded-lg shadow-lg">Supprimer</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
