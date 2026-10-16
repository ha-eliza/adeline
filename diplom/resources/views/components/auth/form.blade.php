@props(['action', 'btn'])

<form method="POST" action="{{ $action }}">
    @if ($errors->any())
        <div class="bg-red-100 p-4 mb-4">
            <ul class="list-disc">
                @foreach ($errors->all() as $error)
                    <li class="text-red-600 py-1 text-sm">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf

    {{ $slot }}

    <button type="submit"
        class="w-full border border-black py-4 mt-8 uppercase tracking-widest hover:bg-black hover:text-white transition">
        {{ $btn }}
    </button>
</form>
