<button
    type={{ $type }}
    {{ 
        $attributes->class([
            "rounded flex items-center justify-center text-md px-4", 
            "bg-blue-500 hover:bg-blue-600 active:bg-blue-900 disabled:bg-gray-500 text-white" => $variation === "primary",
            "bg-white border border-solid border-blue-500 text-blue-500 hover:border-blue-600 hover:text-blue-600 active:text-blue-900 disabled:border-gray-500 disabled:text-blue-900" => $variation === "outline",
            "py-3" => $size === "large",
            "py-2.5" => $size === "medium",
            "py-2" => $size === "small",
        ]) 
    }}
>
    <div class="flex flex-row items-center">
        @if (!empty($icon) && $iconPosition === 'left')
            <x-icon :name="$icon" class="mr-2" />
        @endif
        {{ $text }}

        @if (!empty($icon) && $iconPosition === 'right')
            <x-icon :name="$icon" class="ml-2"/>
        @endif
    </div>
</button>