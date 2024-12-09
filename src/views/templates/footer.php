 <!-- Footer Start -->
 <footer class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">
     <div class="row pt-5">
         <div class="col-lg-4 col-md-12 mb-5">
             <h1 class="m-0 display-5 text-white"><span class="text-primary"><?= $data['title'] ?></span><?= $data['subtitle'] ?></h1>
             <p class="m-0"><?= $data['description'] ?></p>
         </div>
         <div class="col-lg-8 col-md-12">
             <div class="row">
                 <div class="col-md-4 mb-5">
                     <h5 class="text-primary mb-4">Entre em contato</h5>
                     <p><i class="fa fa-map-marker-alt mr-2"></i><?= $data['endereco'] ?></p>
                     <p><i class="fa fa-phone-alt mr-2"></i><?= $data['tel'] ?></p>
                     <p><i class="fa fa-envelope mr-2"></i><?= $data['email'] ?></p>
                     <div class="d-flex justify-content-start mt-4">
                         <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                         <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                         <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                         <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                     </div>
                 </div>
                 <div class="col-md-4 mb-5">
                     <h5 class="text-primary mb-4">Links Populares</h5>
                     <div class="d-flex flex-column justify-content-start">
                         <a class="text-white mb-2" href="home"><i class="fa fa-angle-right mr-2"></i>Home</a>
                         <a class="text-white mb-2" href="about"><i class="fa fa-angle-right mr-2"></i>Sobre</a>
                         <a class="text-white mb-2" href="service"><i class="fa fa-angle-right mr-2"></i>Nossos Serviços</a>
                         <a class="text-white mb-2" href="team"><i class="fa fa-angle-right mr-2"></i>Nosso Time</a>
                         <a class="text-white" href="contact"><i class="fa fa-angle-right mr-2"></i>Entre em contato</a>
                     </div>
                 </div>
                 <div class="col-md-4 mb-5">
                     <h5 class="text-primary mb-4">Newsletter</h5>
                     <form action="">
                         <div class="form-group">
                             <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                         </div>
                         <div class="form-group">
                             <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                         </div>
                         <div>
                             <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Inscreva-se</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <footer class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
     <div class="row">
         <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
             <p class="m-0 text-white">
                 &copy; <a class="text-white font-weight-bold" href="#"><span class="text-primary"><?= $data['title'] ?></span><?= $data['subtitle'] ?></a>. Todos os direitos reservados. Projetado por
                 <a class="text-white font-weight-bold" href="https://htmlcodex.com" target="_blank">HTML Codex</a> | <a class="text-white font-weight-bold" href="https://aldomar.online/blog" target="_blank">Aldomar Assolin</a>
             </p>
         </div>
         <div class="col-md-6 text-center text-md-right">
             <ul class="nav d-inline-flex">
                 <li class="nav-item">
                     <a class="nav-link text-white py-0" href="#">Privacy</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white py-0" href="#">Terms</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white py-0" href="#">FAQs</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link text-white py-0" href="#">Help</a>
                 </li>
             </ul>
         </div>
     </div>
 </footer>
 <!-- Footer End -->