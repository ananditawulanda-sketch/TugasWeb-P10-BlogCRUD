@if (session('success'))
    <div class="card">
        {{ session('success') }}
    </div>
@endif