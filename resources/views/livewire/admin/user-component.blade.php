<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-4">
                <div class="flex justify-end p-4">
                    {{-- Button for add a new user tailwind --}}
                    <button wire:click="$set('modalAdd','true')"
                        class="bg-rojo hover:bg-red-700 text-white font-bold py-1 px-4 rounded">
                        Add User
                    </button>
                </div>
                {{-- Table users tailwind 2.0 responsive --}}
                <table class="table-auto w-full">
                    <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                        <tr>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center px-4 py-2">{{ $user->name }}</td>
                                <td class="text-center px-4 py-2">{{ $user->email }}</td>
                                <td class="text-center px-4 py-2">
                                    @if ($user->trashed())
                                        <button wire:click="restore({{ $user->id }})"
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded">
                                            Restore
                                        </button>
                                    @else
                                        <a
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-0.5 px-2 mt-2 lg:py-1 lg:px-4 rounded block lg:inline-block cursor-pointer">
                                            Edit
                                        </a>
                                        <a wire:click="delete({{ $user->id }})"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-0.5 px-2 mt-2 lg:py-1 lg:px-4 rounded block lg:inline-block cursor-pointer">
                                            Delete
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- modal jetstream --}}
                <x-jet-dialog-modal wire:model="modalAdd">
                    <x-slot name="title">
                        {{ __('Add User') }}
                    </x-slot>
                    <x-slot name="content">
                        {{-- Formulario para agregar un usuario --}}
                        <div class="px-4 py-3">
                            <form>
                                <div>
                                    <x-jet-label value="Name" />
                                    <x-jet-input class="block mt-1 w-full" type="text" wire:model="name" />
                                </div>
                                <div class="mt-4">
                                    <x-jet-label value="Email" />
                                    <x-jet-input class="block mt-1 w-full" type="email" wire:model="email" />
                                </div>
                                <div class="mt-4">
                                    <x-jet-label value="Password" />
                                    <x-jet-input class="block mt-1 w-full" type="password" wire:model="password" />
                                </div>
                                <div class="mt-4">
                                    <x-jet-label value="Confirm Password" />
                                    <x-jet-input class="block mt-1 w-full" type="password"
                                        wire:model="password_confirmation" />

                                </div>
                            </form>
                    </x-slot>
                    <x-slot name="footer">
                        <x-jet-button class="ml-2" wire:click="add" wire:loading.attr="disabled">
                            {{ __('Save') }}
                        </x-jet-button>
                    </x-slot>
                </x-jet-dialog-modal>
            </div>
        </div>
    </div>
</div>
