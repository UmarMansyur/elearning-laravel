<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        E-Modul | @yield('title')
    </title>
    <link rel="shortcut icon" href="/assets/images/logo/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/file-upload.css">
    <link rel="stylesheet" href="/assets/css/plyr.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="/assets/css/full-calendar.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/editor-quill.css">
    <link rel="stylesheet" href="/assets/css/apexcharts.css">
    <link rel="stylesheet" href="/assets/css/calendar.css">
    <link rel="stylesheet" href="/assets/css/jquery-jvectormap-2.0.5.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/regular/style.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/thin/style.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/light/style.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/bold/style.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/fill/style.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/duotone/style.css">
    <link rel="stylesheet" href="/assets/css/sweetalert2.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="loader" id="layer">
        <img src="/assets/images/spinner.svg" alt="loader" class="lds-ripple img-fluid" width="100">
    </div>
    <div class="side-overlay"></div>
    @yield('content')
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/boostrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="/assets/js/phosphor-icon.js"></script>
    <script src="/assets/js/file-upload.js"></script>
    <script src="/assets/js/plyr.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="/assets/js/full-calendar.js"></script>
    <script src="/assets/js/jquery-ui.js"></script>
    <script src="/assets/js/editor-quill.js"></script>
    <script src="/assets/js/sweetalert2.min.js"></script>
    <script src="/assets/js/apexcharts.min.js"></script>
    <script src="/assets/js/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="/assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/assets/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            let alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                let bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 3000);
    });
    </script>
    @if(Request::is('teacher/dashboard') || Request::is('student/dashboard/*'))
    <script>
        // ============================= Calendar Js Start =================================
       let display = document.querySelector(".display");
        let days = document.querySelector(".days");
        let previous = document.querySelector(".left");
        let next = document.querySelector(".right");

        let date = new Date();

        let year = date.getFullYear();
        let month = date.getMonth();

        function displayCalendar() {
        const firstDay = new Date(year, month, 1);

        const lastDay = new Date(year, month + 1, 0);

        const firstDayIndex = firstDay.getDay(); //4

        const numberOfDays = lastDay.getDate(); //31

        let formattedDate = date.toLocaleString("en-US", {
            month: "long",
            year: "numeric"
        });

        display.innerHTML = `${formattedDate}`;

        for (let x = 1; x <= firstDayIndex; x++) {
            const div = document.createElement("div");
            div.innerHTML += "";

            days.appendChild(div);
        }

        for (let i = 1; i <= numberOfDays; i++) {
            let div = document.createElement("div");
            let currentDate = new Date(year, month, i);

            div.dataset.date = currentDate.toDateString();

            div.innerHTML += i;
            days.appendChild(div);
            if (
                currentDate.getFullYear() === new Date().getFullYear() &&
                currentDate.getMonth() === new Date().getMonth() &&
                currentDate.getDate() === new Date().getDate()
            ) {
                div.classList.add("current-date");
            }
        }
        }

        // Call the function to display the calendar
        displayCalendar();

        previous.addEventListener("click", () => {
            days.innerHTML = "";

            if (month < 0) {
                month = 11;
                year = year - 1;
            }
            month = month - 1;
            date.setMonth(month);
            displayCalendar();
        });

        next.addEventListener("click", () => {
            days.innerHTML = "";

            if (month > 11) {
                month = 0;
                year = year + 1;
            }

            month = month + 1;
            date.setMonth(month);

            displayCalendar();
        });
        // ============================= Calendar Js End =================================
    </script>
    @endif
    <script>
        // display loader
        document.onreadystatechange = function() {
            if (document.readyState !== "complete") {
                document.querySelector("body").style.visibility = "hidden";
                document.querySelector("#layer").style.visibility = "visible";
            } else {
                document.querySelector("#layer").style.display = "none";
                document.querySelector("body").style.visibility = "visible";
            }
        };
    </script>
    @yield('scripts')
</body>

</html>