<div>
    @include('livewire.tag.tag')
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>Success!</strong> {{ session('message') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
        <div class="card">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0"> {{ __('Tags') }}</h6>
                        <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Search..." style="width: 230px" />
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn bg-gradient-dark mb-0" data-bs-toggle="modal" data-bs-target="#tag"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Tag</a>
                    </div>
                </div>
            </div>
            <div class="card-body p-3">
                <ul class="list-group">
                    @forelse ($tags as $tag)
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="ni ni-tag text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">{{ $tag->name }}</h6>
                                <span class="text-xs">123 closed, <span class="font-weight-bold">15 open</span></span>
                            </div>
                        </div>

                        <div class="ms-auto text-end">
                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" data-bs-toggle="modal" data-bs-target="#deleteTagModal" wire:click="deleteTag({{$tag->id}})"><i class="far fa-trash-alt me-2" ></i></a>
                            <a class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#updateTagModal" wire:click="editTag({{$tag->id}})"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i></a>
                        </div>
                    </li>
                    @empty
                        <tr>
                            <td colspan="5">No Record Found</td>
                        </tr>
                    @endforelse
                </ul>
                <br>
                <div class="col-6 text-end">
                    {{ $tags->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
