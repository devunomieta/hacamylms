<x-dashboard-layout>
    <x-slot:title> {{ translate('Purchase Course') }} </x-slot:title>
    <!-- BREADCRUMB -->
    <x-portal::admin.breadcrumb title="Purchased Courses" page-to="Courses" />
    <!-- Start Main Content -->
    <div class="card overflow-hidden">
        @if ($purchases->total() > 0)
            <div class="grid grid-cols-12 gap-x-4 gap-y-5">
                @foreach ($purchases as $purchase)
                    <x-portal::student.purchase-course :purchase=$purchase />
                @endforeach
                <!-- PAGINATION -->
                {{ $purchases->links('portal::admin.pagination.paginate') }}
            </div>
        @else
            <x-portal::admin.empty-card title="You have not purchased any course yet!" />
        @endif
    </div>
</x-dashboard-layout>
