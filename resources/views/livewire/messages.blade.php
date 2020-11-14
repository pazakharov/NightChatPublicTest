
<div class="flex-col-reverse overflow-y-auto p-6 bg-gray-500 border-cool-gray-400 h-full flex col ">
@foreach($messages as $message)
<div class="w-100 box-border bg-gray-400 rounded-lg px-3 py-3 my-2 text-gray-800" >
    {{ $message->text }}
</div>
@endforeach
</div>