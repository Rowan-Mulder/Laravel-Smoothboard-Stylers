@php
    $active = $active ?? '';
    $activeSub = $activeSub ?? '';
    $activePage = $activePage ?? '';
@endphp
<footer class="border-top footer text-muted">
    <div class="container d-flex justify-content-between">
        <div>&copy; 2021 - {{ __('messages.Smoothboard Stylers') }}</div>

		@if ($active != 'Contact')
            <div class="m-2">
                <h3>{{ __('messages.Contact info')}}</h3>
                @include('web.sections.static.contact_info')
            </div>
		@endif
    </div>
</footer>
