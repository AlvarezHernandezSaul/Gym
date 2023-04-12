  
   @yield('tabla') <!-- Class Timetable Start -->

    <div class="container gym-feature py-5" >
        <div class="d-flex flex-column text-center mb-5">
            
        </div>
        <div class="tab-class" >
            <ul class="nav  justify-content-center mb-4 ">
                <li class="nav-item rounded text--white" style="background-color: #07ca07;" >
                    <a class="nav-link active" data-toggle="pill" href="#class-all"  >All Classes</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " data-toggle="pill" href="#class-cardio">Cardio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="pill" href="#class-crossfit">Crossfit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " data-toggle="pill" href="#class-powerlifting">Pesas</a>
                </li>
            </ul>
            <div class="tab-content" style="background-color: #07ca07;">
                <div id="class-all" class="container tab-pane p-0 active" >
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Horario</th>
                                    <th>Lunes</th>
                                    <th>Martes</th>
                                    <th>Miercoles</th>
                                    <th>Jueves</th>
                                    <th>Viernes</th>
                                    <th>Sabado</th>
                                    <th>Domingo</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Pesas</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td><h5>Pesas</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Pesas</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Pesas</h5>James Alien</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-cardio" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Horario</th>
                                    <th>Lunes</th>
                                    <th>Martes</th>
                                    <th>Miercoles</th>
                                    <th>Jueves</th>
                                    <th>Viernes</th>
                                    <th>Sabado</th>
                                    <th>Domingo</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Pesas</h5>James Alien</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>John Deo</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td><h5>Pesas</h5>James Alien</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td> 
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Pesas</h5>James Alien</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Pesas</h5>James Alien</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-crossfit" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Horario</th>
                                    <th>Lunes</th>
                                    <th>Martes</th>
                                    <th>Miercoles</th>
                                    <th>Jueves</th>
                                    <th>Viernes</th>
                                    <th>Sabado</th>
                                    <th>Domingo</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Pesas</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td><h5>Pesas</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Adam Phillips</td>
                                    <td></td> 
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Pesas</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Adam Phillips</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td><h5>Pesas</h5>James Alien</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="class-powerlifting" class="container tab-pane fade p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-lg m-0">
                            <thead class="bg-secondary text-white text-center">
                                <tr>
                                    <th>Horario</th>
                                    <th>Lunes</th>
                                    <th>Martes</th>
                                    <th>Miercoles</th>
                                    <th>Jueves</th>
                                    <th>Viernes</th>
                                    <th>Sabado</th>
                                    <th>Domingo</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Pesas</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Pesas</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td> 
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Pesas</h5>James Alien</td>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                </tr>
                                <tr>
                                    <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                    <td></td>
                                    <td><h5>Cardio</h5>John Deo</td>
                                    <td></td>
                                    <td><h5>Crossfit</h5>Adam Phillips</td>
                                    <td></td>
                                    <td class="bg-primary text-white"><h5 class="text-white">Pesas</h5>James Alien</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <style>
            body{
                background-color: #202529;
            }
            
            table{
              margin-left: 18%;
                
                
            
            }
            .titlerutina{
              width: 30px;
              height: 50px;
              padding-left: 50px;
              color: #5ffc71;
        
            }
            td{
                border-radius: 5px;
            }
            
            #calendar {
                border-collapse: collapse;
            }
        
            #calendar th {
                background-color: #ccc;
                padding: 10px;
            }
        
            #calendar td {
                border: 1px solid #ccc;
                height: 100px;
                padding: 10px;
                position: relative;
            }
        
            #calendar td:hover {
                background-color: #f5f5f5;
                cursor: pointer;
            }
        
            #calendar td div {
                background-color:	#d9edf7;
            border-radius: 5px;
            color: #31708f;
            padding: 5px;
            position: absolute;
            bottom: 5px;
            left: 5px;
            right: 5px;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
            
        </style>
        <body>
        <hr>
          <div class="container">
            <div class="row">
              <div class="col-12">        
                <div class="card" style="background-color: #6f839a;">
                  <div class="card-header">
                    <button class="btn" type="button" style="background-color: #07ca07;" data-bs-toggle="collapse" data-bs-target="#tabla-rutinas" aria-expanded="false" aria-controls="tabla-rutinas" >
                      Mostrar rutinas
                    </button>
                    <button class="btn" type="button" style="background-color: #07ca07;"data-bs-toggle="collapse" data-bs-target="#tabla-recetas" aria-expanded="false" aria-controls="tabla-recetas">
                      Mostrar recetas
                    </button>
                    <button class="btn" type="button" style="background-color: #07ca07;" data-bs-toggle="collapse" data-bs-target="#tabla-calendario" aria-expanded="false" aria-controls="tabla-calendario">
                        Mostrar calendario
                      </button>
                  </div>
                  <div class="card-body">
                    <div class="collapse" id="tabla-rutinas">
                      <table>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/ObPPmCoiFAA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/NsceVmfkQJ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/ObPPmCoiFAA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/FqBfjPfjpME" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/uMuwj0H2RDg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/dqynXqte24o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/6wM1DAw87DM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/ZqLF4C3qM1s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/xP4iItH8HBU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/wIppFAhl6SE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>                    
                          </table>
                    </div>
                    <div class="collapse" id="tabla-recetas">
                        <table>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/7fkmZUo7Rxc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/LRPZZZpkDBA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/YXVfbW7vsxk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/NrbOrd2X9yQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/v5hX5Hk_A1I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/pJbZgGQOME4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/wgbLUYHhHE0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                            <tr>
                              <td><iframe width="700" height="400" src="https://www.youtube.com/embed/FUsCi-raVzY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></td>
                            </tr>
                        </table>
                          
                    </div>
                    <div class="collapse" id="tabla-calendario">
                        <table id="calendar" style="background-color: #ccc;">
                            <thead>
                                <tr>
                                    <th>Domingo</th>
                                    <th>Lunes</th>
                                    <th>Martes</th>
                                    <th>Miércoles</th>
                                    <th>Jueves</th>
                                    <th>Viernes</th>
                                    <th>Sábado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <!-- repetir para cada semana del mes -->
                            </tbody>
                        </table>
                        </div>
                        <script>
                            window.onload = function() {
                                var date = new Date();
                                var year = date.getFullYear();
                                var month = date.getMonth();
                        
                                var calendar = document.getElementById('calendar');
                                var calendarBody = calendar.getElementsByTagName('tbody')[0];
                        
                                while (calendarBody.firstChild) {
                                    calendarBody.removeChild(calendarBody.firstChild);
                                }
                        
                                var daysInMonth = new Date(year, month + 1, 0).getDate();
                                var firstDayOfMonth = new Date(year, month, 1).getDay();
                        
                                var dayOfWeek = 0;
                                var row = document.createElement('tr');
                        
                                for (var i = 1; i < firstDayOfMonth; i++) {
                                    row.appendChild(document.createElement('td'));
                                    dayOfWeek++;
                                }
                        
                                for (var i = 1; i <= daysInMonth; i++) {
                                    var cell = document.createElement('td');
                                    cell.innerText = i;
                                    cell.dataset.dayOfWeek = dayOfWeek;
                        
                                    cell.onclick = function() {
                                        var activity = prompt('Ingrese una actividad para el día ' + this.innerText);
                                        if (activity) {
                                            var activityEl = document.createElement('div');
                                            activityEl.innerText = activity;
                                            this.appendChild(activityEl);
                                        }
                                    };
                        
                                    row.appendChild(cell);
                                    dayOfWeek++;
                        
                                    if (dayOfWeek === 7) {
                                        calendarBody.appendChild(row);
                                        row = document.createElement('tr');
                                        dayOfWeek = 0;
                                    }
                                }
                        
                                // completar la última semana del mes
                                for (var i = dayOfWeek; i < 7; i++) {
                                    row.appendChild(document.createElement('td'));
                                }
                        
                                calendarBody.appendChild(row);
                            };
                        </script>
                        
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js"></script>
        </body>
        </html>
        
    </div>
    <!-- Class Timetable End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
