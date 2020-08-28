<?php require_once('head.php'); ?>

<body>

<center>
<?php require_once('nav.php'); ?>
<?php require_once('banner-small.php'); ?>

<div class="container bigc">
<div class="spacing"></div>

<main>
<style type="text/css">
 span.bold-red {
    color: red;
    font-weight: bold;
    font-size: large;
}
</style>
<h2 class="text-center">Announcement</h2>
<p>We want to update you on the Mobicom 2020 program. The new reality with COVID-19 requires us to go virtual and rethink the conference model in the new setting. This is a challenge because if we simply play a number of pre-recorded talks, the audience may prefer to watch them at their own time and will have little incentive to participate. It is also an opportunity because we can think of new models of interactions between speakers and the community that may make the conference even more attractive.</p>
<p>With this in mind, we decided organize each conference technical session as a panel. First, we will play pre-recorded “elevator pitch” talks from all papers in the session, one after the other. These presentations will last 5 min each. Then, we will have a discussion time for questions about all the papers in the session (we will provision 5mins * <number of papers in the session> for it). This discussion will be chaired by one or more PC members who are familiar with the area and can steer the technical discussion. They will select and ask questions from the audience and also their own questions. Since the papers will be group by areas and similarities, we also expect the chairs to put the works in a broader context and even discuss the future directions in the area, where appropriate. We hope these discussions will add significant value to the conference presentations and motivate you to engage!</p>
<p>In order to allow the audience to get enough technical details of the works before the sessions, a longer 20 mins video about each paper will be made available on Mobicom Youtube channel one week before the conference, and the full papers will be published on the ACM web site.</p>
</br>
<p>Finally, because we hope to have engaging discussions, it is difficult to repeat them in two time zones. We thus opted to have a single time-zone conference. It will take place Mon 21st – Thu 24th from 6am PDT – 11am PDT (Pacific). We appreciate that these times will not suit everyone ideally. However, adjusting to it is much less effort then a long distance travel and a jetlag. The selected times are a compromise that works well for most of the world. Also, note that the main conference will last 4 days, unlike previous years.</p>
<p>Along with an amazing technical program, we will have an assortment of exciting keynotes and panels. We hope you will enjoy!</p>
</br>
<p>Bozidar and Qian</p>
</div>

<span class="bold-red">The program is provisional and is likely to change a bit until the final version.</span>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.4/jstz.min.js"></script>
<script type="text/javascript">
 var timezone = encodeURIComponent(jstz.determine().name());
 var pref = '<iframe src=" https://calendar.google.com/calendar/embed?height=800&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=MGNjN2U2N240b24xanFpNTJoOGkyc283cnNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23D81B60&amp;showDate=1&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;ctz=';
 var suff = '" style=" border-width:0 " width="1000" height="800" frameborder="0" scrolling="no"></iframe>';
 var iframe_html = pref + timezone + suff;
 document.getElementById('calendar-container').innerHTML = iframe_html;
</script>
<!--<iframe src="https://calendar.google.com/calendar/embed?height=800&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=America%2FLos_Angeles&amp;src=MGNjN2U2N240b24xanFpNTJoOGkyc283cnNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23D81B60&amp;showDate=1&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA" style="border:solid 1px #777" width="1024" height="800" frameborder="0" scrolling="no"></iframe>-->


</center>
</main>
<?php require_once('footer2.php'); ?>

</body>
</html>
