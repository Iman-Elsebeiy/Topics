<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dataTables.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/styles.css') }}">
</head>

<body>

  @include('admin.includes.header')

    <div class="container my-5">
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">All Topics</h2>
                <a href="{{ route('topic.create') }}" class="btn btn-link link-dark fw-semibold col-auto me-3">➕ Add new topic</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover display" id="_table">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Content</th>
                            <th scope="col">No. of views</th>
                            <th scope="col">Published</th>
                            <th scope="col">Trending</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($topic as $topic)
                        <tr>
                            <th scope="row">{{ $topic->created_at->format('d M Y') }}</th>
                            <td><a class="text-decoration-none text-dark" href="{{ route('topic.show', $topic->id) }}"> {{ $topic->title }} </a></td>
                            <td>{{ $topic->category->category_name }}</td>
                            <td>{{ Str::limit($topic->content, 20, '...') }}</td>
                            <td>12</td>
                            <td>{{ $topic->published ? 'Yes' : 'No' }}</td>
                            <td>{{ $topic->trending ? 'Yes' : 'No' }}</td>
                            <td class="text-center">
                                <a class="text-decoration-none text-dark" href="{{ route('topic.edit', $topic->id) }}">
                                    <img src="{{ asset('admin/assets/images/edit-svgrepo-com.svg') }}" alt="Edit">
                                </a>
                            </td>
                            <td class="text-center">
                                <form action="{{ route('topic.destroy', $topic->id) }}" method="POST" 
                                    onsubmit="return confirm('Are you sure you want to delete this?')">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{$topic->id}}">
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>   
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#_table').DataTable();
        });
    </script>
</body>

</html>
