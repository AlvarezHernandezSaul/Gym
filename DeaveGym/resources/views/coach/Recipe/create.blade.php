@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between mb-3">
                    <h3>Create Recipe</h3>
                    <a href="{{ route('recipes.index') }}" class="btn btn-primary">Back</a>
                </div>
                <form action="{{ route('recipes.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('#create-recipe-form').on('submit', function () {
                $('#create-recipe-btn').attr('disabled', true);
            });
        });
    </script>
@endsection