<x-master-layout title="Script">
    {!! $content !!}

    <script>
        window.playCode = {{ \Illuminate\Support\Js::from($play) }}
        window.characterCode = {{ \Illuminate\Support\Js::from($character) }};
    </script>
    @vite('resources/js/custom-scripts/highlightLines.js')
</x-master-layout>