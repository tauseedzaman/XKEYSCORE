<div class="bg-white dark:bg-gray-900 p-4 rounded-lg shadow border border-gray-100 dark:border-gray-800">
    <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400 mb-1">
        <span class="font-medium">{{ $purchase->item }} ({{ $purchase->category }})</span>
        <span>{{ $purchase->purchased_at->format('M d, Y H:i') }}</span>
    </div>
    <div class="text-sm text-gray-700 dark:text-gray-200 space-y-1">
        <div><strong>Price:</strong> {{ $purchase->currency }} {{ $purchase->price }}</div>
        <div><strong>Status:</strong> {{ ucfirst($purchase->status) }}</div>
        <div><strong>Payment:</strong> {{ $purchase->payment_method }}</div>
        <div><strong>IP:</strong> {{ $purchase->ip_address }} — {{ $purchase->device }}</div>
        <div><strong>Location:</strong> {{ $purchase->location }}</div>
    </div>
