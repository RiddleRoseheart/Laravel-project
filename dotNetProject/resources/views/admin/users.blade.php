@extends('admin.adminLayout')
@section('content')

<!-- on this page we will take all the users, we wll be able to update, delete and create them  -->

<div class="container mt-3 form-container">
    <h1 class="text-center">Users</h1>

    <h2 class="text-center mb-4">User List</h2>

    <table class="table round" style="background: rgba(255, 255, 255, 0.3); position: relative;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Role Change</th>
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
                    <button type="button" class="btn btn-danger" onclick="toggleModal('deleteModal{{ $user->id }}')">Delete</button>

                    <div class="custom-modal" id="deleteModal{{ $user->id }}" style="display: none;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirm Deletion</h5>
                                <button type="button" class="btn-close" onclick="toggleModal('deleteModal{{ $user->id }}')"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete {{ $user->name }}?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" onclick="toggleModal('deleteModal{{ $user->id }}')">Cancel</button>
                                <form action="{{ route('admin.deleteUser', ['user' => $user->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function toggleModal(modalId) {
        var modal = document.getElementById(modalId);
        modal.style.display = modal.style.display === 'none' ? 'block' : 'none';
    }
</script>
@endsection
