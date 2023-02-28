<!DOCTYPE html>
<head>
<title>Post</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
<table class="table text-center table-bordered"> 
    <tr>
        <th>Title</th>
        <th>Story</th>
        <th>Name</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Tags</th>
        @if (auth()->user()->role == 'Admin')
        <th>Delete</th>
        @endif
    </tr>
@foreach ($story as $stor)
    <tr>
            <td>{{$stor->title}}</td>
            <td>{{$stor->story}}</td>
            <td>{{$stor->author_name}}</td>
            <td>{{$stor->created_at}}</td>
            <td>{{$stor->updated_at}}</td>
            <td>{{$stor->tags}}</td>
            @if (auth()->user()->role == 'Admin')
            <td><a href="{{ route('delete', $stor->slug) }}">Delete</a></td>
            @endif
            </tr>
@endforeach
</table>

<div class="text-center mx-5">
    <button onclick="location.href='{{ $_SERVER['HTTP_REFERER'] }}'" type="button">Go Back</button>
</div>
</body>
</html>