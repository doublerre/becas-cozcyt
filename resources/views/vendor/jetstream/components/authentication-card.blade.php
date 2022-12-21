<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0" style="background-image: radial-gradient(circle at 50% 45.48%, #95572a 0, #934e27 12.5%, #8d4021 25%, #832e19 37.5%, #76130e 50%, #680000 62.5%, #5e0000 75%, #560000 87.5%, #510000 100%);
">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
