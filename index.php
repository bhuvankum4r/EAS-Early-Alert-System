<html>
<html lang="en">
   <head>
   <title>
    Register Yourself!
  </title>
  <style type="text/css">
body
  {
  background-image: url(Registration.jpg);
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  }

          .one
         {
           position: absolute;
           top:227px;
           left:463px;
         }

          .two
         {
           position: absolute;
           top:270px;
           left:463px;
         }

         .three
         {
           position: absolute;
           top:310px;
           left:463px;
         }

         .four
         {
           position: absolute;
           top:350px;
           left:463px;
         }

         .five
         {
           position: absolute;
           top:227px;
           right:595px;
         }

         .six
         {
           position: absolute;
           top:270px;
           right:595px;
         }

         .seven
         {
           position: absolute;
           top:310px;
           right:595px;
         }

         .eight
         {
           position: absolute;
           top:350px;
           right:595px;
         }

         .nine
         {
           position: absolute;
           top:400px;
           right:590px;
         }

         .ten
        {
            position: absolute;
            top:0px;
            left:0px;
        }

        .reset
        {
            position: absolute;
            top: 400px;
            left: 510px;
        }    
</style>
   </head>
   <body>
      <center>
      <input type="button" onclick="location.href='Homepage.html';" class="ten" value="Home" style="border-radius:15px ;height:40px; width:75px; font-size: 20px;" />
         <form action="insert.php" method="post">
   <div  class="one">          
<p>
               <input type="text" name="name" required name="name"  placeholder="*Your Name" rows="1px" cols="23px"  style="border-radius:15px ;font: size 1px; resize: none;">
            </p>
      </div>
      <div  class="two">       
<p>         
               <input type="date" name="age" required name="age" rows="1px" cols="23px"  style="border-radius:15px ;font: size 1px; resize: none;">
            </p>
      </div>
      <div  class="three">      
<p>
               <input type="text" name="address" required name="address"  placeholder="*Address" rows="1px" cols="23px"  style="border-radius:15px ;font: size 1px; resize: none;">
            </p>
      </div>
      <div  class="four">    
<p>
               <input type="number" name="phone" required name="phone"  placeholder="*Contact No." rows="1px" cols="23px"  style="border-radius:15px ;font: size 1px; resize: none;">
            </p>
      </div>
      <div  class="five">     
<p>
               <input type="text" name="email" required name="email"  placeholder="*E-mail" rows="1px" cols="23px"  style="border-radius:15px ;font: size 1px; resize: none;">
            </p>
      </div>
      <div  class="six">
            <p>
               <input type="text" name="userID" required name="userID"  placeholder="*User ID" rows="1px" cols="23px"  style="border-radius:15px ;font: size 1px; resize: none;">
            </p>     
      </div>
      <div  class="seven">     
            <p>
               <input type="password" name="password" required name="password"  placeholder="*Password" rows="1px" cols="23px"  style="border-radius:15px ;font: size 1px; resize: none;">
            </p>
      </div>
      <div  class="eight">
            <p>
               <input type="password" name="confirmPassword" required name="confirmPassword"  placeholder="*Confirm Password" rows="1px" cols="23px"  style="border-radius:15px ;font: size 1px; resize: none;">
      </div>
      <input type="submit" value="Submit" class="nine" style="border-radius:15px ;height:20px; width:70px">
            <input type="reset" value="Reset" class="reset"  style="border-radius:15px ;font: size 1px; resize: none;">
         </form>
      </center>
   </body>
</html>
