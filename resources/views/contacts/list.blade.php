@extends('layouts.app')
@section('content')
<nav class="container mt-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Contact List</li>
    </ol>
</nav>
<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <h1 class="mb-4">Contact List</h1>
        <a href="{{ route('contacts-create') }}" class="btn btn-primary mb-4">Add More Contacts</a>
    </div>
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->phone }}</td>
                <td>
                    <!-- Add Trash Bin Icon for Delete -->
                    <span id="delete-btn-{{ $contact->id }}" onclick="confirmDelete({{ $contact->id }})">
                        <img src="{{ asset('delete.png')}}" width="22px" alt="">
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
        {{ $contacts->links() }}
    </table>
</div>

<script>
    function confirmDelete(contactId) {
        // Use SweetAlert to confirm deletion
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form to delete the contact
                let form = document.createElement('form');
                form.action = `/contacts/delete/${contactId}`;
                form.method = 'POST';

                // Add csrf token and method override for DELETE
                let csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}';
                form.appendChild(csrfToken);

                let method = document.createElement('input');
                method.type = 'hidden';
                method.name = '_method';
                method.value = 'DELETE';
                form.appendChild(method);

                document.body.appendChild(form);
                form.submit();  // Submit the form
            }
        });
    }
</script>
@endsection
