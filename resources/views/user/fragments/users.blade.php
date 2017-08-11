<ul class="row list-unstyled">
    <li class="col-xl-4 col-md-6">
        <div class="card card-profile mb-4">
            <div class="card-header bg-danger"></div>
            <div class="card-block">
                <a href="#">
                    <img class="avatar card-profile-img" src="{{ asset('images/no-thumb.png') }}">
                </a>

                <span class="float-right">
                    @include('fragments.friendship.middle')
                </span>

                <strong class="card-title d-block">

                    <div class="card-title my-2">
                        <a href="{{ route('profile') }}" class="font-weight-bold text-inherit d-block">
                            <h2> {{ $url_name }}</h2>

                            {{--<a class="text-inherit" href="#">{{ $user->url_name }}</a>--}}

                    </div>

                </strong>

                <h class="float-md-none big ">{{ $user->url_name }}</h>

                <p class="mb-4">

                    Software engineer（JavaとかDBとかAWSとか） 空前絶後のKotlinブーム中
                </p>
            </div>
        </div>
    </li>
</ul>




