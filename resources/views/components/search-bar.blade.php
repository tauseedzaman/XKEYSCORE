<div class="flex justify-between items-center">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Search anything') }}
    </h2>
    <form method="GET" action="{{ route('search.results') }}" class="flex">
        <input type="text" value="{{ request('query') }}" name="query" class="rounded-l-md px-4 py-2 border border-gray-300 dark:bg-gray-700 dark:text-white" placeholder="Name, Email, Location ...">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-r-md hover:bg-blue-700">Search</button>
    </form>

</div>
