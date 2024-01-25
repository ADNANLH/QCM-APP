<form method="POST" class="container pt-2" action="">
    @csrf
    @if (isset($task))
        @method('PUT')
    @endif

    <div class="card-body">
        <div class="form-group">
            <label for="nom" class="form-label">Projet</label>
           
            @error('projetId')
                <div class="invalid-feedback text-danger">{{ $message }}</div>
            @enderror
        </div>
        

        <div class="form-group mb-3">
            <label for="nom">Name</label>
            <input name="nom" type="text" class="form-control" id="nom" placeholder="Enter name"
                value="{{ old('name', isset($task) ? $task->nom : '') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="Description">Description</label>
            <textarea name="description" id="inputDescription" class="form-control" oninput="setCustomValidity('')">{{ old('description', isset($task) ? $task->description : '') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        {{-- <input name="project_id" type="hidden" class="form-control" value="{{ $project->id }}"> --}}
    </div>
    <div class="card-footer">
        {{-- {{ route('tasks.index', $project->id) }} --}}
        <a href="" class="btn btn-default">Cancel</a>
        <button type="submit" class="btn btn-primary mx-2">{{ isset($examen) ? 'Modifier' : 'Ajouter' }}</button>
    </div>
</form>