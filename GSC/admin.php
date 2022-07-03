<?php
session_start();
require 'connect.php';

if(!isset($_SESSION['user'])) {
    header('Location: Acceuil.php');
}

include('includes/head.php');
include('includes/header.php');

?>


    <!-- <div class="slide-1" style="background-image: url('images/sdc1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
               

                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div> -->
 
    
<?php
include('includes/script.php');
?>
