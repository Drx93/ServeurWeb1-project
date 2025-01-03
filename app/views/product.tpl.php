<section class="hero">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="<?=$router->generate('home')?>">Home</a></li>
            <li class="breadcrumb-item active"><?=$viewData['product']->getName()?></li>
        </ol>
        <!-- Hero Content-->
        <div class="hero-content pb-5 text-center">
            <h1 class="hero-heading"><?=$viewData['product']->getName()?></h1>
        </div>
    </div>
</section>

<section class="products-grid">
    <div class="container-fluid">
        <div class="row">
            <!-- product-->
            <div class="col-lg-6 col-sm-12">
                <div class="product-image">
                    <a href="detail.html" class="product-hover-overlay-link">
                        <img src="<?=$absoluteURL.'/'.$viewData['product']->getPicture()?>" alt="product" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="mb-3">
                    <h3 class="h3 text-uppercase mb-1"><?=$viewData['product']->getName()?></h3>
                    <div>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>
                <div class="my-2">
                    <div class="text-muted"><span class="h4"><?=$viewData['product']->getPrice()?> €</span> TTC</div>
                </div>
                <div class="product-action-buttons">
                    <button class="btn btn-dark btn-buy" onclick="addToBasket(<?=$viewData['product']->getId()?>, '<?=$viewData['product']->getName()?>', <?=$viewData['product']->getPrice()?>, '<?=$viewData['product']->getPicture()?>')">
                        <i class="fa fa-shopping-cart"></i><span class="btn-buy-label ml-2">Ajouter au panier</span>
                    </button>
                </div>
                <div class="mt-5">
                    <p><?=$viewData['product']->getDescription()?></p>
                </div>
            </div>
            <!-- /product-->
        </div>
    </div>
</section>

<script>
function addToBasket(id, name, price, picture) {
    let basket = JSON.parse(localStorage.getItem('basket')) || [];
    let product = basket.find(item => item.id === id);
    if (product) {
        product.quantity++;
    } else {
        basket.push({ id, name, price, picture, quantity: 1 });
    }
    localStorage.setItem('basket', JSON.stringify(basket));
    alert('Produit ajouté au panier');
}
</script>