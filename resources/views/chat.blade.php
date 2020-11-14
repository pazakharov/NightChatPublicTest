<x-app-layout>
<div class="bg-transparent h-full py-12">
    <div class="bg-transparent h-full max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-transparent overflow-hidden shadow-md sm:rounded-lg h-10/12">
            

                

            <livewire:messages/> 

            

        </div>

        
        <div>
        @auth
        <livewire:messanger/>
        @endauth
        </div>
    </div>

</div>                  
</x-app-layout>