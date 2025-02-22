<div class="flex flex-row items-center space-x-0.5">
    @foreach ($items as $item)
        <span {{ 
                $attributes->class([
                    'text-xs font-thin',
                    'text-gray-500' => !$loop->last,
                    'text-gray-900' => $loop->last,
                ])
            }}> {{ $item }} </span>
        @if (!$loop->last)
            <span class="text-xs font-thin">/</span>
        @endif
    @endforeach
</div>