@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between mb-3">
                    <h3>Recipes</h3>
                    <a href="{{ route('recipes.create') }}" class="btn btn-primary">Create Recipe</a>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($recipes as $recipe)
                            <tr>
                                <td>{{ $recipe->name }}</td>
                                <td>{{ $recipe->description }}</td>
                                <td>
                                    <a href="{{ route('recipes.edit', $recipe->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $recipe->id }}').submit();">Delete</a>
                                    <form id="delete-form-{{ $recipe->id }}" action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.delete-btn').on('click', function (e) {
                e.preventDefault();

                var deleteForm = $(this).closest('tr').find('.delete-form');
                var recipeName = $(this).closest('tr').find('.recipe-name').text();
                $('#confirm-delete-modal').modal('show');

$('#recipe-name').text(recipeName);

$('#delete-recipe-btn').on('click', function () {
    deleteForm.submit();
});
});
});
</script>
@endsection

@section('modals')
<div class="modal fade" id="confirm-delete-modal" tabindex="-1" role="dialog" aria-labelledby="confirm-delete-modal-title" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="confirm-delete-modal-title">Confirm Delete Recipe</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    Are you sure you want to delete the recipe <strong id="recipe-name"></strong>?
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-danger" id="delete-recipe-btn">Delete</button>
</div>
</div>
</div>
</div>
@endsection 
               

