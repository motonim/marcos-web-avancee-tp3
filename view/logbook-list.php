{{ include ('header.php', {title: 'Logbook'}) }}

<div class="list etudiant__list">
   <div class="px">
      <div class="container">
            <div class="list__title flex">
               <h1>Logbook</h1>
               <div>
                  <a href="{{path}}etudiant/list" class="form__submit">Aller à la liste</a>
               </div>
            </div>
            <table>
               <thead>
                  <tr>
                     <th>IP Address</th>
                     <th>Date</th>
                     <th>User ID</th>
                     <th>Visited Page</th>
                  </tr>
               </thead>
               <tbody>
                  {% for logbook in logbooks %}
                  <tr>
                        <td>{{ logbook.ipaddress }}</td>
                        <td>{{ logbook.date }}</td>
                        <td>{{ logbook.user_id }}</td>
                        <td>{{ logbook.page }}</td>
                  </tr>
                  {% endfor %}
               </tbody>
            </table>
      </div>
   </div>
</div>

{{ include ('footer.php') }}
