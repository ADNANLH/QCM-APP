<form method="post" class="container pt-2" action="">
    @csrf

    <div class="card-body">
        <div class="form-group mb-3">
            <label for="nom" class="form-label">Examen</label>
            <input name="examen" type="text" class="form-control" id="examen" placeholder="Entrer le titre d'examen">

        </div>

        <div class="form-group mb-3">
            <label for="Description">Description</label>
            <input name="description" id="description" class="form-control" placeholder="Entrer une description">
        </div>
        <div id="dynamic-inputs-container">

        </div>
        <div class="form-group mb-3">
            <button onclick="addCard('multi-choix')">Add Multi Choix</button>
            <button onclick="addCard('libre-question')">Add Libre Question</button>
        </div>

        {{-- <input name="project_id" type="hidden" class="form-control" value="{{ $project->id }}"> --}}
    </div>
    <div class="card-footer">
        {{-- {{ route('tasks.index', $project->id) }} --}}
        <a href="" class="btn btn-default">Annuler</a>
        <button type="submit" class="btn btn-primary mx-2">Modifier</button>
    </div>
</form>
<script>
    function addCard(cardType) {
        <?php
        // Dynamically include the card based on the button clicked
        echo 'includeCard("' . $cardType . '");';
        ?>
    }
</script>

<?php
function includeCard($cardType) {
    if ($cardType === 'multi-choix') {
        include('cards/multiChoix');
    } elseif ($cardType === 'libre-question') {
        include('cards/libreQuestion');
    }
}
?>



