<div>
    @include('livewire.category.category')
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
                    <div class="card-header pb-0 px-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="mb-0"> {{ __('Categories') }}</h6>
                                <input type="search" wire:model="search" class="form-control float-end mx-2"
                                       placeholder="Search..." style="width: 230px"/>
                            </div>
                            <div class="col-6 text-end">
                                <a class="btn bg-gradient-dark mb-0" data-bs-toggle="modal"
                                   data-bs-target="#category"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New
                                    Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            @forelse ($categories as $category)
                                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-3 text-sm"> ID : {{ $category->id }}</h6>
                                        <span class="mb-2 text-xs">Name: <span
                                                class="text-dark font-weight-bold ms-sm-2">{{ $category->name }}</span></span>
                                        <span class="mb-2 text-xs">Slug: <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $category->slug }}</span></span>
                                        <span class="text-xs">Created At: <span
                                                class="text-dark ms-sm-2 font-weight-bold">{{ $category->createdAt() }}</span></span>
                                    </div>

                                    <div class="ms-auto text-end">
                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0"
                                           data-bs-toggle="modal" data-bs-target="#deleteCategoryModal"
                                           wire:click="deleteCategory({{$category->id}})"><i
                                                class="far fa-trash-alt me-2"></i>Delete</a>
                                        <a class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal"
                                           data-bs-target="#updateCategoryModal"
                                           wire:click="editCategory({{$category->id}})"><i
                                                class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                    </div>
                                </li>
                            @empty
                                <tr>
                                    <td colspan="5">No Record Found</td>
                                </tr>
                            @endforelse
                        </ul>
                        <div class="col-6 text-end">
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
