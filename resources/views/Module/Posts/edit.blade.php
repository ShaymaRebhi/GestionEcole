@extends('layouts.mainlayout')
@section('content')

    <section class="flex flex-col col-span-3 gap-y-4">
        <small class="text-sm text-gray-400">Post>{{ $post->title() }}>edit</small>
        <article class="p-5 bg-white shadow">
            <div class="w-full">

                {{-- Create --}}
                <div class="space-y-6">
                    <form action="{{ route('posts.update', $post->slug()) }}">
                        <div class="space-y-8">
                            {{-- Title --}}
                            <div>
                                <label for="title" value="{{ __('title') }}"> </label>
                                <input id="title" class="block w-full mt-1" type="text" name="title" value="{{$post->title()}}" autofocus />
                            </div>
                            {{-- Category --}}
                            <div>
                                <label for="category" value="{{ __('Category') }}" > </label>
                                <select name="category" id="category" class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id() }}" @if($category->id() == $selectedCategory->id) selected @endif>
                                            {{ $category->name() }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- Tags --}}
                            <div>
                                <label for="tags" value="{{ __('Tags') }}" ></label>
                                <select name="tags[]" id="tags" x-data="{}" x-init="function () { choices($el) }" class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" multiple>
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
                                <label for="body" value="{{ __('Description') }}" ></label>
                                <textarea class="block w-full mt-1 rounded-md " name="body" rows="3">
                                    {{ $post->body() }}
                                </textarea>
                            </div>
                            {{-- Button --}}
                            <button>
                                {{ __('Update') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </section>

@endsection
