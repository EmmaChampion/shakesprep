<x-master-layout title="Select Your Role">
    <form action="/script" method="POST">
        @csrf

        <h1 class="text-3xl font-bold">Select Your Role</h1>
        <select id="playSelect" class="dropdown text-lg mt-6 bg-base-200 outline-base-content outline-solid outline-2 p-2 rounded-md">
            <option value="" disabled selected hidden>Select a Play</option>
            <option value="Mac">Macbeth</option>
        </select>

        <br><br>

        <select id="characterSelect" disabled class="dropdown text-lg bg-base-200 outline-base-content outline-solid outline-2 p-2 rounded-md opacity-50">
            <option value="">Select Play First</option>
            <option value="">Macbeth</option>
        </select>

        <br><br>

        <button id="submit" type="submit" class="btn btn-lg" disabled>See My Script!</button>
    </form>

    @vite('resources/js/custom-scripts/roleSelect.js')
</x-master-layout>