@php
$sections = \App\Models\BasicSection::all()->where('section_number', '=', $sectionNumber);
$width = 48;
switch ($sectionNumber)
{
    case '1':
        $sectionName = 'ИНЭУМ';
        $width = 72;
        break;
    case '2':
        $sectionName = 'ИНЭУМ - КТ';
        break;
    case '3':
        $sectionName = 'ИНЭУМ - ВП';
        break;
    case '4':
        $sectionName = 'МЦСТ';
        break;
    case '5':
        $sectionName = 'МЦСТ - ВП';
        break;
    case '6':
        $sectionName = 'Стор.орг.';
        break;
    case '7':
        $sectionName = 'Стор.орг. - ВП';
        break;

}
@endphp
<div class="hidden sm:flex sm:items-center sm:ml-10">
    <x-dropdown :href="route('dashboard')" :active="request()->routeIs('dashboard')" :width="$width">
        <x-slot name="trigger">
            <button
                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                {{ $sectionName }}
                <div class="ml-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
            </button>
        </x-slot>
        <x-slot name="content">
            @foreach($sections as $section)
                <x-dropdown-link :href="route('dashboard')">
                    {{ $section->name }}
                </x-dropdown-link>
            @endforeach
        </x-slot>
    </x-dropdown>
</div>
