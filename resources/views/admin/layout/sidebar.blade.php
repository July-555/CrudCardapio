<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/produtos') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.produto.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/clientes') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.cliente.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/restaurantes') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.restaurante.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/reservas') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.reserva.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
