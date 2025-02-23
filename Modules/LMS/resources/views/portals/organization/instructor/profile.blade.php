<x-dashboard-layout>
    <x-slot:title> {{ translate('Tutor Profile') }} </x-slot:title>
    <!-- BREADCRUMB -->
    <x-portal::admin.breadcrumb back-url="{{ route('organization.instructor.index') }}" title="Tutor Profile"
        page-to="Tutors" />
    <x-portal::admin.profile-detail :user=$user />
</x-dashboard-layout>
