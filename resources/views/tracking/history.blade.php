<x-layout>
    <div class="text-center p-6 bg-gradient-to-r from-amber-600 to-teal-800 text-white rounded-t-lg">
        <h1 class="text-3xl font-bold">
            Order history
        </h1>
        <p class="mt-4 text-lg">
            Customer: {{ $customer->name }}
        </p>
    </div>

    <div class="max-w-full mt-8 mx-auto bg-white rounded-lg shadow-sm">
        <div class="text-center p-6">
            <h1 class="text-2xl font-semibold text-gray-800">
                Items shipped
            </h1>
        </div>
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Tracking Code
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        origin
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Destination
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer->senders as $sender )
                    <tr class="hover:bg-gray-50 transition-colors border-b">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="#" class="underline">
                            {{ $sender->tracking_code }}
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        {{ $sender->origin }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $sender->destination }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 rounded-full {{ $sender->status->getColorTicket() }}">
                            {{ $sender->status }}
                        </span>
                    </td>
                </tr>
                @endforeach

                @if ($customer->senders->isEmpty())
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            No shipped items found.
                        </td>
                    </tr>                    
                @endif
                
            </tbody>
        </table>
    </div>

    <div class="max-w-full mt-8 mx-auto bg-white rounded-lg shadow-sm">
        <div class="text-center p-6">
            <h1 class="text-2xl font-semibold text-gray-800">
                Items Received
            </h1>
        </div>
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Tracking Code
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Origin
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Destination
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer->recipients as $recipient )
                    <tr class="hover:bg-gray-50 transition-colors border-b">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#" class="underline">
                                {{ $recipient->tracking_code }}
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            {{ $recipient->origin }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $recipient->destination }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 rounded-full {{ $recipient->status->getColorTicket() }}">
                                {{ $recipient->status }}
                            </span>
                        </td>
                    </tr>
                @endforeach

                @if ($customer->recipients->isEmpty())
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            No received items found.
                        </td>
                    </tr>                    
                @endif
                
            </tbody>
        </table>
    </div>
</x-layout>