<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')


<body>
  @include('admin.includes.header')

    <div class="container my-5">
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">All Testimonials</h2>
                <a href="{{route('testimonial.create')}}"" class="btn btn-link  link-dark fw-semibold col-auto me-3">➕Add new testimonial</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover display" id="_table">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Name</th>
                            <th scope="col">Content</th>
                            <th scope="col">Published</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $testimonial)
                        <tr>
                            <th scope="row">{{ $testimonial->created_at->format('d M Y') }}</th>
                            <td>{{$testimonial->name}}</td>
                            <td>{{ Str::limit($testimonial->content, 20, '...') }}</td>
                            <td>{{ $testimonial->published ? 'Yes' : 'No' }}</td>
                            <td class="text-center"><a class="text-decoration-none text-dark" href="{{route('testimonial.edit', $testimonial->id)}}"><img src="{{ asset('admin/assets/images/edit-svgrepo-com.svg')}}"></a></td>
                            <td class="text-center">
                                <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST" 
                                    onsubmit="return confirm('Are you sure you want to delete this?')">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{$testimonial->id}}">
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>   
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.includes.js')

</body>

</html>