<x-app-layout>
    <x-slot name="header">
        Change Password
    </x-slot>

    <form class="border p-2 col-12 col-sm-10 col-md-7 col-lg-5 mx-auto" method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        
        @if (session('status') === 'password-updated')
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
            class="alert alert-success">{{ __('Saved.') }}</p>
        @endif

        @csrf
        @method('put')

        <div class="form-group mt-2">
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password"
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="form-group mt-2">
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="form-group mt-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="text-center mt-3">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</x-app-layout>