<div 
    class="flex flex-col w-full lg:w-1/2 px-0 mt-8 lg:mt-0 lg:px-12" 
    x-data="{ count: 1}"
>
    <div class="p-4 flex flex-col border border-gray-200 rounded w-full">
        <div class="flex flex-row items-start space-x-4">
            <span class="text-title-5 font-bold">$20</span>
            <span class="text-sm font-thins line-through text-gray-500">$30</span>
        </div>

        <div class="flex flex-row items-center space-x-4 my-4">
            <x-form.button @click="count > 1 ? count-- :  count - 1" type="button" variation="outline" size="small" icon="remove" icon-position="left" />
            <span class="text-title-5" x-text="count">1</span>
            <x-form.button @click="count = count + 1" type="button" variation="outline" size="small" icon="add" icon-position="left" />
        </div>

        <x-form.button type="button" variation="primary" size="medium" icon="shopping_cart" icon-position="left" text="Add to cart" />
        <x-form.button class="mt-2" type="button" variation="outline" size="medium" text="By now" />

        <div class="flex flex-col flex-shrink-0 items-start mt-4 space-y-1">
            @foreach ([1,2,3] as $item)
                <div class="flex flex-row justify-between w-full">
                    <span class="text-xs font-thin text-gray-400">Detail {{ $item }}</span>
                    <span class="text-xs font-thin text-gray-400">Info</span>
                </div>
            @endforeach
        </div>
    </div>

    @foreach ([1,2] as $item)
        <div class="flex flex-row items-center bg-blue-300 mt-4 px-6 py-4 rounded-md space-x-2">
            <x-icon name="local_shipping" size="large" class="text-blue-500"></x-icon>
            <span class="text-xss font-bold">Free Shipping</span>
        </div>
    @endforeach
</div>