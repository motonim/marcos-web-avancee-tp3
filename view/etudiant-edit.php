{{ include ('header.php', {title: 'Modifier Etudiant'}) }}

    <div class="list">
        <div class="px">
            <div class="container">
                <h1 class="list__title">Etudiant - Edit</h1>
                {% if errors is defined %}
                    <span class="error">{{ errors|raw }}</span>
                {% endif %}

                <form action="{{path}}etudiant/update" method="post" class="form__create" enctype="multipart/form-data">
                    <input type="hidden" name="idetudiant" value="{{ etudiant.idetudiant }}">

                    <div class="form__nomComplet flex">
                        <div class="form__prenom">
                            <label for="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom" value="{{ etudiant.prenom }}">
                        </div>

                        <div class="form__nom">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" value="{{ etudiant.nom }}">
                        </div>
                    </div>

                    <div class="form__contact flex">
                        <div class="form__phone">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" value="{{ etudiant.phone }}">
                        </div>

                        <div class="form__courriel">
                            <label for="courriel">Courriel</label>
                            <input type="text" id="courriel" name="courriel" value="{{ etudiant.courriel }}">
                        </div>
                    </div>

                    <div class="form__groupeSubmit flex">
                        <div class="form__groupe">
                            <label for="groupe_idgroupe">Groupe</label>
                            <select name="groupe_idgroupe" id="groupe_idgroupe" class="form__select">
                                {% for groupe in groupes %}
                                <option value="{{ groupe.idgroupe }}" {% if groupe.idgroupe==etudiant.groupe_idgroupe %} selected {% endif %}>{{ groupe.nom}}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div>
                            <label for="profilePhoto">Edit Image</label>
                            <input type="file" name='profilePhoto' value="{{ etudiant.img_dir }}">
                        </div>
                    </div>
                    <div class="form__btn align-right">
                        <input class="form__submit" type="submit" value="Mise à jour">
                    </div>
                </form>
                <form action="{{path}}etudiant/delete" method="post" class="text-right">
                    <input type="hidden" name="idetudiant" value="{{ etudiant.idetudiant }}">
                    <input class="form__submit" type="submit" value="Effacer">
                </form>
            </div>
        </div>
    </div>

{{ include ('footer.php') }}
