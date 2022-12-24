<script>
    @php
        $dataUrl = [
            'login' => route('login'),
            'logout' => route('logout'),
            'foodList' => route('food.list'),
            'foodCreate' => route('food.create'),
            'foodShow' => route('food.show'),
            'foodUpdate' => route('food.update'),
            'galleryCreate' => route('gallery.create'),
            'galleryList' => route('gallery.list'),
            'galleryShow' => route('gallery.show'),
            'galleryUpdate' => route('gallery.update'),
            'eventCreate' => route('event.create'),
            'eventList' => route('event.list'),
            'eventShow' => route('event.show'),
            'eventUpdate' => route('event.update')
        ];
        $auth = [
            'userLogin' => auth()->check() ? auth()->user() : false,
        ];
    @endphp
    window.auth = @json($auth);
    window.dataUrl = @json($dataUrl);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="{{ asset('static/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('static/js/main.js') }}"></script>
