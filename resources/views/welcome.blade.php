<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .breadcrumb {
            background: transparent;
            padding: 15px 0 5px 0px;
        }
        .breadcrumb-item a {
            color: #f8f9fa;
            text-decoration: none;
        }
        .breadcrumb-item.active {
            color: #dcdde1;
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            font-weight: bold;
            margin-bottom: 20px;
        }
        p.lead {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .btn {
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 1rem;
        }
        .btn-primary {
            background-color: #5e60ce;
            border: none;
        }
        .btn-success {
            background-color: #4cd137;
            border: none;
        }
        .btn-primary:hover, .btn-success:hover {
            transform: scale(1.05);
            transition: 0.3s ease;
        }
    </style>
</head>
<body>
    <nav class="container mt-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Create Contact</li>
        </ol>
    </nav>
    <div class="container text-center">
        <h1>Contact Management System</h1>
        <p class="lead">Add and manage your contacts with ease. Import contacts in bulk using an XML file.</p>
        <a href="" class="btn btn-primary me-2">Add New Contact</a>
        <a href="" class="btn btn-success">View All Contacts</a>

        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>