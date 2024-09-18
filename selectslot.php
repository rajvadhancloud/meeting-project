<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendar</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <div class="calendar">
            <div class="calendar-header">
                <span class="month-picker" id="month-picker"> May </span>
                <div class="year-picker" id="year-picker">
                    <span class="year-change" id="pre-year">
                        <pre><</pre>
                    </span>
                    <span id="year">2020 </span>
                    <span class="year-change" id="next-year">
                        <pre>></pre>
                    </span>
                </div>
            </div>

            <div class="calendar-body">
                <div class="calendar-week-days">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="calendar-days">
                </div>
            </div>
            <div class="calendar-footer">
            </div>
            <div class="date-time-formate">
                <div class="day-text-formate">TODAY</div>
                <div class="date-time-value">
                    <div class="time-formate">01:41:20</div>
                    <div class="date-formate">03 - march - 2022</div>
                </div>
            </div>
            <div class="month-list"></div>
        </div>
    </div>

    <div class="wrapper2">
        <div class="time1" start-time="09:00:00" end-time="09:30:00">09:00 A.M. - 09:30 A.M.</div>
        <div class="time1" start-time="09:30:00" end-time="10:00:00">09:30 A.M. - 10:00 A.M.</div>
        <div class="time1" start-time="10:00:00" end-time="10:30:00">10:00 A.M. - 10:30 A.M.</div>
        <div class="time1" start-time="10:30:00" end-time="11:00:00">10:30 A.M. - 11:00 A.M.</div>
        <div class="time1" start-time="11:00:00" end-time="11:30:00">11:00 A.M. - 11:30 A.M.</div>
        <div class="time1" start-time="11:30:00" end-time="12:00:00">11:30 P.M. - 12:00 P.M.</div>
        <div class="time1" start-time="12:00:00" end-time="12:30:00">12:00 P.M. - 12:30 P.M.</div>
        <div class="time1" start-time="12:30:00" end-time="13:00:00">12:30 P.M. - 01:00 P.M..</div>
        <div class="time1" start-time="13:00:00" end-time="13:30:00">01:00 P.M. - 01:30 P.M.</div>
        <div class="time1" start-time="13:30:00" end-time="14:00:00">01:30 P.M. - 02:00 P.M.</div>
        <div class="time1" start-time="14:00:00" end-time="14:30:00">02:00 P.M. - 02:30 P.M.</div>
        <div class="time1" start-time="14:30:00" end-time="15:00:00">02:30 P.M. - 03:00 P.M.</div>
        <div class="time1" start-time="15:00:00" end-time="15:30:00">03:00 P.M. - 03:30 P.M.</div>
        <div class="time1" start-time="15:30:00" end-time="16:00:00">03:30 P.M. - 04:00 P.M.</div>
        <div class="time1" start-time="16:00:00" end-time="16:30:00">04:00 P.M. - 04:30 P.M.</div>
        <div class="time1" start-time="16:30:00" end-time="17:00:00">04:30 P.M. - 05:00 P.M.</div>
    </div>
    <form action="./authorization.php" method="POST" id="dateform">
        <input type="hidden" id="startDate" name="startdate">
        <input type="hidden" id="endDate" name="enddate">
    </form>
    <script src="./script.js"></script>
</body>

</html>