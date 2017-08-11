<li class="media list-group-item p-4">
      <article class="d-flex w-100">
        <a class="font-weight-bold text-inherit d-block" href="{{ route('account') }}">
             <img class="media-object d-flex align-self-start mr-3" src="{{ asset('images/no-thumb.png') }}">
         </a>
         <div class="media-body">
             <div class="mb-2">
                 <time class="float-right small text-muted">
                     </time>
                 <a class="text-inherit" href="#">
                     <h> {{ $url_name }}</h>
                 </a>

                 <time class="float-right small text-muted">{{ $tweet->updated_at }}</time>
                 <div
                 <h class="float-md-none big ">{{ $tweet->body }}</h>
                 </div>
             </div>
         </div>
    </article>
</li>

{{--ユーザ情報一覧--}}

{{--<li>--}}
                {{--<a class="font-weight-bold text-inherit d-block" href="{{ route('account') }}">--}}
                        {{--<img class="media-object d-flex align-self-start mr-0" src="{{ asset('images/no-thumb.png') }}">--}}
                    {{--</a>--}}
                    {{--<a class="big text" >--}}
                        {{--<h> {{ $url_name }} </h>--}}
                    {{--</a>--}}
                    {{--<time class="float-right small text-muted">{{ $tweet->updated_at }}</time>--}}
                    {{--<h class="float-md-none big ">{{ $tweet->body }}</h>--}}

{{--</li>--}}
