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
div.centre {
  text-align: center;
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

<!--<span class="bold-red">The program is provisional and is likely to change a bit until the final version.</span>-->
<div class="centre" id="calendar-container"></div>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jstimezonedetect/1.0.4/jstz.min.js"></script>
<script type="text/javascript">
 var timezone = encodeURIComponent(jstz.determine().name());
 var pref = '<iframe src="https://calendar.google.com/calendar/embed?height=850&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=MGNjN2U2N240b24xanFpNTJoOGkyc283cnNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23D81B60&amp;showDate=1&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;ctz=';
 var suff = '" style=" border-width:0 " width="1000" height="850" frameborder="0" scrolling="no"></iframe>';
 var iframe_html = pref + timezone + suff;
 document.getElementById('calendar-container').innerHTML = iframe_html;
</script>

<?php require_once('deets.php'); ?>

</br>
<h5><b>Keynote speakers</b></h5>
<b>Keynote 1: Electronics on the brain</b><br/>
<b>George Malliaras. Department of Engineering, University of Cambridge.</b>
<br/>
<p>Abstract: One of the most important scientific and technological frontiers of our time is the interfacing of electronics with the human brain. This endeavour promises to help understand how the brain works and deliver new tools for diagnosis and treatment of pathologies including epilepsy and Parkinson’s disease. Current solutions, however, are limited by the materials that are brought in contact with the tissue and transduce signals across the biotic/abiotic interface. Recent advances in electronics have made available materials with a unique combination of attractive properties, including mechanical flexibility, mixed ionic/electronic conduction, enhanced biocompatibility, and capability for drug delivery. I will present examples of novel devices for recording and stimulation of neurons and show that organic electronic materials offer tremendous opportunities to study the brain and treat its pathologies.
</p>
<center><img src="images/keynote/malliaras.png" height="200"></center>
<br/>
<p>George Malliaras is the Prince Philip Professor of Technology at the University of Cambridge (UK). He received a PhD from the University of Groningen (the Netherlands) and did a postdoc at the IBM Almaden Research Center (USA). Before joining Cambridge, he was a faculty member at School of Mines (France) and at Cornell University (USA), and served as the Director of the Cornell NanoScale Facility. His research has been recognized with awards from the New York Academy of Sciences, the US National Science Foundation, and DuPont, and an Honorary Doctorate from the University of Linköping in Sweden. He is a Fellow of the Materials Research Society and of the Royal Society of Chemistry and serves as Deputy Editor of Science Advances.</p>
</br>

<b>Keynote 2: TBD</b><br/>
<b>Sachin Katti. Stanford University.</b><br/>
<p>Abstract: TBD.
<center><img src="images/keynote/katti.png" height="200"></center>
<br/>
<p>Sachin Katti is an Associate Professor of Electrical Engineering and Computer Science at Stanford University and an Advisor in charge of Telco Strategy at VMware. He is also the Co-Chair of the Technical Steering Committee for O-RAN Alliance and the Director of the xRAN Foundation. He is also Co-Founder and ex-CEO of Uhana (now part of VMware) which built a network AI platform to monitor and optimize mobile networks and applications. He has previously co-founded Kumu Networks, which is commercializing breakthrough research from his lab on full duplex radios. He received his PhD in EECS from MIT in 2009. His research focuses on designing and building next generation high capacity wireless networks by combining techniques from information and coding theory, RF systems, and networking.  His research has won numerous awards, including the 2008 ACM Doctoral Dissertation Award - Honorable Mention, the George Sprowls Award for Best Doctoral Dissertation in EECS at MIT, the IEEE William Bennett Prize, the Best Student Paper Award at ACM SIGCOMM 2012, USENIX ATC 2013, the Sloan Fellowship, the NSF Career Award as well as Okawa, Hooover, Packard and Terman Faculty Fellowships.</p></br>

<b>Keynote 3: What’s next in the cellular infrastructure</b><br/>
<b>Durga Malladi. Qualcomm Technologies.</b>
</br>
<p>Abstract:</p>
<ul>
  <li>5G Network Topology</li>
  <li>Challenges with diversity of networks, venues, city-wide, enterprise, industrial deployments spanning public & private domains</li>
  <li>New paradigms with open interfaces, virtualization and COTS</li>
  <li>High performance radios, inline accelerators</li>
</ul>

<center><img src="images/keynote/malladi.png" height="200"></center>
<br/>
<p>Durga Malladi is Senior Vice President and General Manager, 4G/5G in Qualcomm Technologies, Inc.
Durga joined Qualcomm in 1998 as a Senior Engineer. Over the past 22 years, he has worked on 3G, 4G and 5G technologies in various R&D and Business roles.
He was the Project Engineer of 4G LTE and LTE-Advanced in Qualcomm Research from 2008-15, working on features such as Carrier Aggregation, Small cells, HetNets, Relays, Licensed Assisted Access (LAA), Internet of Things (eMTC, NB-IoT) and Cellular V2X.
From 2015-18, he led 5G Research in Qualcomm across Sub6 and Millimeter Wave bands, focusing on enhanced Mobile Broadband (eMBB), Ultra Reliable Low Latency Communications (URLLC), Industrial IoT, 5G based Vehicular Communications (C-V2X), Integrated Access and Backhaul systems, Unlicensed / Shared Spectrum Access and Massive IoT (mIoT). The responsibilities spanned system design, standardization, prototype testbeds, pre-commercial vendor inter-operability tests and trials.
Since 2018, as Senior VP & General Manager of 4G/5G, he is responsible for Cellular Modem, Position Location and Infrastructure Modem-RF businesses, Baseband and Transceiver modem technology roadmap & features, Software products, and Commercial engagements with 5G ecosystem partners (operators, service providers, infrastructure). He drives the overall 5G roadmap and solutions across business units, spanning Mobile, Industrial and Automotive segments.
He is the recipient of Qualcomm’s IP Excellence Award, Qualcomm Distinguished Contributor Award for Project Leadership and Upendra Patel Achievement Awards for Outstanding Contributions to HSPA and LTE.
Durga holds a B.Tech from Indian Institute of Technology, Madras, and an M.S and Ph.D. from UCLA. His Ph.D. dissertation is on Sequential Detection and Adaptive Estimation techniques, and his research interests include Signal Processing, Communication Theory and Artificial Intelligence. He is a member of IEEE and holds 505 U.S. patents.
</p></br>

</div>

</center>
</main>
<?php require_once('footer2.php'); ?>

</body>
</html>
