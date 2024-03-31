@if(auth()->user()->roles_name === "Admin")

    @include('admin.index_admin')

    @elseif(auth()->user()->roles_name === "User")

    @include('home')

@endif