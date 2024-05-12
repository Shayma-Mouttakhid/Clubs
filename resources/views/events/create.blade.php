<x-app-layout>
    <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Ajouter un evenement </h1>
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block mb-2">Titre:</label>
                <input type="text" id="title" name="title" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="description" class="block mb-2">Description:</label>
                <textarea id="description" name="description" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500"></textarea>
            </div>
            <div class="mb-4">
                <label for="event_date" class="block mb-2"> Date d'evenement:</label>
                <input type="date" id="event_date" name="event_date" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="club_id" class="block mb-2">Club:</label>
                <select id="club_id" name="club_id" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
                    <option value="">Sélectionnez un club</option>
                    @foreach ($clubs as $club)
                    <option value="{{$club->id}}">{{$club->nom_club}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="club_responsable" class="block mb-2">Club Responsable:</label>
                <input type="text" id="club_responsable" name="club_responsable" required class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" class="bg-blue-500 text-white rounded-md px-4 py-2 mr-2 hover:bg-blue-600">Ajouter evenement</button>
            <a href="{{ route('events.index') }}" class="text-blue-500 hover:underline">Annuler</a>
        </form>
    </div>
</x-app-layout>
