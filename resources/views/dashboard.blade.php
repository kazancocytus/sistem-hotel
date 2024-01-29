@if(auth()->user()->roles_name === "Admin")

    @include('admin.index_admin')

@endif