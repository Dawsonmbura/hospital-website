
<!DOCTYPE html>
<html lang="en">

 <body>
     <header>
        <!-- php code to link header file -->
        <?php include 'header.php'; ?>
     </header>

     <section class="hero" >
         <div>
             <h1>Welcome to Swerelanker Hospital</h1>
             <h2>Your health is our priority. Providing quality care since <?php echo date('Y'); ?>.</h2>
         </div>
     </section>

     <section class="section services">
         <h2>Our Doctors</h2>
         <p>Our team of experienced doctors is dedicated to providing the best medical care.<br/>
         We are committed to excellence in patient care and medical innovation.</p>
         
     </section>     

        <!-- php code to link footer file -->
    <?php include 'footer.php'; ?>
 </body>
 </html>