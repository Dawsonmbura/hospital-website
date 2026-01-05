
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
         <h2>Contact Us</h2>
         <p>For more information, please contact us at:</p>
         <ul style="list-style: none; padding: 0;">
             <li>Email: info@swerelankerhospital.com</li>
             <li>Phone: +254 700 123456</li>
             <li>Address: Mombasa, Kenya</li>
         </ul>
     </section>     

        <!-- php code to link footer file -->
    <?php include 'footer.php'; ?>
 </body>
 </html>