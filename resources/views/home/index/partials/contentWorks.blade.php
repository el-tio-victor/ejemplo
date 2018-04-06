
@foreach($works as $work)
    <div class=" d-flex flex-column 
        {{( ($loop->iteration/2) == 1 )? 'flex-lg-row-reverse ' : 'flex-lg-row '}}
        sc-trigger work">
        <div class="col-lg-6  d-flex justify-content-center justify-content-lg-end sc-anim transition-x  work-img">
            @foreach($work->images as $image)
                <img class='' src="{{asset('images/works/'.$image->name)}}" alt="">
            @endforeach
        </div>
        <div class="col-lg-6  d-flex flex-column flex-nowrap align-items-center justify-content-center 
            {{( ($loop->iteration/2) == 1 )? 'align-items-lg-end ' : 'align-items-lg-start '}}
            work-info">
            <div class="work-wrapper  ">
                <h3 class='text-center'>{{$work->title }}</h3>
                <div class=' m-auto border-top border-bottom '>
                    <strong>{{$work->services}}</strong>
                </div>
                <div class=' m-auto border-bottom'>
                    <p class='f1'>
                        {{$work->detail}}
                    </p>
                </div>
                @if($work->url != '')

                <div class='text-center m-3'>
                    <a class='c-w f1-25' href=" {{$work->url}} ">
                        <span class="bg-o p-1 btn-l ">
                            Ver
                            <i class="icon-arrow-right2 transition"></i>
                        </span>
                    </a>
                </div>
                @endif
                {{--
                
                --}}
            </div>
        </div>
    </div>
@endforeach





