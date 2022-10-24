<!-- Insert Modal -->
<div wire:ignore.self class="modal fade" id="tag" tabindex="-1" aria-labelledby="tagLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tagLabel">Create Tag</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveTag">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Tag Name</label>
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
<div wire:ignore.self class="modal fade" id="updateTagModal" tabindex="-1" aria-labelledby="updatetagModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateTagModalLabel">Edit Tag</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                        aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="updateTag">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Tag Name</label>
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
<div wire:ignore.self class="modal fade" id="deleteTagModal" tabindex="-1" aria-labelledby="deleteTagModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTagModalLabel">Delete Tag</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                        aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyTag">
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
