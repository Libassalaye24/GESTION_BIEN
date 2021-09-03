<div class="jumbotron text-center p-3">
        <h1 class="display-3">Réservez un Bien</h1>
        <p class="lead">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit
          culpa eaque ad blanditiis voluptatem. Iste dicta atque quas temporibus
          deserunt!
        </p>
        <hr class="my-4" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora,
          sapiente?
        </p>
        <p class="lead">
          <?php if(!est_connect()): ?>
            <a class="btn btn-primary btn-lg" href="<?=WEB_ROUTE.'?controlleurs=security&views=inscription'?>" role="button"
            >Créer un compte</a
             >
          <?php endif ?>
          <?php if(est_gestionnaire()): ?>
            <a class="btn btn-primary btn-lg" href="<?=WEB_ROUTE.'?controlleurs=bien&views=creer.bien'?>" role="button"
            >Créer un Bien</a
             >
          <?php endif ?>
        </p>
      </div>