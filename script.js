const d = new Date();

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
            day.addEventListener('click', function () {
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
                if (d.getFullYear() <= temp.getFullYear()) {
                    if (d.getMonth() <= temp.getMonth()) {
                        if (d.getDate() <= temp.getDate()) {
                            alert(`You clicked on: ${day_number}-${month_names[month]}-${year}`);
                        }
                        else {
                            alert("Please select future date");
                        }
                    }
                    else {
                        alert("Please select future date");
                    }
                }
                else {
                    alert("Please select future date");
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

(function () {
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

timeSlots.forEach(function (slot) {
    slot.addEventListener('click', function () {

        let startTime = this.getAttribute('start-time');
        let endTime = this.getAttribute('end-time');

        let startHour = Number(startTime.substring(0, 2));

        if (startHour <= d.getHours()) {
            alert("Please select future date");
        }
        else {
            startDate.value = clickedDay + "-" + clickedMonth + "-" + clickedYear + " " + startTime;
            endDate.value = clickedDay + "-" + clickedMonth + "-" + clickedYear + " " + endTime;

            alert('Selected Time: ' + startDate.value + ' to ' + endDate.value);
            let form = document.getElementById('dateform');
            form.submit();
        }
    });
});