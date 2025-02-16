@extends('layouts.app')
@section('content')
<nav class="container mt-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item active">Create Contact</li>
    </ol>
</nav>
<div class="container text-center">
    <h1>Contact Management System</h1>
    <p class="lead">Add and manage your contacts with ease. Import contacts in bulk using an XML file.</p>
    <a href="{{ route('contacts-create') }}" class="btn btn-primary me-2">Add New Contacts</a>
    <a href="{{ route('contacts-list') }}" class="btn btn-success">View All Contacts</a>

    
</div>
@endsection