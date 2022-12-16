<div class="p-10 my-8 rounded-lg bg-slate-200 max-w-2xl mx-auto">
    <form wire:submit.prevent="submit">
        {{ $this->form }}

        <button class="rounded mt-6 px-6 py-3 bg-primary-900 text-white w-full">
            {{ __('Submit') }}
        </button>
    </form>
</div>
