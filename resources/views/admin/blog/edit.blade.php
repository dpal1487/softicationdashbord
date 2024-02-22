@extends('layouts.app')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blog Form</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Blog </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <form method="POST" action="{{ route('admin.blog.update', @$blog->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="blog_name">Name</label>
                                <input type="text" class="form-control" value="{{ @$blog->name }}" name="name" id="blog_name" placeholder="Enter blog name">
                            </div>
                            <div class="form-group">
                                <label for="blog_title">Title</label>
                                <input type="text" class="form-control" value="{{ @$blog->title }}" id="blog_title" name="title" placeholder="Enter blog title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Update Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <img id="imagePreview" src="{{ asset('images/blog/'.@$blog->image) }}" style="max-width: 200px; max-height: 200px;">
                            </div>
                            <div class="form-group">
                                <label for="blog_description">Description</label>
                                <textarea type="text" class="form-control" id="blog_description" name="description" rows="3" placeholder="Enter ...">{{ @$blog->description }}</textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection