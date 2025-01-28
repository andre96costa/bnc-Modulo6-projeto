<button
    type={{ $type }}
    {{ 
        $attributes->class([
            "rounded flex items-center justify-center px-4", 
            "bg-blue-500 hover:bg-blue-600 active:bg-blue-900 disabled:bg-gray-500 text-white" => $variation === "primary",
            "bg-white border border-solid border-blue-500 text-blue-500 hover:border-blue-600 hover:text-blue-600 active:text-blue-900 disabled:border-gray-500 disabled:text-blue-900" => $variation === "outline",
            "py-3 text-md" => $size === "large",
            "py-2.5 text-md" => $size === "medium",
            "py-2 text-xs" => $size === "small",
        ]) 
    }}
>
    <div class="flex flex-row items-center">
        @if (!empty($icon) && $iconPosition === 'left')
            <x-icon :name="$icon" :size="$size"/>
        @endif
        
        <span 
            {{ 
                $attributes->class([
                    "ml-2" => !empty($text) && !empty($icon) && $iconPosition === 'left',
                    "mr-2" => !empty($text) && !empty($icon) && $iconPosition === 'right',
                ]) 
            }}
        >
            {{ $text ?? "" }}
        </span>

        @if (!empty($icon) && $iconPosition === 'right')
            <x-icon :name="$icon" :size="$size"/>
        @endif
    </div>
</button>