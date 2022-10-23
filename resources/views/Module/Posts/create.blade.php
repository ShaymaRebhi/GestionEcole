@extends('layouts.mainlayout')
@section('content')
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div class="mb-6">
        <label class="block">
            <span class="text-gray-700">Title</span>
            <input type="text" name="title"
                   class="block w-full @error('title') border-red-500 @enderror mt-1 rounded-md" placeholder=""
                   value="{{old('title')}}" />
        </label>
        @error('title')
        <div class="text-sm text-red-600">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="category" value="{{ __('Category') }}" >
        <select name="category" id="category" class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
            <option value="">Select Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id() }}">{{ $category->name() }}</option>
            @endforeach
        </select>
        </label>
    </div>
    <div>
        <label for="tags" value="{{ __('Tags') }}" >
        <select name="tags[]" id="tags" x-data="{}" x-init="function () { choices($el) }" class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" multiple>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id() }}">{{ $tag->name() }}</option>
            @endforeach
        </select>
        </label>
    </div>
    <div class="mb-6">
        <label class="block">
            <span class="text-gray-700">description</span>
            <textarea class="block w-full mt-1 rounded-md " name="body"
            rows="3"> {{old('body')}}</textarea>
        </label>
        @error('body')
        <div class="text-sm text-red-600">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>

</form>
@endsection
