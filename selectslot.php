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
    <script>
        const d = new Date();
        let future = false;

        let clickedDay = d.getDate();
        let clickedYear = d.getFullYear();

        const isLeapYear = (year) => {
            return (
                (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) ||
                (year % 100 === 0 && year % 400 === 0)
            );
        };
        const getFebDays = (year) => {
            return isLeapYear(year) ? 29 : 28;
        };
        let calendar = document.querySelector('.calendar');
        const month_names = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December',
        ];

        let clickedMonthTemp = month_names[d.getMonth()];
        let clickedMonth = clickedMonthTemp.substring(0, 3);


        let month_picker = document.querySelector('#month-picker');
        const dayTextFormate = document.querySelector('.day-text-formate');
        const timeFormate = document.querySelector('.time-formate');
        const dateFormate = document.querySelector('.date-formate');

        month_picker.onclick = () => {
            month_list.classList.remove('hideonce');
            month_list.classList.remove('hide');
            month_list.classList.add('show');
            dayTextFormate.classList.remove('showtime');
            dayTextFormate.classList.add('hidetime');
            timeFormate.classList.remove('showtime');
            timeFormate.classList.add('hideTime');
            dateFormate.classList.remove('showtime');
            dateFormate.classList.add('hideTime');
        };

        const generateCalendar = (month, year) => {
            let calendar_days = document.querySelector('.calendar-days');
            calendar_days.innerHTML = '';
            let calendar_header_year = document.querySelector('#year');
            let days_of_month = [
                31,
                getFebDays(year),
                31,
                30,
                31,
                30,
                31,
                31,
                30,
                31,
                30,
                31,
            ];

            let currentDate = new Date();

            month_picker.innerHTML = month_names[month];

            calendar_header_year.innerHTML = year;

            let first_day = new Date(year, month);

            for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
                let day = document.createElement('div');

                if (i >= first_day.getDay()) {
                    let day_number = i - first_day.getDay() + 1;
                    day.innerHTML = day_number;

                    if (
                        day_number === currentDate.getDate() &&
                        year === currentDate.getFullYear() &&
                        month === currentDate.getMonth()
                    ) {
                        day.classList.add('current-date');
                    }
                    // Add click event listener to each day
                    day.addEventListener('click', function() {
                        clickedDay = day_number;
                        let clickedMonthTemp = month_names[month];
                        clickedMonth = clickedMonthTemp.substring(0, 3);
                        clickedYear = year;
                        let tempMonth = month_names.indexOf(clickedMonthTemp) + 1;
                        if (tempMonth < 10) {
                            tempMonth = "0" + tempMonth;
                        }
                        let temp = new Date(clickedYear + "-" + tempMonth + "-" + clickedDay);
                        console.log(temp);
                        console.log(d);
                        if (d <= temp) {
                            alert(`You clicked on: ${day_number}-${month_names[month]}-${year}`);
                            future = true;
                        } else {
                            alert("Please select future date");
                            future = false;
                        }
                    });

                }

                calendar_days.appendChild(day);
            }
        };

        let month_list = calendar.querySelector('.month-list');
        month_names.forEach((e, index) => {
            let month = document.createElement('div');
            month.innerHTML = `<div>${e}</div>`;

            month_list.append(month);
            month.onclick = () => {
                currentMonth.value = index;
                generateCalendar(currentMonth.value, currentYear.value);
                month_list.classList.replace('show', 'hide');
                dayTextFormate.classList.remove('hideTime');
                dayTextFormate.classList.add('showtime');
                timeFormate.classList.remove('hideTime');
                timeFormate.classList.add('showtime');
                dateFormate.classList.remove('hideTime');
                dateFormate.classList.add('showtime');
            };
        });

        (function() {
            month_list.classList.add('hideonce');
        })();
        document.querySelector('#pre-year').onclick = () => {
            --currentYear.value;
            generateCalendar(currentMonth.value, currentYear.value);
        };
        document.querySelector('#next-year').onclick = () => {
            ++currentYear.value;
            generateCalendar(currentMonth.value, currentYear.value);
        };

        let currentDate = new Date();
        let currentMonth = {
            value: currentDate.getMonth()
        };
        let currentYear = {
            value: currentDate.getFullYear()
        };
        generateCalendar(currentMonth.value, currentYear.value);

        const todayShowTime = document.querySelector('.time-formate');
        const todayShowDate = document.querySelector('.date-formate');

        const currshowDate = new Date();
        const showCurrentDateOption = {
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            weekday: 'long',
        };
        const currentDateFormate = new Intl.DateTimeFormat(
            'en-US',
            showCurrentDateOption
        ).format(currshowDate);
        todayShowDate.textContent = currentDateFormate;
        setInterval(() => {
            const timer = new Date();
            const option = {
                hour: 'numeric',
                minute: 'numeric',
                second: 'numeric',
            };
            const formateTimer = new Intl.DateTimeFormat('en-us', option).format(timer);
            let time = `${`${timer.getHours()}`.padStart(
        2,
        '0'
    )}:${`${timer.getMinutes()}`.padStart(
        2,
        '0'
    )}: ${`${timer.getSeconds()}`.padStart(2, '0')}`;
            todayShowTime.textContent = formateTimer;
        }, 1000);

        const timeSlots = document.querySelectorAll('.time1');
        const startDate = document.querySelector('#startDate');
        const endDate = document.querySelector('#endDate');

        timeSlots.forEach(function(slot) {
            slot.addEventListener('click', function() {

                let startTime = this.getAttribute('start-time');
                let endTime = this.getAttribute('end-time');

                let startHour = Number(startTime.substring(0, 2));

                console.log(startHour);
                console.log(d.getHours());

                if ((startHour <= d.getHours()) && future == false) {
                    alert("Please select future date");
                } else {
                    startDate.value = clickedDay + "-" + clickedMonth + "-" + clickedYear + " " + startTime;
                    endDate.value = clickedDay + "-" + clickedMonth + "-" + clickedYear + " " + endTime;

                    alert('Selected Time: ' + startDate.value + ' to ' + endDate.value);
                    let form = document.getElementById('dateform');
                    form.submit();
                }
            });
        });
    </script>
</body>

</html>