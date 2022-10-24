@extends('layouts.mainlayout')
@section('content')
    <div class="container-fluid py-4 ">
        <div class="row">
            <div class="col-12">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="card ">
                                    <div class="card-header pb-0 text-center">
                                        <div class="card-header pb-0 text-center">
                                            <h3 class="font-weight-bolder text-info text-gradient">Add post</h3>
                                        </div>
                                    </div>
                                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.store') }}">
                            @csrf
            <!-- title input -->
            <div class="">
                <label class="form-label" for="title">Title</label>
                <input class="form-control @error('title') border-red-500 @enderror mt-1 rounded-md" placeholder=""
                       name="title" value="{{old('title')}}" id="title" type="text" />
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Category address input -->
            <div class="">
                <label class="form-label" for="emailAddress">Category</label>
                <select name="category" class="form-control text-sm " data-toggle="select"  tabindex="-98" >
                    <option label=" select.. ">  </option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id() }}">{{ $category->name() }}</option>
                    @endforeach
                </select>
                @error('category')
                <div class="alert alert-danger">Category required</div>
                @enderror
            </div>
            <!-- Tag address input -->
            <div class="">
                <label class="form-label" for="tags" value="{{ __('Tags') }}">Tags</label>
                <select  class="form-control text-sm" data-toggle="select" tabindex="-98" name="tags[]" id="tags" x-data="{}" x-init="function () { choices($el) }" multiple>
                    <option label=" select.. ">  </option>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id() }}">{{ $tag->name() }}</option>
                    @endforeach
                </select>

            </div>

            <!-- Message input -->
            <div class="">
                <label class="form-label" for="body">Body</label>
                <textarea class="form-control" name="body" id="body" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required">{{old('body')}}</textarea>
                @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            <!-- Form submit button -->
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </div>
                        </form>
    </div>
    </div>
        </div>
    </div>
    </div>


@endsection
