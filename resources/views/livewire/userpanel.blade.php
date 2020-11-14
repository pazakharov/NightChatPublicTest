<div class="bg-transparent h-full py-12">
    <div class="bg-transparent h-full max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-transparent overflow-hidden shadow-md sm:rounded-lg h-10/12">
            <div class="overflow-y-auto box-border p-6 bg-gray-500 h-full  flex-col">
                <h5 class="block w-full font-bold font-sans text-purple-200">Управление пользователями</h5>
                <ul class="block">
                    @foreach($users as $user)

                    <li class="">

                        <div class="inline-flex items-center ml-6 cursor-default">
                            <x-dropdown align="left" width="48">
                                <x-slot name="trigger">
                                    <img class="m-auto cursor-pointer" style="height:1rem; width:1rem;" src="./img/menu.svg" alt="">
                                </x-slot>

                                                             <x-slot name="content">
                                    <x-dropdown-link x-on:click="$wire.switch_admin_role({{ $user }})">
                                        @if($user->role == 1)
                                         @if($user->id == 1) Нельзя разжаловать @else Разжаловать @endif
                                        @else
                                        Сделать админом
                                        @endif


                                    </x-dropdown-link>

                                </x-slot>
                            </x-dropdown> <span class="font-bold
                            @if($user->role == 1)
                            text-red-800
                            @else
                            text-gray-800
                            @endif
                            ">{{ $user->name }}</span>
                        </div>
                    </li>

                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
