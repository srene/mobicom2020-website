<?php require_once('head.php'); ?>

<body>

<center>
<?php require_once('nav.php'); ?>
<?php require_once('banner-small.php'); ?>

<div class="container bigc">
<div class="spacing"></div>

<main>
<h2 class="text-center">Program</h2>

<div class="text-center">

<a href="https://calendar.google.com/calendar?cid=aGpmcTlnYWcwNWo3NzViZTNtYmM0Z2hkdDBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ" class="cbutton btn btn-primary ">Add MobiCom program<br/>to your Google Calendar</a>

<a href="https://calendar.google.com/calendar/ical/hjfq9gag05j775be3mbc4ghdt0%40group.calendar.google.com/public/basic.ics" class="cbutton btn btn-primary  ">Download MobiCom <br/> program in iCal format</a>

<br/>
<br/>
</div>

<div style="margin-bottom:-50px;">
</div>

</div>

<br/>
<?php require_once('program-table.php'); ?>

<br/>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.4/jstz.min.js"></script>
<script type="text/javascript">
 var timezone = encodeURIComponent(jstz.determine().name());
 var pref = '<iframe src="https://calendar.google.com/calendar/embed?height=850&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=MGNjN2U2N240b24xanFpNTJoOGkyc283cnNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23D81B60&amp;showDate=1&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;ctz=';
 var suff = '" style=" border-width:0 " width="1000" height="850" frameborder="0" scrolling="no"></iframe>';
 var iframe_html = pref + timezone + suff;
 document.getElementById('calendar-container').innerHTML = iframe_html;
</script>

</br>


<div class="container bigc">
<div style="margin-bottom:-50px;">
</div>
<br/>
<br/>

<?php require_once('deets.php'); ?>

</center>
</main>
<?php require_once('footer2.php'); ?>

</body>
</html>
