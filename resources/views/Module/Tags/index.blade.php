@extends('layouts.mainlayout')
@section('content')
    <div>
        <livewire:tag-show />
    </div>

@endsection
@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#tag').modal('hide');
            $('#updateTagModal').modal('hide');
            $('#deleteTagModal').modal('hide');
        })
    </script>
@endsection
