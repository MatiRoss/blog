<main>
    <div id="entier">
        <section class="question">
            <p>Qui êtes-vous?</p>

            <div>
                <input type="radio" id="pro" name="genre" value="pro" checked>
                <label for="pro">Professionnel</label>
            </div>

            <div>
                <input type="radio" id="particulier" name="genre" value="particulier">
                <label for="particulier">Particulier</label>
            </div>
        </section>
        <section class="formulaire">
            <form action="https://httpbin.org/post" method="POST">
                <div>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="user_name">
                </div>
                <div>
                    <label for="mail">E-mail :</label>
                    <input type="email" id="mail" name="user_mail" required>
                </div>
                <div>
                    <label for="msg">Message :</label>
                    <textarea id="msg" name="user_message"></textarea>
                </div>
                <div class="button">
                    <button type="submit">Envoyer le message</button>
                </div>
            </form>
        </section>
    </div>

</main>