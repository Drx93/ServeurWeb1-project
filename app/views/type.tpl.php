
<section class="hero">
    <div class="container">
      <!-- Breadcrumbs -->
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="<?=$router->generate('home')?>">Home</a></li>
        <li class="breadcrumb-item active"><?=$viewData['type']->getName()?></li>
      </ol>
      <!-- Hero Content-->
      <div class="hero-content pb-5 text-center">
        <h1 class="hero-heading"><?=$viewData['type']->getName()?></h1>
        <div class="row">
          <div class="col-xl-8 offset-xl-2">
            <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="products-grid">
    <div class="container-fluid">

      <header class="product-grid-header d-flex align-items-center justify-content-between">
        <div class="mr-3 mb-3">
          Affichage <strong>1-12 </strong>de <strong><?= count($viewData['products']) ?> </strong>résultats
        </div>
        <div class="mr-3 mb-3"><span class="mr-2">Voir</span><a href="#" class="product-grid-header-show active">12 </a><a
            href="#" class="product-grid-header-show ">24 </a><a href="#" class="product-grid-header-show ">Tout </a>
        </div>
        <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-1">Trier par</span>
          <select class="custom-select w-auto border-0">
            <option value="orderby_0">Défaut</option>
            <option value="orderby_1">Nom</option>
            <option value="orderby_2">Note</option>
          </select>
        </div>
      </header>

      <div class="row">
        <?php foreach($viewData['products'] as $product): ?>
        <div class="col-lg-4 col-md-6">
          <div class="product text-center">
            <div class="mb-3 position-relative">
              <div class="badge text-white badge-primary">New</div><a class="d-block" href="<?=$router->generate('catalog-product', ['id' => $product->getId()])?>"><img class="img-fluid w-100" src="/<?=$product->getPicture()?>" alt="..."></a>
              <div class="product-overlay">
                <ul class="mb-0 list-inline">
                  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="#">Add to cart</a></li>
                  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                </ul>
              </div>
            </div>
            <h6> <a class="reset-anchor" href="<?=$router->generate('catalog-product', ['id' => $product->getId()])?>"><?=$product->getName()?></a></h6>
            <p class="small text-muted"><?=$product->getPrice()?> €</p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>