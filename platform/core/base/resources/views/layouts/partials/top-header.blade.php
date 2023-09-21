<div class="page-header navbar navbar-static-top" style="background-color: rgba(255, 255, 255, 0.95) !important; border-bottom:1px solid #dbdade;padding:6px 0px;">
    <div class="container">
    <div class="page-header-inner">

            <div class="page-logo">
                @if (setting('admin_logo') || config('core.base.general.logo'))
                    <a href="{{ route('dashboard.index') }}">
                        <img src="{{ setting('admin_logo') ? RvMedia::getImageUrl(setting('admin_logo')) : url(config('core.base.general.logo')) }}" alt="logo" class="logo-default" />
                    </a>
                @endif

            </div>



            @include('core/base::layouts.partials.top-menu')
        </div>
</div>
</div>
@include('core/base::layouts.partials.top-menu-bottom')
