<x-dashboard-layout>
    <x-slot:title> {{ translate('My Course') }} </x-slot:title>
    <!-- BREADCRUMB -->
    <x-portal::admin.breadcrumb title="Enrolled Course(s)" page-to="Courses" />
    <!-- Start Main Content -->
    <div class="card overflow-hidden">
        @if ($enrollments->total() > 0)
            <div class="grid grid-cols-12 gap-x-4 gap-y-5">
                @foreach ($enrollments as $enrollment)
                    <x-portal::student.purchase-course :purchase=$enrollment />
                @endforeach
                <!-- PAGINATION -->
                {{ $enrollments->links('portal::admin.pagination.paginate') }}
            </div>
        @else
            <x-portal::admin.empty-card title="You are not enrolled in any course" />
        @endif
    </div>
</x-dashboard-layout>
