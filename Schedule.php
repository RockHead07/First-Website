<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Schedule</title>
    <link rel="stylesheet" href="ScheduleStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <section class="home">
        <div class="schedule-content">
            <p class="title"><b>My daily schedule:</b></p>
            
            <div class="schedule-container">
                <!-- Desktop/Tablet Table View -->
                <div class="table-wrapper desktop-view">
                    <table class="schedule-table">
                        <thead>
                            <tr>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Wake Up</td>
                                <td>Wake Up</td>
                                <td>Wake Up</td>
                                <td>Wake Up</td>
                                <td>Wake Up</td>
                                <td>Wake Up</td>
                                <td>Wake Up</td>
                            </tr>
                            <tr>
                                <td>Study</td>
                                <td>Study</td>
                                <td>Study</td>
                                <td>Study</td>
                                <td>Study</td>
                                <td>Study</td>
                                <td>Study</td>
                            </tr>
                            <tr>
                                <td>Sleep</td>
                                <td>Sleep</td>
                                <td>Sleep</td>
                                <td>Sleep</td>
                                <td>Sleep</td>
                                <td>Sleep</td>
                                <td>Sleep</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Card View -->
                <div class="mobile-view">
                    <div class="day-card">
                        <h3>Monday</h3>
                        <div class="activity">Wake Up</div>
                        <div class="activity">Study</div>
                        <div class="activity">Sleep</div>
                    </div>
                    <div class="day-card">
                        <h3>Tuesday</h3>
                        <div class="activity">Wake Up</div>
                        <div class="activity">Study</div>
                        <div class="activity">Sleep</div>
                    </div>
                    <div class="day-card">
                        <h3>Wednesday</h3>
                        <div class="activity">Wake Up</div>
                        <div class="activity">Study</div>
                        <div class="activity">Sleep</div>
                    </div>
                    <div class="day-card">
                        <h3>Thursday</h3>
                        <div class="activity">Wake Up</div>
                        <div class="activity">Study</div>
                        <div class="activity">Sleep</div>
                    </div>
                    <div class="day-card">
                        <h3>Friday</h3>
                        <div class="activity">Wake Up</div>
                        <div class="activity">Study</div>
                        <div class="activity">Sleep</div>
                    </div>
                    <div class="day-card">
                        <h3>Saturday</h3>
                        <div class="activity">Wake Up</div>
                        <div class="activity">Study</div>
                        <div class="activity">Sleep</div>
                    </div>
                    <div class="day-card">
                        <h3>Sunday</h3>
                        <div class="activity">Wake Up</div>
                        <div class="activity">Study</div>
                        <div class="activity">Sleep</div>
                    </div>
                </div>
            </div>
        </div>
    

    </section>
    
<div class="footer">
    <?php include 'footer.php'; ?>
    </div>
</body>
</html>