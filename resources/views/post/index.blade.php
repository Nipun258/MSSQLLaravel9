<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Post List') }}
</h2>

</x-slot>
<div class="container">
    <main class="mx-auto m-4">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('status')}}</strong>
                    </button>
                </div>
                @endif
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <a href="{{ route('post.add')}}" class="btn btn-primary btn-sm float-end">Add Post</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Length</th>
                                    <th scope="col" style="width: 20%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1; @endphp
                                @forelse($posts as $key => $post)
                                <tr class="text-white">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $post->titel }}</td>
                                    <td>{{ $post->description}}</td>
                                    <td>{{ $post->length}}</td>
                                    <td>
                                    <a href="{{ route('post.edit',$post->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('post.delete',$post->id)}}" class="btn btn-danger" id="delete">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <th scope="row">No Record Found</th>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</x-app-layout>