<footer class="border-top footer text-muted">
    <div class="container d-flex justify-content-between">
        <div>
            &copy; 2021 - Smoothboard Stylers
        </div>

		@if ($active != 'Contact')
            <div class="m-2">
                <h3>Contactgegevens</h3>
                @include('web.sections.static.contactgegevens')
            </div>
		@endif
    </div>
</footer>
