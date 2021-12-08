<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.Layout.formhead')
</head>
<body>
  
 @yield('content')

<footer>
 @include('admin.Layout.formfooter')
</footer>
 @include('admin.Layout.formscript')
 
</body>
</html>