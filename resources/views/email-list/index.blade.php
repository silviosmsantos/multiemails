<x-layouts.app :title="__('Email List')">

    <span>LISTA</span>

    @forelse ($emailLists as $list)
        <span>Lista das Listas</span>
    @empty
        <flux:button href="{{ route('email-list.create') }}" variant="primary" class="w-full">{{ __('Create your first email list') }}</flux:button>
    @endforelse

</x-layouts.app>