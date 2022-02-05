<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacakge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js"
        integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous" />
</head>

<body>
   
    <div class="min-h-screen bg-gray-50 py-6 flex flex-col justify-center relative overflow-hidden sm:py-12">
        
        <img src="/img/beams.jpg" alt="" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 max-w-none"
            width="1308" />
        <div
            class="absolute inset-0 bg-[url(/img/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]">
        </div>
        <div
            class="relative px-6 pt-10 pb-8 bg-white shadow-xl ring-1 ring-gray-900/5 sm:max-w-lg sm:mx-auto sm:rounded-lg sm:px-10">
            <div class="max-w-md mx-auto">
                @if (Session::has('status'))
                <div class="text-red-800 text-xl">
                    <p>Here you are</p>
                    {{ session('status') }}
                </div>
                @endif
                @if(session()->has('status'))
                 <div x-data="{ show: true }" x-show="show"
                     class="bg-white my-2 rounded-r-md px-6 border-l-4 -ml-4 border-gray-100 bg-green-500">
                     <div class="flex items-center py-4">
                         <i
                             class="fas fa-check border-2 border-gray-200 px-2 rounded-full fill-current text-4xl font-light text-gray-200"></i>
                         <div class="ml-5">
                             <div class="flex space-x-60">
                                 <h1 class="text-lg font-bold text-gray-200">Wohoo!</h1>
                                 <button type="button" @click="show=false" class="text-gray-800 -mt-4">
                                     <span class="text-4xl">&times;</span>
                                    </button>
                                </div>
                             <p class="text-gray-300 my-0">You message has been sent successfully.</p>
                         </div>
                     </div>
                 </div>
                 @endif
                <h2 class="h-2 font-bold text-gray-800 text-xl mb-8">Contact Us</h2>
                <form action="{{route('contact.store')}}" method="post">
                    @csrf
                    <label class="text-gray-900 text-base font-semibold">Name:</label>
                    <input type='text' placeholder="Enter your name" name="name"
                        class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
                    
                    <label class="text-gray-900 text-base font-semibold">Email:</label>
                    <input type='email' placeholder="Enter your email" name="email"
                        class="w-full mt-2 mb-6 px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-green-500" />
                    <label class="text-gray-900 text-base font-semibold">Message:</label>
                     <textarea class="w-full px-3 py-2 mt-3 text-gray-700 border rounded-lg focus:outline-none" name="message"
                        rows="4" placeholder="Enter your message"></textarea>
                     <div class="flex justify-end mt-2">
                         <button type="submit"
                         class="border border-green-500 text-green-500 hover:bg-green-500 hover:text-gray-100 rounded px-4 py-2">Success</button>
                     </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
