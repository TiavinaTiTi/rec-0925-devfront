@props([
    'title',
    'subtitle',
    'price',
    'buttonColor',
    'buttonTextColor',
    'borderColor' => null,
    'bgHeader',
    'iconColor',
    'features' => [],
    'selected' => false
])

<div class="w-full xl:w-[500px] bg-white rounded-[37px] shadow-card overflow-hidden {{ $borderColor ? 'border-2 ' . $borderColor : '' }}">
    <div class="flex flex-col items-center justify-center {{ $bgHeader }} pt-[19px] pb-[12px]">
        <p class="font-bold {{ $buttonTextColor }} text-[28px] leading-[34px]">{{ $title }}</p>
        <p class="mt-2 {{ $buttonTextColor }} text-[20px] leading-[24px] text-center xl:text-start">{{ $subtitle }}</p>
    </div>
    <div class="bg-white">
        <div class="flex flex-col items-center text-center p-6 border-b border-gray-200 xl:min-h-[189px]">
            <p class="font-bold flex items-center text-[43px] leading-[51px] text-[#2c2c2c]"><span class="mr-[18px]">+</span>{{ $price }}</p>
            @if(isset($attributes['description']))
                <p class="text-xs xl:text-[16px] py-1.5">{{ $attributes['description'] }}</p>
            @else
                <p class="min-h-[33px]"></p>
            @endif
            <button class="{{ $buttonColor }} mt-3 px-6 py-3 flex items-center gap-2 cursor-pointer transition shadow-[0px_3px_6px_#00000029] rounded-[12px]">
                <div class="h-[15px] w-[15px] bg-white rounded-full"></div>
                <p class="text-sm xl-text-[26px] {{ $buttonTextColor }} font-bold ">{{ $selected ? 'Sélectionné' : 'Sélectionner' }}</p>
            </button>
        </div>
        <div class="flex flex-col gap-4 mx-auto py-6 px-5 xl:p-[40px] xl:max-w-full">
            @foreach($features as $feature)
                <div class="flex items-center gap-2">
                    @if(isset($feature['icon']))
                        <i class="{{ $feature['icon'] }} {{ $iconColor }} text-md"></i>
                    @endif
                    <p class="xl:text-[20px] text-md">{{ $feature['text'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
