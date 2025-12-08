<x-layout>
    
        <div class="min-h-[calc(100vh-4rem)] flex flex-col md:grid md:grid-cols-2">
            <div class="flex flex-col justify-center p-6 md:p-12 order-1 md:order-none">                
                <div class="space-y-8">
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900">
                            Track using tracking code
                        </h2>
                        <form action="{{ route('freight.tracking') }}" method="GET" class="flex items-center space-x-2">
                            <div class="relative w-full max-w-md">
                                <input type="text" name="tracking_code" placeholder="Tracking code" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-600 focus:border-amber-600">
                                <button type="submit" class="absolute inset-y-0 right-0 px-4 py-2 text-white bg-amber-600 rounded-r-md hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-600">Search</button>
                            </div>
                        </form>
                    </div>

                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900">
                            Customer's order history
                        </h2>
                        <form action="{{ route('freight.history') }}" method="GET">
                            <div class="relative w-full max-w-md">
                                <input type="tel" name="phone" placeholder="Phone number" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-600 focus:border-amber-600" oninput="aplicarMascaraTelefone(this)" maxlength="15">
                                <button type="submit" class="absolute inset-y-0 right-0 px-4 py-2 text-white bg-amber-600 rounded-r-md hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-600">Search</button>                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center bg-gray-100 order-2 md:order-none">
                <img src="/entrega.webp" alt="Placeholder" class="object-cover w-full h-[calc(100vh-4rem)]">
            </div>
        </div>
    </div>
</x-layout>    

        
   