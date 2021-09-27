@include('modals.call_place_exit')
<nav class="navbar navbar-default navbar-fixed-top navbar-top">

    <div class="container-fluid">

        <div class="navbar-header" style="white-space: nowrap;">


            <button class="hamburger btn-link">
                <span class="hamburger-inner"></span>
            </button>
            <ol class="breadcrumb hidden-xs">
                <li class="active"><i class="voyager-boat"></i> Панель управления</li>
            </ol>
            <ol class="breadcrumb hidden-xs">
                <li class="active"><i class="voyager-search"></i>
                    <input name="search" placeholder="Поиск">
                </li>
            </ol>

            {{--            <ol class="breadcrumb ">--}}
            {{--                <li class="active">--}}
            {{--                    <a href="" class="btn btn-success btn-add-new">--}}
            {{--                <span>--}}
            {{--                    Стать в очередь--}}
            {{--                </span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--            </ol>--}}

{{--            {{ $working_status }}--}}
            @php
                //контроллер не видит рабочую сессию, а только переключение кнопки,
                // поэтому меню отрабатываю здесь через модуль

//            if (isset ($request->all()['working_status']))--}}
//            if (isset ($working_status))
//                $working_status = $working_status;
//            else
//                $working_status = 0;

            //if (isset ($working_status))
              //  var_dump($working_status);
            //exit;

                    $workingStatus = new \App\WorkingStatus();

                    //если кнопку нажали, контроллер выдает номер статуса и мы добавляем его в сессию
               if (isset ($working_status))
                   $workingStatus->SetCurrentUserWorkingStatus($working_status);

               //если статус 0, то показываем "войти"
               if (!$workingStatus->GetCurrentUserWorkingStatus()){
            @endphp
            <form name="working" action="/working" method="POST">
                {{ csrf_field() }}
                <button class="btn btn-success" style="margin-top:20px">
                    Стать в очередь
                </button>
                <input type="hidden" name="working_status" value="1">
            </form>
            @php
                }
                else{
            @endphp
{{--            <button class="btn btn-warning place-out" style="margin-top:20px">--}}
{{--                Выйти из очереди--}}
{{--            </button>--}}
            <span ><a href="javascript:;" title="Выйти"
                     class="btn btn-sm btn-warning pull-right call_place_exit" data-id="6" id="out-6"  style="margin-top:18px">
                    <span class="hidden-xs hidden-sm">Выйти</span></a></span>
          @php
                }
            @endphp






            {{--            </span>--}}


            {{--             <ol class="breadcrumb hidden-xs">--}}
            {{--                <li class="active"><i class="voyager-search"></i>--}}
            {{--                    <label><input type="search" class="form-control input-sm" placeholder="Поиск" --}}
            {{--                                  aria-controls="dataTable"></label>--}}
            {{--                </li>--}}
            {{--            </ol>--}}

        </div>


