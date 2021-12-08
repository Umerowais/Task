<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.head')
</head>
<body>
    <header>
        
   
    @include('admin.layout.sidebar')

</header>
@include('admin.layout.navbar')
 @yield('content')

<footer>
 @include('admin.layout.footer')
</footer>
 @include('admin.layout.script')

</body>
</html>