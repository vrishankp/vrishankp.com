<?php include 'header.php'; ?>
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8">
            <br>
            <h2>Python</h2>
            <p>Here are some of my best python projects that I coded entirely on my own. Click on the image to demo the code!</p>
            <p>Access the source code of my projects on <a href="https://github.com/vrishankp/python" target="_blank">GitHub</a></p>
            
            <div id="carousel" class="carousel slide" data-ride="carousel">

              <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
              </ol>
            
              <div class="carousel-inner">
                <div class="item active">
                  <a data-toggle="modal" data-target="#birthday" style="cursor: pointer;"><img src="images/birthday.jpeg" alt="Birthday Paradox"></a>
                  <div class="carousel-caption">
                    <h3>Birthday Paradox</h3>
                    <p>This small python program checks the infamous birthday paradox that in a room of 23 people, there is a 50% chance that two of them have the same birthday.</p>
                  </div>
                </div>
            
                <div class="item">
                  <a data-toggle="modal" data-target="#math" style="cursor: pointer;"><img src="images/numbers.jpeg" alt="Los Angeles"></a>
                  <div class="carousel-caption">
                    <h3>Math Programs</h3>
                    <p>A series of programs the do everything from generating fibonacci numbers to finding primes to the collatz conjecture.</p>
                  </div>
                </div>
            
                <div class="item">
                  <a data-toggle="modal" data-target="#monopoly" style="cursor: pointer;"><img src="images/monopoly.jpeg" alt="Los Angeles"></a>
                  <div class="carousel-caption">
                    <h3>Monopoly Simulator</h3>
                    <p>This program asks for number of interations and runs a mock game of Monopoly to see how many times each square is landed on.</p>
                  </div>
                </div>
              </div>
            

              <a class="left carousel-control" href="#carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        
            <div class="modal fade" id="birthday" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Birthday Paradox</h4>
                    </div>
                    <div class="modal-body">
                      <p>In the <a href="https://en.wikipedia.org/wiki/Birthday_problem" target="_blank">Birthday Paradox / Problem</a>, A hypothetical room consists of 23 people. The "paradox" is is that there is a 50% chance that two people in the room share a birthday, which seems to be higher than expected. This program creates multiple "room" of 23 people and gives them all a birthday (random number between 1 and 365). It then checks if that "room" has a matching birthday and returns true if it does. Finally, it counts the amount of "rooms" that returned true and divides it by total number of rooms and gets a percentage, which is almost always 50% or above.</p>
                      <p>Access the GitHub page here: <a href="https://github.com/vrishankp/python/blob/main/birthday.py" target="_blank">link</a></p>
                      <iframe src="https://trinket.io/embed/python/c684ba5412?outputOnly=true&runOption=run&start=result" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
                      <!--<iframe src="https://trinket.io/embed/python/27d1bd9402?toggleCode=true&runOption=run" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe> -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
            </div>
            
            <div class="modal fade" id="math" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Math Programs</h4>
                    </div>
                    <div class="modal-body">
                      <p>Here is a compilation of some of my math programs</p>
                      <p>Access the GitHub page here: <a href="https://github.com/vrishankp/python/" target="_blank">link</a></p>
                      <hr>
                      <b>Collatz Conjecture find Stopping Time</b>
                      <p>Enter a number Returns the "Stopping Time": The number of attempts it takes to turn a number into 1 following the <a href="https://en.wikipedia.org/wiki/Collatz_conjecture" target="_blank">Collatz Conjecture</a></p>
                      <iframe src="https://trinket.io/embed/python/b835d167d5?outputOnly=true&runOption=run&start=result" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
                      
                      <hr>
                      <b>Collatz Conjecture 2</b>
                      <p>Enter the maximum number Returns the stopping time for each number from 1 to the maximum number inputed</p>
                      <iframe src="https://trinket.io/embed/python/badeebd93b?outputOnly=true&runOption=run&start=result" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
                      
                      <hr>
                      <b>Golden Ratio from Fibonacci Numbers</b>
                      <p>Enter a number Returns the ratio between 2 numbers of the fibonnaci sequences, starting with the first 2 and ending with the inputed number. The numbers get closer the golden ration.</p>
                      <iframe src="https://trinket.io/embed/python/0ec69d8842?outputOnly=true&runOption=run&start=result" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
                      
                      <hr>
                      <b>Find Fibonacci Number</b>
                      <p>Enter the number Returns the fibonnaci at the place of the given number and the time it takes to accomplish</p>
                      <iframe src="https://trinket.io/embed/python/eca1f57d79?outputOnly=true&runOption=run&start=result" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
                      
                      <hr>
                      <b>First 100 Fibonacci Numbers</b>
                      <p>Returns the first 100 fibonnaci numbers and time it takes to calculate that</p>
                      <iframe src="https://trinket.io/embed/python/a4ce874c1f?outputOnly=true&runOption=run&start=result" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
                      
                      <hr>
                      <b>Find Primes between 2 numbers</b>
                      <p>Enter a number Returns all the primes from 1 to the inputed number, the count of number of primes, and the time it took to calculate</p>
                      <iframe src="https://trinket.io/embed/python/13a0ce87fa?outputOnly=true&runOption=run&start=result" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
                      
                      <hr>
                      <b>Prime Number Generator</b>
                      <p>Enter a number Returns the first primes from 1 to the inputed number and time it takes to calculate it</p>
                      <iframe src="https://trinket.io/embed/python/8578ded9d9?outputOnly=true&runOption=run&start=result" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
            </div>
            
            <div class="modal fade" id="monopoly" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Monopoly Simulator</h4>
                    </div>
                    <div class="modal-body">
                      <p>Enter the number of dice rolls to simulate Returns Number of times the character ends a turn on each tile. This means some tiles (like Go to Jail) don't have anything as the character never ends a turn on that tile.</p>
                      <p>Access the GitHub page here: <a href="https://github.com/vrishankp/Monopoly/blob/master/Monopoly.py" target="_blank">link</a></p>
                      <iframe src="https://trinket.io/embed/python/02d6edfbfb?outputOnly=true&runOption=run&start=result" width="100%" height="356" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
                     
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            
        </div>
    </div>


<?php include 'footer.php'; ?>