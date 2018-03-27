
@foreach($works as $work)
    <div class=" d-flex flex-column {{( ($loop->iteration/2) == 1 )? 'flex-md-row-reverse ' : 'flex-md-row '}}
          -success work">
        <div class="col-lg-6 d-flex justify-content-end   work-img">
            @foreach($work->images as $image)
                <img src="{{asset('images/works/'.$image->name)}}" alt="">
            @endforeach
        </div>
        <div class="col-lg-6 d-flex flex-column flex-nowrap justify-content-center align-items-end  work-info">
            <div class="work-wrapper ">
                <h3 class='text-center'>{{$work->title }}</h3>
                <div class='col-lg-6 m-auto border-top border-bottom '>
                    <strong>{{$work->services}}</strong>
                </div>
                <div class='col-lg-6 m-auto border-bottom'>
                    <p class='f1'>
                        {{$work->detail}}
                    </p>
                </div>
            </div>
            
        </div>
    </div>
@endforeach