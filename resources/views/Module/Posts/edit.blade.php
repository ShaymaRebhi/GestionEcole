@extends('layouts.mainlayout')
@section('content')

    <div class="container-fluid py-4 ">
        <div class="row">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="{{ route('posts.index')}}">Post</a></li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">{{ $post->title() }}</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">edit</h6>
            <div class="col-12">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card ">
                                <div class="card-header pb-0 text-center">
                                    <div class="card-header pb-0 text-center">
                                        <h3 class="font-weight-bolder text-info text-gradient">Edit post</h3>
                                    </div>
                                </div>


                                <div class="card-body">
                    <form action="{{ route('posts.update', $post->slug()) }}">

                            {{-- Title --}}
                        <div class="">
                                <label class="form-label" for="title" value="{{ __('title') }}">Title </label>
                                <input class="form-control @error('title') border-red-500 @enderror mt-1 rounded-md" id="title"  type="text" name="title" value="{{$post->title()}}"  />
                            @error('title')
                            <div class="text-center text-danger mb-3">{{ $message }}</div>
                            @enderror
                            </div>
                            {{-- Category --}}
                            <div>
                                <label class="form-label" for="category" value="{{ __('Category') }}">Category</label>
                                <select name="category" id="category" class="form-control text-sm" data-toggle="select"  tabindex="-98">
                                    <option label=" select.. ">  </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id() }}" @if($category->id() == $selectedCategory->id) selected @endif>
                                            {{ $category->name() }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- Tags --}}
                            <div>
                                <label class="form-label" for="tags" value="{{ __('Tags') }}" >Tags</label>
                                <select name="tags[]" id="tags" x-data="{}" x-init="function () { choices($el) }" class="form-control text-sm" data-toggle="select" tabindex="-98"  multiple>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id() }}" @if(in_array($tag->id(), $oldTags)) selected @endif
                                        >
                                            {{ $tag->name() }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            {{-- Body --}}
                            <div>
                                <label class="form-label" for="body" value="{{ __('Description') }}" >Body</label>
                                <textarea class="form-control"  name="body" style="height: 10rem;" >
                                    {{ $post->body() }}
                                </textarea>
                            </div>
                            {{-- Button --}}
                        <div class="d-grid">
                            <button class="btn btn-primary btn-lg" type="submit">
                                {{ __('Update') }}
                            </button>
                        </div>
                    </form>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </article>
    </section>

@endsection
