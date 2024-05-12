<x-app-layout>
    <div class="max-w-4xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Ajouter un nouveau club</h1>
        
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Oops! There was an error.</strong>
                <ul class="mt-3">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form method="POST" action="{{ route('clubs.store') }}" class="space-y-4">
            @csrf
            <div>
                <label for="nom_club" class="block text-sm font-medium text-gray-700">Nom du club:</label>
                <input type="text" id="nom_club" name="nom_club" required class="mt-1 px-4 py-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="rspnsbl_club" class="block text-sm font-medium text-gray-700">Responsable:</label>
                <input type="text" id="rspnsbl_club" name="rspnsbl_club" required class="mt-1 px-4 py-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea id="description" name="description" required rows="4" class="mt-1 px-4 py-2 border border-gray-300 rounded-md w-full focus:outline-none focus:ring focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>
            <div>
                <button type="submit" class="inline-block px-6 py-3 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-50">Ajouter </button>
                <a href="{{ route('clubs') }}" class="inline-block px-6 py-3 bg-blue-100 text-blue-800 rounded-md shadow-md hover:bg-blue-200 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-50 ml-4">Annuler</a>
            </div>
        </form>
    </div>
</x-app-layout>
