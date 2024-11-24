
<form wire:submit.prevent="login" class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md"> 
    {{-- @csrf --}}

    <!-- Email Address -->
    <div class="mb-6">
        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
        <input type="email" id="email" name="email" wire:model="email" required
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500
               @error('email') border-red-500 @enderror">

        <!-- Error message for email -->
        @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Password -->
    <div class="mb-6">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" id="password" name="password"  wire:model="password" required
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:border-blue-500
               @error('password') border-red-500 @enderror">

        <!-- Error message for password -->
        @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Submit Button -->
    <div>
        <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
            Login
        </button>
    </div>
</form>
