console.log('dddddddddddddd')
@if (Session::has('success_msg'))
console.log('{{ session('success_msg') }}')
    toastr.success(
    "👋 {{ session('success_msg') }}.",
    "Success!", {
    closeButton: !0,
    tapToDismiss: !1,
    rtl: "rtl" === $("html").attr("data-textdirection")
    }
    );
@endif
@if (Session::has('error_msg'))
console.log({{ session('error_msg') }})
    toastr.error(
    "👋 {{ session()->get('error_msg') }}.",
    "Error!", {
    closeButton: !0,
    tapToDismiss: !1,
    rtl: "rtl" === $("html").attr("data-textdirection")
    }
    );
@endif
@if (isset($error_msg))
console.log('safdsadfsadfs')
toastr.error(
    "👋 {{ $error_msg }}.",
    "Error!", {
    closeButton: !0,
    tapToDismiss: !1,
    rtl: "rtl" === $("html").attr("data-textdirection")
    }
    );
@endif
@if (isset($errors))
@foreach ($errors->all() as $error)
console.log('{{ $error }}');
toastr.error(
    "👋 {{ $error }}.",
    "Error!", {
    closeButton: !0,
    tapToDismiss: !1,
    rtl: "rtl" === $("html").attr("data-textdirection")
    }
    );
@endforeach
@endif
