@extends('layouts.mainlayout')
@section('content')
    <div>
        <livewire:post-show/>
    </div>

@endsection
@section('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#deletePostModal').modal('hide');

        })
    </script>
@endsection
