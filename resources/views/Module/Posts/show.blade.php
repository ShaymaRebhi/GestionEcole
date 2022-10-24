@extends('layouts.mainlayout')
@section('content')
    @include('livewire.post.delete')
    <div class="container">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="{{ route('posts.index')}}">Post</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">{{ $post->title() }}</li>
        </ol>
        <div class="row">
            <div class="col-8 ">

            <div class="card">
            <div class="card-header pb-0 text-center">
                <h5 class="text-center text-uppercase">{{$post->title()}}</h5>
            </div>


            <br>
            <br>
            <div class="card-body">
                    <div class="post-block">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex mb-3">
                                <div class="mr-2">
                                    <a href="#!" class="text-dark"></a>
                                </div>
                                <div>
                                    <h5 class="mb-0"><a href="#!" class="text-dark">{{$user->name}}</a></h5>
                                    <p class="mb-0 text-muted">{{$post->created_at->diffForHumans()}}</p>
                                </div>
                            </div>
                            <div class="post-block__user-options">
                                <a href="#!" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item text-dark" href="{{ route('posts.edit', $post->slug()) }}"><i class="fa fa-pencil mr-1"></i>Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="post-block__content mb-2">
                            <p>{{$post->body}}</p>

                        </div>

                        <hr>
                        <div class="post-block__comments">
                            <!-- Comment Input -->
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Add your comment">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>
<br>
                            <br>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

        </div>

            <div class="col-4 ">
                <div class="card" >

                            <h4 class="px-3 py-4 op-5 m-0">
                                Related posts
                            </h4>
                            @forelse ($related as $result)
                                <hr class="m-0">
                                <div class="pos-relative px-3 py-3">
                                    <h6 class="text-primary text-sm">
                                        <a  class="text-primary" href="{{ route('posts.show', [$result->category->slug(), $result->slug()]) }}">{{ $result->title }}</a>
                                    </h6>
                                    <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">{{$result->created_at->diffForHumans()}}</a> </p>
                                </div>
                                <hr class="m-0">
                            @empty
                                <tr>
                                    <td colspan="5">No Record Found</td>
                                </tr>
                            @endforelse

                    </div>
            </div>
                </div>
            </div>

        </div>











    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

@endsection
