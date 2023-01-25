<div class="contact">
    <div class="layout">
        <div class="contact_content">
            <span>Sodales aliquam</span>
            <h2>Odio mauris diam</h2>
            <p>
                Phasellus risus tupis, pretium sit amet magna non, molestie ultricies enim. Nullam pulvinar felis at metus malesuada.
            </p>
        </div>

        <form id="contact-form" class="contact_form" method="post" action="<?php echo admin_url( 'admin-ajax.php' ); ?>">
            <input 
                type="hidden" 
                name="nonce" 
                id="nonce"
                value="<?php echo wp_create_nonce( 'send_message' ); ?>"
            > 

            <input
                type="hidden"
                name="action"   
                id="action"
                value="send_message"
            >

            <div class="form-group contact_form_surname">
                <label for="nom">Nom</label>
                <input id="surname" name="nom" type="text"/>
            </div>

            <div class="form-group contact_form_name">
                <label for="prenom">Prénom</label>
                <input id="name" name="prenom" type="text"/>
            </div>

            <div class="form-group contact_form_mail">
                <label for="mail">Adresse email</label>
                <input id="mail" name="mail" type="email"/>
            </div>

            <div class="form-group contact_form_phone">
                <label for="phone">Téléphone (facultatif)</label>
                <input id="phone" name="phone" type="text" value="+33"/>
            </div>

            <span class="line"></span>

            <div class="custom-select form-group contact_form_subject">
                <label for="sujet">Sujet</label>
                <select id="subject" name="sujet">
                    <option value="">Choisissez un sujet</option>
                    <option value="subject">Sujet 1</option>
                    <option value="subject">Sujet 2</option>
                    <option value="subject">Sujet 3</option>
                </select>
            </div>

            <div class="form-group contact_form_message">
                <label for="message">Message</label>
                <textarea id="message" rows="6" name="message"></textarea>
            </div>
            
            <div class="form-group contact_form_checkbox">
                <input type="checkbox" name="allow"/>
                <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt necessitatibus non voluptatum alias id dolorum maiores doloribus totam esse labore, cumque officiis! Eius facere aut distinctio.</span>
            </div>

            <input class="button" type="submit" value="Envoyer">

            <div id="toast" class="toast">
                message envoyé avec succès
            </div>
        </form>
    </div>
</div>

