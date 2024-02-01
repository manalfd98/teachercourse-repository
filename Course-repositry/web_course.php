<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style_c.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Web Design & Development</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" style="color: white"><img src="juwlogo.png" width="50px" class="rounded-pill"> Course Repository System</a>
        <div class="container">
            <a href="logout.php" class="text-white" style="margin-left: 100%">Logout</a>
        </div>
    </nav>

    <div class="sidebar fixed">
        <a href="admindb.php"> Dashboard</a>
        <a href="#dp">
            <label for="degprog">Degree Program</label></span><br>
            <select name="degprog" id="degprog">
                <option value="">Select</option>
                <option value="BS">BS</option>
                <option value="MS">MS</option>
            </select></a>
        <a href="#batch">
            <label for="batch">Batch</label><br>
            <select name="batch" id="batch">
                <option value="">Select</option>
                <option value="bs_course.php">BSCS</option>
                <option value="BSSE">BSSE</option>
                <option value="MSCS">MSCS</option>
                <option value="MSSE">MSSE</option>
            </select></a>
        <a href="#session">
            <label for="session">Session</label><br>
            <select name="session" id="session">
                <option value="">Select</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
            </select></a>
        <a href="display_ac.php">Assign Course</a>
        <a href="faculty.php">Faculty</a>
        <a href="#admin">Admin</a>
    </div>


    <div class="content">
        <div class="container-fluid">
            <h2 style="margin-top: 20px">Web Design & Development | Session 2022</h2>
        </div>
        <hr>
        <button class="collapsible">Credit Hour</button>
        <div class="content1">
            <p>3+1</p>
        </div>
        <hr>
        <button class="collapsible">CLOs</button>
        <div class="content1">
            <p>3</p>
        </div>
        <hr>
        <button class="collapsible">Reference Books</button>
        <div class="content1">
            <ul style="padding-left: 12px;">
                <li>Web enabled Commercial application development using HTML, DHTML, JAVASCRIPT by Ivon Bayross</li>
                <li>Java Script & JQuery</li>
                <li>Guide to Web Development with Java</li>
            </ul>
        </div>
        <hr>
        <button class="collapsible">Outline</button>
        <div class="content1">
            <p>HTML, DHTML, CSS, clients side scripting, server side scripting, dynamic website development. Introduction to current technology e.g. MySQL, php. Introduction to related methods and tools e.g., website hosting, database connectivity, Macromedia. Overview of XML ​
            </p>
        </div>
        <hr>
        <button class="collapsible">Theory Weekly Breakup</button>
        <div class="content1">
            <p>43</p>
        </div>
        <hr>
        <button class="collapsible">Lab Weekly Breakup</button>
        <div class="content1">
            <p>16</p>
        </div>
        <hr>
        <button class="collapsible">Objectives</button>
        <div class="content1">
            <ul style="padding-left: 12px;">
                <li>HTML CSS Bootstrap 5</li>
                <li>Java Script & JQuery</li>
                <li>PHP & MySQL</li>
            </ul>
        </div>




    </div>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }
    </script>
</body>

</html>