@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>Blabalbalbalbal {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
