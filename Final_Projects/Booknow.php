<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<div class="container-fluid" style="background-color: rgb(22, 18, 18); color:white;" >
        <div class="row">
            <div class="col-sm-12  mt-4">
          <h1>
          <center>Book Now</center>
          </h1>
          </div>
          <br>
          <br>
          <div class="col-sm-3" >
         <img src="room1.jpg" height="300px" width="100%">
        </div> 
         <div class="col-sm-3" >
            <img src="room2.jpg" height="300px" width="100%">
        </div>
        <div class="col-sm-3" >
            <img src="room3.jpg" height="300px" width="100%">
        </div>
        <div class="col-sm-3" >
            <img src="room4.jpg" height="300px" width="100%">
        </div>

        <div class="col-sm-3"></div>
          <div class="col-sm-5 mt-5" style="justify-content: center;">
            <form action="Booknowcode.php" method="post">
                <div class="mb-3 pl-5">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 pl-5">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                </div>
                <div class="mb-3 pl-5">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="name">
                  </div>
                  <div class="mb-3 pl-5">
                    <label for="exampleInputPassword1" class="form-label">Mobile</label>
                    <input type="number" class="form-control" id="exampleInputMobile1" name="mob">
                  </div>
                  <div class="mb-3 pl-5">
                    <label for="exampleInputPassword1" class="form-label">Location</label>
                    <input type="location" class="form-control" id="exampleInputLocation1" name="location" >
                  </div>
                  <div class="mb-3 pl-5">
                    <label for="exampleInputPassword1" class="form-label">Date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="date">
                  </div>
                  <div class="mb-3 pl-5">
                    <label for="exampleInputPassword1" class="form-label">Time</label>
                    <input type="time" class="form-control" id="exampleInputTime1" name="time">
                  </div>
                  <div class="mb-3 pl-5">
                    <label for="inputservices" class="form-label">Room type</label>
                    <select id="inputservices" class="form-select" name="room">
                      <option selected>Please Select</option>
                     <option>Premium Cottage</option>
                     <option>Cottage Garden</option>
                     <option>Serviced Apartment</option>
                     <option>Poll Villa</option>
                    </select>
                  </div>
                  
                <div class="mb-3 form-check pl-5">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <center><button type="submit" class="btn btn-primary">Book your Room</button></center>
              </form>
          </div>
          <div class="col-sm-3"></div>
          
       
 </div>
</div>
</body>