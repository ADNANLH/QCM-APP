<form method="post" class="container pt-2" action="">
    @csrf
    <div class="card-body">

        <div class="form-group mb-3">
            <label for="nom" class="form-label">Examen</label>
            <input type="text" name="examen" type="text" class="form-control" id="examen"
                placeholder="Entrer le titre d'examen" value="{{ $editMode ? $exam['examen'] : '' }}">
        </div>

        <div class="form-group mb-3">
            <label for="Description">Description</label>
            <input type="text" name="description" id="description" class="form-control"
                placeholder="Entrer une description" value="{{ $editMode ? $exam['description'] : '' }}">
        </div>

        <div class="row">
            <div class="form-group mb-3 col-md-6">
                <label for="date-debut">Date de début</label>
                <input type="datetime-local" name="date-debut" id="date de début" class="form-control"
                    value="{{ $editMode ? $exam['date_debut'] : '' }}">
            </div>
            <div class="form-group mb-3 col-md-6">
                <label for="date-fin">Date de fin</label>
                <input type="datetime-local" name="date-fin" id="date-fin" class="form-control"
                    value="{{ $editMode ? $exam['date_fin'] : '' }}">
            </div>
        </div>

        <div id="questions-container">
            <!-- This is where the dynamically added questions will go -->
        </div>

        <div class="row">
            <div>
                <a href="javascript:void(0);" onclick="addQuestion()" class="btn btn-secondary mx-2 form-group">Ajouter
                    un question</a>
            </div>
        </div>

        <div class="card-footer">
            <a href="{{ route('examens.index') }}" class="btn btn-default">Annuler</a>
            <a type="submit" class="btn btn-submit mx-2">Ajouter</a>
        </div>
    </div>
</form>
<script>
    function addQuestion() {

        var questionDiv = document.createElement("div");
        questionDiv.className = "mb-3 row";
        var questionInput = document.createElement("input");
        questionInput.type = "text";
        questionInput.name = "questions[]";
        questionInput.className = "form-control col-md-6 mb-2";
        questionInput.placeholder = "Question Title";

        questionInput.value = "{{ $editMode ? 'Your Static Question' : '' }}";
        questionDiv.appendChild(questionInput);
        document.getElementById("questions-container").appendChild(questionDiv);


        var optionsDiv = document.createElement("div");
        optionsDiv.className = "row mb-3 d-flex justify-content-around";
        @for ($i = 1; $i <= 4; $i++)
            var optionInput{{ $i }} = document.createElement("input");
            optionInput{{ $i }}.type = "text";
            optionInput{{ $i }}.name = "options[]";
            optionInput{{ $i }}.className = "form-control col-md-5 mb-2";
            optionInput{{ $i }}.placeholder = "Option {{ $i }}";
            optionInput{{ $i }}.value = "{{ $editMode ? 'Option ' . $i . ' Value' : '' }}";
            optionsDiv.appendChild(optionInput{{ $i }});
        @endfor

        document.getElementById("questions-container").appendChild(optionsDiv);
    }
    @if ($editMode)
        window.onload = function() {
            addQuestion();
        }
    @endif
</script>
