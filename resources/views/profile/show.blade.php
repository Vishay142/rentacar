<x-app-layout>
    @include('header')


    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>


            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
{{--                <div class="mt-10 sm:mt-0">--}}
{{--                    @livewire('profile.two-factor-authentication-form')--}}
{{--                </div>--}}

            @endif

{{--                @livewire('profile.logout-other-browser-sessions-form')--}}


                @livewire('profile.delete-user-form')
        </div>
    </div>
</x-app-layout>
