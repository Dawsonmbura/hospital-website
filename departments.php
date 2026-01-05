
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
         <h2>Contact us</h2>
         <p>contacts goes here.</p>
         <ul style="list-style: none; padding: 0;">
             <li>Emergency Care</li>
             <li>Surgery</li>
             <li>Pediatrics</li>
             <li>Cardiology</li>
         </ul>
     </section>     

        <!-- php code to link footer file -->
    <?php include 'footer.php'; ?>
 </body>
 </html>