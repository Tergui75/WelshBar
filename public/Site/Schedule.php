<html lang="en" ng-app='calendarApp' ng-cloak='true'>
<?php require_once('../../private/initialize.php'); ?>

    <head>
      <meta charset="utf-8">
      <title>Digwyddiadau / Schedule</title>
      <!--<script src="//code.angularjs.org/1.3.14/angular-animate.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js"></script>
      <script src="Home.js"></script>-->
    </head>
    <?php include(SHARED_PATH . '/public_navigation.php'); ?>


        <link href="Home.css" rel="stylesheet">
     
      <div id="wrapper">
      <p>
        <br><br><br>
        <span style="background-color: #FFFFFF">
        [The administrator will need to write events descriptions]<br><br><br><br>
        <i>Please be aware you may need to click again on the date to make the events appear on screen.</i><br><br>
        </span>
      </p>
      <!--Calendar-->
      <div class='calendar' ng-controller='calendarController as calendar'>
            <!--Print left side of the calendar-->
            <div class='calendar_left'>
                <!--Schedule's header-->
                <div class='header'>
                    <!--Switch to previous month-->
                    <i class='material-icons' ng-click='calendar.prev()'>navigate_before</i>
                    <!--Print Months-->
                    <h1>{{calendar.month}}</h1>
                    <!--Switch to next month-->
                    <i class='material-icons' ng-click='calendar.next()'>navigate_next</i>
                </div>
                <!--Print Days-->
                <div class='days'>
                    <div class='day_item'>Sun</div>
                    <div class='day_item'>Mon</div>
                    <div class='day_item'>Tue</div>
                    <div class='day_item'>Wed</div>
                    <div class='day_item'>Thu</div>
                    <div class='day_item'>Fri</div>
                    <div class='day_item'>Sat</div>
                </div>
                <!--Print Months-->
                <div class='dates'></div>
            </div>
            <!--Print right side of the calendar-->
            <div class='calendar_right'>
                <!--Print informations about the day selected by the user-->
                <div class='list'>
                    <ul>
                        <li class='bounce-in' ng-repeat='events in calendar.events' ng-show='events.id === calendar.dataId'>
                            <span class='type'>{{ events.type }} -</span>
                            <span class='description'>{{ events.description }}</span>
                        </li>
                    </ul>
                </div>
                <!--Calendar entries-->
                <form ng-submit='calendar.add()'>
                    <input ng-model='calendar.description' placeholder='Enter an event' type='text'>
                        <select ng-model='calendar.type' placeholder='calendar.type'>
                          <option value='Closed'>Closed</option>
                          <option value='Football'>Football Game</option>
                          <option value='Football'>Concert</option>
                          <option value='Football'>Cultural Meetings</option>
                          <option value='Football'>Welsh Courses</option>
                          <option value='Football'>Other</option>
                        </select>
                    </input>
                </form>
            </div>
        </div>
      </div>
      <!--Copyright-->
      <footer>
        Copyright &copy; 2022 Thomas Fernex, Agnès R. Gauthier & Guillaume Mathieu
       </footer>
    </body>
</html>