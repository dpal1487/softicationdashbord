@extends('layouts.app')
@section('styles')
<style>
    .image-thumbnail {
        /* border: 1px solid #ccc; */
        width: 50px;
        border-radius: 50%;
        /* Add any other styles you need */
    }
</style>
@endsection
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Contacts') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <a href="/admin/blog/create" class="btn btn-primary float-sm-right btn-sm"> Add New Blog <a>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">

                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                <tr class="align-items-center">
                                    <td><img src="{{asset('images/blog/'.$blog->image)}}" class="rounded" alt="Cinque Terre" width="80" height="80"></td>
                                    <td>{{ $blog->name }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->description }}</td>
                                    <td>
                                        <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-primary">Edit</a>

                                        <button type="button" onclick="confirmDelete('{{$blog->id}}')" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer clearfix">
                        {{ $blogs->links() }}
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function confirmDelete(blogId) {

        console.log(blogId);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                axios.delete('/admin/blog/' + blogId)
                    .then(function(response) {
                        console.log(response);
                        if (response.data.success) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            );
                            // Optional: Reload the page or update the UI
                            window.location.reload();
                        }
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            }
        });
    }
</script>