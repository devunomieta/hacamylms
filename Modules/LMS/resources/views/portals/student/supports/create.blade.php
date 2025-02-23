<x-dashboard-layout>
    <x-slot:title> {{ translate('Create Support Ticket') }} </x-slot:title>
    <!-- BREADCRUMB -->
    <x-portal::admin.breadcrumb title="Create Support" page-to="tickets"
        back-url="{{ route('student.supports.index') }}" />
    <x-portal::supports.create action="{{ route('student.supports.store') }}" />
</x-dashboard-layout>
