<!DOCTYPE html>

<html>
<body>
@php
    $image = $data->project_thambnail;
    // dd($d);
@endphp
    <h1>WELCOME TO AMFL</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod

    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,

    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo

    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse

    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non

    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <br/>
    <strong>.</strong>
    {{-- <img src="{{ public_path('frontend/assets/img/amfl/Icon.jpg')}}" alt="Image" style="width: 550px; height: 200px"> --}}
    <img src="{{ public_path('\\', '/') . $image }}" alt="Image" style="width: 550px; height: 200px">
    <br/>

    {{-- <strong>Storage Folder:</strong> --}}

    {{-- <img src="{{ storage_path('app/public/dummy.jpg') }}" style="width: 200px; height: 200px"> --}}

</body>

</html>
