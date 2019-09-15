<!doctype HTML>
<html lang="en">

@include('layouts.parts.head')

<body class="preload">
    @include('layouts.parts.navigation')
    @yield('content')
    @include('layouts.parts.footer')


    @if (!empty($modal))
      @include('admin.layouts.parts.modal')
    @endif
</body>

</html>
