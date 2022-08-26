{{ include ('header.php', {title: 'List'}) }}
 
    <div class="list etudiant__list">
        <div class="px">
            <div class="container">
                <div class="list__title flex">
                    <h1>Etudiant</h1>
                    <div>
                        {% if session.privilege_id==1 %}
                        <a href="{{path}}logbook/list" class="etudiant__create--link"><span class="etudiant__create--text">LOG BOOK</span></a>
                        <a href="{{path}}etudiant/create" class="etudiant__create--link"><span class="etudiant__create--text">CREATE</span><i class="fa-solid fa-circle-plus"></i></a>
                        {% endif %}

                        {% if guest %}
                        <a href="{{path}}login" class="etudiant__create--link"><span class="etudiant__create--text">LOG IN</span><i class="fa-solid fa-user"></i></a>
                        <a href="{{path}}user/create" class="etudiant__create--link"><span class="etudiant__create--text">SIGN IN</span><i class="fa-solid fa-user-plus"></i></a>
                        {% else %}
                        <a href="{{path}}login/logout" class="etudiant__create--link"><span class="etudiant__create--text">LOG OUT</span><i class="fa-solid fa-user"></i></a>
                        {% endif %}

                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Phone</th>
                            <th>Courriel</th>
                            <th>Groupe</th>
                            <th>Photo</th>
                            {% if session.privilege_id==1 %}
                            <th>Edit</th>
                            {% endif %}
                        </tr>
                    </thead>
                    <tbody>
                        {% for etudiant in etudiants %}
                        <tr>
                            <td>{{ etudiant.prenom }}</td>
                            <td>{{ etudiant.nom }}</td>
                            <td>{{ etudiant.phone }}</td>
                            <td>{{ etudiant.courriel }}</td>
                            <td>{{ etudiant.groupe_idgroupe }}</td>
                            <td class="etudiant__photo"> 
                                <div class="profile-photo-wrapper">
                                    <img src="{{path}}{{ etudiant.img_dir }}" alt="profile photo of a student" class="profile-photo">
                                </div>
                            </td>
                            {% if session.privilege_id==1 %}
                            <td><a href="{{path}}etudiant/edit/{{etudiant.idetudiant}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            {% endif %}
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <div class="list enseignant__list">
        <div class="px">
            <div class="container">
                <div class="list__title flex">
                    <h1>Enseignant</h1>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Phone</th>
                            <th>Courriel</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for enseignant in enseignants %}
                        <tr>
                            <td>{{ enseignant.prenom }}</td>
                            <td>{{ enseignant.nom }}</td>
                            <td>{{ enseignant.phone }}</td>
                            <td>{{ enseignant.courriel }}</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="list cours__list">
        <div class="px">
            <div class="container">
                <h1 class="list__title">Cours</h1>
                <table>
                    <thead>
                        <tr>
                            <th class="cours__title">Titre</th>
                            <th class="cours__desc">Description</th>
                            <th>Enseignant</th>
                            <th>Groupe</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for cours in courss %}
                        <tr>
                            <td>{{ cours.titre }}</td>
                            <td>{{ cours.description }}</td>
                            <td>{{ cours.enseignant }}</td>
                            <td>{{ cours.groupe }}</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

{{ include ('footer.php') }}
