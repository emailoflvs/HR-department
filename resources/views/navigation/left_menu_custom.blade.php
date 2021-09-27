@if(!isset($innerLoop))

{{--    <ul class="nav navbar-nav">--}}
{{--        <ul class="dropdown">--}}

        @else


{{--    Подменю--}}
{{--                        <ul class="dropdown">--}}
{{--            <ul class="nav navbar-nav ">--}}
{{--                <li class="dropdown">--}}
{{--                    <a target="_self" href="#5-dropdown-element" data-toggle="collapse"--}}
{{--                       aria-expanded="true" class=""><span class="icon voyager-tools"></span> <span--}}
{{--                            class="title">Tools</span></a>--}}
{{--                    <div id="5-dropdown-element" class="panel-collapse collapse in" aria-expanded="true" style="">--}}
{{--                        <div class="panel-body">--}}
{{--                            <ul class="nav navbar-nav">--}}

@endif

                {{--                <a href="http://simpatik" target="_self" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false"><span><i class="icon voyager-tools"></i></span> <span class="title">Отчеты</span> <span class="caret"></span></a>--}}
                @php

                    if (Voyager::translatable($items)) {
                        $items = $items->load('translations');
                    }

                @endphp


                @foreach ($items as $item)

                    @php
                        $originalItem = $item;
                        if (Voyager::translatable($item)) {
                            $item = $item->translate($options->locale);
                        }

                        //var_dump($item['icon_class']);
                //exit;
                        $listItemClass = null;
                        $linkAttributes =  null;
                        $styles = null;
                        $icon = null;
                            $caret = null;

                        // Background Color or Color
                        if (isset($options->color) && $options->color == true) {
                            $styles = 'color:'.$item->color;
                        }
                        if (isset($options->background) && $options->background == true) {
                            $styles = 'background-color:'.$item->color;
                        }

                        // Set Icon
                        if(isset($options->icon) && $options->icon == true){
                            $icon = '<i class="icon ' . $item->icon_class . '"></i>';
                        }elseif($item['icon_class']){
                            $icon = '<i class="icon ' . $item['icon_class'] . '"></i>';
                        }

                        // With Children Attributes
                        if(!$originalItem->children->isEmpty()) {
                            $linkAttributes =  'class="dropdown-toggle" data-toggle="dropdown"';
                            $caret = '<span class="caret"></span>';

                            if(url($item->link()) == url()->current()){
                                $listItemClass = 'dropdown active';
                            }else{
                                $listItemClass = 'dropdown';
                            }
                        }
                    @endphp

                    @if(!$originalItem->children->isEmpty())
                        <li class="dropdown">
                            <a target="_self" href="#{{ count($originalItem->children) }}-dropdown-element"
                               data-toggle="collapse"
                               aria-expanded="true" class="">
                                <span>{!! $icon !!}</span>
                                <span
                                    class="title" style="text-transform:none;">{{ $item->title }}</span></a>
                            <div id="{{ count($originalItem->children) }}-dropdown-element"
                                 class="panel-collapse collapse in" aria-expanded="true" style="">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        {{--                                                    <li class=""><a target="_self" href="http://simpatik/admin/database"><span--}}
                                        {{--                                                                class="icon voyager-data"></span> <span class="title">Database</span></a>--}}
                                        {{--                                                        <!----></li>--}}


                                        @foreach ($originalItem->children as $child)
                                            <li class="">
                                                <a href="{{ url($child->link()) }}" target="{{ $child->target }}"
                                                   style="{{ $styles }}" {!! $linkAttributes ?? '' !!}>
                                                    <span><i class="icon {{ $child['icon_class'] }} "></i></span>
                                                    <span class="title"
                                                          style="text-transform:none;">{{ $child->title }}</span>
                                                    {!! $caret !!}
                                                </a>
                                                @if(!$child->children->isEmpty())
                                                    {{--                            @include('voyager::menu.bootstrap', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])--}}
                                                    @include('navigation.left_menu_custom', ['items' => $child->children, 'options' => $options, 'innerLoop' => true])
                                                @endif
                                            </li>

                                            {{--                                                        <li class=""><a target="_self" href="http://simpatik/admin/database"><span--}}
                                            {{--                                                                    class="icon {{ $item->icon }}"></span> <span class="title">{{ $item->title }}</span></a>--}}
{{--                                                            <!----></li>--}}

{{--                                                        {{ $child->title }}--}}
                                                    @endforeach
                                                    @php

                                                    @endphp
                                                </ul>
                                    @else

                        {{--                    } else {--}}
                        {{--//                            $item = $submenu;--}}

                        {{--                    @endphp--}}

                        <li class="{{ $listItemClass }}">
                            <a href="{{ url($item->link()) }}" target="{{ $item->target }}"
                               style="{{ $styles }}" {!! $linkAttributes ?? '' !!}>
                                <span>{!! $icon !!}</span>
                                <span class="title" style="text-transform:none;">{{ $item->title }}</span>
                                {!! $caret !!}
                            </a>
                            @if(!$originalItem->children->isEmpty())
                                {{--                            @include('voyager::menu.bootstrap', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])--}}
                                @include('navigation.left_menu_custom', ['items' => $originalItem->children, 'options' => $options, 'innerLoop' => true])
                            @endif
                        </li>

                        @endif
                        @endforeach

@if(!isset($innerLoop))

       @else

                        </ul>
                        </div>
                    </div>
                </li>

@endif
