<!-- Insert Modal -->
<div wire:ignore.self class="modal fade" id="category" tabindex="-1" aria-labelledby="categoryLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryLabel">Create Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveCategory">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Category Name</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Update Student Modal -->
<div wire:ignore.self class="modal fade" id="updateCategoryModal" tabindex="-1" aria-labelledby="updateCategoryModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateCategoryModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                        aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateCategory">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Category Name</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Student Modal -->
<div wire:ignore.self class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-labelledby="deleteCategoryModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCategoryModalLabel">Delete Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                        aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyCategory">
                <div class="modal-body">
                    <h6>Are you sure you want to delete this data ?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes! Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
