<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

<body>
@include('admin.includes.header')

    <div class="container my-5">
        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">Unread Messages</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-borderless display" id="_table">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Message</th>
                            <th scope="col">Sender</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($unreadMessages as $contact)
                        <tr>
                            <th scope="row">{{ $contact->created_at->format('d M Y') }}</th>
                            <td>
                                <a href="{{ route('message.show', $contact->id) }}" class="text-decoration-none text-dark">
                                    {{ Str::limit($contact->message, 50, '...') }}
                                </a>
                            </td>
                            <td>{{ $contact->name }}</td>
                            <td class="text-center">
                                <form action="{{ route('message.destroy', $contact->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Are you sure you want to delete this unread message?')">  
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{$contact->id}}">
                                    <button type="submit" class="btn btn-link text-decoration-none text-dark p-0" value="delete">
                                        <img src="{{ asset('admin/assets/images/trash-can-svgrepo-com.svg') }}" alt="Delete">
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <hr>

        <div class="mx-2">
            <div class="row justify-content-between mb-2 pb-2">
                <h2 class="fw-bold fs-2 col-auto">Read Messages</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-borderless display" id="_table2">
                    <thead>
                        <tr>
                            <th scope="col">Created At</th>
                            <th scope="col">Message</th>
                            <th scope="col">Sender</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($readMessages as $contact)
                        <tr>
                            <th scope="row">{{ $contact->created_at->format('d M Y') }}</th>
                            <td>
                                <a href="{{ route('message.show', $contact->id) }}" class="text-decoration-none text-dark">
                                    {{ Str::limit($contact->message, 50, '...') }}
                                </a>
                            </td>
                            <td>{{ $contact->name }}</td>
                            <td class="text-center">
                                <form action="{{ route('message.destroy', $contact->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Are you sure you want to delete this message?')">  
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{$contact->id}}">
                                    <button type="submit" class="btn btn-link text-decoration-none text-dark p-0">
                                        <img src="{{ asset('admin/assets/images/trash-can-svgrepo-com.svg') }}" alt="Delete">
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.includes.js')

</body>

</html>
