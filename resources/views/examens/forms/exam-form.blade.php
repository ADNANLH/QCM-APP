<form method="post" class="container pt-2" action="">
    @csrf
    <div class="card-body">

        <div class="form-group mb-3">
            <label for="nom" class="form-label">Examen</label>
            <input type="text" name="examen" type="text" class="form-control" id="examen" placeholder="Entrer le titre d'examen">

        </div>

        <div class="form-group mb-3">
            <label for="Description">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Entrer une description">
        </div>
        <div class="row">
            <div class="form-group mb-3 col-md-6">
                <label for="date-debut">Date de début</label>
                <input type="datetime-local" name="date-debut" id="date de début" class="form-control">
            </div>
            <div class="form-group mb-3 col-md-6">
                <label for="date-fin">Date de fin</label>
                <input type="datetime-local" name="date-fin" id="date-fin" class="form-control">
            </div>

        </div>

        {{-- <input name="project_id" type="hidden" class="form-control" value="{{ $project->id }}"> --}}
        <div class="card-footer">
            {{-- {{ route('tasks.index', $project->id) }} --}}
            <a href="" class="btn btn-default">Annuler</a>
            <a type="submit" class="btn btn-primary mx-2">Ajouter</a>
        </div>
    </div>
</form>



