<?= $this->extend('mazer/layouts/app') ?>

<?= $this->section('content') ?>
<div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Card</h3>
                <p class="text-subtitle text-muted">
                  Bootstrap’s cards provide a flexible and extensible content
                  container with multiple variants and options.
                </p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav
                  aria-label="breadcrumb"
                  class="breadcrumb-header float-start float-lg-end"
                >
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="<?= site_url("mazer"); ?>">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Card
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!-- Basic card section start -->
          <section id="content-types">
            <div class="row">
              <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <h4 class="card-title">Card With Header And Footer</h4>
                      <p class="card-text">
                        Gummies bonbon apple pie fruitcake icing biscuit apple
                        pie jelly-o sweet roll. Toffee sugar plum sugar plum
                        jelly-o jujubes bonbon dessert carrot cake.
                      </p>
                    </div>
                    <img
                      class="img-fluid w-100"
                      src="<?= base_url("/assets/compiled/jpg/banana.jpg"); ?>"
                      alt="Card image cap"
                    />
                  </div>
                  <div class="card-footer d-flex justify-content-between">
                    <span>Card Footer</span>
                    <button class="btn btn-light-primary">Read More</button>
                  </div>
                </div>
                <div class="card collapse-icon accordion-icon-rotate">
                  <div class="card-header">
                    <h4 class="card-title pl-1">Accordion</h4>
                  </div>
                  <div class="card-body">
                    <div class="accordion" id="cardAccordion">
                      <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button
                              class="accordion-button"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseOne"
                              aria-expanded="true"
                              aria-controls="collapseOne"
                            >
                              Accordion Item #1
                            </button>
                          </h2>
                          <div
                            id="collapseOne"
                            class="accordion-collapse collapse show"
                            aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample"
                          >
                            <div class="accordion-body">
                              <strong
                                >This is the first item's accordion
                                body.</strong
                              >
                              It is shown by default, until the collapse plugin
                              adds the appropriate classes that we use to style
                              each element. These classes control the overall
                              appearance, as well as the showing and hiding via
                              CSS transitions. You can modify any of this with
                              custom CSS or overriding our default variables.
                              It's also worth noting that just about any HTML
                              can go within the <code>.accordion-body</code>,
                              though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button
                              class="accordion-button collapsed"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseTwo"
                              aria-expanded="false"
                              aria-controls="collapseTwo"
                            >
                              Accordion Item #2
                            </button>
                          </h2>
                          <div
                            id="collapseTwo"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample"
                          >
                            <div class="accordion-body">
                              <strong
                                >This is the second item's accordion
                                body.</strong
                              >
                              It is hidden by default, until the collapse plugin
                              adds the appropriate classes that we use to style
                              each element. These classes control the overall
                              appearance, as well as the showing and hiding via
                              CSS transitions. You can modify any of this with
                              custom CSS or overriding our default variables.
                              It's also worth noting that just about any HTML
                              can go within the <code>.accordion-body</code>,
                              though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button
                              class="accordion-button collapsed"
                              type="button"
                              data-bs-toggle="collapse"
                              data-bs-target="#collapseThree"
                              aria-expanded="false"
                              aria-controls="collapseThree"
                            >
                              Accordion Item #3
                            </button>
                          </h2>
                          <div
                            id="collapseThree"
                            class="accordion-collapse collapse"
                            aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample"
                          >
                            <div class="accordion-body">
                              <strong
                                >This is the third item's accordion
                                body.</strong
                              >
                              It is hidden by default, until the collapse plugin
                              adds the appropriate classes that we use to style
                              each element. These classes control the overall
                              appearance, as well as the showing and hiding via
                              CSS transitions. You can modify any of this with
                              custom CSS or overriding our default variables.
                              It's also worth noting that just about any HTML
                              can go within the <code>.accordion-body</code>,
                              though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <img
                      src="<?= base_url("/assets/compiled/jpg/motorcycle.jpg"); ?>"
                      class="card-img-top img-fluid"
                      alt="singleminded"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Be Single Minded</h5>
                      <p class="card-text">
                        Chocolate sesame snaps apple pie danish cupcake sweet
                        roll jujubes tiramisu.Gummies bonbon apple pie fruitcake
                        icing biscuit apple pie jelly-o sweet roll.
                      </p>
                    </div>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                  </ul>
                </div>
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <h4 class="card-title mb-0">Video Card</h4>
                    </div>
                    <div
                      class="embed-responsive embed-responsive-item embed-responsive-16by9 w-100"
                    >
                      <iframe
                        src="https://www.youtube.com/embed/2b9txcAt4e0"
                        style="width: 100%"
                        height="300"
                        allowfullscreen
                      ></iframe>
                    </div>
                    <div class="card-body">
                      <p class="card-text">
                        Candy cupcake sugar plum oat cake wafer marzipan
                        jujubes. Jelly-o sesame snaps cheesecake topping.
                        Cupcake fruitcake macaroon donut pastry gummies tiramisu
                        chocolate bar muffin.
                      </p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <h4 class="card-title">Carousel</h4>
                      <h6 class="card-subtitle">Support card subtitle</h6>
                    </div>
                    <div
                      id="carouselExampleSlidesOnly"
                      class="carousel slide"
                      data-bs-ride="carousel"
                    >
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img
                            src="<?= base_url("/assets/compiled/jpg/architecture1.jpg"); ?>"
                            class="d-block w-100"
                            alt="Image Architecture"
                          />
                        </div>
                        <div class="carousel-item">
                          <img
                            src="<?= base_url("/assets/compiled/jpg/bg-mountain.jpg"); ?>"
                            class="d-block w-100"
                            alt="Image Mountain"
                          />
                        </div>
                        <div class="carousel-item">
                          <img
                            src="<?= base_url("/assets/compiled/jpg/jump.jpg"); ?>"
                            class="d-block w-100"
                            alt="Image Jump"
                          />
                        </div>
                      </div>
                      <a
                        class="carousel-control-prev"
                        href="#carouselExampleControls"
                        role="button"
                        data-bs-slide="prev"
                      >
                        <span
                          class="carousel-control-prev-icon"
                          aria-hidden="true"
                        ></span>
                        <span class="visually-hidden">Previous</span>
                      </a>
                      <a
                        class="carousel-control-next"
                        href="#carouselExampleControls"
                        role="button"
                        data-bs-slide="next"
                      >
                        <span
                          class="carousel-control-next-icon"
                          aria-hidden="true"
                        ></span>
                        <span class="visually-hidden">Next</span>
                      </a>
                    </div>
                    <div class="card-body">
                      <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sunt assumenda mollitia officia dolorum eius
                        quasi.Chocolate sesame snaps apple pie danish cupcake
                        sweet roll jujubes tiramisu.
                      </p>
                      <p class="card-text">
                        Gummies bonbon apple pie fruitcake icing biscuit apple
                        pie jelly-o sweet roll. Toffee sugar plum sugar plum
                        jelly-o jujubes bonbon dessert carrot cake. Sweet pie
                        candy jelly. Sesame snaps biscuit sugar plum. Sweet roll
                        topping fruitcake. Caramels liquorice biscuit ice cream
                        fruitcake cotton candy tart.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <h4 class="card-title">Feedback Form</h4>
                      <p class="card-text">
                        Gummies bonbon apple pie fruitcake icing biscuit apple
                        pie jelly-o sweet roll. Toffee sugar plum sugar plum
                        jelly-o jujubes bonbon dessert carrot cake.
                      </p>
                      <form class="form" method="post">
                        <div class="form-body">
                          <div class="form-group">
                            <label for="feedback1" class="sr-only">Name</label>
                            <input
                              type="text"
                              id="feedback1"
                              class="form-control"
                              placeholder="Name"
                              name="name"
                            />
                          </div>
                          <div class="form-group">
                            <label for="feedback4" class="sr-only"
                              >Last Game</label
                            >
                            <input
                              type="text"
                              id="feedback4"
                              class="form-control"
                              placeholder="Last Name"
                              name="LastName"
                            />
                          </div>
                          <div class="form-group">
                            <label for="feedback2" class="sr-only">Email</label>
                            <input
                              type="email"
                              id="feedback2"
                              class="form-control"
                              placeholder="Email"
                              name="email"
                            />
                          </div>
                          <div class="form-group">
                            <select name="reason" class="form-control">
                              <option value="Inquiry">Inquiry</option>
                              <option value="Complain">Complaints</option>
                              <option value="Quotation">Quotation</option>
                            </select>
                          </div>
                          <div class="form-group form-label-group">
                            <textarea
                              class="form-control"
                              id="label-textarea"
                              rows="3"
                              placeholder="Suggestion"
                            ></textarea>
                            <label for="label-textarea"></label>
                          </div>
                        </div>
                        <div class="form-actions d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary me-1">
                            Submit
                          </button>
                          <button type="reset" class="btn btn-light-primary">
                            Cancel
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <img
                      class="card-img-bottom img-fluid"
                      src="<?= base_url("/assets/compiled/jpg/building.jpg"); ?>"
                      alt="Card image cap"
                      style="height: 20rem; object-fit: cover"
                    />
                    <div class="card-body">
                      <h4 class="card-title">Social Media</h4>
                      <p class="card-text">
                        Candy Cupcake sugar plum oat cake wafer marzipan
                        jujubes. Jelly-o sesame snaps cheesecake topping.
                        Cupcake fruitcake macaroon donut pastry gummies tiramisu
                        chocolate bar muffin.
                      </p>
                      <a href="#" class="card-link"
                        ><small>Read 12 Comments</small></a
                      >
                    </div>
                    <div class="btn-group align-items-center mx-2 px-1">
                      <button
                        type="button"
                        class="btn btn-link p-2 m-1 text-decoration-none"
                      >
                        <i
                          class="bi bi-heart d-flex align-items-center justify-content-center text-secondary"
                        ></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-link p-2 m-1 text-decoration-none"
                      >
                        <i
                          class="bi bi-chat d-flex align-items-center justify-content-center text-secondary"
                        ></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-link p-2 m-1 text-decoration-none"
                      >
                        <i
                          class="bi bi-bookmark d-flex align-items-center justify-content-center text-secondary"
                        ></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <img
                      class="card-img-top img-fluid"
                      src="<?= base_url("/assets/compiled/jpg/origami.jpg"); ?>"
                      alt="Card image cap"
                      style="height: 20rem"
                    />
                    <div class="card-body">
                      <h4 class="card-title">Top Image Cap</h4>
                      <p class="card-text">
                        Jelly-o sesame snaps cheesecake topping. Cupcake
                        fruitcake macaroon donut pastry gummies tiramisu
                        chocolate bar muffin. Dessert bonbon caramels brownie
                        chocolate bar chocolate tart dragée.
                      </p>
                      <p class="card-text">
                        Cupcake fruitcake macaroon donut pastry gummies tiramisu
                        chocolate bar muffin.
                      </p>
                      <button class="btn btn-primary block">Update now</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <h4 class="card-title">Bottom Image Cap</h4>
                      <p class="card-text">
                        Jelly-o sesame snaps cheesecake topping. Cupcake
                        fruitcake macaroon donut pastry gummies tiramisu
                        chocolate bar muffin. Dessert bonbon caramels brownie
                        chocolate bar chocolate tart dragée.
                      </p>
                      <p class="card-text">
                        Cupcake fruitcake macaroon donut pastry gummies tiramisu
                        chocolate bar muffin.
                      </p>
                      <small class="text-muted">Last updated 3 mins ago.</small>
                    </div>
                    <img
                      class="card-img-bottom img-fluid"
                      src="<?= base_url("/assets/compiled/jpg/water.jpg"); ?>"
                      alt="Card image cap"
                      style="height: 20rem; object-fit: cover"
                    />
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Basic Card types section end -->

          <!-- Groups section start -->
          <section id="groups">
            <div class="row match-height">
              <div class="col-12 mt-3 mb-1">
                <h4 class="section-title text-uppercase">Groups</h4>
              </div>
            </div>
            <div class="row match-height">
              <div class="col-12">
                <div class="card-group">
                  <div class="card">
                    <div class="card-content">
                      <img
                        class="card-img-top img-fluid"
                        src="<?= base_url("/assets/compiled/png/1.png"); ?>"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">
                          This card has supporting text below as a natural
                          lead-in to additional content.
                        </p>
                        <small class="text-muted"
                          >Last updated 3 mins ago.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-content">
                      <img
                        class="card-img-top img-fluid"
                        src="<?= base_url("/assets/compiled/png/2.png"); ?>"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">
                          This card has supporting text below as a natural
                          lead-in to additional content.
                        </p>
                        <small class="text-muted"
                          >Last updated 3 mins ago.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-content">
                      <img
                        class="card-img-top img-fluid"
                        src="<?= base_url("/assets/compiled/png/3.png"); ?>"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">
                          This card has supporting text below as a natural
                          lead-in to additional content.
                        </p>
                        <small class="text-muted"
                          >Last updated 3 mins ago.</small
                        >
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-content">
                      <img
                        class="card-img-top img-fluid"
                        src="<?= base_url("/assets/compiled/png/4.png"); ?>"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">
                          This card has supporting text below as a natural
                          lead-in to additional content.
                        </p>
                        <small class="text-muted"
                          >Last updated 3 mins ago.</small
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
<?= $this->endSection() ?>
