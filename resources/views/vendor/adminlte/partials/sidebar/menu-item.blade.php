@inject('menuItemHelper', \JeroenNoten\LaravelAdminLte\Helpers\MenuItemHelper)
{{--Aqui se va a validar el tipo de usuario--}}
@php
$tipo = Auth::user()->tipo;
@endphp
{{--Fin de la validacion del tipo de usuario--}}

@if (isset($item['header']))
    @if ($tipo == 'user' && substr($item['header'], 0, 4) == 'user')
        @php
        $item['header'] = substr($item['header'], 4, strlen($item['header']));
        @endphp
        @include('adminlte::partials.sidebar.set-menu')
    @elseif($tipo == 'admin' && substr($item['header'], 0, 4) == 'admi')
        @php
        $item['header'] = substr($item['header'], 4, strlen($item['header']));
        @endphp
        @include('adminlte::partials.sidebar.set-menu')
    @endif
@elseif (isset($item['text']))
    @if ($tipo == 'user' && substr($item['text'], 0, 4) == 'user')
        @php
        $item['text'] = substr($item['text'], 4, strlen($item['text']));
        @endphp
        @include('adminlte::partials.sidebar.set-menu')
    @elseif($tipo == 'admin' && substr($item['text'], 0, 4) == 'admi')
        @php
        $item['text'] = substr($item['text'], 4, strlen($item['text']));
        @endphp
        @include('adminlte::partials.sidebar.set-menu')
    @endif
@else
    @include('adminlte::partials.sidebar.set-menu')
@endif
