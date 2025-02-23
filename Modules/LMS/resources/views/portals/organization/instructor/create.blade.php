<x-dashboard-layout>
    <x-slot:title> {{ translate('Add New Tutor') }} </x-slot:title>
    <!-- BREADCRUMB -->
    <x-portal::admin.breadcrumb back-url="{{ route('organization.instructor.index') }}" title="Add New Tutor" page-to="Tutors" />
    <x-portal::instructor.create action="{{ route('organization.instructor.store') }}" />
</x-dashboard-layout>
