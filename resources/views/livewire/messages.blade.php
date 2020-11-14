<div class="box-border flex-col-reverse overflow-y-auto p-6 bg-gray-500 h-full flex">
@foreach($messages as $message)
<div class="flex flex-row-reverse transition ease-in-out w-100 box-border  rounded-lg px-3 py-3 my-2 text-gray-800 shadow-md
        
        @if($message->user->id == 1)
           bg-gray-900
        @else  
            bg-gray-400
        @endif  

        @if($message->deleted_at)
           bg-red-300
        @else  
            bg-gray-400
        @endif 


" >
    <div class="w-full">

    @auth
    @if( Auth::user()->id == 1 )
           
        <div class="ml-auto justify-self-end  relative bg-gray-50 rounded-full w-max-content p-1"> <img wire:click="trash({{ $message->id }})" class="m-auto" style="height:1rem; width:1rem;" src="./img/trash.svg" alt=""> </div>

    @endif 
    @endauth

    <div class="w-full p-2 block rounded-lg m-1 bg-gray-200">{{ $message->text }}</div>
    <span class="block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold 
     
        @if($message->user->id == 1)
            text-red-700 mb-2
        @else  
            text-gray-700 mb-2
        @endif  
            ">

     {{ $message->user->name }}

    </span></div>
    
    <span class="flex h-15 w-15 content-center justify-center bg-gray-200 rounded-full  text-gray-700"><img class="m-auto" style="height:2rem; width:2rem;" src="./img/user.svg" alt=""></span>
</div>

@endforeach
</div>