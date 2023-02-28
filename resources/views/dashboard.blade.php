<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- {{ __("You're logged in!") }} -->
<!-- <table class="table text-center table-bordered table-striped"> 
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Role</th>
        <th>Email</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
@foreach ($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        @if ($user->role == 'Admin')
        <td>Admin</td>
        @endif
        @if ($user->role == 'User')
        <td>User</td>
        @endif
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>
    </tr>
@endforeach
</table> -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Email</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        @if ($user->role == 'Admin')
        <td>Admin</td>
        @endif
        @if ($user->role == 'User')
        <td>User</td>
        @endif
        <td>{{$user->email}}</td>
        <td>{{$user->created_at}}</td>
        <td>{{$user->updated_at}}</td>
    </tr>
    @endforeach
    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

