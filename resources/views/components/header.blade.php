<div class="px-12 flex flex-row items-center justify-between py-4 w-full border-b border-solid border-gray-300">
    <div class="">
        <img class="w-24" src="{{ Vite::asset("resources/images/$logo") }}" alt="logo">
    </div>

    <div class="hidden md:flex flex-row items-center space-x-0.5">
        <x-form.input
            type="text"
            name="search"
            placeholder="Search"
            size="medium"
            icon="search"
            icon-position="right"
        />
        <x-form.button 
            type="button"
            variation="primary"
            size="medium"
            icon="search"
            icon-position="left"
        />
    </div>

    <div class="flex flex-row items-center space-x-0.5">
        <x-form.button 
            class="flex md:hidden"
            type="button"
            variation="primary"
            size="medium"
            icon="search"
            icon-position="left"
        />

        <x-form.button  
            type="button"
            variation="primary"
            size="medium"
            icon="person"
            icon-position="left"
            text="Login In"
        />
        <x-form.button  
            type="button"
            variation="outline"
            size="medium"
            icon="shopping_cart"
            icon-position="left"
        />
    </div>
</div>