<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')


<body>
@include('admin.includes.header')

  
  <div class="container my-5">
    <div class="mx-2">
      <h2 class="fw-bold fs-2 mb-5 pb-2">Edit USER</h2>
      <form action="{{route('user.update', $user->id)}}" method="POST" class="px-md-5">
        @csrf
        @method('PUT')
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Name:</label>
          <div class="col-md-5">
            <input type="text" name="first_name" value="{{old('first_name', $user->first_name)}}" placeholder="First Name" class="form-control py-2" />
          </div>
          <div class="col-md-5">
            <input type="text" name="last_name" value="{{old('last_name', $user->last_name)}}" placeholder="Last Name" class="form-control py-2" />
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">UserName:</label>
          <div class="col-md-10">
            <input type="text" name="user_name" value="{{old('user_name', $user->user_name)}}" placeholder="e.g. Jhon33" class="form-control py-2" />
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Email:</label>
          <div class="col-md-10">
            <input type="email" name="email" value="{{old('email', $user->email)}}" placeholder="e.g. Jhon@example.com" class="form-control py-2" />
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Password:</label>
          <div class="col-md-10">
            <input type="password" placeholder="Password" class="form-control py-2" />
          </div>
        </div>
        <div class="form-group mb-3 row">
          <label for="" class="form-label col-md-2 fw-bold text-md-end">Active:</label>
          <div class="col-md-10">
            <input type="checkbox" name="active" @checked(old('active', $user->active)) value="1" class="form-check-input" style="padding: 0.7rem;" />
          </div>
        </div>
        <div class="text-md-end">
          <button class="btn mt-4 btn-secondary text-white fs-5 fw-bold border-0 py-2 px-md-5">
            Edit User
          </button>
        </div>
      </form>
    </div>
  </div>
  </main>
  @include('admin.includes.js')

</body>

</html>