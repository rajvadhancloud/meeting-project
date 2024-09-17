<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Slot</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="console-schedular">
        <div class="schedular-filters">
            <div class="vehicle-type">
                <select class="select full">
                    <option>Select Vehicle Type</option>
                    <option>SUV</option>
                    <option>SEDAN</option>
                </select>
            </div><!-- Vehicle Type -->

            <div class="date-changer">
                <a class="custom-btn prevDate" href="#" title=""><i class="fa fa-chevron-left"></i></a>
                <input type="text" class="new-datepicker" />
                <a class="custom-btn nextDate" href="#" title=""><i class="fa fa-chevron-right"></i></a>
            </div><!-- Date Picker -->
        </div> <!-- Schedular Filters -->

        <div class="schedular-body">
            <div class="vehicles-info">
                <h3>Vehicle Information</h3>

                <div class="car">
                    <div class="car-top"> <span>PLA 9876 : 2018</span> <i>22H</i> </div>
                    <div class="car-bottom">
                        <h5>BMW M SERIES</h5> <i>Car 123</i>
                    </div>
                </div><!-- Car -->

                <div class="car">
                    <div class="car-top"> <span>NY 614: 2018</span> <i>30H</i> </div>
                    <div class="car-bottom">
                        <h5>BMW X1</h5> <i>Car 678</i>
                    </div>
                </div><!-- Car -->

                <div class="car">
                    <div class="car-top"> <span>T76768 : 2015</span> <i>42H</i> </div>
                    <div class="car-bottom">
                        <h5>BMW i8</h5> <i>Car 987</i>
                    </div>
                </div><!-- Car -->
            </div><!-- Vehicle Information -->

            <div class="main-schedular">
                <div class="grids">
                    <div class="grids-head">
                        <div class="timeslot"> 12:00 AM </div>
                        <div class="timeslot"> 12:30 AM </div>
                        <div class="timeslot"> 01:00 AM </div>
                        <div class="timeslot"> 01:30 AM </div>
                        <div class="timeslot"> 02:00 AM </div>
                        <div class="timeslot"> 02:30 AM </div>
                        <div class="timeslot"> 03:00 AM </div>
                        <div class="timeslot"> 03:30 AM </div>
                        <div class="timeslot"> 04:00 AM </div>
                        <div class="timeslot"> 04:30 AM </div>
                        <div class="timeslot"> 05:00 AM </div>
                        <div class="timeslot"> 05:30 AM </div>
                        <div class="timeslot"> 06:00 AM </div>
                        <div class="timeslot"> 06:30 AM </div>
                        <div class="timeslot"> 07:00 AM </div>
                        <div class="timeslot"> 07:30 AM </div>
                        <div class="timeslot"> 08:00 AM </div>
                        <div class="timeslot"> 08:30 AM </div>
                        <div class="timeslot"> 09:00 AM </div>
                        <div class="timeslot"> 09:30 AM </div>
                        <div class="timeslot"> 10:00 AM </div>
                        <div class="timeslot"> 10:30 AM </div>
                        <div class="timeslot"> 11:00 AM </div>
                        <div class="timeslot"> 11:30 AM </div>
                    </div>
                    <div class="grids-body">
                        <div class="ride resize butNotHere maintenance" style="width: 202px; left: 102px; top: 184px">
                            <div class="other-info">
                                <i class="ion-settings"></i>
                                <span>Maintenance</span>
                            </div>
                        </div>

                        <div class="ride resize butNotHere return" style="width:304px; left: 510px; top:93px;">
                            <div class="other-info">
                                <i class="ion-arrow-return-left"></i>
                                <span>Return To Base</span>
                            </div>
                        </div>

                        <div class="ride resize butNotHere" style="width:304px">
                            <div class="passenger-info complete-add scrolly">
                                <ul>
                                    <li><i class="ion-ios-location-outline"></i> Estate of Jane Meriweather C/O Hawaiian Trust Company Honolulu, HI 96801-1234</li>
                                </ul>
                            </div>
                            <div class="passenger-info scrolly">
                                <ul>
                                    <li><i class="ion-android-person"></i> <strong class="pass-name">Mr. John Smith</strong></li>
                                    <li><i class="ion-ios-telephone-outline"></i> <span class="pass-contact">718-444-665</span></li>
                                    <li><a class="show-add" href="#" title=""> <i class="ion-ios-location-outline"></i> <span class="pass-loc">Estate of Jane Meriweather C/O Hawaiian Trust Company Honolulu, HI 96801-1234</span></a></li>
                                </ul>
                            </div>
                            <div class="assign-driver">
                                <span>Driver Not Assigned</span>
                                <a class="custom-btn" data-toggle="modal" data-target="#assign-driver" href="#" title=""><i class="ion-android-person-add"></i> Assign Driver</a>
                            </div>
                        </div><!-- Ride -->

                        <div class="ride resize butNotHere assigned" style="left: 204px; top: 93px; width:202px">
                            <div class="passenger-info complete-add scrolly">
                                <ul>
                                    <li><i class="ion-ios-location-outline"></i> 422 Street, Main Boulevard</li>
                                </ul>
                            </div>
                            <div class="passenger-info scrolly">
                                <ul>
                                    <li><i class="ion-android-person"></i> <strong class="pass-name">Mr. Martin Bros</strong></li>
                                    <li><i class="ion-ios-telephone-outline"></i> <span class="pass-contact">574-333-589</span></li>
                                    <li><a class="show-add" href="#" title=""> <i class="ion-ios-location-outline"></i> <span class="pass-loc">422 Street, Main Boulevard</span></a></li>
                                </ul>
                            </div>
                            <div class="driver-info">
                                <ul>
                                    <li><img src="https://picsum.photos/100/100"> <i class="ion-android-person"></i> <strong class="driver-name">John Smith</strong></li>
                                    <li><i class="ion-ios-clock-outline"></i> <span><i class="hr">02</i>:<i class="mins">02</i>Hours</span></li>
                                </ul>
                            </div>
                        </div><!-- Ride -->

                        <div class="grids-row">
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                        </div>
                        <div class="grids-row">
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                        </div>
                        <div class="grids-row">
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                        </div>
                        <div class="grids-row">
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                            <div class="timeslot"> + </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- Schedular Body -->
    </div><!-- console Schedular -->


    <div class="ride-menu new-ride">
        <div class="menu-title">
            <h4>New Ride</h4>
            <p>Select Below An Action To Perform</p>
        </div>
        <ul>
            <li><a class="new-ride" data-toggle="modal" data-target="#add-new" href="#" title=""><i class="ion-model-s"></i> Add A New Ride</a></li>
            <li><a data-rideclass="return" class="other-info-btn" href="#" title=""><i class="ion-arrow-return-left"></i> <span>Return To Base</span></a></li>
            <li><a data-rideclass="maintenance" class="other-info-btn" href="#" title=""><i class="ion-settings"></i> <span>Maintenance</span></a></li>
            <li><a data-rideclass="preparation" class="other-info-btn" href="#" title=""><i class="ion-pinpoint"></i> <span>Preparation</span></a></li>
            <li><a data-rideclass="service" class="other-info-btn" href="#" title=""><i class="ion-pull-request"></i> <span>Vehicle Service</span></a></li>
            <li class="bordered"><a href="#" title=""><i class="ion-android-cancel"></i> Cancel</a></li>
        </ul>
    </div><!-- New Ride Menu -->


    <div class="ride-menu ride-opts">
        <div class="ride-options">
            <ul>
                <li><a class="edit-ride" href="#" title=""><i class="ion-edit"></i> Edit Ride</a></li>
                <li><a class="delete-ride" href="#" title=""><i class="ion-android-remove-circle"></i> Delete Ride</a></li>
            </ul>
        </div><!-- Ride Options -->
    </div>



    <!-- New Ride  -->
    <div class="modal custom-modal" id="add-new">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="custom-form" id="add-ride" name="Form">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h4>New Ride</h4>
                            <span>Fill The Form Below To Add A New Ride</span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-lg-5 col-md-12  col-form-label">Passenger's Name</label>
                            <div class="col-lg-7 col-md-12">
                                <input id="pass-name" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-5 col-md-12  col-form-label">Contact #:</label>
                            <div class="col-lg-7 col-md-12">
                                <input id="pass-contact" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-5 col-md-12  col-form-label">Pickup Location:</label>
                            <div class="col-lg-7 col-md-12">
                                <textarea id="pass-loc" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="custom-btn ride-cancel color2"><i class="ion-android-cancel"></i> Cancel Ride</button>
                        <button class="custom-btn add-ride-btn" type="submit"><i class="ion-android-add-circle"></i> Add A Ride</button>
                        <button class="custom-btn hidden edit-ride-btn" type="submit"><i class="ion-android-add-circle"></i> Edit Ride</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Assign Driver  -->
    <div class="modal custom-modal" id="assign-driver">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="custom-form" id="select-driver">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h4>Assign A Driver</h4>
                            <span>Assign Driver To This Ride</span>
                        </div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <table class="table driver-selector custom-table style2">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>License</th>
                                    <th>Weekly Earnings</th>
                                    <th>Working Days</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="console-driver-img"><img src="https://picsum.photos/100/100" style="width:30px"></td>
                                    <td class="console-driver" drivername="John Smith">John Smith</td>
                                    <td>4/5/20</td>
                                    <td>$345</td>
                                    <td>Mon-Tues-Wed-Thurs</td>
                                </tr>
                                <tr>
                                    <td class="console-driver-img"><img src="https://picsum.photos/100/100" style="width:30px"></td>
                                    <td class="console-driver" drivername="Bale Disel">Bale Disel</td>
                                    <td>5/15/19</td>
                                    <td>$564</td>
                                    <td>Fri-Sat-Sun</td>
                                </tr>
                                <tr>
                                    <td class="console-driver-img"><img src="https://picsum.photos/100/100" style="width:30px"></td>
                                    <td class="console-driver" drivername="Macelo Benz">Macelo Benz</td>
                                    <td>12/30/20</td>
                                    <td>$543</td>
                                    <td>Mon-Tues-Wed-Thurs</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <a href="#" title="" class="custom-btn cancel-popup color2" data-dismiss="modal"><i class="ion-android-cancel"></i> Cancel</a>
                        <button class="custom-btn" type="submit"><i class="ion-android-add-circle"></i> Assign</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Assign Driver  -->
    <div class="modal custom-modal" id="change-ride">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="custom-form" id="ride-changer">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h4>Edit Ride</h4>
                            <span>Edit The Following Ride</span>
                        </div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-lg-5 col-md-12  col-form-label">Edit This Ride</label>
                            <div class="col-lg-7 col-md-12">
                                <select class="select change-ride">
                                    <option value="return">Return</option>
                                    <option value="maintenance">Maintenance</option>
                                    <option value="preparation">Preparation</option>
                                    <option value="service">Service</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" title="" class="custom-btn color2" data-dismiss="modal"><i class="ion-android-cancel"></i> Cancel</a>
                        <button class="custom-btn" type="submit"><i class="ion-android-add-circle"></i> Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>