  <!-- Services Start -->
  <section class="container-fluid bg-light pt-5">
      <div class="container py-5">
          <div class="d-flex flex-column text-center mb-5">
              <h4 class="text-secondary mb-3">Nossos serviços</h4>
              <h1 class="display-4 m-0"><span class="text-primary">Premium</span> Pet Services</h1>
          </div>
          <div class="row pb-3">
              <?php
                foreach ($data['services'] as $service):
                    $nome = $service['nome'];
                    $icone = $service['icone'];
                    $descricao = $service['descricao'];
                ?>
                  <div class="col-md-6 col-lg-4 mb-4">
                      <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                          <h3 class="<?= $icone  ?> display-3 font-weight-normal text-secondary mb-3"></h3>
                          <h3 class="mb-3"><?= $nome  ?></h3>
                          <p><?= $descricao  ?></p>
                          <a class="text-uppercase font-weight-bold" href="">Read More</a>
                      </div>
                  </div>
              <?php
                endforeach;
                ?>
          </div>
      </div>
  </section>
  <!-- Services End -->