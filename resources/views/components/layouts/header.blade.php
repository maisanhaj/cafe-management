<div class="flex items-center justify-between bg-white p-4 shadow-md">
    <div class="flex items-center">
        <x-application-logo class="h-10 mr-2" />
        <span class="text-lg font-semibold">{{ config('app.name') }}</span>
    </div>
    <div class="flex items-center">
        <span class="mr-4">{{ auth()->user()->name }}</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
        <button 
                type="submit"
                class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600"
        >
            Logout
        </button>
        </form>
    </div>
</div>
