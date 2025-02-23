<x-dashboard-layout>
    <x-slot:title> {{ translate('My Assignment') }} </x-slot:title>
    <!-- BREADCRUMB -->
    <x-portal::admin.breadcrumb title="All Assignments" page-to="Assignments" />
    <!-- Start Main Content -->
    <div class="card overflow-hidden">
        @if ($assignments->count() > 0)
            <x-portal::exam.assignment.index :assignments=$assignments>
            </x-portal::exam.assignment.index>
        @else
            <x-portal::admin.empty-card title="You have no Assignment" />
        @endif
    </div>
</x-dashboard-layout>
