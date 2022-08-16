<nav class="h-16 bg-gray-50 shadow-md flex justify-between px-4">
   <a href="#">
      <img class="h-full py-1" src="<?= url('assets/img/company/logo/graymark-high-uality-logo-3x2-no-undertext.png')?>" alt="">
   </a>
   <ul class="nav-menu">
      <li class="nav-item hover:underline underline-offset-2 "><a href="<?= url('') ?>">Homepage</a></li>
      <li class="nav-item hover:underline underline-offset-2 "><a href="<?= url('/products') ?>">Products</a></li>
      <li class="nav-item hover:underline underline-offset-2 dropdown-toggle"><a href="#">About</a>
         <ul class="dropdown-menu z-10">
            <li class="dropdown-item"><a href="<?= url('/about') ?>">Our Company</a></li>
            <li class="dropdown-item"><a href="<?= url('/client') ?>">Our Valued Clients</a></li>
            <li class="dropdown-item"><a href="<?= url('/facility') ?>">Our Facilities</a></li>
         </ul>
      </li>
      <li class="nav-item hover:underline underline-offset-2"><a href="<?= url('/contact') ?>">Contact us</a></li>
   </ul>
   <div class="nav-toggle my-auto">
      <i class="fa-solid fa-bars text-2xl"></i>
   </div>
</nav>