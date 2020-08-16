<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>form</title>
    <link rel="stylesheet" href="style.css">

     
</head>
  <body >
        <section id="logo-con">
            <table>
                <th>
                    <td><img id="logo" src="logo.png" alt=""></td>
                </th>
                <th>
                    <td>
                        <H1>FACTUM</H1>
                    </td>
                </th>
            </table>
        </section>
        
        <section>

            <section >
        <div id="main"> 
            <table id="table2">
                <th>
                    <td><img id="bg-img" src="img2.jpeg" alt="" srcset=""></td>
                </th>
                <th>
                    <td>
                        <div class="cointainer">
                            <form action="uplode.php" method="POST" enctype="multipart/form-data">
                            

                            <div class="form-group">
                            <label for="Name">Name</label>
                                <input type="text"  name="Name" class="form-control" id="Name" placeholder="Asif Sheikh" required>
                            </div>


                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" name="Email" class="form-control" id="Email" placeholder="example@gmail.com" required>
                            </div>


                            <div class="form-group">
                                <label for="mobile">Contact Number</label>
                                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="99999-99999" required>
                            </div>


                            <div class="form-group">
                                <label for="Registration">Registration Number</label>
                                <input type="text" name="Registration" class="form-control" id="Registration" placeholder="Registration number(11906281)" required>
                            </div>

                            <div class="form-group">
                                <label for="College">College/University/School</label>
                                <input type="text" name="College" class="form-control" id="College" placeholder="LPU" required>
                            </div>

                            <div class="form-group">
                                <label for="Gender">Gender</label>
                                <select id="Gender"  name="Gender" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Prefer Not To Say</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Event">Event</label>
                                <select id="Event"  name="Event" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>Quizney</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Payment">Payment proof</label>
                                <input type="file" class="form-control" name="Payment" id="Payment">
                            </div>

                            <div class="form-group">
                            
                            </div>
                            <button type="submit"  name= " submit" class="btn btn-block btn-dark">Submit</button>
                            </form>
                        </div>

                    </td>
                </th>
            </table>
        </div>
        </section>
     <section>
    
  


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </section>
  </body>
</html>