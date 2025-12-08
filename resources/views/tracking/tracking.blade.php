<x-layout>
    <div class="max-w-full mt-8 mx-auto bg-white rounded-lg shadow-sm">
        <div class="text-center p-6 bg-gradient-to-r from-amber-600 to-blue-500 text-white rounded-t-lg">
            <h1 class="text-3xl font-bold">
                Order Tracking
            </h1>
            <p class="mt-4 text-lg">
                Tracking code: <span class="font-semibold">{{ $freight->tracking_code }}</span>
            </p>
            <p class="mt-2">
                Status: 
                <span class="px-3 py-1 rounded-full">
                    {{ $freight->status }}
                </span>
            </p>
            <p class="mt-2">
                Destination: <span class="font-semibold">{{ $freight->destination }}</span>
            </p>
        </div>

        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Description
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Date/Time
                    </th>
                </tr>
            </thead>
            <tbody>            
                @foreach ($freight->steps as $step )                
                    <tr class="hover:bg-gray-50 transition-colors border-b">
                        <td class="px-6 py-4">
                            {{ $step->description }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            {{ $step->created_at->format('d/m/Y -> H:i') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>