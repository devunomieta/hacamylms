<x-dashboard-layout>
    <x-slot:title> {{ translate('Notice Board Manager') }} </x-slot:title>
    <!-- BREADCRUMB -->
    <x-portal::admin.breadcrumb title="Notice Board List" page-to="Notice Board"
        action-route="{{ route('instructor.noticeboard.create') }}" />


    @if (!empty($noticesBoards) && count($noticesBoards) > 0)
        <div class="card overflow-hidden">
            <x-portal::noticeboard.index :noticesBoards=$noticesBoards />
        </div>
    @else
        <x-portal::admin.empty-card title="No Notice Yet!"
            action="{{ route('instructor.noticeboard.create') }}" btnText="Add New" />
    @endif
</x-dashboard-layout>
