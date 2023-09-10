<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Bienvenue</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">A propos</a></li>
                       
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Selectionner votre moto</h1>
                    <p class="lead fw-normal text-white-50 mb-0">vos experiences pour maintenant</p>
                </div>
            </div>
        </header>
        <!-- Section-->

        <br><br>
        <div style="margin-left: 105px">
            <span style="margin-right: 75px">Photos</span>
            <span style="margin-right: 55px">Type de moto</span>
            <span style="margin-right: 55px">Lieu</span>
            <span style="margin-right: 60px">Course</span>
            <span style="margin-right: 75px">Prix</span>
            <span>Opération</span>
            <hr style="width:100%; height:15px;">
        </div><br>

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/MOTO.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Moto Simple</h5>
                                    <!-- Product price-->
                                    $4.00 - $4.00
                                </div>
                            </div>
                            <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                            
                    <div class="options">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Ajouter </button> 


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                      <div class="modal-dialog modal-lg" role="document"> 
                        <div class="modal-content" style="border-radius: 20px;"> 
                          <div class="modal-header"> 
                            <h5 style="color: rgb(21, 104, 199);" class="modal-title" id="exampleModalLabe">Moto Simple</h5> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
                          </div>
                          <br><br>
                          <div style="color: black;" class="modal-body">
                            <div class="container img-box">
                              <img src="images/a.jpg" alt="">
                              <div class="container">
                    <form class="formulaire" method='POST'>
                            <div class="user-details">
                                <div class="form-outline mb-4">
                                <label class="form-label" >Lieu</label>
                                <input type="text" class="form-control" name="lieu" />
                                </div>
                        
                                <div class="form-outline mb-4">
                                <label class="form-label" >Ville</label>
                                <input type="text" class="form-control" name="ville" />
                                </div>
                                
                                <div class="form-outline mb-4">
                                <label class="form-label" >Email</label>
                                <input type="text" class="form-control" name="mail" />
                                </div>  

                                <div class="form-outline mb-4">
                                <label class="form-label" >Numero</label>
                                <input type="text" class="form-control" name="mail" />
                                </div>                     

                                <div class="form-outline mb-4">
                                <label class="form-label" >Lieu arrivé</label>
                                <input type="text" class="form-control" name="lieux" />
                                </div>
                            </div>  

                        <div class="button">
                        <a href="mailto:bkuzondisa@gmail.com" type="submit" class="btn btn-primary mb-4 " name="validate" style="width: 100%;">Envoyer la demande</a></div>
                        <div class="form-text" style="text-align:center;">Vous avez déjà un compte? <a href="./signin.php" style="text-decoration:none;">Connectez-vous</a></div>
                        <div class="form-text" style="text-align:center;">En créant un compte vous acceptez les conditions d'utilisation de notre plateforme.</div>
                    </form>
                              </div>
                            </div>
                          </div> 
                          <div class="modal-footer"> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                          </div> 
                        </div> 
                      </div> 
                    </div>
                    </div>
                    </div>
                    </div>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/MOTOa.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Moto Dt</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$5.00</span>
                                    $10.00
                                </div>
                            </div>
                            <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                            
                    <div class="options">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1"> Ajouter </button> 


                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                      <div class="modal-dialog modal-lg" role="document"> 
                        <div class="modal-content" style="border-radius: 20px;"> 
                          <div class="modal-header"> 
                            <h5 style="color: rgb(21, 104, 199);" class="modal-title" id="exampleModalLabe">Moto Dt</h5> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
                          </div>
                          <br><br>
                          <div style="color: black;" class="modal-body">
                            <div class="container img-box">
                              <img src="images/a.jpg" alt="">
                              <div class="container">
                                <form class="formulaire" method='POST'>
                            <div class="user-details">
                                <div class="form-outline mb-4">
                                <label class="form-label" >Lieu</label>
                                <input type="text" class="form-control" name="lieu" />
                                </div>
                        
                                <div class="form-outline mb-4">
                                <label class="form-label" >Ville</label>
                                <input type="text" class="form-control" name="ville" />
                                </div>
                                
                                <div class="form-outline mb-4">
                                <label class="form-label" >Email</label>
                                <input type="text" class="form-control" name="mail" />
                                </div>  

                                <div class="form-outline mb-4">
                                <label class="form-label" >Numero</label>
                                <input type="text" class="form-control" name="mail" />
                                </div>                     

                                <div class="form-outline mb-4">
                                <label class="form-label" >Lieu arrivé</label>
                                <input type="text" class="form-control" name="lieux" />
                                </div>
                            </div>  

                        <div class="button">
                        <a href="mailto:bkuzondisa@gmail.com" type="submit" class="btn btn-primary mb-4 " name="validate" style="width: 100%;">Envoyer la demande</a></div>
                        <div class="form-text" style="text-align:center;">Vous avez déjà un compte? <a href="./signin.php" style="text-decoration:none;">Connectez-vous</a></div>
                        <div class="form-text" style="text-align:center;">En créant un compte vous acceptez les conditions d'utilisation de notre plateforme.</div>
                    </form>
                              </div>
                            </div>
                          </div> 
                          <div class="modal-footer"> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                          </div> 
                        </div> 
                      </div> 
                    </div>
                    </div>
                    </div>
                    </div>
                        </div>
                    </div>
                   

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/MOTOb.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Moto prt</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                            
                    <div class="options">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2"> Ajouter </button> 


                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                      <div class="modal-dialog modal-lg" role="document"> 
                        <div class="modal-content" style="border-radius: 20px;"> 
                          <div class="modal-header"> 
                            <h5 style="color: rgb(21, 104, 199);" class="modal-title" id="exampleModalLabe">Moto ptr</h5> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
                          </div>
                          <br><br>
                          <div style="color: black;" class="modal-body">
                            <div class="container img-box">
                              <img src="images/a.jpg" alt="">
                              <div class="container">
                                <form class="formulaire" method='POST'>
                            <div class="user-details">
                                <div class="form-outline mb-4">
                                <label class="form-label" >Lieu</label>
                                <input type="text" class="form-control" name="lieu" />
                                </div>
                        
                                <div class="form-outline mb-4">
                                <label class="form-label" >Ville</label>
                                <input type="text" class="form-control" name="ville" />
                                </div>
                                
                                <div class="form-outline mb-4">
                                <label class="form-label" >Email</label>
                                <input type="text" class="form-control" name="mail" />
                                </div> 

                                <div class="form-outline mb-4">
                                <label class="form-label" >Numero</label>
                                <input type="text" class="form-control" name="mail" />
                                </div>                      

                                <div class="form-outline mb-4">
                                <label class="form-label" >Lieu arrivé</label>
                                <input type="text" class="form-control" name="lieux" />
                                </div>
                            </div>  

                        <div class="button">
                        <a href="mailto:bkuzondisa@gmail.com" type="submit" class="btn btn-primary mb-4 " name="validate" style="width: 100%;">Envoyer la demande</a></div>
                        <div class="form-text" style="text-align:center;">Vous avez déjà un compte? <a href="./signin.php" style="text-decoration:none;">Connectez-vous</a></div>
                        <div class="form-text" style="text-align:center;">En créant un compte vous acceptez les conditions d'utilisation de notre plateforme.</div>
                    </form>
                              </div>
                            </div>
                          </div> 
                          <div class="modal-footer"> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                          </div> 
                        </div> 
                      </div> 
                    </div>
                    </div>
                    </div>
                    </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/MOTOc.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Popular Moto</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $2.00
                                </div>
                            </div>
                            <!-- Product actions-->

                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                            
                    <div class="options">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3"> Ajouter </button> 


                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                      <div class="modal-dialog modal-lg" role="document"> 
                        <div class="modal-content" style="border-radius: 20px;"> 
                          <div class="modal-header"> 
                            <h5 style="color: rgb(21, 104, 199);" class="modal-title" id="exampleModalLabe">Popular moto</h5> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
                          </div>
                          <br><br>
                          <div style="color: black;" class="modal-body">
                            <div class="container img-box">
                              <img src="images/a.jpg" alt="">
                              <div class="container">
                               <form class="formulaire" method='POST'>
                            <div class="user-details">
                                <div class="form-outline mb-4">
                                <label class="form-label" >Lieu</label>
                                <input type="text" class="form-control" name="lieu" />
                                </div>
                        
                                <div class="form-outline mb-4">
                                <label class="form-label" >Ville</label>
                                <input type="text" class="form-control" name="ville" />
                                </div>
                                
                                <div class="form-outline mb-4">
                                <label class="form-label" >Email</label>
                                <input type="text" class="form-control" name="mail" />
                                </div>  

                                <div class="form-outline mb-4">
                                <label class="form-label" >Numero</label>
                                <input type="text" class="form-control" name="mail" />
                                </div>                    

                                <div class="form-outline mb-4">
                                <label class="form-label" >Lieu arrivé</label>
                                <input type="text" class="form-control" name="lieux" />
                                </div>
                            </div>  

                        <div class="button">
                        <a href="mailto:bkuzondisa@gmail.com" type="submit" class="btn btn-primary mb-4 " name="validate" style="width: 100%;">Envoyer la demande</a></div>
                        <div class="form-text" style="text-align:center;">Vous avez déjà un compte? <a href="./signin.php" style="text-decoration:none;">Connectez-vous</a></div>
                        <div class="form-text" style="text-align:center;">En créant un compte vous acceptez les conditions d'utilisation de notre plateforme.</div>
                    </form>
                              </div>
                            </div>
                          </div> 
                          <div class="modal-footer"> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                          </div> 
                        </div> 
                      </div> 
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>



                    </div>
                </div>
            </div>
        </section>
        
<?php
   require 'footer.php'; 
?>
    </body>
</html>
