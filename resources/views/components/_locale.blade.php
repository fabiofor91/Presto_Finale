<form action="{{route('setLocale', $lang)}}" method="post">
    @csrf
    <button class="btn" type="submit">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="30" height="30" alt="language">
    </button>
</form>