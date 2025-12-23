<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>

    <link rel="icon" href="../FoodShop/resources/logo.png"/>
</head>

<body class="body-img1">

    <div class="col-12 container-fluid">
        <div class="row">

            <?php include "header.php"; ?>

            <div class="col-12 body-img2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-11 d-grid d-block main-text anime">
                                <div class="row">
                                    <div>
                                        <span class="text1">Welcome</span><span class="text2 ms-2">to the</span>
                                    </div>
                                    <div>
                                        <span class="text2">World Best</span><span class="text3 ms-2">FoodShop</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 d-grid d-block ms-2 mt-5 text4 anime">
                                <div class="row">
                                    <p>The bakery category is a delightful realm of freshly baked wonders, from artisanal bread to intricate pastries. It's a haven where the sweet aroma of creativity meets the perfect blend of flour and sugar. With each visit, expect a symphony of flavors and a cozy experience that celebrates the art of baking.</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="input-group mt-1 mb-5">
                                        <input type="text" id="basic_search_txt" class="form-control " placeholder="Search..." aria-label="Text input with dropdown button" 
                                        style="border-top-left-radius: 20px; border-color: #ff9100; border-bottom-left-radius: 20px; border-left-width: 8px; border-top-width: 8px;
                                            border-bottom-width: 8px; border-right-width: 8px; margin-top: 100px;">

                                        <select class="form-select" id="basic_search_select" style="max-width: 250px; font-weight: bold; 
                                            border-top-right-radius: 20px; border-color: #ff9100; border-bottom-right-radius: 20px; border-right-width: 
                                            8px; border-top-width: 8px; border-bottom-width: 8px; margin-top: 100px;">
                                            <option>All Categories</option>
                                            <option>Breads</option>
                                            <option>Pastries</option>
                                            <option>Pizzas</option>
                                            <option>Burgers</option>
                                            <option>Cake</option>
                                            <option>Hot Shushi</option>
                                            <option>Rolls</option>
                                            <option>Breads</option> 
                                        </select>

                                        <div class="col-5 d-grid col-lg-3 ms-3 button2">
                                            <button class="button3 button-text2" onclick="basicSearch(0);">Search</button>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 anime d-none d-lg-block mb-4" style="margin-top: 150px;">
                        <div class="row">
                            <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../FoodShop/resources/images/slide_images/4.webp" class="d-block poster-img-1" />
                                        <div class="carousel-caption d-none d-md-block poster-caption">

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../FoodShop/resources/images/slide_images/5.jpg" class="d-block poster-img-1" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../FoodShop/resources/images/slide_images/6.jpg" class="d-block poster-img-1" />
                                        <div class="carousel-caption d-none d-md-block poster-caption-1">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 d-lg-grid categroy anime mb-4">
                <div class="row justify-content-center">
                    <p class="text5">Our Food Categories</p>
                </div>
            </div>

            <div class="col-12 card2 anime2">
                <div class="row justify-content-center gap-5">
                    <div class="card card1 col-12 col-lg-3 ms-2 mb-3 d-lg-grid offset-lg-1" style="width: 320px; border-radius: 20px; background-color: white; border: none; box-shadow: 0 0 10px 0px;">
                        <img src="../FoodShop/resources/images/food_categories/bread.jpg" class="categroy2 card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text6 mt-3 card-title">Breads</h5>
                            <p class="card-text fw-bold bu text7 text-warning ">The bakery category is a delightful realm of freshly baked wonders, from artisanal bread to intricate pastries</p>
                            <button class="col-12 button-text3 fw-bold col-lg-4 button4 mt-2 mb-3">Learn More</button>
                        </div>
                    </div>
                    <div class="card card1 col-12 col-lg-3 ms-2 mb-3 d-lg-grid offset-lg-1" style="width: 320px; border-radius: 20px; background-color: white; border: none; box-shadow: 0 0 10px 0px;">
                        <img src="../FoodShop/resources/images/food_categories/2.jpg" class="categroy2 card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text6 mt-3 card-title">Pastries</h5>
                            <p class="card-text fw-bold bu text7 text-warning ">The bakery category is a delightful realm of freshly baked wonders, from artisanal bread to intricate pastries</p>
                            <button class="col-12 button-text3 fw-bold col-lg-4 button4 mt-2 mb-3">Learn More</button>
                        </div>
                    </div>
                    <div class="card card1 col-12 col-lg-3 ms-2 mb-3 d-lg-grid offset-lg-1" style="width: 320px; border-radius: 20px; background-color: white; border: none; box-shadow: 0 0 10px 0px;">
                        <img src="../FoodShop/resources/images/food_categories/pizza.jpg" class="categroy2 card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text6 mt-3 card-title">Pizzas</h5>
                            <p class="card-text fw-bold bu text7 text-warning ">The bakery category is a delightful realm of freshly baked wonders, from artisanal bread to intricate pastries</p>
                            <button class="col-12 button-text3 fw-bold col-lg-4 button4 mt-2 mb-3">Learn More</button>
                        </div>
                    </div>
                    <div class="card card1 col-12 col-lg-3 ms-2 mb-3 d-lg-grid offset-lg-1" style="width: 320px; border-radius: 20px; background-color: white; border: none; box-shadow: 0 0 10px 0px;">
                        <img src="../FoodShop/resources/images/food_categories/buger.jpg" class="categroy2 card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text6 mt-3 card-title">Burgers</h5>
                            <p class="card-text fw-bold bu text7 text-warning ">The bakery category is a delightful realm of freshly baked wonders, from artisanal bread to intricate pastries</p>
                            <button class="col-12 button-text3 fw-bold col-lg-4 button4 mt-2 mb-3">Learn More</button>
                        </div>
                    </div>
                    <div class="card card1 col-12 col-lg-3 ms-2 mb-3 d-lg-grid offset-lg-1" style="width: 320px; border-radius: 20px; background-color: white; border: none; box-shadow: 0 0 10px 0px;">
                        <img src="../FoodShop/resources/images/food_categories/cake.jpg" class="categroy2 card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text6 mt-3 card-title">Cake</h5>
                            <p class="card-text fw-bold bu text7 text-warning ">The bakery category is a delightful realm of freshly baked wonders, from artisanal bread to intricate pastries</p>
                            <button class="col-12 button-text3 fw-bold col-lg-4 button4 mt-2 mb-3">Learn More</button>
                        </div>
                    </div>
                    <div class="card card1 col-12 col-lg-3 ms-2 mb-3 d-lg-grid offset-lg-1" style="width: 320px; border-radius: 20px; background-color: white; border: none; box-shadow: 0 0 10px 0px;">
                        <img src="../FoodShop/resources/images/food_categories/hot sushi.webp" class="categroy2 card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text6 mt-3 card-title">Hot Shushi</h5>
                            <p class="card-text fw-bold bu text7 text-warning ">The bakery category is a delightful realm of freshly baked wonders, from artisanal bread to intricate pastries</p>
                            <button class="col-12 button-text3 fw-bold col-lg-4 button4 mt-2 mb-3">Learn More</button>
                        </div>
                    </div>
                    <div class="card card1 col-12 col-lg-3 ms-2 mb-3 d-lg-grid offset-lg-1" style="width: 320px; border-radius: 20px; background-color: white; border: none; box-shadow: 0 0 10px 0px;">
                        <img src="../FoodShop/resources/images/food_categories/rolls.jpg" class="categroy2 card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text6 mt-3 card-title">Rolls</h5>
                            <p class="card-text fw-bold bu text7 text-warning ">The bakery category is a delightful realm of freshly baked wonders, from artisanal bread to intricate pastries</p>
                            <button class="col-12 button-text3 fw-bold col-lg-4 button4 mt-2 mb-3">Learn More</button>
                        </div>
                    </div>
                    <div class="card card1 col-12 col-lg-3 ms-2 mb-3 d-lg-grid offset-lg-1" style="width: 320px; border-radius: 20px; background-color: white; border: none; box-shadow: 0 0 10px 0px;">
                        <img src="../FoodShop/resources/images/food_categories/bread2.jpg" class="categroy2 card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text6 mt-3 card-title">Breads</h5>
                            <p class="card-text fw-bold bu text7 text-warning ">The bakery category is a delightful realm of freshly baked wonders, from artisanal bread to intricate pastries</p>
                            <button class="col-12 button-text3 fw-bold col-lg-4 button4 mt-2 mb-3">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 about offset-lg-0 anime2">
                <div class="row justify-content-center">

                    <div class="col-12 col-lg-2">
                        <img src="../FoodShop/resources/images/about_1.png" class="card1 image">
                    </div>
                    <div class="col-12 col-lg-5 offset-lg-1">
                        <h1 class="text8">About Us</h1>
                        <h3>Why Choose us?</h3>
                        <p>The bakery category is a delightful realm of freshly baked wonders, from artisanal bread to intricate pastries. It's a haven where the sweet aroma of creativity
                            meets the perfect blend of flour and sugar. With each visit, expect a symphony of flavors and a cozy experience that celebrates the art of baking.
                            Whether it's a daily indulgence or a special occasion, the bakery category offers a delectable array of treats to satisfy every craving.</p>
                        <button class="about-button text9"><span class="span"></span>About More<i class="bi bi-chevron-right ms-1 fw-bold"></i></button>
                    </div>
                </div>
            </div>

            <div class="col-12 menu d-lg-grid">
                <div class="row justify-content-center">
                    <div class="text10 anime2">Our Best Menu</div>
                </div>
            </div>

            <div class="col-12 menu d-lg-grid">
                <div class="row justify-content-center">
                    <div class="text11 anime2">Our Best Food Menus</div>
                </div>
            </div>
            <div class="col-12" style="padding-left: 150px;">
                <div class="row justify-content-center">
                    <div class="card col-12 col-lg-2" style="border: none; background: none;">
                        <div class="row gap-4">
                            <div class="card card4 menu2 anime2">
                                <img src="../FoodShop/resources/images/food_categories/buger.jpg" alt="" class="mt-2 ms-2 card1 menu3">
                                <div class="text12 mt-1 ms-3" data-bs-toggle="collapse" href="#multiCollapseExample1" aria-expanded="false">
                                    Bugers
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card col-12 col-lg-2" style="border: none; background: none;">
                        <div class="row gap-4">
                            <div class="card card4 menu2 anime2">
                                <img src="../FoodShop/resources/images/food_categories/2.1.webp" alt="" class="mt-2 ms-2 card1 menu3">
                                <div class="text12 mt-1 ms-3" data-bs-toggle="collapse" href="#multiCollapseExample2" aria-expanded="false">
                                    Pastries
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-lg-2" style="border: none; background: none;">
                        <div class="row gap-4">
                            <div class="card card4 menu2 anime2">
                                <img src="../FoodShop/resources/images/food_categories/pizza2.jpg" alt="" class="mt-2 ms-2 card1 menu3">
                                <div class="text12 mt-1 ms-3" data-bs-toggle="collapse" href="#multiCollapseExample3" aria-expanded="false">
                                    Pizzas
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-lg-2" style="border: none; background: none;">
                        <div class="row gap-4">
                            <div class="card card4 menu2 anime2">
                                <img src="../FoodShop/resources/images/food_categories/bread3.webp" alt="" class="mt-2 ms-2 card1 menu3">
                                <div class="text12 mt-1 ms-3" data-bs-toggle="collapse" href="#multiCollapseExample4" aria-expanded="false">
                                    Breads
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-lg-2" style="border: none; background: none;">
                        <div class="row gap-4">
                            <div class="card card4 menu2 anime2">
                                <img src="../FoodShop/resources/images/food_categories/cake2.webp" alt="" class="mt-2 ms-2 card1 menu3">
                                <div class="text12 mt-1 ms-3" data-bs-toggle="collapse" href="#multiCollapseExample5" aria-expanded="false">
                                    Cake
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card col-12 mt-3" style="border: none; background: none;">
                            <div class="row justify-content-center">
                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/Burgers/1.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Classic Beef Burgers</div>
                                        <p class="card-text text-black">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>

                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/Burgers/2.avif" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Cheese Burgers</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>

                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/Burgers/3.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Veggie Burgers</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>

                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/Burgers/4.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Chicken Burgers</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <div class="col-12 mt-3">
                            <div class="row justify-content-center">
                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/Pastries/1.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Croissants</div>
                                        <p class="card-text text-black">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/Pastries/2.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Danishes</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/Pastries/3.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Puff Pastry</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>

                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/Pastries/4.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Cream Puffs</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="collapse multi-collapse" id="multiCollapseExample3">
                        <div class="col-12 mt-3">
                            <div class="row justify-content-center">
                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/pizza/1.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Classic Pizzas</div>
                                        <p class="card-text text-black">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/pizza/2.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Specialty Pizzas</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/pizza/3.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Vegetarian Pizzas</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>

                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/pizza/4.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Dessert Pizzas</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="collapse multi-collapse" id="multiCollapseExample4">
                        <div class="col-12 mt-3">
                            <div class="row justify-content-center">
                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/Breads/1.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Classic Breads</div>
                                        <p class="card-text text-black">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/Breads/2.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Specialty Breads</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/Breads/3.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Artisanal Sandwiches</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>

                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/Breads/4.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Flatbreads</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="collapse multi-collapse" id="multiCollapseExample5">
                        <div class="col-12 mt-3">
                            <div class="row justify-content-center">
                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/cakes/1.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Classic Cakes</div>
                                        <p class="card-text text-black">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/cakes/2.jpeg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Layered Cakes</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/cakes/3.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Specialty Cakes</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>

                                </div>

                                <div class="card card3 col-lg-3 ms-5 mb-5 mt-5 d-lg-grid" style="width: 290px;">
                                    <img src="../FoodShop/resources/images/Menu_images/cakes/4.jpg" class="img card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="text13 card-title text-center">Cheesecakes</div>
                                        <p class="card-text">The bakery category is a delightful realm of freshly baked wonders.</p>
                                        <div class="col-12">
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                            <i class="col-lg-2 bi bi-star-fill text14"></i>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <span class="fw-bold">Price</span> | <span class="text15 fw-bold">Rs.600/=</span>
                                                </div>
                                            </div>

                                        </div>
                                        <a><button class="menu-button text16 mt-3">Learn More<i class="icon bi bi-chevron-right ms-1"></i></button></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 menu d-lg-grid">
                <div class="row justify-content-center">
                    <h5 class="col-12 text17 anime2">Expert Chefs</h5>
                </div>
            </div>

            <div class="col-12 menu d-lg-grid">
                <div class="row">
                    <div class="col-12 text18 anime2">Our Expert Chefs</div>
                </div>
            </div>

            <div class="col-12">
                <div class="row gap-4">
                    <div class="col-12 team-box anime2">
                        <div class="row gap-4">
                            <div class="col-lg-3 profile">
                                <img src="../FoodShop/resources/images/chefs/team_1.jpg" class="profile-img" alt="">

                                <div class="col-12 info">
                                    <div class="col-12 text19 d-lg-grid">
                                        Senior Chef
                                    </div>
                                    <p class="col-12 col-lg-8 bio ms-lg-5 d-lg-grid">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                    <div class="col-12 team-icon d-lg-grid">
                                        <div class="row">
                                            <div class="icon3 col-lg-3 ms-2"><img src="../FoodShop/resources/images/icons/socail_midea/1.png" class="icon4 mt-2"></div>
                                            <div class="icon3 col-lg-3 ms-2"><img src="../FoodShop/resources/images/icons/socail_midea/6.png" class="icon4 mt-2"></div>
                                            <div class="icon3 col-lg-3 ms-2"><img src="../FoodShop/resources/images/icons/socail_midea/8.png" class="icon4 mt-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 profile">
                                <img src="../FoodShop/resources/images/chefs/team_2.jpg" class="profile-img" alt="">

                                <div class="col-12 info">
                                    <div class="col-12 text19 d-lg-grid">
                                        Junior Chef
                                    </div>
                                    <p class="col-12 col-lg-8 bio ms-lg-5 d-lg-grid">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                    <div class="col-12 team-icon d-lg-grid">
                                        <div class="row">
                                            <div class="icon3 col-lg-3 ms-2"><img src="../FoodShop/resources/images/icons/socail_midea/1.png" class="icon4 mt-2"></div>
                                            <div class="icon3 col-lg-3 ms-2"><img src="../FoodShop/resources/images/icons/socail_midea/6.png" class="icon4 mt-2"></div>
                                            <div class="icon3 col-lg-3 ms-2"><img src="../FoodShop/resources/images/icons/socail_midea/8.png" class="icon4 mt-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 profile">
                                <img src="../FoodShop/resources/images/chefs/team_3.jpg" class="profile-img" alt="">

                                <div class="col-12 info">
                                    <div class="col-12 text19 d-lg-grid">
                                        Chef
                                    </div>
                                    <p class="col-12 col-lg-8 bio ms-lg-5 d-lg-grid">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                    <div class="col-12 team-icon d-lg-grid">
                                        <div class="row">
                                            <div class="icon3 col-lg-3 ms-2"><img src="../FoodShop/resources/images/icons/socail_midea/1.png" class="icon4 mt-2"></div>
                                            <div class="icon3 col-lg-3 ms-2"><img src="../FoodShop/resources/images/icons/socail_midea/6.png" class="icon4 mt-2"></div>
                                            <div class="icon3 col-lg-3 ms-2"><img src="../FoodShop/resources/images/icons/socail_midea/8.png" class="icon4 mt-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 profile">
                                <img src="../FoodShop/resources/images/chefs/team_4.jpg" class="profile-img" alt="">

                                <div class="col-12 info">
                                    <div class="col-12 text19 d-lg-grid">
                                        Chef
                                    </div>
                                    <p class="col-12 col-lg-8 bio ms-lg-5 d-lg-grid">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                    <div class="col-12 team-icon d-lg-grid">
                                        <div class="row">
                                            <div class="icon3 col-lg-3 ms-2"><img src="../FoodShop/resources/images/icons/socail_midea/1.png" class="icon4 mt-2"></div>
                                            <div class="icon3 col-lg-3 ms-2"><img src="../FoodShop/resources/images/icons/socail_midea/6.png" class="icon4 mt-2"></div>
                                            <div class="icon3 col-lg-3 ms-2"><img src="../FoodShop/resources/images/icons/socail_midea/8.png" class="icon4 mt-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 menu d-lg-grid">
                <div class="row justify-content-center">
                    <h5 class="col-12 text20 anime2">Reviews</h5>
                </div>
            </div>

            <div class="col-12 menu d-lg-grid">
                <div class="row">
                    <div class="col-12 text21 anime2">Our Customer Reviews</div>
                </div>
            </div>
            <div class="col-12 anime2 review-body mb-5">
                <div class="row gap-4">
                    <div class="card card5 card1 ms-3 col-lg-3 d-lg-grid">
                        <div class="row">
                            <div class="col-12 ">
                                <img src="../FoodShop/resources/images/Customer_Reviews/1.avif" class="img2 mt-2" alt="">
                            </div>
                            <div class="col-12 text-center">
                                <h2 class="name2">John Deo</h2>

                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>

                                </br>
                                <i class="col-12 col-lg-3 bi bi-facebook icon2"></i>
                                <i class="col-12 col-lg-3 bi bi-twitter icon2"></i>
                                <i class="col-12 col-lg-3 bi bi-instagram icon2"></i>
                                <i class="col-12 col-lg-3 bi bi-linkedin icon2"></i>

                                <p class="col-12">
                                    I recently had the pleasure of experiencing outstanding service from foodShop.
                                    From the moment I reached out, their team went above and beyond to ensure my needs were not only met but exceeded.
                                    The level of professionalism and attention to detail was truly remarkable.The staff at [Company Name] were not only
                                    knowledgeable but also genuinely invested in providing a solution tailored to my specific requirements. 
                                    The communication was prompt and clear, making the entire process seamless.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card5 card1 ms-3 col-lg-3 d-lg-grid">
                        <div class="row">
                            <div class="col-12 review-profile">
                                <img src="../FoodShop/resources/images/Customer_Reviews/2.avif" class="img2 mt-2" alt="">
                            </div>
                            <div class="col-12 text-center">
                                <h2 class="name2">Paul Walker</h2>

                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>

                                </br>
                                <i class="col-12 col-lg-3 bi bi-facebook icon2"></i>
                                <i class="col-12 col-lg-3 bi bi-twitter icon2"></i>
                                <i class="col-12 col-lg-3 bi bi-instagram icon2"></i>
                                <i class="col-12 col-lg-3 bi bi-linkedin icon2"></i>

                                <p class="col-12">
                                    I recently had the pleasure of experiencing outstanding service from foodShop.
                                    From the moment I reached out, their team went above and beyond to ensure my needs were not only met but exceeded.
                                    The level of professionalism and attention to detail was truly remarkable.The staff at [Company Name] were not only
                                    knowledgeable but also genuinely invested in providing a solution tailored to my specific requirements.
                                    The communication was prompt and clear, making the entire process seamless.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card5 card1 ms-3 col-lg-3 d-lg-grid">
                        <div class="row">
                            <div class="col-12 review-profile">
                                <img src="../FoodShop/resources/images/Customer_Reviews/3.avif" class="img2 mt-2" alt="">
                            </div>
                            <div class="col-12 text-center">
                                <h2 class="name2">Jennie kim</h2>

                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>

                                </br>
                                <i class="col-12 col-lg-3 bi bi-facebook icon2"></i>
                                <i class="col-12 col-lg-3 bi bi-twitter icon2"></i>
                                <i class="col-12 col-lg-3 bi bi-instagram icon2"></i>
                                <i class="col-12 col-lg-3 bi bi-linkedin icon2"></i>

                                <p class="col-12">
                                    I recently had the pleasure of experiencing outstanding service from foodShop.
                                    From the moment I reached out, their team went above and beyond to ensure my needs were not only met but exceeded.
                                    The level of professionalism and attention to detail was truly remarkable.The staff at [Company Name] were not only
                                    knowledgeable but also genuinely invested in providing a solution tailored to my specific requirements.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card card5 card1 ms-3 col-lg-3 d-lg-grid">
                        <div class="row">
                            <div class="col-12 review-profile">
                                <img src="../FoodShop/resources/images/Customer_Reviews/4.jpg" class="img2 mt-2" alt="">
                            </div>
                            <div class="col-12 text-center">
                                <h2 class="name2">Jisoo</h2>

                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>
                                <i class="col-lg-2 bi bi-star-fill text22"></i>

                                </br>
                                <i class="col-12 col-lg-3 bi bi-facebook icon2"></i>
                                <i class="col-12 col-lg-3 bi bi-twitter icon2"></i>
                                <i class="col-12 col-lg-3 bi bi-instagram icon2"></i>
                                <i class="col-12 col-lg-3 bi bi-linkedin icon2"></i>

                                <p class="col-12">
                                    I recently had the pleasure of experiencing outstanding service from foodShop.
                                    From the moment I reached out, their team went above and beyond to ensure my needs were not only met but exceeded.
                                    The level of professionalism and attention to detail was truly remarkable.The staff at FoodShop were not only
                                    knowledgeable but also genuinely invested in providing a solution tailored to my specific requirements.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="top"><i class="bi bi-arrow-up"></i></a>
            <?php include "footer.php" ?>
        </div>
    </div>
</body>

</html>
