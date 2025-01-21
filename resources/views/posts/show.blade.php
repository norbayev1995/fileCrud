<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #343a40;
        }

        .post-header {
            font-size: 2.5rem;
            font-weight: 700;
        }

        .post-details h1 {
            font-size: 1.5rem;
            color: #6c757d;
        }

        .img-preview {
            display: block;
            margin: 0 auto 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .created-updated {
            color: #495057;
            font-weight: 600;
        }

        .back-btn {
            margin-top: 20px;
        }
    </style>
</head>

<body>
<div class="container mt-5">
    <h1 class="text-center post-header mb-4">{{ $post->name  }}</h1>
    <h1 class="text-center">{{ $post->body }}</h1>
    <img class="img-preview" src="{{ asset('storage/'.$post->image) }}" width="200" alt="Post Image">
    <div class="post-details text-center">
        <h1 class="created-updated">Created At: {{ date('Y-m-d', strtotime($post->created_at)) }}</h1>
        <h1 class="created-updated">Updated At: {{ date('Y-m-d', strtotime($post->updated_at)) }}</h1>
    </div>
    <!-- Back to Index Button -->
    <div class="text-center back-btn">
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
