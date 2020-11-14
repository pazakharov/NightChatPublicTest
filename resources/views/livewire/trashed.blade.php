<div class="bg-transparent h-full py-12">
    <div class="bg-transparent h-full max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-transparent overflow-hidden shadow-md sm:rounded-lg h-10/12">
            <div class="overflow-y-auto box-border p-1 bg-gray-500 h-full  flex-col">
                <h5 class="m-4 block w-full font-bold font-sans text-purple-200">Управление удаленными сообщениями</h5>

                <ul class="w-full flex flex-col">
                    @foreach($messages as $message)

                    <li class="flex w-full m-2 bg-gray-300 rounded-lg p-2 content-center justify-start">

                        <div class="inline-flex items-center cursor-default">
                            <x-dropdown align="left" width="32">
                                <x-slot name="trigger">
                                    <img class="w-full cursor-pointer mt-2" style="" src="./img/menu.png" alt="">
                                </x-slot>

                                                             <x-slot name="content">
                                    <x-dropdown-link x-on:click="$wire.untrash({{ $message->id }})">
                                      Восстановить


                                    </x-dropdown-link>

                                </x-slot>
                            </x-dropdown> <span class="font-sans w-11/12">
                                {{ $message->text }}
                            </span>
                        </div>
                    </li>

                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</div>
