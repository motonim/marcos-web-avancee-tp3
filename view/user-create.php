{{ include ('header.php', {title: 'New User'}) }}

      <div class="list">
            <div class="px">
                  <div class="login__container">

                        <h1 class="list__title">New User</h1>
                        {% if errors is defined %}
                              <span class="error">{{ errors|raw }}</span>
                        {% endif %}

                        <form action="{{path}}user/store" method="post" class="form__create">
                              <div class="form__username">
                                    <label for="username">Username</label>
                                    <input type="email" id="username" name="username" value="{{ user.username }}">
                              </div>
                              <div class="form__password">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" value="{{ user.password }}">
                              </div>
                              <div class="flex">
                                    <div class="form__privilege">
                                          <label for="privilege"> Privilege
                                                <select type="text" name="privilege_idprivilege" class="form__select">
                                                      {% for privilege in privileges %}
                                                            <option value="{{privilege.idprivilege}}">{{privilege.privilege}}</option>
                                                      {% endfor %}
                                                </select>
                                          </label>
                                    </div>
                                    <input type="submit" value="Submit" class="form__submit">
                              </div>
                        </form>
                  </div>
            </div>
      </div>

{{ include ('footer.php') }}
