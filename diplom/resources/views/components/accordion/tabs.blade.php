@props([
    'activeTab' => 'public',
    'tab1' => 'PUBLIC',
    'tab2' => 'PERSONAL',
])

<div>
    <nav class="flex" aria-label="Tabs">
        <button @click="activeTab = '{{ strtolower($tab1) }}'"
            :class="{
                'text-[#640d14]': activeTab === '{{ strtolower($tab1) }}',
                'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== '{{ strtolower($tab1) }}'
            }"
            class="whitespace-nowrap py-4 pr-1 font-medium text-2xl transition duration-150 ease-in-out uppercase"
            aria-current="page">
            {{ strtolower($tab1) }} /
        </button>

        <button @click="activeTab = '{{ strtolower($tab2) }}'"
            :class="{
                'text-[#640d14]': activeTab === '{{ strtolower($tab2) }}',
                'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': activeTab !== '{{ strtolower($tab2) }}'
            }"
            class="whitespace-nowrap py-4 px-1 font-medium text-2xl transition duration-150 ease-in-out uppercase">
            {{ strtolower($tab2) }}
        </button>
    </nav>
</div>
