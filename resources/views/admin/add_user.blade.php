<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')


<body>
  @include('admin.includes.header')

  
  <div class="container my-5">
    <div class="mx-2">
      <h2 class="fw-bold fs-2 mb-5 pb-2">Add USER</h2>
      <form action="{{route('user.store')}}" method="POST" class="px-md-5" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
          <div class="col-md-5">
            <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" class="form-control py-2" />
            @error('first_name')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-5">
            <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" class="form-control py-2" />
            @error('last_name')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">UserName:</label>
          <div class="col-md-10">
            <input type="text" name="user_name" value="{{ old('user_name') }}" placeholder="e.g. Jhon33" class="form-control py-2" />
            @error('user_name')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Email:</label>
          <div class="col-md-10">
            <input type="email" name="email" value="{{ old('email') }}" placeholder="e.g. Jhon@example.com" class="form-control py-2" />
            @error('email')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Active:</label>
          <div class="col-md-10">
            <input type="checkbox" name="active" @checked(old('Active')) value="1" class="form-check-input" style="padding: 0.7rem;" />
          </div>
          </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Password:</label>
          <div class="col-md-10">
            <input type="password" name="password" placeholder="Password" class="form-control py-2" />
            @error('password')
             <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Confirm Password:</label>
          <div class="col-md-10">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control py-2" />
          </div>
        </div>
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Add User
          </button>
        </div>
      </form>
    </div>
  </div>
  </main>
  @include('admin.includes.js')

</body>

</html>