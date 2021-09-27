<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <div class="logo-icon-container">
                        <img src="/admin/voyager-assets?path=images%2Flogo-icon-light.png" alt="Logo Icon">
                    </div>
                    <div class="title">{!! setting('site.title') !!}</div>
                </a>
            </div>
            {{--                            <!-- .navbar-header -->--}}
            {{--            <div class="panel widget center bgimage"--}}
            {{--                 style=" background-size: cover; background-position: 0px;">--}}
            {{--                --}}{{--                                 style="background-image:url(/admin/voyager-assets?path=images%2Fbg.jpg); background-size: cover; background-position: 0px;">--}}
            {{--                <div class="dimmer"></div>--}}
            {{--                --}}{{--                                <div class="panel-content">--}}
            {{--                --}}{{--                                    <img src="/storage/users/July2020/MPRBne7JAm1Zif7GQMRh.jpg" class="avatar" alt="Admin avatar">--}}
            {{--                --}}{{--                                    <h4>Admin</h4>--}}
            {{--                --}}{{--                                    <p>admin@admin.com</p>--}}

            {{--                --}}{{--                                    <a href="/admin/profile" class="btn btn-primary">Профиль</a>--}}
            {{--                --}}{{--                                    <div style="clear:both"></div>--}}
            {{--                --}}{{--                                </div>--}}
            {{--            </div>--}}

        </div>
        <div id="adminmenu">

            {{--        <admin-menu :items="{{  menu('admin','_json') }}"></admin-menu>--}}
            {{--        <admin-menu :items="{{  menu('operator_left_menu','_json') }}"></admin-menu>--}}
            {{--        <admin-menu :items="[{&quot;id&quot;:1,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Dashboard&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-boat&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:1,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.dashboard&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin&quot;,&quot;active&quot;:true,&quot;children&quot;:[]},{&quot;id&quot;:4,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;\u0414\u043e\u0441\u0442\u0443\u043f&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-lock&quot;,&quot;color&quot;:&quot;#000000&quot;,&quot;parent_id&quot;:null,&quot;order&quot;:2,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-16T15:27:21.000000Z&quot;,&quot;route&quot;:&quot;voyager.roles.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/roles&quot;,&quot;children&quot;:[]},{&quot;id&quot;:3,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;\u041f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u0438&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-person&quot;,&quot;color&quot;:&quot;#000000&quot;,&quot;parent_id&quot;:null,&quot;order&quot;:3,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-16T15:26:59.000000Z&quot;,&quot;route&quot;:&quot;voyager.users.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/users&quot;,&quot;children&quot;:[]},{&quot;id&quot;:2,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Media&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-images&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:5,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.media.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/media&quot;,&quot;children&quot;:[]},{&quot;id&quot;:12,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Posts&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-news&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:6,&quot;created_at&quot;:&quot;2020-07-15T15:13:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:13.000000Z&quot;,&quot;route&quot;:&quot;voyager.posts.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/posts&quot;,&quot;children&quot;:[]},{&quot;id&quot;:13,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Pages&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-file-text&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:7,&quot;created_at&quot;:&quot;2020-07-15T15:13:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:13.000000Z&quot;,&quot;route&quot;:&quot;voyager.pages.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/pages&quot;,&quot;children&quot;:[]},{&quot;id&quot;:11,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Categories&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-categories&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:8,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.categories.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/categories&quot;,&quot;children&quot;:[]},{&quot;id&quot;:5,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Tools&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-tools&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:9,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:null,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik&quot;,&quot;active&quot;:false,&quot;children&quot;:[{&quot;id&quot;:6,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Menu Builder&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-list&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:5,&quot;order&quot;:10,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.menus.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/menus&quot;,&quot;children&quot;:[]},{&quot;id&quot;:7,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Database&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-data&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:5,&quot;order&quot;:11,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.database.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/database&quot;,&quot;children&quot;:[]},{&quot;id&quot;:8,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Compass&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-compass&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:5,&quot;order&quot;:12,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.compass.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/compass&quot;,&quot;children&quot;:[]},{&quot;id&quot;:9,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;BREAD&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-bread&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:5,&quot;order&quot;:13,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.bread.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/bread&quot;,&quot;children&quot;:[]},{&quot;id&quot;:14,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Hooks&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-hook&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:5,&quot;order&quot;:13,&quot;created_at&quot;:&quot;2020-07-15T15:13:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:13.000000Z&quot;,&quot;route&quot;:&quot;voyager.hooks&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/hooks&quot;,&quot;children&quot;:[]}]},{&quot;id&quot;:10,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Settings&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-settings&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:14,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.settings.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/settings&quot;,&quot;children&quot;:[]}]"></admin-menu>--}}

            <ul class="nav navbar-nav">

                {{--                {!! menu('admin') !!}--}}
{{--                <li class="dropdown">--}}
{{--                    <a target="_self" href="#5-dropdown-element" data-toggle="collapse"--}}
{{--                       aria-expanded="true" class=""><span class="icon voyager-tools"></span> <span--}}
{{--                            class="title">Tools</span></a>--}}
{{--                    <div id="5-dropdown-element" class="panel-collapse collapse in" aria-expanded="true" style="">--}}
{{--                        <div class="panel-body">--}}
{{--                            <ul class="nav navbar-nav">--}}
{{--                                <li class=""><a target="_self" href="http://simpatik/admin/database"><span--}}
{{--                                            class="icon voyager-data"></span> <span class="title">Database</span></a>--}}
{{--                                    <!----></li>--}}
{{--                                <li class=""><a target="_self" href="http://simpatik/admin/compass"><span--}}
{{--                                            class="icon voyager-compass"></span> <span class="title">Compass</span></a>--}}
{{--                                    <!----></li>--}}
{{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </li>--}}



                {{--                {!! menu('hr_operator_left_menu','navigation.left_menu_custom') !!}--}}

                {{--                {!! menu('hr','navigation.left_menu_custom') !!}--}}

                {{--                {!! menu('hr','navigation.left_menu_custom') !!}--}}
                {!! menu('hr_left_menu','navigation.left_menu_custom') !!}

                {{--                {!! menu('operator_left_menu','navigation.left_menu_custom') !!}--}}
                {{--                {!! menu('operator_left_menu','navigation.left_menu_custom') !!}--}}

                @php
                    $workingStatus = new \App\WorkingStatus();

                //если в очереди, то показываем меню
                if ($workingStatus->GetCurrentUserWorkingStatus()){
                @endphp

                {{--                                {!! menu('admin') !!}--}}
                {{--                                {!! menu('operator_left_menu','bootstrap') !!}--}}

                {{--                <li class=""><a target="_self" href="/">--}}
                {{--                        <span class="icon voyager-boat"></span>--}}
                {{--                        <span class="title">Чат та дзвінки</span></a>--}}
                {{--                </li>--}}
                {{--                <li class=""><a target="_self" href="/">--}}
                {{--                        <span class="icon voyager-boat"></span>--}}
                {{--                        <span class="title">CRM</span></a>--}}
                {{--                </li>--}}
                {{--                <li class="">--}}
                {{--                    <a target="_self" href="/client">--}}
                {{--                        <span class="icon voyager-person"></span>--}}
                {{--                        <span class="title">Карта клиента</span></a>--}}
                {{--                </li>--}}
                {{--                <li class="">--}}
                {{--                    <a target="_self" href="/clients">--}}
                {{--                        <span class="icon voyager-people"></span> <span class="title">Список клиентов</span></a>--}}
                {{--                </li>--}}
                {{--                <li class="">--}}
                {{--                    <a target="_self" href="/requests">--}}
                {{--                        <span class="icon voyager-basket"></span>--}}
                {{--                        <span class="title">Заявки</span></a>--}}
                {{--                </li>--}}
                {{--                <li class="">--}}
                {{--                    <a target="_self" href="/"><span class="icon voyager-search"></span>--}}
                {{--                        <span class="title">Поиск</span></a></li>--}}


                {{--                <li class="">--}}
                {{--                    <a target="_self" href="/">--}}
                {{--                        <span class="icon voyager-lock"></span> <span class="title">Заказы СМС предоплата</span></a>--}}
                {{--                </li>--}}


                @php
                    }
                @endphp

                {{--                {!! menu('admin','bootstrap') !!}--}}

                {{--                <li class="dropdown"><a target="_self" href="#5-dropdown-element" data-toggle="collapse"--}}
                {{--                                        aria-expanded="false"><span class="icon voyager-tools"></span> <span--}}
                {{--                            class="title">Отчеты</span></a>--}}
                {{--                    <div id="5-dropdown-element" class="panel-collapse collapse ">--}}
                {{--                        <div class="panel-body">--}}
                {{--                            <ul class="nav navbar-nav">--}}
                {{--                                <li class=""><a target="_self" href="/"><span--}}
                {{--                                            class="icon voyager-list"></span> <span--}}
                {{--                                            class="title">Создать отчет</span></a> <!----></li>--}}
                {{--                                <li class=""><a target="_self" href="/"><span--}}
                {{--                                            class="icon voyager-data"></span> <span class="title">Список отчетов</span></a>--}}
                {{--                                    <!----></li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </li>--}}


                {{--                <li class=""><a target="_self" href="/admin/settings"><span--}}
                {{--                            class="icon voyager-settings"></span>--}}
                {{--                        <span class="title">Settings</span></a> <!----></li>--}}

                {{--                <li class="">--}}
                {{--                    <a target="_self" href="/requests">--}}
                {{--                        <span class="icon voyager-basket"></span>--}}
                {{--                        <span class="title">Заявки</span></a>--}}
                {{--                </li>--}}
                {{--                <li class="">--}}
                {{--                    <a target="_self" href="http://simpatik" style="" >--}}
                {{--                        <span class="icon voyager-boat"></span>--}}
                {{--                        <span class="title">!Основные</span>--}}

                {{--                    </a>--}}
                {{--                </li>--}}
            </ul>


            {{--            {!! menu('workplace', 'bootstrap') !!}--}}

        </div>
        {{--        <admin-menu :items="{{  menu('admin','_json') }}"></admin-menu>--}}
        {{--                            <admin-menu :items="{{  menu('admin','_json') }}"></admin-menu>--}}
        {{--                            <admin-menu :items="[{&quot;id&quot;:1,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Dashboard&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-boat&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:1,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.dashboard&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin&quot;,&quot;active&quot;:true,&quot;children&quot;:[]},{&quot;id&quot;:4,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;\u0414\u043e\u0441\u0442\u0443\u043f&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-lock&quot;,&quot;color&quot;:&quot;#000000&quot;,&quot;parent_id&quot;:null,&quot;order&quot;:2,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-16T15:27:21.000000Z&quot;,&quot;route&quot;:&quot;voyager.roles.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/roles&quot;,&quot;children&quot;:[]},{&quot;id&quot;:3,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;\u041f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u0438&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-person&quot;,&quot;color&quot;:&quot;#000000&quot;,&quot;parent_id&quot;:null,&quot;order&quot;:3,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-16T15:26:59.000000Z&quot;,&quot;route&quot;:&quot;voyager.users.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/users&quot;,&quot;children&quot;:[]},{&quot;id&quot;:2,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Media&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-images&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:5,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.media.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/media&quot;,&quot;children&quot;:[]},{&quot;id&quot;:12,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Posts&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-news&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:6,&quot;created_at&quot;:&quot;2020-07-15T15:13:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:13.000000Z&quot;,&quot;route&quot;:&quot;voyager.posts.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/posts&quot;,&quot;children&quot;:[]},{&quot;id&quot;:13,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Pages&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-file-text&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:7,&quot;created_at&quot;:&quot;2020-07-15T15:13:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:13.000000Z&quot;,&quot;route&quot;:&quot;voyager.pages.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/pages&quot;,&quot;children&quot;:[]},{&quot;id&quot;:11,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Categories&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-categories&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:8,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.categories.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/categories&quot;,&quot;children&quot;:[]},{&quot;id&quot;:5,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Tools&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-tools&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:9,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:null,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik&quot;,&quot;active&quot;:false,&quot;children&quot;:[{&quot;id&quot;:6,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Menu Builder&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-list&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:5,&quot;order&quot;:10,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.menus.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/menus&quot;,&quot;children&quot;:[]},{&quot;id&quot;:7,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Database&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-data&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:5,&quot;order&quot;:11,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.database.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/database&quot;,&quot;children&quot;:[]},{&quot;id&quot;:8,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Compass&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-compass&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:5,&quot;order&quot;:12,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.compass.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/compass&quot;,&quot;children&quot;:[]},{&quot;id&quot;:9,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;BREAD&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-bread&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:5,&quot;order&quot;:13,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.bread.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/bread&quot;,&quot;children&quot;:[]},{&quot;id&quot;:14,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Hooks&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-hook&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:5,&quot;order&quot;:13,&quot;created_at&quot;:&quot;2020-07-15T15:13:13.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:13.000000Z&quot;,&quot;route&quot;:&quot;voyager.hooks&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/hooks&quot;,&quot;children&quot;:[]}]},{&quot;id&quot;:10,&quot;menu_id&quot;:1,&quot;title&quot;:&quot;Settings&quot;,&quot;url&quot;:&quot;&quot;,&quot;target&quot;:&quot;_self&quot;,&quot;icon_class&quot;:&quot;voyager-settings&quot;,&quot;color&quot;:null,&quot;parent_id&quot;:null,&quot;order&quot;:14,&quot;created_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-07-15T15:13:12.000000Z&quot;,&quot;route&quot;:&quot;voyager.settings.index&quot;,&quot;parameters&quot;:null,&quot;href&quot;:&quot;http:\/\/simpatik\/admin\/settings&quot;,&quot;children&quot;:[]}]"></admin-menu>--}}

        {{--        {!! menu('workplace') !!}--}}
        {{--                                        {!! menu('admin') !!}--}}


    </nav>
