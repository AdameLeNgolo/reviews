<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div>
            <h3 class="text-2xl">What our clients think of us</h3>

            <div class="flex flex-wrap justify-around ">
                
               @foreach ($reviews as $review)
                   <div class=" text-center border-2 border-gray-200/50 shadow-xl rounded-lg py-4 px-4 w-3/12 my-6 mx-1 -skew-y-2">
                        <h3 class="font-semibold  mb-2"><span>{{ $review->name }}</span> <span class="uppercase">{{ $review->lastname }}</span> </h3>
                        <p class="text-gray-500 line-clamp-4 transition-all duration-1000 hover:line-clamp-none ">" {{ $review->message }} "</p>
                    </div>
               @endforeach

            </div>

            {{-- <div class="">
                {{ $reviews->links() }}
            </div> --}}
        </div>

        <div>
            <form method="post" class="grid grid-cols-2 gap-3 w-6/12 mx-auto" action="{{ route('reviews.store') }}">
                @csrf

                <input type="text" class="form-input px-4 py-3 rounded-full" name="name" placeholder="Enter your firstname">
                    
                <input type="text" class="form-input px-4 py-3 rounded-full" name="lastname" placeholder="Enter your lastname">

                <textarea class="form-textarea rounded-2xl col-span-2 " rows="5" name="message" placeholder="Enter here your message"></textarea>

                <input type="submit" value="Envoyer" class="text-xl bg-blue-700 rounded-full text-white  w-1/4 py-2 mx-auto col-span-2 ">
            </form>
        </div>
    </body>
</html>
