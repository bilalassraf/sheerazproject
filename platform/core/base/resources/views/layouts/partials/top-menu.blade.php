<div class="top-menu">
    <ul class="nav navbar-nav float-end">
        @auth

            <li class="dropdown dropdown-user">
                <a href="javascript:void(0)" class="dropdown-toggle dropdown-header-name" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img alt="{{ Auth::user()->name }}" class="rounded-circle" src="{{ Auth::user()->avatar_url }}" />

                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('users.profile.view', Auth::id()) }}"><i class="icon-user"></i> {{ trans('core/base::layouts.profile') }}</a></li>
                    <li><a href="{{ route('access.logout') }}" class="btn-logout"><i class="icon-key"></i> {{ trans('core/base::layouts.logout') }}</a></li>
                </ul>
            </li>
        @endauth
    </ul>
</div>