</div>


{{--<ul>--}}

{{--    @php--}}

{{--        if (Voyager::translatable($items)) {--}}
{{--            $items = $items->load('translations');--}}
{{--        }--}}

{{--    @endphp--}}

{{--    @foreach ($items as $item)--}}

{{--        @php--}}

{{--            $originalItem = $item;--}}
{{--            if (Voyager::translatable($item)) {--}}
{{--                $item = $item->translate($options->locale);--}}
{{--            }--}}

{{--            $isActive = null;--}}
{{--            $styles = null;--}}
{{--            $icon = null;--}}

{{--            // Background Color or Color--}}
{{--            if (isset($options->color) && $options->color == true) {--}}
{{--                $styles = 'color:'.$item->color;--}}
{{--            }--}}
{{--            if (isset($options->background) && $options->background == true) {--}}
{{--                $styles = 'background-color:'.$item->color;--}}
{{--            }--}}

{{--            // Check if link is current--}}
{{--            if(url($item->link()) == url()->current()){--}}
{{--                $isActive = 'active';--}}
{{--            }--}}

{{--            // Set Icon--}}
{{--            if(isset($options->icon) && $options->icon == true){--}}
{{--                $icon = '<i class="' . $item->icon_class . '"></i>';--}}
{{--            }--}}

{{--        @endphp--}}

{{--        <li class="{{ $isActive }}">--}}
{{--            <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}">--}}
{{--                {!! $icon !!}--}}
{{--                <span>{{ $item->title }}</span>--}}
{{--            </a>--}}
{{--            @if(!$originalItem->children->isEmpty())--}}
{{--                @include('voyager::menu.default', ['items' => $originalItem->children, 'options' => $options])--}}
{{--            @endif--}}
{{--        </li>--}}
{{--    @endforeach--}}

{{--</ul>--}}

