<x-dashboard-layout>
    <x-slot:title>{{ isset($bundle) ? translate('Edit') : translate('Create') }}
        {{ translate('Bundled Course') }}</x-slot:title>
    <!-- Start Course Bundle Form -->
    @php
        $bundle = $bundle ?? null;
    @endphp
    <!-- BREADCRUMB -->
    <x-portal::admin.breadcrumb back-url="{{ route('organization.bundle.index') }}"
        title="{{ $bundle ? 'Edit' : 'Create' }} Bundled Course" page-to="Bundled Courses" />
    <x-portal::course.bundle.create-form :bundle=$bundle />
</x-dashboard-layout>
