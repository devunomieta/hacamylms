<x-dashboard-layout>
    <x-slot:title> {{ translate('Org Profile Setting') }} </x-slot:title>
    <x-portal::profile.setting action="{{ route('organization.profile.update') }}" />
</x-dashboard-layout>
