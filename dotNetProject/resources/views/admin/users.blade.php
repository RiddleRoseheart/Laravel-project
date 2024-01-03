@extends('admin.adminLayout')
@section('content')
<h1>Users</h1>

<h1>User List</h1>
 <table class="table">
     <thead>
         <tr>
             <th>Name</th>
             <th>Role</th>
             <th>Action</th>
         </tr>
     </thead>
     <tbody>
         @foreach($users as $user)
             <tr>
                 <td>{{ $user->name }}</td>
                 <td>
                     <span class="badge {{ $user->is_admin ? 'bg-danger' : 'bg-success' }}">
                         {{ $user->is_admin ? 'Admin' : 'User' }}
                     </span>
                 </td>
                 <td>
                     <form action="{{ route('admin.updateRole', ['user' => $user->id]) }}" method="post">
                         @csrf
                         @method('patch')
                         <select name="role_{{ $user->id }}" onchange="this.form.submit()">
                             <option value="1" {{ $user->is_admin ? 'selected' : '' }}>Admin</option>
                             <option value="0" {{ $user->is_admin ? '' : 'selected' }}>User</option>
                         </select>
                     </form>
                 </td>
             </tr>
         @endforeach
     </tbody>
 </table>

@endsection