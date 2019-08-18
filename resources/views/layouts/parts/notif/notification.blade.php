<li class="has_dropdown">
    <div class="icon_wrap">
        <span class="icon-bell"></span>
        {!! (Auth::user()->unreadNotifications->isEmpty() ? null : '<span class="notification_status noti"></span>') !!}
    </div>
    <div class="dropdown notification--dropdown">
        <div class="dropdown_module_header">
            <h6>My Notifications <span class="badge badge-primary" style="color:whitesmoke">{{Auth::user()->unreadNotifications->count()}}</span></h6>
        </div>
        <div class="notifications_module">
                @if (!Auth::user()->unreadNotifications->isEmpty())
                    @foreach (Auth::user()->unreadNotifications as $notification)
                    <div class="notification">
                        <div class="notification__info">
                            <div class="info_avatar">
                                <img src="{{asset('sb/img/notification_head.png')}}" alt="">
                            </div>
                            <div class="info">
                                <p>
                                    {{$notification->data['event']}}
                                    {{-- <a href="#">Mccarther Coffee Shop</a> --}}
                                </p>
                                {{-- {{$notification->markAsRead()}} --}}
                                <p class="time">{{$notification->created_at->diffForHumans()}}</p>
                            </div>
                        </div>
                        <!-- end /.notifications -->
                        <div class="notification__icons ">
                            <span class="icon-heart loved noti_icon"></span>
                        </div>
                    </div>
                    <!-- end /.notifications -->
                    @endforeach

                    {{-- <div class="text-center m-top-30 p-left-20 p-right-20"><a href="notification.html" class="btn btn-primary btn-md btn-block">View All</a></div> --}}
                @else
                <div class="notification">
                    <div class="notification__info">
                            <div class="info">
                                <p>Saat ini anda tidak memiliki pemberitahuan</p>
                            </div>
                    </div>
                </div>
            @endif
        </div>
        <!-- end /.dropdown -->
    </div>
</li>
