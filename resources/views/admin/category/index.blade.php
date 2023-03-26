@extends('admin.layouts.main')
@section('main-container')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Category</h1>


        @if (session('status')){
            <div class="alert alert-success">{{session('status')}}</div>
        }
        @endif

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Category</li>
        </ol>
        <div class="row">
        </div>

    </div>
</main>
@endsection
