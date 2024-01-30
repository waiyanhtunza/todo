<div x-data="{ showMessage: true }" x-show="showMessage" x-init="setTimeout(() => showMessage = false, 2000)">
    @if (session()->has('success'))
        <div class="alert alert-success w-2/3 h-14 text-center mx-auto">
            <strong>{{ session('success') }}</strong>
        </div>
    @endif
</div>
