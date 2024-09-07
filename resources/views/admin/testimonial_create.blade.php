<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')


<body>
  @include('admin.includes.header')


  <div class="container my-5">
    <div class="mx-2">
      <h2 class="fw-bold fs-2 mb-5 pb-2">Add Testimonial</h2>
      <form action="{{route('testimonial.store')}}" method="POST" class="px-md-5" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
          <div class="col-md-10">
            <input type="text" name="name" value="{{ old('name') }}" placeholder="e.g. Jhon Doe" class="form-control py-2" />
            @error('name')
              <div class="alert alert-warning">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Content:</label>
          <div class="col-md-10">
            <textarea name="content"  id="" rows="5" class="form-control">{{ old('content') }}</textarea>
            @error('content')
              <div class="alert alert-warning">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Published:</label>
          <div class="col-md-10">
            <input type="checkbox" name="published" class="form-check-input" style="padding: 0.7rem;" />
             @error('published')
                 <div class="alert alert-warning">{{ $message }}</div>
              @enderror
          </div>
        </div>
        <hr>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Image:</label>
          <div class="col-md-10">
            <input type="file" name="image" value="{{ old('image') }}" class="form-control" style="padding: 0.7rem;" />
             @error('image')
              <div class="alert alert-warning">{{ $message }}</div>
             @enderror
          </div>
        </div>
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Add Testimonial
          </button>
        </div>
      </form>
    </div>
  </div>
  </main>
  @include('admin.includes.js')

</body>

</html>
