<?= $this->extend('mazer/layouts/app') ?>

<?= $this->section('content') ?>
<div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>RTL Layout</h3>
                <p class="text-subtitle text-muted">
                  Right-to-left support in Mazer.
                </p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav
                  aria-label="breadcrumb"
                  class="breadcrumb-header float-start float-lg-end"
                >
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      RTL Layout
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <section class="section">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Coming back Soon!</h5>
                  </div>
                  <div class="card-body">
                    <p>
                      RTL support is under construction for the current release.
                      <br />
                      When needed, RTL support is available in older releases of
                      Mazer.
                    </p>

                    If you want to contribute, check out our
                    <a href="https://github.com/zuramai/mazer" target="_blank"
                      >template repository</a
                    >.
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
<?= $this->endSection() ?>
