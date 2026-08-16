<x-master-layout title="Script">
    <style>
        .speaker {
            display: inline-block;
            margin-top: 12px;
        }
        .act {
            margin-top: 18px;
        }
        .scene:not(.act + .scene) {
            margin-top: 15px;
        }
    </style>
    
    <div id="script-container" class="text-lg">
        {!! $content !!}
    </div>

    <script>
        window.playCode = {{ \Illuminate\Support\Js::from($play) }}
        window.characterCode = {{ \Illuminate\Support\Js::from($character) }};
    </script>
    @vite('resources/js/custom-scripts/highlightLines.js')
</x-master-layout>