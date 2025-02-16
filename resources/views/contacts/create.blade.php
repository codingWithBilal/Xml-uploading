@extends('layouts.app')
@section('content')
<nav class="container mt-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Upload Contacts XML</li>
    </ol>
</nav>
<div class="container mt-4 text-center">
    <h1>Upload Contacts via XML</h1>
    <p class="lead">Easily upload your contact list by importing an XML file.</p>
    <form action="{{ route('contacts-import-xml') }}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        <div class="mb-4">
            <label for="xmlFile" class="form-label">Select XML File</label> (<a href="{{ asset('sample_contacts.xml')}}" download="sample_contacts.xml" class="text-decoration-none text-light">Download Sample XML</a>)

            <input type="file" class="form-control" id="xmlFile" name="xml_file" accept=".xml" required>
        </div>
        <button type="submit" class="btn btn-warning">Upload XML</button>
    </form>
</div>
@endsection