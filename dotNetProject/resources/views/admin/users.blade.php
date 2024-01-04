@extends('admin.adminLayout')
@section('content')

<!-- on this page we will take all the users, we wll be able to update, delete and create them  -->

<h1>Users</h1>

<h1>User List</h1>
<table class="table">
      <thead>
         <tr>
               <th>Name</th>
               <th>Role</th>
               <th>RoleChange</th>
               <th>Delete</th>
         </tr>
      </thead>
      <tbody>
         <!-- Getting all the users from the database and their needed information -->
         @foreach($users as $user)
         <tr>
               <td>{{ $user->name }}</td>
               <td>
                  <!-- Is the user an admin or just a regular user?  -->
                  <span class="badge {{ $user->is_admin ? 'bg-danger' : 'bg-success' }}">
                     {{ $user->is_admin ? 'Admin' : 'User' }}
                  </span>
               </td>
               <td> 
                  <!-- Here we call the update route from user controller -->
                  <form action="{{ route('admin.updateRole', ['user' => $user->id]) }}" method="post">
                     @csrf
                     @method('patch')
                     <!-- We will use a dropdown to change the user's role -->
                     <select class="form-select" name="role_{{ $user->id }}" onchange="this.form.submit()">
                           <option value="1" {{ $user->is_admin ? 'selected' : '' }}>Admin</option>
                           <option value="0" {{ $user->is_admin ? '' : 'selected' }}>User</option>
                     </select>
                  </form>
               </td>
               <td>
                  <form action="{{ route('admin.deleteUser', ['user' => $user->id]) }}" method="post">
                     @csrf
                     @method('delete')
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $user->id }}">
                           Delete
                     </button>

                     <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $user->id }}" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                       <h5 class="modal-title" id="deleteModalLabel{{ $user->id }}">Confirm Deletion</h5>
                                       <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                       Are you sure you want to delete {{ $user->name }}?
                                 </div>
                                 <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                       <button type="submit" class="btn btn-danger">Delete</button>
                                 </div>
                              </div>
                           </div>
                     </div>
                  </form>
               </td>
         </tr>
         @endforeach
      </tbody>
</table>

@endsection