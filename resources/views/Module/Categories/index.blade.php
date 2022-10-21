@extends('layouts.mainlayout')
@section('content')
<div>
    <livewire:category-show/>
</div>

@endsection
@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#category').modal('hide');
            $('#updateCategoryModal').modal('hide');
            $('#deleteCategoryModal').modal('hide');
        })
    </script>
@endsection
