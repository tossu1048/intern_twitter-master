<div class="card card-profile mb-4">
    <div class="card-header bg-danger"></div>
    <div class="card-block text-center">

            <a>
            <img class="avatar card-profile-img" src="{{ asset('images/no-thumb.png') }}">
        </a>

        <div class="card-title my-2">

            <a class="font-weight-bold text-inherit d-block" href="{{ route('account') }}"></a>
            <h1> {{ $url_name }}</h1>
            &#64;{{ $email }}
        </div>
    </div>
</div>
