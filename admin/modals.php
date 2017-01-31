<div class="modal fade" id="login-modal" tabindex="-2" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Connexion</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="../admin/login.php" class="form-horizontal">

                    <div class="form-group">
                        <label for="login-email" class="control-label col-sm-3">Email TEM/TSP</label>
                        <div class="col-sm-9">
                            <input type="email" pattern="[-a-z]+\.[-_a-z]+@telecom-(sudparis|em)\.eu" class="form-control" id="login-email" name="login-email" placeholder="prenom.nom@telecom-sudParis/em.eu" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="login-password" class="control-label col-sm-3">Mot de passe</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="login-password" name="login-password" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success">Connexion</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="../admin/inscription.html">Je n'ai pas de compte</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="account-modal" tabindex="-3" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Mon compte</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    Développement en cours
                </div>
            </div>
            <div class="modal-footer">
                <form action="../admin/logout.php" method="get">
                    <input type="submit" class="btn btn-danger" value="Déconnexion">
                </form>
            </div>
        </div>
    </div>
</div>
