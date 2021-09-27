

        {{--        Правый верхний угол--}}
        <ul class="nav navbar-nav  navbar-right ">
            <li class="dropdown profile">
                <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button"
                   aria-expanded="false"><img src="/storage/{!! Auth::user()->getAttributes()['avatar'] !!}"
                                              class="profile-img"> <span
                        class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-animated">
                    <li class="profile-img">
                        <img src="/storage/{!! Auth::user()->getAttributes()['avatar'] !!}"
                             class="profile-img">
                        <div class="profile-body">
                            <h5>{!! Auth::user()->getAttributes()['name'] !!}</h5>
                            <h6>{!! Auth::user()->getAttributes()['email'] !!}</h6>
                        </div>
                    </li>
                    {{--                            <li class="divider"></li>--}}
                    {{--                                                        <li class="class-full-of-rum">--}}
                    {{--                                                            <a href="/admin/profile" >--}}
                    {{--                                                                <i class="voyager-person"></i>--}}
                    {{--                                                                Профиль--}}
                    {{--                                                            </a>--}}
                    @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('developer'))
                        <li class="divider"></li>
                        <li class="class-full-of-rum">
                            <a href="/admin/">
                                <i class="voyager-person"></i>
                                Админка
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="/" target="_blank">
                            <i class="voyager-home"></i>
                            Главная
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-block">
                                <i class="voyager-power"></i>
                                Выход
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


{{--            @else--}}

{{--                <a href="{{ route('login') }}">Login</a>--}}

{{--            @endauth--}}
{{--        @endif--}}




