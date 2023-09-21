<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ page_title()->getTitle() }}</title>

    <meta name="robots" content="noindex,follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if (setting('admin_logo') || config('core.base.general.logo'))
        <meta property="og:image" content="{{ setting('admin_logo') ? RvMedia::getImageUrl(setting('admin_logo')) : url(config('core.base.general.logo')) }}">
    @endif
    <meta name="description" content="{{ strip_tags(trans('core/base::layouts.copyright', ['year' => now()->format('Y'), 'company' => setting('admin_title', config('core.base.general.base_name')), 'version' => get_cms_version()])) }}">
    <meta property="og:description" content="{{ strip_tags(trans('core/base::layouts.copyright', ['year' => now()->format('Y'), 'company' => setting('admin_title', config('core.base.general.base_name')), 'version' => get_cms_version()])) }}">

    @if (setting('admin_favicon') || config('core.base.general.favicon'))
        <link rel="icon shortcut" href="{{ setting('admin_favicon') ? RvMedia::getImageUrl(setting('admin_favicon'), 'thumb') : url(config('core.base.general.favicon')) }}">
    @endif

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    {!! Assets::renderHeader(['core']) !!}

    @if (BaseHelper::adminLanguageDirection() == 'rtl')
        <link rel="stylesheet" href="{{ asset('vendor/core/core/base/css/rtl.css') }}">
    @endif

    @yield('head')

    @stack('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bottom-navbar{
            min-height: unset !important;

        }.dropdown-header-name{
            color:#6f6b7d !important;
            font-weight: normal !important;
            font-size:15px !important;
        }
        .active-header{

            background: linear-gradient(72.47deg, #7367f0 22.16%, rgba(115, 103, 240, 0.7) 76.47%);
            color: #fff !important;
            box-shadow: 0px 2px 6px 0px rgba(115, 103, 240, 0.48);
            font-weight: normal;
            border-radius:0.375rem;
            font-size: 15px;
        }
        .active-header .text-white-icons-left,  .active-header .text-white-icons-right{
            color:#fff !important;
            width:1.5rem !important;
        }

        .text-white-icons-left{
            color:#6f6b7d;
            font-size:15px !important;
            text-align: left !important;
            width:1.5rem !important;

        }
        .text-white-icons-right{
            color: color:#6f6b7d;
            font-size:15px !important;
            text-align: right !important;

        }

        .nav-dropdown{
            height:unset !important;
            max-height: unset !important;
            min-height: unset !important;
            padding:9px 15px !important;
            color:#6f6b7d;
        }
        .breadcrumb{
            padding: 20px 0px;
            font-size: 22px;
        }
        </style>
</head>
<body @if (BaseHelper::adminLanguageDirection() == 'rtl') dir="rtl" @endif class="@yield('body-class', 'page-sidebar-closed-hide-logo page-content-white page-container-bg-solid') {{ session()->get('sidebar-menu-toggle') ? 'page-sidebar-closed' : '' }}" style="@yield('body-style')">
    {!! apply_filters(BASE_FILTER_HEADER_LAYOUT_TEMPLATE, null) !!}

    @yield('page')

    @include('core/base::elements.common')

    {!! Assets::renderFooter() !!}

    @yield('javascript')

    <div id="stack-footer">
        @stack('footer')
    </div>

    {!! apply_filters(BASE_FILTER_FOOTER_LAYOUT_TEMPLATE, null) !!}
</body>
</html>
