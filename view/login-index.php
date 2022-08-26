{{ include ('header.php', {title: 'Login'}) }}

      <div class="list">
            <div class="px">
                  <div class="login__container">

                        <h1 class="list__title">Log In</h1>
                        {% if errors is defined %}
                              <span class="error">{{ errors|raw }}</span>
                        {% endif %}

                        <form action="{{path}}login/authentication" method="post" class="form__create">
                              <div class="form__username">
                                    <label for="username">Username</label>
                                    <input type="email" id="username" name="username" value="{{ user.username }}">
                              </div>
                              <div class="form__password">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" value="{{ user.password }}">
                              </div>
                              <div class="flex">
                                    <input type="submit" value="Log In" class="form__submit">
                                    <a href="{{path}}etudiant/list" class="form__submit">Aller à la liste</a>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
            
{{ include ('footer.php') }}