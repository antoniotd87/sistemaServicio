@php($logout_url = View::getSection('logout_url') ?? config('adminlte.logout_url',
'logout'))
@php($profile_url = View::getSection('profile_url') ?? config('adminlte.profile_url', 'logout'))

@if (config('adminlte.usermenu_profile_url', false))
    @php($profile_url = Auth::user()->adminlte_profile_url())
@endif

@if (config('adminlte.use_route_url', false))
    @php($profile_url = $profile_url ? route($profile_url) : '')
    @php($logout_url = $logout_url ? route($logout_url) : '')
    @else
    @php($profile_url = $profile_url ? url($profile_url) : '')
    @php($logout_url = $logout_url ? url($logout_url) : '')
@endif
@if (Auth::user()->tipo == 'admin')
<style>
    .navbar-badge{
        font-size: 0.9rem;
        font-weight: 700;
    }
</style>
<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-primary navbar-badge">{{Auth::user()->unreadNotifications->count()}}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        @foreach (Auth::user()->unreadNotifications()->paginate(3) as $item)
            <div class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                    <div class="media-body">
                        <div class="d-flex justify-content-between">
                            <h3 class="dropdown-item-title">
                                {{{$item['data']['nombre']}}}
                            </h3>
                            {{-- <button type="button" class="btn btn-danger btn-sm">x</button> --}}
                        </div>
                        <p class="text-sm">{{{$item['data']['mensaje']}}}</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> {{$item->created_at->diffForHumans()}}</p>
                    </div>
                </div>
                <!-- Message End -->
            </div>
            <div class="dropdown-divider"></div>
        @endforeach
        <a href="{{ route('notificacion.index') }}" class="dropdown-item dropdown-footer">Mirar todas las notificaciones</a>
    </div>
</li>
@endif
<li class="nav-item dropdown user-menu">

    {{-- User menu toggler --}}
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        @if(config('adminlte.usermenu_image'))
            <img src="{{ Auth::user()->adminlte_image() }}"
                 class="user-image img-circle elevation-2"
                 alt="{{ Auth::user()->name }}">
        @endif
        <span @if(config('adminlte.usermenu_image')) class="d-none d-md-inline" @endif>
            {{ Auth::user()->name }}
        </span>
    </a>

    {{-- User menu dropdown --}}
    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

        {{-- User menu header --}}
        @if(!View::hasSection('usermenu_header') && config('adminlte.usermenu_header'))
            <li class="user-header {{ config('adminlte.usermenu_header_class', 'bg-primary') }}
                @if(!config('adminlte.usermenu_image')) h-auto @endif">
                @if(config('adminlte.usermenu_image'))
                    <img src="{{ Auth::user()->adminlte_image() }}"
                         class="img-circle elevation-2"
                         alt="{{ Auth::user()->name }}">
                @endif
                <p class="@if(!config('adminlte.usermenu_image')) mt-0 @endif">
                    {{ Auth::user()->name }}
                    @if(config('adminlte.usermenu_desc'))
                        <small>{{ Auth::user()->adminlte_desc() }}</small>
                    @endif
                </p>
            </li>
        @else
            @yield('usermenu_header')
        @endif

        {{-- Configured user menu links --}}
        @each('adminlte::partials.navbar.dropdown-item', $adminlte->menu("navbar-user"), 'item')

        {{-- User menu body --}}
        @hasSection('usermenu_body')
            <li class="user-body">
                @yield('usermenu_body')
            </li>
        @endif

        {{-- User menu footer --}}
        <li class="user-footer">
            @if($profile_url)
                @if (Auth::user()->tipo == 'user')

                    <a href="{{$profile_url."/".Auth::user()->estudiante->id}}" class="btn btn-default btn-flat">
                        <i class="fa fa-fw fa-user"></i>
                        {{ __('adminlte::menu.profile') }}
                    </a>
                @else
                    <a href="{{$profile_url."/".Auth::user()->administrador->id."/admin"}}" class="btn btn-default btn-flat">
                        <i class="fa fa-fw fa-user"></i>
                        {{ __('adminlte::menu.profile') }}
                    </a>
                @endif
            @endif
            <a class="btn btn-default btn-flat float-right @if(!$profile_url) btn-block @endif"
               href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-fw fa-power-off"></i>
                {{ __('adminlte::adminlte.log_out') }}
            </a>
            <form id="logout-form" action="{{ $logout_url }}" method="POST" style="display: none;">
                @if(config('adminlte.logout_method'))
                    {{ method_field(config('adminlte.logout_method')) }}
                @endif
                {{ csrf_field() }}
            </form>
        </li>

    </ul>

</li>
<script>
    document.addEventListener('DOMContentLoaded',()=>{
        // alert('hola 3')
    })

</script>
