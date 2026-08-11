<x-master-layout title="Contact">
    <h1 class="text-3xl font-bold text-center mb-2">Contact</h1>
    <p class="text-lg text-center mb-6">Have a suggestion? Found a bug? Let me know below!</p>

    <form action="/contact" method="POST" class="flex justify-center">
        @csrf

        <fieldset class="flex flex-col items-center fieldset bg-base-200 border-base-300 rounded-box w-md border p-4">
            <legend class="fieldset-legend text-lg">Contact</legend>

            <legend class="fieldset-legend pt-0 text-base">Name</legend>
            <input type="name" class="input w-full" placeholder="Your Name" />

            <legend class="fieldset-legend text-base">Email</legend>
            <input type="email" class="input w-full" placeholder="Your Email" />

            <legend class="fieldset-legend text-base">Message</legend>
            <textarea class="textarea h-24 w-full" placeholder="Please write here"></textarea>

            <button class="btn btn-neutral mt-4 w-40 text-base p-5">Submit</button>
        </fieldset>
    </form>
</x-master-layout>