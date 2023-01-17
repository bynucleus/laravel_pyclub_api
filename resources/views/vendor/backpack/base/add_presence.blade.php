@extends(backpack_view('blank'))

@section('content')
<h1>Marquer</h1>
<form method="POST" action="/api/add-presence">
    @csrf
    <label for="club_id">Sélectionnez un club :</label>
    <select name="club_id" id="club_id" onchange="getClubMembers()">
        <option value="">Sélectionnez un club</option>
        @foreach($clubs as $club)
            <option value="{{ $club->code }}">{{ $club->titre }}</option>
        @endforeach
    </select>

    <br>
    <select name="seance_id" id="seance_id" >
        <option value="">Sélectionnez une seance</option>

    </select>
    <br>
    <div id="members-container"></div>
    <button type="submit" id="submit-btn" disabled>Valider</button>
</form>

<script>
    function getClubMembers() {
        var clubId = document.getElementById("club_id").value;
        // var seanceId = document.getElementById("seance_id").value;
        if (clubId) {
            fetch('/api/user/' + clubId)
            .then(response => response.json())
            .then(data => {
                var membersContainer = document.getElementById("members-container");
                var membersHtml = "";
                data.forEach(function(member) {
                    membersHtml += "<input type='checkbox' name='members[]' value='" + member.name + "'>" + member.name + "<br>";
                });
                membersContainer.innerHTML = membersHtml;
                document.getElementById("submit-btn").disabled = false;
            });

            fetch('/api/seance/' + clubId)
            .then(response => response.json())
            .then(data => {
                var seanceSelect = document.getElementById("seance_id");
                var membersHtml = "";
                data.forEach(function(seance) {
                    membersHtml+="<option value='"+seance.id+"'>"+seance.date+"</option>";
                });
                seanceSelect.innerHTML = membersHtml;
                document.getElementById("submit-btn").disabled = false;
            });
        } else {
            document.getElementById("seance_id").innerHTML = "<option value=''>Sélectionnez une seance</option>";
            document.getElementById("submit-btn").disabled = true;
        }
    }
</script>
<style>
    /* Styles pour le formulaire */
form {
    width: 50%; /* Largeur de la zone de formulaire */
    margin: 0 auto; /* Centrer la zone de formulaire */
    padding: 1em; /* Espacement intérieur */
    border: 1px solid #ccc; /* Ajouter une bordure */
    border-radius: 5px; /* Ajouter des coins arrondis */
}

/* Styles pour la liste déroulante */
select {
    width: 100%; /* Largeur de la liste déroulante */
    padding: 0.5em; /* Espacement intérieur */
    margin-bottom: 1em; /* Espacement en dessous */
}

/* Styles pour les membres du club */
#members-container {
    margin-top: 1em; /* Espacement en haut */
}

#members-container input[type='checkbox'] {
    margin-right: 0.5em; /* Espacement à droite de la case à cocher */
}

/* Styles pour le bouton de validation */
button[type='submit'] {
    width: 100%; /* Largeur du bouton */
    background-color: #4CAF50; /* Couleur d'arrière-plan */
    color: white; /* Couleur du texte */
    padding: 0.5em 1em; /* Espacement intérieur */
    border: none; /* Enlever la bordure */
    border-radius: 5px; /* Ajouter des coins arrondis */
    cursor: pointer; /* Changer le curseur */
}

/* Styles pour le bouton de validation désactivé */
button[type='submit'][disabled] {
    background-color: #ccc; /* Couleur d'arrière-plan */
    cursor: default; /* Changer le curseur */
}

</style>
@endsection
