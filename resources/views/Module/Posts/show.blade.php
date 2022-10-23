@extends('layouts.mainlayout')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
        <div class="card">


            <h1 class="text-center text-uppercase">{{$post->title()}}</h1>
            <br>
            <br>

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
                                    <a class="dropdown-item text-dark" href="#!"><i class="fa fa-pencil mr-1"></i>Edit</a>
                                    <a class="dropdown-item text-danger" href="#!"><i class="fa fa-trash mr-1"></i>Delete</a>
                                </div>
                            </div>
                        </div>
                        <div class="post-block__content mb-2">
                            <p>{{$post->body}}</p>

                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-2">
                                <div class="d-flex">
                                    <a href="#!" class="text-danger mr-2"><span><i class="fa fa-heart"></i></span></a>
                                    <a href="#!" class="text-dark mr-2"><span>Comment</span></a>
                                </div>
                                <a href="#!" class="text-dark"><span>Share</span></a>
                            </div>
                            <p class="mb-0">Liked by <a href="#!" class="text-muted font-weight-bold">John doe</a> & <a href="#!" class="text-muted font-weight-bold">25 others</a></p>
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
                            <!-- Comment content -->
                            <div class="comment-view-box mb-3">
                                <div class="d-flex mb-2">

                                    <div>
                                        <h6 class="mb-1"><a href="#!" class="text-dark">John doe</a> <small class="text-muted">1m</small></h6>
                                        <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <div class="d-flex">
                                            <a href="#!" class="text-dark mr-2"><span><i class="fa fa-heart-o"></i></span></a>
                                            <a href="#!" class="text-dark mr-2"><span>Reply</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- More Comments -->
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


@endsection
