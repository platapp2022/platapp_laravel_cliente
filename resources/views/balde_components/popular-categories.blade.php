<section class="bg-gray-200  py-20 flex flex-col">
    <div class="container">
        <div class="w-full text-center">
            <div class="w-full  self-center content-center flex flex-row justify-center -mt-4 mb-6">
                <p class="border-1 border-green w-44"></p>
            </div>
            <h2 class="text-black text-4xl font-bold py-1">
                {{__("popular_categories")}}
            </h2>
            <p class="text-gray-600 text-md font-normal  py-1">
                {{__("popular_categories_description")}}
            </p>
        </div>
        <div class="h-full w-full  slider">
            @foreach ($fields as $field)
                <a href="/fields/{{$field->id}}" class="p-4 nav-link hover:text-green-500 border-white">
                    <div class="relative w-full text-center">
                        {{-- <div class="total absolute top-3 right-3 w-10 h-10 text-sm leading-10 items-center text-black bg-gray-300 rounded-full">
                           
                            +{{$field->markets_count}}
                        </div> --}}
                        <div class="flex flex-col h-52 justify-center p-1">
                            <img class="text-green self-center" style="max-width:100%;width:70%;height:80%;" src="{{ $field->getFirstMediaUrl('image') }}" alt="">
                            <b class="mt-2 text-black">{{$field->name}}</b> 
                            {{-- <small class="text-gray-600">
                                    {{__("avg_price")}} {{ $field->markets_avg_name }}
                            </small> --}}
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
