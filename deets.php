<div class="accordion">
<p class="h4"><b> Monday, 21st September, 2020  PDT</b></p>
<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>06:00 - 06:20<br/>Opening remarks</b></h6>
</div>

<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>06:25 - 07:25<br/>Keynote 1: George Malliaras (University of Cambridge)</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="keynote.php#malliaras"><b>Electronics on the brain</b></a>
</h6>
</div>
</div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse1" class="d-block" style="color:white">
<b>07:30 - 08:10<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Localization (4 papers)<br/>Chair: Nilanjan Banerjee (eastern US), Kyle Jamieson (eastern US) and Yunhao Liu</b>
</a></h6>
<div id="collapse1" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Deep Learning based Wireless Localization for Indoor Navigation</a></b>&nbsp;&nbsp;<img style="width:3%" src="images/artifact-available.jpg" alt="Artifac available"/><i>Artifact available</i>&nbsp;&nbsp;</h6>
<h6 class="card-subtitle mb-2 text-muted">
 Haojian Jin, Jingxian Wang, Swarun Kumar, Jason Hong (Carnegie Mellon University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo1"></a>
<br/>
<div id="demo1" class="collapse">
Location services, fundamentally, rely on two components: a mapping system and a positioning system. The mapping system provides the physical map of the space, and the positioning system identifies the position within the map. Outdoor location services have thrived over the last couple of decades because of well-established platforms for both these components (e.g. Google Maps for mapping, and GPS for positioning). In contrast, indoor location services haven't caught up because of the lack of reliable mapping and positioning frameworks. Wi-Fi positioning lacks maps and is also prone to environmental errors. In this paper, we present DLoc, a Deep Learning based wireless localization algorithm that can overcome the traditional limitations of RF-based localization approaches (like multipath, occlusions, etc.). We augment DLoc with an automated mapping platform, MapFind. MapFind constructs location-tagged maps of the environment and generates training data for DLoc. Together, they allow off-the-shelf Wi-Fi devices like smartphones to access a map of the environment and to estimate their position with respect to that map. During our evaluation, MapFind has collected location estimates of over 105 thousand points under 8 different scenarios with varying furniture positions and people motion across two different spaces covering 2000 sq. Ft. DLoc outperforms state-of-the-art methods in Wi-Fi-based localization by 80% (median & 90^{th} the percentile) across the 2000 sq. ft. spanning two different spaces.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">TransLoc: Transparent Indoor Localization with Uncertain Human Participation for Instant Delivery</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Yu Yang (Rutgers University); Yi Ding (University of Minnesota); Dengpan Yuan, Guang Wang, Xiaoyang Xie (Rutgers University); Yunhuai Liu (Peking University); Tian He (University of Minnesota); Desheng Zhang (Rutgers University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo2"></a>
<br/>
<div id="demo2" class="collapse">
Instant delivery is an important urban service in recent years because of the increasing demand. An important issue for delivery platforms is to keep updating the status of couriers especially the real-time locations, which is challenging when they are in an indoor environment. We argue the previous indoor localization techniques cannot be applied in the instant delivery scenario because they require extra deployed infrastructures and extensive labor work. In this work, we perform the courier's indoor localization transparently without extra actions of couriers by existing data from the platform including order progress reports and couriers' trajectories. Specifically, we present TransLoc to localize couriers by addressing two challenges including uncertain reporting behaviors and uncertain indoor mobility behaviors. Our key idea lies in two insights (i) couriers' behaviors are consistent in indoor/outdoor environments;  (ii) localization, as a spatial inference problem, could be converted to a temporal inference problem. We evaluate our system on 565 couriers from an instant delivery company, which shows improvement over two baselines by 64% and 72%, and achieves a competitive result compared to a label-extensive baseline. As a case study, we apply TransLoc to optimize the order dispatching strategy, which reduces the delivery time by 24%.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">From Relative Azimuth to Absolute Location: Pushing the Limit of PIR Sensor based Localization</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Xuefeng Liu (Beihang University); Tianye Yang (Huazhong University of Science and Technology); Shaojie Tang (University of Texas at Dallas); Peng Guo (Huazhong University of Science and Technology); Jianwei Niu (Beihang University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo3"></a>
<br/>
<div id="demo3" class="collapse">
Pyroelectric infrared (PIR) sensors are considered to be promising devices for device-free localization due to its advantages of low cost, energy efficiency, and the immunity from multi-path fading. However, most of the existing PIR-based localization systems only utilize the binary information of PIR sensors and therefore require a large number of carefully deployed PIR sensors. A few works directly map the raw data of PIR sensors to one's location using machine learning approaches. However, these data-driven approaches require to collect abundant training data and suffer from environmental change. In this paper, we propose PIRATES, a PIR-based device-free localization system based on the raw data of PIR sensors. The key of PIRATES is to extract a new type of location information named the azimuth change. The extraction of the azimuth change relies on the physical properties of PIR sensors. Therefore, no abundant training data are needed and the system is robust to environmental change. Through experiments, we demonstrated that PIRATES can achieve higher location accuracy than the state-of-the-art approaches. In addition, the information of the azimuth change can be easily incorporated with other information of PIR signals to improve the localization accuracy.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">SociTrack: Infrastructure-Free Interaction Tracking through Mobile Sensor Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Andreas Biri (ETH Zurich); Neal Jackson (University of California, Berkeley); Lothar Thiele (ETH Zurich); Pat Pannuto (University of California, San Diego); Prabal Dutta (University of California, Berkeley)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo4"></a>
<br/>
<div id="demo4" class="collapse">
Social scientists, psychologists, and epidemiologists use empirical human interaction data to research human behaviour, social bonding, and disease spread. Historically, systems measuring interactions have been forced to choose between deployability and measurement fidelity - they operate only in instrumented spaces, under line-of-sight conditions, or provide coarse-grained proximity data. We introduce SociTrack, a platform for autonomous social interaction tracking via wireless distance measurements. Deployments require no supporting infrastructure and provide sub-second, decimeter-accurate ranging information over multiple days. The key insight that enables both deployability and fidelity in one system is to decouple node mobility and network management from range measurement, which results in a novel dual-radio architecture. SociTrack leverages an energy-efficient and scalable ranging protocol that is accurate to 14.8cm (99th percentile) in complex indoor environments and allows our prototype to operate for 12 days on a 2000mAh battery. Finally, to validate its deployability and efficacy, SociTrack is used by early childhood development researchers to capture caregiver-infant interactions.
</div></li>

</ul></div></div></div>

<!--<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse2" class="d-block" style="color:white">
<b>2:10 - 3:40<br/><i class="fa fa-chevron-down float-right" ></i>
Session 2: Innovations in Communication: IoT, Backscatter and Full Duplex (7 papers)<br/>Chair: Kate Lin (National Chiao Tung University)</b>
</a></h6>
<div id="collapse2" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345444">Challenge: Unlicensed LPWANs Are Not Yet the Path to Ubiquitous Connectivity</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Branden Ghena, Joshua Adkins (University of California, Berkeley); Longfei Shangguan (Microsoft Cloud & AI); Kyle Jamieson (Princeton University); Phil Levis (Stanford University); Prabal Dutta (University of California, Berkeley)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo7"></a>
<br/>
<div id="demo7" class="collapse">
Low-power wide-area networks (LPWANs) are a compelling answer to the networking challenges faced by many Internet of Things devices. Their combination of low power, long range, and deployment ease has motivated a flurry of research, including exciting results on backscatter and interference cancellation that further lower power budgets and increase capacity. But despite the interest, we argue that unlicensed LPWAN technologies can only serve a narrow class of Internet of Things applications due to two principal challenges: capacity and coexistence. We propose a metric, bit flux, to describe networks and applications in terms of throughput over a coverage area. Using bit flux, we find that the combination of low bit rate and long range restricts the use case of LPWANs to sparse sensing applications. Furthermore, this lack of capacity leads networks to use as much available bandwidth as possible, and a lack of coexistence mechanisms causes poor performance in the presence of multiple, independently-administered networks. We discuss a variety of techniques and approaches that could be used to address these two challenges and enable LPWANs to achieve the promise of ubiquitous connectivity.
</div></li>-->

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse2" class="d-block" style="color:white">
<b>08:15 - 08:55<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Sensing and signal processing (4 papers)<br/>Chair: Tam Vu (mid US), Domenico Giustiniano and Hun-Seok Kim (US)</b>
</a></h6>
<div id="collapse2" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Hummingbird: Energy Efficient GPS Receiver for Small Satellites</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Sujay Narayana, R Venkatesha Prasad, Vijay S Rao (TU Delft); Luca Mottola (Politecnico di Milano, Italy and RI.SE SICS Sweden); T Venkata Prabhakar (IISc, India)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo5"></a>
<br/>
<div id="demo5" class="collapse">
Global Positioning System is a widely adopted localization technique. With the increasing demand for small satellites, the need for a low-power GPS for satellites is also increasing. To enable many state-of-the-art applications, the exact position of the satellites is necessary. However, building low-power GPS receivers which operate in low earth orbit pose significant challenges. This is mainly due to the high speed (~7.8km/s) of small satellites. While duty-cycling the receiver is a possible solution, the high relative Doppler shift between the GPS satellites and the small satellite contributes to the increase in Time To First Fix (TTFF), thus increasing the energy consumption. Further, if the GPS receiver is tumbling along with the small satellite on which it is mounted, longer TTFF may lead to no GPS fix due to disorientation of the receiver antenna. In this paper, we elucidate the design of a low-cost, low-power GPS receiver for small satellite applications. We also propose an energy optimization algorithm called F3 to improve the TTFF which is the main contributor to the energy consumption during cold start. With simulations and in-orbit evaluation from a launched nanosatellite with our μGPS and high-end GPS simulators, we show that up to 96.16% of energy savings (consuming only ~ 1/25th energy compared to the state of the art) can be achieved using our algorithm without compromising much (~10m) on the navigation accuracy. The TTFF achieved is at most 33s.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">MET: A Novel Magneto-Inductive Sensing Based Electric Toothbrushing Monitoring System</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Hua Huang, Shan Lin (Stony Brook University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo6"></a>
<br/>
<div id="demo6" class="collapse">
Electric toothbrushes are widely used for home oral care, but many users do not achieve desired hygiene results due to insufficient brushing coverage or incorrect brushing techniques. Existing electric toothbrushing monitoring systems fail to detect these issues because they cannot achieve fine-grained position tracking. In this paper, we present a novel electric toothbrushing monitoring system called MET that tracks brushing coverage for all the 15 surfaces of teeth and detects different types of incorrect brushing techniques. This design is inspired by our observation that the motor inside an electric toothbrush generates a unique magnetic field, which can serve as a reliable signal for position and orientation tracking.  MET is the first system that tracks both the position and orientation of an unmodified electric motor using magnetic inductive sensing. Experiments with fourteen users show that the average toothbrushing surface recognition accuracy of MET is 85.3%. Moreover, MET is robust to user location changes and posture variations and does not require any training from the users. Experimental results also demonstrate our significant advantages over existing commercial systems.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Towards Flexible Wireless Charging for Medical Implants Using Distributed Antenna System</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Ambuj Varshney, Andreas Soleiman, Thiemo Voigt (Uppsala University, Sweden)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo7"></a>
<br/>
<div id="demo7" class="collapse">
This paper presents the design, implementation and evaluation of In-N-Out, a software-hardware solution for far-field wireless power transfer.In-N-Out can continuously charge the medical implant residing in deep tissues with consistently near-optimal power, even when the implant moves around inside the human body. To accomplish this, we exploit the structure of a distributed antenna array and devise a backscatter-assisted beamforming algorithm that can concentrate RF energy on a tiny spot surrounding the medical implant. Meanwhile,we can keep radiation exposure levels on other body parts very low, reducing the risk of overheating. We prototype In-N-Out on 21 software-defined radios and a printed circuit board (PCB). Through extensive experimentation, we show that In-N-Out achieves 0.37 mW average charging power in-side a 10 cm-thick pork belly, which is sufficient to wirelessly power a range of commercial medical devices from outside the body. Our head-to-head comparison with the state-of-the-art approach shows that In-N-Out achieves 5.4×–18.1×power gain when the implant is stationary, and 5.3×–7.4×power gain when the implant is in motion.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Self-Reconfigurable Micro-Implants for Cross-Tissue Wireless and Batteryless Connectivity</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Mohamed R. Abdelhamid, Ruicong Chen, Joonhyuk Cho, Anantha P. Chandrakasan, Fadel Adib (Massachusetts Institute of Technology)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo8"></a>
<br/>
<div id="demo8" class="collapse">
We present the design, implementation, and evaluation of μmedIC, a fully-integrated wireless and batteryless micro-implanted sensor. The sensor powers up by harvesting energy from RF signals and communicates at near-zero power via backscatter. In contrast to prior designs which cannot operate across various in-body environments, our sensor can self-reconfigure to adapt to different tissues and channel conditions. This adaptation is made possible by two key innovations: a reprogrammable antenna that can tune its energy harvesting resonance to surrounding tissues, and a backscatter rate adaptation protocol that closes the feedback loop by tracking circuit-level sensor hints.

We built our design on millimeter-sized integrated chips and flexible antenna substrates, and tested it in environments that span both in-vitro (fluids) and ex-vivo (tissues) conditions. Our evaluation demonstrates μmedIC’s ability to tune its energy harvesting resonance by more than 200 MHz (i.e., adapt to different tissues) and to scale its bitrate by an order of magnitude up to 6Mbps, allowing it to support higher data rate applications (such as streaming low-res images) without sacrificing availability. This rate adaptation also allows μmedIC to scale its energy consumption by an order of magnitude down to 350 nanoWatts. These capabilities pave way for a new generation of networked micro-implants that can adapt to complex and time-varying in-body environments.
</div></li>

</ul></div></div></div>

<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>09:00 - 10:00<br/>Keynote 2: Sachin Katti (Stanford University)</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="keynote.php#katti"><b>TBD</b></a>
</h6>
</div>
</div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse3" class="d-block" style="color:white">
<b>10:05 - 10:35<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Acoustic (3 papers)<br/>Chair: Jennifer Chen (US) and Longfei Shangguan</b>
</a></h6>
<div id="collapse3" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Voice Localization Using Nearby Wall Reflections</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Sheng Shen, Daguan Chen (University of Illinois at Urbana-Champaign); Yu-Lin Wei, Zhijian Yang, Romit Roy Choudhury (University of Illinois at Urbana Champaign)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo9"></a>
<br/>
<div id="demo9" class="collapse">
Voice assistants such as Amazon Echo (Alexa) and Google Home use microphone arrays to estimate the angle of arrival (AoA) of the human voice. This paper focuses on adding user localization as a new capability to voice assistants. For any voice command, we desire Alexa to be able to localize the user inside the home. The core challenge is two-fold: (1) accurately estimating the AoAs of multipath echoes without the knowledge of the source signal, and (2) tracing back these AoAs to reverse triangulate the user’s location.

We develop VoLoc, a system that proposes an iterative align-and-cancel algorithm for improved multipath AoA estimation, followed by an error-minimization technique to estimate the geometry of a nearby wall reflection. The AoAs and geometric parameters of the nearby wall are then fused to reveal the user’s location. Under modest assumptions, we report localization accuracy of 0.44 m across different rooms, clutter, and user/microphone locations. VoLoc runs in near real-time but needs to hear around 15 voice commands before becoming operational.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">SpiroSonic: Monitoring Human Lung Function via Acoustic Sensing on Commodity Smartphones</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Xingzhe Song, Boyuan Yang, Ge Yang, Ruirong Chen, Erick Forno, Wei Chen, Wei Gao (University of Pittsburgh)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo10"></a>
<br/>
<div id="demo10" class="collapse">
Respiratory diseases have been a significant public health challenge. Efficient disease evaluation and monitoring call for daily spirometry tests, as an effective way of pulmonary function testing, out of clinic. This requirement, however, is hard to be satisfied due to the large size and high costs of current spirometry equipments. In this paper, we present SpiroSonic, a new system design that uses commodity smartphones to support complete, accurate yet reliable spirometry tests in regular home settings with various environmental and human factors. SpiroSonic measures the humans' chest wall motion via acoustic sensing and interprets such motion into lung function indices, based on the clinically validated correlation between them. We implemented SpiroSonic as a smartphone app, and verified SpiroSonic's monitoring error over healthy humans as <3%. Clinical studies further show that SpiroSonic reaches 5%-10% monitoring error among 83 pediatric patients. Given that the error of in-clinic spirometry is usually around 5%, SpiroSonic can be reliably used for disease tracking and evaluation out of clinic.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Ear-AR: Indoor Acoustic Augmented Reality on Earphones</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Zhijian Yang, Yu-Lin Wei (University of Illinois Urbana Champaign); Sheng Shen (University of Illinois at Urbana-Champaign); Romit Roy Choudhury (University of Illinois at Urbana Champaign)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo11"></a>
<br/>
<div id="demo11" class="collapse">
This paper aims to use modern earphones as a platform for acoustic augmented reality (AAR). We intend to play 3D audio-annotations in the user’s ears as she moves and looks at AAR objects in the environment. While companies like Bose and Microsoft are beginning to release such capabilities, they are intended for outdoor environments. Our system aims to explore the challenges indoors, without requiring any infrastructure deployment. Our core idea is two-fold.(1) We jointly use the inertial sensors (IMUs) in earphones and smartphones to estimate a user’s indoor location and gazing orientation. (2) We play 3D sounds in the earphones and exploit the human’s responses to (re)calibrate errors in location and orientation. We believe this fusion of IMU and acoustics is novel, and could be an important step towards indoor AAR. Our system, EAAR, is tested on 7 volunteers invited to an AAR exhibition – like a museum – that we set up in our building’s lobby and lab. Across 60 different test sessions, the volunteers browsed different subsets of 24 annotated objects as they walked around. Results show that EAAR plays the correct audio-annotations with good accuracy. The user-feedback is encouraging and points to further areas of research and applications.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse3" class="d-block" style="color:white">
<b>10:40 - 11:10<br/><i class="fa fa-chevron-down float-right" ></i>
Session: mmWave and above (3 papers)<br/>Chair: Dinesh Bharadia (US) and Tommaso Melodia (Eastern US)</b>
</a></h6>
<div id="collapse3" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">ThermoWave: A New Paradigm of Wireless Passive Temperature Monitoring via mmWave Sensing</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Baicheng Chen (University at Buffalo); Huining Li (SUNY University at Buffalo); Zhengxiong Li (The State University of New York at Buffalo); Xingyu Chen (University at Buffalo); Chenhan Xu (University at Buffalo, SUNY); Wenyao Xu (SUNY Buffalo)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo12"></a>
<br/>
<div id="demo12" class="collapse">
Temperature sensor is one of the most widespread technologies in the IoT era. Wireless temperature monitoring systems are convenient to deploy and can drive mass applications in the fields of smart home, transportation and logistics. Currently, wireless temperature monitoring products are based on microelectronic and semiconductor components, which are not cost-effective (e.g., a few dollars) and more importantly, generate electronic wastes. In this work, we present ThermoWave, a new paradigm of wireless temperature monitoring that is ecological, battery-less, and ultra-low cost. Specifically, ThermoWave is on the basis of the thermal scattering effect on millimeter-wave (mmWave) signals. Specifically, cholesteryl materials align their molecular patterns at different environmental temperatures, and this temperature-induced pattern change will be modulated and sensed by the scattered mmWave signals. There are three functional modules in the ThermoWave system. The ThermoTag is a cholesteryl material inked film or paper tag that can be conveniently attached to the object of interest to monitor temperature changes. Each ThermoTag costs less than 0.01 dollars. {The temperature modulated mmWave scattering will be received by a mmWave-radar based ThermoScanner and demodulated by a software-based temperature decoder ThermoSense, which includes a model-based method (i.e., ThermoDot) for point temperature estimation and a data-driven method (i.e., ThermoNet) for thermal imaging.} We prototype and evaluate the ThermoWave system performance in both controlled and real-world setups. Experimental results show that the ThermoWave achieves the precision of ± 1.0 \degree° F in the range of 30 ° F to 120 ° F in a controlled setup. We also investigate the performance in real-world applications, and the ThermoWave can reach the ± 3.0 ° F precision in the temperature estimation. {We also test and discuss sustainability, durability, robustness, and cost-effectiveness of the ThermoWave in both design and experiments.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">mmVib: Micrometer-Level Vibration Measurement with mmWave Radar</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Chengkun Jiang, Junchen Guo, Yuan He, Meng Jin, Shuai Li (Tsinghua University); Yunhao Liu (Tsinghua University & MSU)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo13"></a>
<br/>
<div id="demo13" class="collapse">
Vibration measurement is a crucial task in industrial systems, where vibration characteristics reflect the health and indicate anomalies of the objects. Previous approaches either work in an intrusive manner or fail to capture the micrometer-level vibrations. In this work, we propose mmVib, a practical approach to measure micrometer-level vibrations with mmWave radar. By introducing a Multi-Signal Consolidation (MSC) model to describe the properties of the reflected signals, we exploit the inherent consistency among those signals to accurately recover the vibration characteristics. We implement a prototype of mmVib, and the experiments show that this design achieves 8.2% relative amplitude error and 0.5% relative frequency error in median. Typically, the median amplitude error is 3.4um for the 100um-amplitude vibration. Compared to two existing approaches, mmVib reduces the 80th percentile amplitude error by 62.9% and 68.9% respectively.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Demystifying Millimeter-Wave V2X: Towards Robust and Efficient Directional Connectivity Under High Mobility</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Song Wang, Jingqi Huang, Xinyu Zhang (University of California San Diego)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo14"></a>
<br/>
<div id="demo14" class="collapse">
Millimeter-wave (mmWave) networking represents a core technology to meet the demanding bandwidth requirements of emerging connected vehicles. However, the feasibility of mmWave vehicle-to-everything (V2X) connectivity has long been questioned. One major doubt lies in how the highly directional mmWave links can sustain under high mobility. In this paper, we present the first comprehensive reality check of mmWave V2X networks. We deploy an experimental testbed to mimic a typical 5G V2X scenario, and customize a COTS mmWave radio to enable microscopic investigation of the channel and the link. We further construct a high-fidelity 3D ray-tracer to reproduce the mmWave characteristics at scale. With this tool set, we study the mmWave V2X coverage, mobility and blockage, codebook/beam management, and spatial multiplexing.  Our measurement debunks some common misperceptions of mmWave V2X networks.  In particular, due to the constrained roadway network structures, we find the beam management can be handled easily by the often-denounced beam scanning schemes, as long as the codebook is properly designed. Blockage can be almost eliminated through proper gNB deployment and cooperation. Highly effective spatial multiplexing can be realized even without sophisticated MIMO radios. Our work points to possible ways to realize efficient and reliable mmWave networks under high mobility, while maintaining the simplicity of standard network protocols.
</div></li>

</ul></div></div></div>

<br/><hr/>

<div class="accordion">
<p class="h4"><b>Tuesday, 22nd September, 2020 PDT</b></p>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse3" class="d-block" style="color:white">
<b>06:00 - 06:40<br/><i class="fa fa-chevron-down float-right" ></i>
Session: mmWave and above (5 papers)<br/>Chair: Kate Lin (Taiwan), Guoliang Xing (Hong Kong) and Mo Li (Singapore)</b>
</a></h6>
<div id="collapse3" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">X-Array: Approximating Omnidirectional Millimeter-Wave Coverage Using an Array of Phased-Arrays</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Song Wang, Jingqi Huang, Xinyu Zhang (University of California, San Diego); Hyoil Kim (Ulsan National Institute of Science and Technology); Sujit Dey (University of California, San Diego)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo15"></a>
<br/>
<div id="demo15" class="collapse">
Millimeter-wave (mmWave) networks are conventionally considered to bear a fundamental coverage limitation, due to the directional beams and limited field-of-view (FoV) of the phased array antennas. In this paper, we explore an array of phased arrays (APA) architecture, which aggregates co-located phased arrays with complementary FoVs to approximate WiFi-like omni-directional coverage. We found that straightforwardly activating all the arrays may even hamper network performance. To fully exploit the APA's potential, we propose X-Array, which jointly selects the arrays and beams, and applies a dynamic co-phasing mechanism to ensure different arrays' signals enhance each other. X-Array also incorporates a link recovery mechanism to identify alternative arrays/beams that can efficiently recover the link from outage. We have implemented X-Array on a commodity 802.11ad APA radio. Our experiments demonstrate that X-Array can approach omni-directional coverage and maintain high performance in spite of link dynamics.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">M-Cube: A Millimeter-Wave Massive MIMO Software Radio</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Renjie Zhao, Timothy Woodford, Teng Wei, Kun Qian, Xinyu Zhang (University of California San Diego)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo16"></a>
<br/>
<div id="demo16" class="collapse">
Millimeter-wave (mmWave) technologies represent a cornerstone for emerging wireless network infrastructure, and for RF sensing systems in security, health, and automotive domains. Through a MIMO array of phased arrays with hundreds of antenna elements, mmWave can boost wireless bit-rate to 100+~Gbps, and potentially achieve near-vision sensing resolution. However, lack of an experimental platform has been impeding research in this field. This paper fills the gap with M^3M (M-Cube), the first mmWave massive MIMO software radio. M^3M features a fully reconfigurable array of phased arrays, with up to 8 RF chains and 288 antenna elements. Despite the orders of magnitude larger antenna arrays, its cost is orders of magnitude lower, even when compared with state-of-the-art single RF chain mmWave software radios. The key design principle behind M^3M is to hijack a low-cost commodity 802.11ad radio, separate the control path and data path inside, regenerate the phased array control signals, and recreate the data signals using a programmable baseband. Extensive experiments have demonstrated the effectiveness of the M^3M design, and its usefulness for research in mmWave massive MIMO communication and sensing.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Single Shot Single Antenna Path Discovery in THz Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Yasaman Ghasempour, Chia-Yi Yeh (Rice University); Rabi Shrestha, Daniel Mittleman (Brown University); Edward W. Knightly (Rice University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo17"></a>
<br/>
<div id="demo17" class="collapse">
THz communication has the potential to realize an order of magnitude increase in data rates due to the availability of wide THz-scale spectral bands. Unfortunately, establishing and managing highly directional beams in THz networks is challenging as links lack the “pseudo-omni” reception capability of lower bands and the product of AP-client beam resolution is high due to narrow beams of only a few degrees. In this paper, we present One-shot Path discovEry with a THz RAinbow (OPERA), a novel system that identifies dominant paths between the AP and all clients in order to efficiently steer directional beams. The key idea is to embed path direction into the inherent characteristics of signals traveling along each path. To do so, we exploit a single leaky wave antenna and create a THz Rainbow. A THz Rainbow transmission consists of distinct signals with unique spectral characteristics across the angular domain. Leveraging the spatial-spectral signatures in the THz Rainbow, all receivers can correlate the measured signal with the known transmission signatures to discover the sender’s path directions in one-shot. Our experiments demonstrate that OPERA achieves average direction estimates within 2^{\circ}2 of ground truth for LOS and reflected paths.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Millimeter-Wave Full Duplex Radios</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Vaibhav Singh, Susnata Mondal, Akshay Gadre (Carnegie Mellon University); Milind Srivastava (Indian Institute of Technology Madras); Jeyanandh Paramesh, Swarun Kumar (Carnegie Mellon University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo18"></a>
<br/>
<div id="demo18" class="collapse">
mm-Wave has emerged as an attractive high-speed wireless communication paradigm owing to the high available bandwidth at mm-wave frequencies. Full-Duplex has the potential to double the available capacity in the mm-wave bands by enabling simultaneous radio transmission and reception. While full-duplex has been extensively studied in sub-6 GHz bands, this paper exposes the unique challenges in porting this capability to mm-wave frequencies.

We present mmFD, the first comprehensive system design of a mm-wave full-duplex platform. mmFD achieves large self-interference cancellation through novel designs at the antenna, analog and digital frontends. We exploit the small wavelength of mm-wave to achieve strong signal isolation between transmit and receive antennas. We further build a custom IC that achieves high-bandwidth analog cancellation at mm-wave frequencies. Finally, we present digital self-interference cancellation algorithms that address the unique hardware impairments observed at mm-wave frequencies. A detailed evaluation of mmFD  demonstrates 84 dB of cancellation and 1.7x throughput gain over equivalent half-duplex systems in rich indoor settings.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse4" class="d-block" style="color:white">
<b>06:45 - 07:05<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Testbed (2 papers)<br/>Chair: Xenofon Foukas (UK) and Nigel Davies</b>
</a></h6>
<div id="collapse4" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Challenge: COSMOS: A City-Scale Programmable Testbed for Experimentation with Advanced Wireless</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Dipankar Raychaudhuri, Ivan Seskar (Rutgers University); Gil Zussman (Columbia University); Thanasis Korakis (New York University); Dan Kilper (University of Arizona); Tingjun Chen (Columbia University); Jakub Kolodziejski, Michael Sherman (Rutgers University); Zoran Kostic (Columbia University); Xiaoxiong Gu (IBM Research); Harish Krishnaswamy (Columbia University); Sumit Maheshwari (Rutgers); Panagiotis Skrimponis (New York University); Craig Gutterman (Columbia University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo19"></a>
<br/>
<div id="demo19" class="collapse">
This paper focuses on COSMOS - Cloud enhanced Open Software defined MObile wireless testbed for city-Scale deployment. The COSMOS testbed is being deployed in West Harlem (New York City) as part of the NSF Platforms for Advanced Wireless Research (PAWR) program. It will enable researchers to explore the technology ``sweet spot'' of ultra-high bandwidth and ultra-low latency in the most demanding real-world environment. We describe the testbed's architecture, the design and deployment challenges, and the experience gained during the design and pilot deployment. Specifically, we describe COSMOS' computing and network architectures, the critical building blocks, and its programmability at different layers. The building blocks include software-defined radios, 28 GHz millimeter-wave phased array modules, optical transport network, core and edge cloud, and control and management software. We describe COSMOS' deployment phases in a dense urban environment, the research areas that could be studied in the testbed, and specific example experiments. Finally, we discuss our experience with using COSMOS as an educational tool.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Experience: Advanced Network Operations in (Un)-Connected Remote Communities</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Diego Perino (Telefonica Research); Xiaoyuan Yang (Telefonica); Joan Serra (Dolby Labs); Andra Lutu (Telefonica Research); Ilias Leontiadis (Samsung AI)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo20"></a>
<br/>
<div id="demo20" class="collapse">
The Anonymous program is working to provide sustainable mobile broadband to 100 M unconnected people in Latin America. In this paper we present our commercial deployment in thousands remote small communities and describe the unique experience of maintaining this infrastructure. We describe the challenges related to managing operations containing the cost in these extreme geographical conditions. We also analyze operational data to understand outage patterns and present typical operational issues in this unique remote community environment. Finally, we present an extension of the operations support system (OSS) leveraging advanced analytics and machine learning with the goal of optimizing network maintenance reducing costs.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse5" class="d-block" style="color:white">
<b>07:10 - 8:00<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Cellular (5 papers)<br/>Chair: Suman Banerjee (middle US), Heather Zheng (middle US) and Morley Mao</b>
</a></h6>
<div id="collapse5" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Ghost Calls from Operational 4G Call Systems: IMS Vulnerability, Call DoS Attack, and Countermeasure</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Yu-Han Lu, Chi-Yu Li, Yao-Yu Li, Sandy Hsin-Yu Hsiao (National Chiao Tung University); Tian Xie (Michigan State Univeristy); Guan-Hua Tu (Michigan State University); Wei-Xun Chen (National Chiao Tung University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo21"></a>
<br/>
<div id="demo21" class="collapse">
IMS (IP Multimedia Subsystem) is an essential framework for providing 4G/5G multimedia services. It has been deployed worldwide to support two call services: VoLTE (Voice over LTE) and VoWi-Fi (Voice over Wi-Fi). VoWi-Fi enables telephony calls over the Wi-Fi network to complement VoLTE. In this work, we uncover that the VoWi-Fi signaling session can be hijacked to maliciously manipulate the IMS call operation. An adversary can easily make ghost calls to launch a stealthy call DoS (Denial of Service) attack against specific cellular users. Only phone numbers, but not any malware or network information, are required from the victims. This sophisticated attack harnesses a design defect of the IMS call state machine, but not simply flooding or a crash trigger. To stealthily detect attackable phones at run time, we exploit a vulnerability of the 4G network infrastructure, call information leakage, which we explore using machine learning. We validate these vulnerabilities in operational 4G networks of 4 top-tier carriers across Asia and North America countries with 7 phone brands. Our result shows that the call DoS attack can prevent the victims from receiving incoming calls up to 99.0% time without user awareness. We finally propose and evaluate recommended solutions.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">DMM: Fast Map Matching Framework for Cellular Data</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Zhihao Shen (Xi’an Jiaotong University); Wan Du (University of California, Merced); Xi Zhao, Jianhua Zou (Xi’an Jiaotong University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo29"></a>
<br/>
<div id="demo29" class="collapse">
Map matching for cellular data is to transform a sequence of cell tower locations to a trajectory on a road map. It is an essential processing step for many applications, such as traffic optimization and human mobility analysis. However, most current map matching approaches are based on Hidden Markov Models (HMMs) that have heavy computation overhead to consider high-order cell tower information. This paper presents a fast map matching framework for cellular data, named as DMM, which adopts a recurrent neural network (RNN) to identify the most-likely trajectory of roads given a sequence of cell towers. Once the RNN model is trained, it can process cell tower sequences as making RNN inference, resulting in fast map matching speed. To transform DMM into a practical system, several challenges are addressed by developing a set of techniques, including spatial-aware representation of input cell tower sequences, an encoder-decoder framework for map matching model with variable-length input and output, and a reinforcement learning based model for optimizing the matched outputs. Extensive experiments on a large-scale anonymized cellular dataset reveal that DMM provides high map matching accuracy (precision 80.43% and recall 85.42%) and reduces the average inference time of HMM-based approaches by 46.58x.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Microscope: Mobile Service Traffic Decomposition for Network Slicing as a Service</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Chaoyun Zhang (University of Edinburgh); Marco Fiore (IMDEA Networks Institute); Cezary Ziemlicki (Orange Labs); Paul Patras (University of Edinburgh)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo30"></a>
<br/>
<div id="demo30" class="collapse">
The growing diversification of mobile services imposes requirements on network performance that are ever more stringent and heterogeneous. Network slicing aligns mobile network operation to this context, by enabling operators to isolate and customize network resources on a per-service basis. A key input for provisioning resources to slices is real-time information about the traffic demands generated by individual services. Acquiring such knowledge is however challenging. In particular, legacy approaches based on in-depth inspection of traffic streams have high computational costs, which inflate with the widening adoption of encryption over data and control traffic. In this paper, we present an original approach to service-level demand estimation for slicing, which hinges on decomposition, the inference of per-service demands from traffic aggregates. By operating on total traffic volumes only, our approach overcomes the complexity and limitations of legacy traffic classification techniques, and provides an output suitable for recent 'Network Slice as a Service' models. We implement decomposition through Microscope, a dedicated framework based on novel 3D Deformable Convolutional Neural Networks (3D-DefCNNs), which we design to handle spatial distortion in the input data due to irregular radio access deployment and coverage, and to exploit spatiotemporal features hidden in traffic aggregates. Experiments with metropolitan-scale measurements collected in an operational network demonstrate that Microscope accurately infers per-service traffic demands, with estimation errors below 1.2%.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">iCellSpeed: Increasing Cellular Data Speed with Device-Assisted Cell Selection</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Haotian Deng (Purdue University); Qianru Li (UCLA); Jingqi Huang, Chunyi Peng (Purdue University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo31"></a>
<br/>
<div id="demo31" class="collapse">
In this paper, we propose iCellSpeed, an on-device solution to increase data access speed by substantiating unrealized performance potentials. We find that performance potentials are missed in today’s mobile networks, as the data speed a user device gets is much lower than what the device could get. The issue is rooted in the current cell selection practice, which misses good candidate cells that offer faster access speed, thus under-utilizing the available capabilities in mobile networks. We design iCellSpeed to facilitate network-controlled cell selection with proactive device-side assistance towards more desirable cells. Our evaluation over AT&T and Verizon confirms its effectiveness. iCellSpeed increases data access speed by more than 10 Mbps at 79% of test locations (> 25Mbps at 29% of locations, up to 80.6 Mbps). It doubles access speed at 62.5% of locations with the gain up to 28.4x. Datasets are available at 7].
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Experience: Towards Automated Customer Issue Resolution in Cellular Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Amit Sheoran, Sonia Fahmy (Purdue University); Matthew Osinski (AT&T Labs Research); Chunyi Peng, Bruno Ribeiro (Purdue University); Jia Wang (AT&T Labs Research)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo32"></a>
<br/>
<div id="demo32" class="collapse">
Cellular service carriers often employ reactive strategies to assist customers who experience non-outage related individual service degradation issues (e.g., service performance degradations that do not impact customers at scale and are likely caused by network provisioning issues for individual devices). Customers need to contact customer care to request assistance before these issues are resolved. This paper presents our experience with PACE (ProActive customer CarE), a novel, proactive system that monitors, troubleshoots and resolves individual service issues, without having to rely on customers to first contact customer care for assistance. PACE seeks to improve customer experience and care operation efficiency by automatically detecting individual (non-outage related) service issues, prioritizing repair actions by predicting customers who are likely to contact care to report their issues, and proactively triggering actions to resolve these issues. We develop three machine learning-based prediction models, and implement a fully automated system that integrates these prediction models and takes resolution actions for individual customers. We conduct a large-scale trace-driven evaluation using real-world data collected from a major cellular carrier in the US, and demonstrate that PACE is able to predict customers who are likely to contact care due to non-outage related individual service issues with high accuracy. We further deploy PACE into this cellular carrier network. Our field trial results show that PACE is effective in proactively resolving non-outage related individual customer service issues, improving customer experience, and reducing the need for customers to report their service issues.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse6" class="d-block" style="color:white">
<b>08:05 - 08:45<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Communication Systems (4 papers)<br/>Chair: Bo Chen (US), Jie Xiong (Eastern US) and Ranveer Chandra</b>
</a></h6>
<div id="collapse6" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">SDR Receiver Using Commodity WiFi via Physical-Layer Signal Reconstruction</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Woojae Jeong, Jinhwan Jung (KAIST); Yuanda Wang (Michigan State University); Shuai Wang (George Mason University); Seokwon Yang (KAIST); Qiben Yan (Michigan State University); Yung Yi, Song Min Kim (KAIST)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo33"></a>
<br/>
<div id="demo33" class="collapse">
With the explosive increase in wireless devices, physical-layer signal analysis has become critically beneficial across distinctive domains including interference minimization in network planning, security and privacy (e.g., drone and spycam detection), and mobile health with remote sensing. While SDR is known to be highly effective in realizing such services, they are rarely deployed or used by the end-users due to the costly hardware∼1K USD (e.g., USRP). Low-cost SDRs (e.g., RTL-SDR) are available, but their bandwidth is limited to 2-3 MHz and operation range falls well below 2.4 GHz – the unlicensed band holding majority of the wireless devices. This paper presents SDR-Lite, the first zero-cost, software-only soft-ware defined radio (SDR) receiver that empowers commodity WiFi to retrieve the In-phase and Quadrature of an ambient signal. With the full compatibility to pervasively-deployed WiFi infrastructure (without any change to the hardware and firmware), SDR-Lite aims to spread the blessing of SDR receiver functionalities to billions of WiFi users and households to enhance our everyday lives. The key idea of SDR-Lite is to trick WiFi to begin packet reception (i.e., the decoding process) when the packet is absent, so that it accepts ambient signals in the air and outputs corresponding bits. The bits are then reconstructed to the original physical-layer waveform, on which diverse SDR applications are performed. Our comprehensive evaluation shows that the reconstructed signal closely reassembles the original ambient signal (>85% correlation). We extensively demonstrate SDR-Lite effectiveness across seven distinctive SDR receiver applications under three representative categories: (i) RFfingerprinting, (ii) spectrum monitoring, and (iii) (ZigBee) decoding. For instance, in security applications of drone and rogue WiFi AP detection, SDR-Lite achieves 99% and 97% accuracy, which is comparable to USRP.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Towards Quantum Belief Propagation for LDPC Decoding in Wireless Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Srikar Kasi, Kyle Jamieson (Princeton University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo34"></a>
<br/>
<div id="demo34" class="collapse">
We present Quantum Belief Propagation (QBP), a Quantum Annealing (QA) based decoder design for Low Density Parity Check (LDPC) error control codes, which have found many useful applications in Wi-Fi, satellite communications, mobile cellular systems, and data storage systems. QBP reduces the LDPC decoding to a discrete optimization problem, then embeds that reduced design onto quantum annealing hardware. QBP's embedding design can support LDPC codes of block length up to 420 bits on real state-of-the-art QA hardware with 2,048 qubits. We evaluate performance on real quantum annealer hardware, performing sensitivity analyses on a variety of parameter settings. Our design achieves a bit error rate of 10^{-8}10 in 20 μs and a 1,500 byte frame error rate of 10^{-6}10 in 50 μs at SNR 9 dB over a Gaussian noise wireless channel. Further experiments measure performance over real-world wireless channels, requiring 30 μs to achieve a 1,500 byte 99.99% frame delivery rate at SNR 15-20 dB. QBP achieves a performance improvement over an FPGA based soft belief propagation LDPC decoder, by reaching a bit error rate of 10^{-8}10 and a frame error rate of 10^{-6}10 at an SNR 2.5--3.5 dB lower. In terms of limitations, QBP currently cannot realize practical protocol-sized (\textit{e.g.,}e.g., Wi-Fi, WiMax) LDPC codes on current QA processors. Our further studies in this work present future cost, throughput, and QA hardware trend considerations.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">ScatterMIMO: Enabling Virtual MIMO with Smart Surfaces</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Manideep Dunna, Chi Zhang (UC San Diego); Daniel Sievenpiper, Dinesh Bharadia (University of California San Diego)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo35"></a>
<br/>
<div id="demo35" class="collapse">
In the last decade, the bandwidth expansion and MIMO spatial multiplexing have promised to increase data throughput by orders of magnitude. However, we are yet to enjoy such improvement in real-world environments, as they lack rich scattering and preclude effective MIMO spatial multiplexing. In this paper, we present ScatterMIMO, which uses smart surface to increase the scattering in the environment, to provide MIMO spatial multiplexing gain. Specifically, smart surface pairs up with a wireless transmitter device say an active AP and re-radiates the same amount of power as any active access point (AP), thereby creating virtual passive APs. ScatterMIMO avoids the synchronization, interference, and power requirements of conventional distributed MIMO systems by leveraging virtual passive APs, allowing its smart surface to provide spatial multiplexing gain, which can be deployed at a very low cost. We show that with optimal placement, these virtual APs can provide signals to their clients with power comparable to real active APs, and can increase the coverage of an AP. Furthermore, we design algorithms to optimize ScatterMIMO's smart surface for each client with minimal measurement overhead and to overcome random per-packet phase offsets during the measurement. Our evaluations show that with commercial off-the-shelf MIMO WiFi (11ac) AP and unmodified clients, ScatterMIMO provides a median throughput improvement of 2x over the active AP alone.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Sniffing Visible Light Communication Through Walls</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Minhao Cui, Yuda Feng (University of Massachusetts Amherst); Qing Wang (Delft University of Technology); Jie Xiong (University of Massachusetts Amherst)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo36"></a>
<br/>
<div id="demo36" class="collapse">
Visible light communication (VLC) is gaining a significant amount of interest as a new paradigm to meet rapidly increasing demands on wireless capacity required by a digitalized world. VLC is considered as a secure wireless communication scheme because VLC signals can be easily constrained within physical boundaries.  In this paper, for the first time, we show that VLC is not as secure as people thought: VLC can be sniffed through walls! The key principle behind this is that in VLC transmissions, a VLC transmitter not only emits visible light signals but also leaks out "side channel RF signals". The leaked RF signals can be sniffed by a receiver to decode the VLC transmissions even the receiver is blocked (e.g., by walls) from the VLC transmitter. In this work, we establish a theoretical model to quantify the amplitude of the leaked RF signal and verify the model with comprehensive experiments. We design and implement a VLC sniffing system including receiver coil design, signal processing and frame decoding, spanning across hardware and software.  Field studies show that with a cheap receiver design, our system can simultaneously sniff transmissions from multiple VLC transmitters  6.4 meters away with a 14 cm concrete wall in between, where the distance exceeds the communication range of most state-of-the-art VLC systems. By simply twining a wired earphone on the arm, we can sniff the VLC transmission 1.9 meters away.
</div></li>

</ul></div></div></div>

<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>09:00 - 10:00<br/>Keynote 3: Nic Lane (Rock Star)</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="keynote.php#niclane"><b>TBD</b></a>
</h6>
</div>
</div>

<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>10:05 - 11:00<br/>Panel 1. Moderator: Yasamin Mostofi</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="panel.php#panel1"><b>Future of Wi-Fi and 5G sensing and localization</b></a>
</h6>
</div>
</div>

<br/><hr/>

<div class="accordion">
<p class="h4"><b> Wednesday, 23rd September, 2020 PDT</b></p>
<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse7" class="d-block" style="color:white">
<b>06:00 - 06:30<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Privacy and identity (3 papers)<br/>Chair: Hamed Haddadi (UK) and Jinsong Han (China)</b>
</a></h6>
<div id="collapse7" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Re-identification of Mobile Devices using Real-Time Bidding Advertising Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Keen Sung, JianYi Huang, Mark D. Corner, Brian N. Levine (University of Massachusetts Amherst)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo37"></a>
<br/>
<div id="demo37" class="collapse">
Advertisers gather data about users and their mobile devices through ads placed within Android and iOS apps. Most of the time, location, device, and app information are linked to the same device using a unique advertising ID (Ad ID). If the Ad ID is not available, advertisers can still use geo-coordinates or IP address to infer links in data gathered from different ad placements.

Even though the Ad ID can be disabled by users on both OSes, we demonstrate that advertisers can leave their own unique strings (marks) in the app storage, and use these strings to link information collected from ads. Users cannot clear these marks without losing all data within the app. Because advertising platforms allow connection filtering and geofencing, users who either connect using a non-cellular IP address or allow location access to the app are substantially easier to be rediscovered by the advertiser.

We carried out many large-scale experiments on iOS and Android devices involving hundreds of thousands of impressions. We found that on average 49% of impressions from an iOS device, and 59% of Android impressions could be re-identified for less than $5/day using this strategy. We subsequently verified this method on 1,727 devices and recovered 660 of them within 48 hours for $86.73. Finally, we explore the behaviour of privacy-seeking VPN users. We found that for the majority, their clearnet IP address and location could be unmasked easily using ads.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Billion-Scale Federated Learning on Mobile Clients: A Submodel Design with Tunable Privacy</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Chaoyue Niu, Fan Wu (Shanghai Jiao Tong University); Shaojie Tang (University of Texas at Dallas); Lifeng Hua, Rongfei Jia, Chengfei Lv, Zhihua Wu (Alibaba Group); Guihai Chen (Shanghai Jiao Tong University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo38"></a>
<br/>
<div id="demo38" class="collapse">
Federated learning was proposed with an intriguing vision of achieving collaborative machine learning among numerous clients without uploading their private data to a cloud server. However, the conventional framework requires each client to leverage the full model for learning, which can be prohibitively inefficient for large-scale learning tasks and resource-constrained mobile devices. Thus, we proposed a submodel framework, where clients download only the needed parts of the full model, namely, submodels, and then upload the submodel updates. Nevertheless, the "position" of a client's truly required submodel corresponds to its private data, while the disclosure of the true position to the cloud server during interactions inevitably breaks the tenet of federated learning. To integrate efficiency and privacy, we designed a secure federated submodel learning scheme coupled with a private set union protocol as a cornerstone. The secure scheme features the properties of randomized response, secure aggregation, and Bloom filter, and endows each client with customized plausible deniability (in terms of local differential privacy) against the position of its desired submodel, thereby protecting private data. We further instantiated the scheme with Alibaba's e-commerce recommendation, implemented a prototype system, and extensively evaluated over 30-day Taobao user data. Empirical results demonstrate the feasibility and scalability of the proposed scheme as well as its remarkable advantages over the conventional federated learning framework, from model accuracy and convergency, practical communication, computation, and storage overhead.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">FaceRevelio: A Face Liveness Detection System for Smartphones with a Single Front Camera</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Habiba Farrukh, Reham Mohamed Aburas, Siyuan Cao, He Wang (Purdue University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo39"></a>
<br/>
<div id="demo39" class="collapse">
Facial authentication mechanisms are gaining traction on smartphones because of their convenience and increasingly good performance of face recognition systems. However, mainstream systems use traditional 2D face recognition technologies, which are vulnerable to various spoofing attacks. Existing systems perform liveness detection via specialized hardware, such as infrared dot projectors and dedicated cameras. Although effective, such methods do not align well with the smartphone industry’s desire to maximize screen space. This paper presents a new liveness detection system, FaceRevelio, for commodity smartphones with a single front camera. It utilizes the smartphone screen to illuminate a user’s face from multiple directions. The facial images captured under varying illumination enable the recovery of the face surface normals via photometric stereo, which can then be integrated into a 3D shape. We leverage the facial depth features of this 3D surface to distinguish a human face from its 2D counterpart. On top of this, we change the screen via a light passcode consisting of a combination of random light patterns to provide security against replay attacks. We evaluate FaceRevelio with 30 users trying to authenticate under various lighting conditions and with a series of 2D spoofing attacks. The results show that using a passcode of 1s, FaceRevelio achieves a mean EER of 1.4% and 0.15% against photo and video attacks, respectively.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse8" class="d-block" style="color:white">
<b>06:35 - 07:15<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Advanced sensing capability (4 papers)<br/>Chair: Hun-Seok Kim and Haitham Hassanieh (mid US) and Fadel Adib (US)</b>
</a></h6>
<div id="collapse8" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Towards 3D Human Pose Construction Using WiFi</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Wenjun Jiang, Hongfei Xue, Chenglin Miao, Shiyang Wang, Sen Lin, Chong Tian, Srinivasan Murali, Haochen Hu, Zhi Sun, Lu Su (State University of New York at Buffalo)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo40"></a>
<br/>
<div id="demo40" class="collapse">
This paper presents WiPose, the first 3D human pose construction framework using commercial WiFi devices. From the pervasive WiFi signals, WiPose can reconstruct 3D skeletons composed of the joints on both limbs and torso of the human body. By overcoming the technical challenges faced by traditional camera-based human perception solutions, such as lighting and occlusion, the proposed WiFi human sensing technique demonstrates the potential to enable a new generation of applications such as health care, assisted living, gaming, and virtual reality. WiPose is based on a novel deep learning model that addresses a series of technical challenges. First, WiPose can encode the prior knowledge of human skeleton into the posture construction process to ensure the estimated joints satisfy the skeletal structure of the human body. Second, to achieve cross environment generalization, WiPose takes as input a 3D velocity profile which can capture the movements of the whole 3D space, and thus separate posture-specific features from the static objects in the ambient environment. Finally, WiPose employs a recurrent neural network (RNN) and a smooth loss to enforce smooth movements of the generated skeletons. Our evaluation results on a real-world WiFi sensing testbed with distributed antennas show that WiPose can localize each joint on the human skeleton with an average error of 2.83cm, achieving a 35% improvement in accuracy over the state-of-the-art posture construction model designed for dedicated radar sensors.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Contactless Seismocardiography via Deep Learning Radars</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Unsoo Ha, Salah Assana (MIT Media Lab); Fadel Adib (Massachusetts Institute of Technology)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo41"></a>
<br/>
<div id="demo41" class="collapse">
The seismocardiogram (SCG) is a recording of a human heart’s mechanical activity. It captures fine-grained cardiovascular events such as the opening and closing of heart valves and the contraction and relaxation of heart chambers. Today, SCG recordings are obtained by strapping an accelerometer at the apex of the heart to measure chest wall vibrations. These recordings can be used to diagnose and monitor various cardiovascular conditions including myocardial infarction (heart attack), coronary heart disease, and ischemia. This paper introduces RF-SCG, a system that can capture SCG recordings without requiring any contact with the human body. The system operates by analyzing the reflections of millimeter-wave radar signals off the human body. RF-SCG can reconstruct the SCG waveform, and it can time 5 cardiovascular events within individual heartbeats with high accuracy. Our design is based on a hybrid architecture that combines signal processing with deep learning. The pipeline includes a 4D Cardiac Beamformer that can focus on the reflections of the human heart and  a deep learning pipeline (RF-to-SCG Translator) that can transform these reflections into SCG waveforms. Empirical evaluation with 40,000 heartbeats from 21 healthy subjects demonstrates RF-SCG’s ability to robustly time five key cardiovascular events (aortic valve opening, aortic valve closing, mitral valve opening, mitral valve closing, and isovolumetric contraction) with a median error between 0.26%-1.29%.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">RFGo: A Seamless Self-checkout System for Apparel Stores Using RFID</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Carlos Bocanegra (Northeastern University); Mohammad A. (Amir) Khojastepour, Mustafa Y. Arslan, Eugene Chai, Sampath Rangarajan (NEC Labs America); Kaushik R. Chowdhury (Northeastern University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo42"></a>
<br/>
<div id="demo42" class="collapse">
Retailers are aiming to enhance customer experience by automating the checkout process.  The key impediment here is the effort to manually align the product barcode with the scanner, requiring sequential handling of items without blocking the line-of-sight of the laser beam.  While recent systems such as Amazon Go eliminate human involvement using an extensive array of cameras, we propose a privacy-preserving alternative, RFGo, that identifies products using passive RFID tags. Foregoing continuous monitoring of customers throughout the store, RFGo scans the products in a dedicated checkout area that is large enough for customers to simply walk in and stand until the scan is complete (in two seconds). Achieving such low-latency checkout is not possible with traditional RFID readers, which decode tags using one antenna at a time. To overcome this, RFGo includes a custom-built RFID reader that simultaneously decodes a tag's response from multiple carrier-level synchronized antennas enabling a large set of tag observations in a very short time. RFGo then feeds these observations to a neural network that accurately distinguishes the products within the checkout area from those that are outside. We build a prototype of RFGo and evaluate its performance in challenging scenarios. Our experiments show that RFGo is extremely accurate, fast and well-suited for practical deployment in apparel stores.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Understanding and Embracing the Complexities of the Molecular Communication Channel in Liquids</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Jiaming Wang, Dongyin Hu, Chirag Shetty, Haitham Hassanieh (University of Illinois Urbana Champaign)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo43"></a>
<br/>
<div id="demo43" class="collapse">
Molecular communication has recently gained a lot of interest due to its potential to enable micro-implants to communicate by releasing molecules into the bloodstream. In this paper, we aim to explore the molecular communication channel through theoretical and empirical modeling in order to achieve a better understanding of its characteristics, which tend to be more complex in practice than traditional wireless and wired channels. Our study reveals two key new characteristics that have been overlooked by past work. Specifically, the molecular communication channel exhibits non-causal inter-symbol-interference and a long delay spread, that extends beyond the channel coherence time, which limit decoding performance. To address this, we design, μ-Link a molecular communication protocol and decoder that accounts for these new insights. We build a testbed to experimentally validate our findings and show that μ-Link can improve the achievable data rates with significantly lower bit error rates.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse9" class="d-block" style="color:white">
<b>07:20 - 07:50<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Mobile systems (3 papers)<br/>Chair: Chen Qian (US), Pengyu Zhang (western US) and Joerg Widmer (Spain)</b>
</a></h6>
<div id="collapse9" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Internet-of-Microchips: Direct Radio-to-Bus Communication with SPI Backscatter</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Songfan Li, Chong Zhang, Yihang Song, Hui Zheng, Lu Liu (University of Electronic Science and Technology of China); Li Lu (School of Computer Science and Engineering, University of Electronic Science and Technology of China (UESTC), P.R. China); Mo Li (Nanyang Technological University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo44"></a>
<br/>
<div id="demo44" class="collapse">
Energy consumption of Internet-of-Things end devices is a major constraint that limits their long-term and large-scale deployment. Conventionally, the radios and processors used in these end devices are major power consumption that drains at the level of milliwatts (mmWs). However, in recent decades, backscatter communication has dramatically reduced the power consumed by the radios in end devices to microwatts (\muμWs), and thus the processor remains the major bottleneck for energy optimization.
In this paper, we propose a processor-free architecture as a novel design that allows the radio to interface directly with peripheral sensor chips for control and data collection, thereby separating the processors from the end device design to significantly reduce the energy consumed by end devices. The main problem is that the peripheral chips are designed to be accessed by the processor via a standard digital bus and they cannot communicate directly with the radio. In order to support such processor-free design, we propose radio-to-bus (R2B) as a novel communication paradigm that allows direct data exchange between a backscatter radio and the serial peripheral interface (SPI) bus. We implement the processor-free architecture in proof-of-concept prototypes and demonstrate that the power consumption decreases by 4.5 times compared with the conventional end device design.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">TinyLink 2.0: Integrating Device, Cloud, and Client Development for IoT Applications</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Gaoyang Guan, Borui Li, Yi Gao, Yuxuan Zhang, Jiajun Bu, Wei Dong (Zhejiang University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo45"></a>
<br/>
<div id="demo45" class="collapse">
The recent years have witnessed the rapid growth of IoT (Internet of Things) applications. A typical IoT application usually consists of three essential parts: the device side, the cloud side, and the client side. The development of a complete IoT application is very difficult for non-expert developers because it involves drastically different technologies and complex interactions between different sides. Unlike traditional IoT development platforms which use separate approaches for these three sides, we present TinyLink 2.0, an integrated IoT development approach with a single coherent language. It achieves high expressiveness for diverse IoT applications by an enhanced IFTTT rule design and a virtual sensor mechanism which helps developers express application logic with machine learning. Moreover, TinyLink 2.0 optimizes the IoT application performance by using both static and dynamic optimizers, especially for resource-constrained IoT devices. We implement TinyLink 2.0 and evaluate it with eight case studies, a user study, and a detailed evaluation of the proposed programming language as well as the performance optimizers. Results show that TinyLink 2.0 can speed up IoT development significantly compared with existing approaches from both industry and academia, while still achieving high expressiveness.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Experience: Aging or Glitching? Why Does Android Stop Responding and What Can We Do About It?</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Mingliang Li (Xiaomi Co. LTD & Tsinghua University); Hao Lin (Tsinghua University); Cai Liu (Xiaomi Co. LTD); Zhenhua Li (Tsinghua University); Feng Qian (University of Minnesota - Twin Cities); Yunhao Liu (MSU & Tsinghua University); Nian Sun (Xiaomi Co. LTD); Tianyin Xu (University of Illinois Urbana-Champaign)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo46"></a>
<br/>
<div id="demo46" class="collapse">
Almost every Android user has unsatisfying experiences regarding responsiveness, in particular Application Not Responding (ANR) and System Not Responding (SNR) that directly disrupt user experience.
Unfortunately, the community have limited understanding of the prevalence, characteristics, and root causes of unresponsiveness. In this paper, we make an in-depth study of ANR and SNR at scale based on fine-grained system-level traces crowdsourced from 30,000 Android systems. We find that ANR and SNR occur prevalently on all the studied 15 hardware models, and better hardware does not seem to relieve the problem. Moreover, as Android evolves from version 7.0 to 9.0, there are fewer ANR events but more SNR events. Most importantly, we uncover multifold root causes of ANR and SNR and pinpoint the largest pathology which roots in Android's flawed implementation of Write Amplification Mitigation (WAM). We design a practical approach to eliminating this largest root cause; after large-scale deployment, it reduces almost all (>99%) ANR and SNR caused by WAM while only decreasing 3% of the data write speed.
In addition, we document important lessons we have learned from this study, and have also released our measurement code/data to the research community.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse9" class="d-block" style="color:white">
<b>07:55 - 08:35<br/><i class="fa fa-chevron-down float-right" ></i>
Session: ML (4 papers)<br/>Chair: Robert LiKamWa  (western US) and  Y. Charlie Hu (US)</b>
</a></h6>
<div id="collapse9" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">SPINN: Synergistic Progressive Inference of Neural Networks over Device and Cloud</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Stefanos Laskaridis, Stylianos I. Venieris, Mario Almeida, Ilias Leontiadis (Samsung AI Center Cambridge); Nicholas D. Lane (Samsung AI Center Cambridge and University of Cambridge)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo47"></a>
<br/>
<div id="demo47" class="collapse">
Despite the soaring use of convolutional neural networks (CNNs) in mobile applications, uniformly sustaining high-performance inference on the mobile side has been elusive due to the excessive computational demands of modern CNNs and the increasing diversity of deployed devices. A popular alternative comprises offloading CNN processing to powerful cloud-based servers. Nevertheless, by relying on the cloud to produce outputs, emerging mission-critical and high-mobility applications, such as drone obstacle avoidance or interactive applications, can suffer from the dynamic connectivity conditions and the uncertain availability of the cloud. In this paper, we propose SPINN, a distributed inference system that employs synergistic device-cloud computation together with a progressive inference method to deliver fast and robust CNN inference across diverse settings. The proposed system introduces a novel scheduler that co-optimises the early-exit policy and the CNN splitting at run time, in order to adapt to dynamic conditions and meet user-defined service-level requirements. Quantitative evaluation illustrates that SPINN outperforms its state-of-the-art collaborative inference counterparts by up to 2\times× in achieved throughput under varying network conditions, reduces the server cost by up to 6.8× and improves accuracy by 20.7% under latency constraints, while providing robust operation under uncertain connectivity conditions and significant energy savings compared to cloud-centric execution.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">CLIO: Enabling automatic compilation of deep learning pipelines across IoT and Cloud</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Jin Huang, Colin Samplawski, Deepak Ganesan, Benjamin Marlin (UMass Amherst); Heesung Kwon (ARL)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo48"></a>
<br/>
<div id="demo48" class="collapse">
Recent years have seen dramatic advances in low-power neural accelerators that aim to bring deep learning analytics to IoT devices; simultaneously, there have been considerable advances in the design of low-power radios aimed at enabling efficient compute offload from IoT devices to the cloud. Neither is a panacea --- deep learning models are often too large for low-power accelerators and bandwidth needs often too high for low-power radios. While there has been considerable work on deep learning for smartphone-class devices, we lack a good understanding of how to design efficient and low-power deep learning systems for resource-constrained IoT devices.
In this paper, we attempt to bridge this gap by designing a continuously tunable method for leveraging both local and remote resources to optimize performance of a deep learning model. CLIO presents a novel approach to split machine learning models between an IoT device and cloud in a progressive manner to adapt to wireless dynamics. We show that this method can be combined with model compression, adaptive model partitioning and privacy preservation to create an integrated system for IoT-cloud partitioning. We implement CLIO on the GAP8 low-power neural accelerator and provide an exhaustive characterization of the operating regimes where each method performs best and show that CLIO can enable graceful degradation of prediction accuracy as resources diminish.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">EagleEye: Wearable Camera-based Person Identification in Crowded Urban Spaces</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Juheon Yi (Seoul National University); Sunghyun Choi (Samsung Research); Youngki Lee (Seoul National University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo49"></a>
<br/>
<div id="demo49" class="collapse">
We present EagleEye, an AR-based system that identifies missing person (or people) in large, crowded urban spaces. Designing involves critical technical challenges for both accuracy and latency. Firstly, despite recent advances in Deep Neural Network (DNN)-based face identification, we observe that state-of-the-art models fail to accurately identify Low-Resolution (LR) faces. Accordingly, we design a novel Identity Clarification Network to recover missing details in the LR faces, which enhances true positives by 78% with only 14% false positives. Furthermore, designing EagleEye involves unique challenges compared to recent continuous mobile vision systems in that it requires running a series of complex DNNs multiple times on a high-resolution image. To tackle the challenge, we develop Content-Adaptive Parallel Execution to optimize complex multi-DNN face identification pipeline execution latency using heterogeneous processors on mobile and cloud. Our results show that EagleEye achieves 9.07\times× faster latency compared to naive execution, with only 108 KBytes of data offloaded.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Heimdall: Mobile GPU Coordination Platform for Augmented Reality Applications</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Juheon Yi, Youngki Lee (Seoul National University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo50"></a>
<br/>
<div id="demo50" class="collapse">
We present Heimdall, a mobile GPU coordination platform for emerging Augmented Reality (AR) applications. Future AR apps impose an explored challenging workload: i) concurrent execution of multiple Deep Neural Networks (DNNs) for physical world and user behavior analysis, and ii) seamless rendering in presence of the DNN execution for immersive user experience. Existing mobile deep learning frameworks, however, fail to support such workload: multi-DNN GPU contention slows down inference latency (e.g., from 59.93 to 1181 ms), and rendering-DNN GPU contention degrades frame rate (e.g., from 30 to ~12 fps). Multi-tasking for desktop GPUs (e.g., parallelization, preemption) cannot be applied to mobile GPUs as well due to limited architectural support and memory bandwidth. To tackle the challenge, we design a Pseudo-Preemption mechanism which i) breaks down the bulky DNN into smaller units, and ii) prioritizes and flexibly schedules concurrent GPU tasks. We prototyped Heimdall over various mobile GPUs (i.e., recent Adreno series) and multiple AR app scenarios that involve combinations of 8 state-of-the-art DNNs. Our extensive evaluation shows that Heimdall enhances the frame rate from ~12 to ~30 fps while reducing the worst-case DNN inference latency by up to ~15 times compared to the baseline multi-threading approach.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse9" class="d-block" style="color:white">
<b>08:40 - 09:10<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Backscatter (3 papers)<br/>Chair: Shyam Gollakota and Longfei Shangguan (western US)</b>
</a></h6>
<div id="collapse9" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Redefining Passive in Backscattering with Commodity Devices</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Mohammad Rostami (UMass Amherst); Karthik Sundaresan, Eugene Chai, Sampath Rangarajan (NEC Labs America); Deepak Ganesan (UMass Amherst)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo51"></a>
<br/>
<div id="demo51" class="collapse">
The recent innovation of frequency-shifted (FS) backscatter allows for backscattering with commodity devices, which are inherently half-duplex. However, their reliance on oscillators for generating the frequency-shifting signal on the tag, forces them to incur the transient phase of the oscillator before steady-state operation. We show how the oscillator's transient phase can pose a fundamental limitation for battery-less tags, resulting in significantly low bandwidth efficiencies, thereby limiting their practical usage.
To this end, we propose a novel approach to FS-backscatter called xSHIFT that shifts the core functionality of FS away from the tag and onto the commodity device, thereby eliminating the need for on-tag oscillators altogether. The key innovation in xSHIFT lies in addressing the formidable challenges that arise in making this vision a reality. Specifically, xSHIFT’s design for commodity backscatter is built on the construct of beating twin carrier tones through a non-linear device to generate the desired FS signal -- while the twin RF carriers are generated externally through a careful embedding into the resource units of commodity WiFi transmissions, the beating is achieved through a carefully-designed passive tag circuitry. We prototype xSHIFT 's tag, which is the same form factor as RFID Gen 2 tags, and characterize its promising real-world performance. We believe xSHIFT demonstrates one of the first, truly passive tag designs that has the potential to bring commodity backscatter to consumer spaces.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Tunnel Emitter: Tunnel Diode based Low-Power Carrier Emitters for Backscatter Tags</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Ambuj Varshney, Lorenzo Corneo (Uppsala University, Sweden)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo52"></a>
<br/>
<div id="demo52" class="collapse">
Backscatter enables transmissions at orders of magnitude lower energy consumption when compared to conventional radio transmitters. Backscatter tags achieve this by the reflection or absorption of carrier signal generated from emitter devices. However, backscatter systems are limited by these emitter devices, as they are significantly energy-expensive when compared to the tags. While backscatter tags can operate without requiring batteries, relying on the minuscule amounts of energy harvested from the ambient environment. However, the emitter devices, are commonly tethered to an external power supply or operate on large batteries.
We present Tunnel Emitter: a tunnel diode oscillator based system that enables the generation of carrier signals at a peak biasing power of tens of \SI{}{\micro\watt}. Thus, for the first time, it allows battery-free emitter devices. The key enabler to the design is a phenomenon exhibited by tunnel diode oscillators that we call back injection, and we are the first to demonstrate. Back injection enables the emitter devices to amplify~(up to \SI{20}{\decibel}) and relay the backscattered signal. Our results show that \tags{} when operating together with a tag from long-range backscatter system, facilitates multi-floor communication. Tunnel Emitter, due to the back injection phenomenon, achieves this with a carrier signal that is orders of magnitude weaker than used in state-of-the-art systems. We believe Tunnel Emitter overcomes the key constraint restricting backscatter systems and thus can make backscatter systems ubiquitous.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Renovating Road Signs for Infrastructure-to-Vehicle Networking: A Visible Light Backscatter Communication and Networking Approach</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Purui Wang, Lilei Feng, Guojun Chen, Chenren Xu, Yue Wu, Kenuo Xu (Peking University); Guobin Shen (JoveAI, Inc.); Kuntai Du, Gang Huang, Xuanzhe Liu (Peking University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo53"></a>
<br/>
<div id="demo53" class="collapse">
Conventional road signs convey very concise and static visual information to human drivers, and bear retroreflective coating for better visibility at night. This paper introduces RetroI2V - a novel infrastructure-to-vehicle (I2V) communication and networking system that renovates conventional road signs to convey additional and dynamic information to vehicles while keeping intact their original functionality. In particular, RetroI2V exploits the retroreflective coating of road signs and establishes visible light backscattering communication (VLBC), and further coordinates multiple concurrent VLBC sessions among road signs and approaching vehicles. RetroI2V features a suite of novel VLBC designs including late-polarization, complementary optical signaling and polarization-based differential reception which are crucial to avoid flickering and achieve long VLBC range, as well as a decentralized MAC protocol that make practical multiple access in highly mobile and transient I2V settings. Experimental results from our prototyped system show that RetroI2V supports up to 101 m communication range and efficient multiple access at scale.
</div></li>

</ul></div></div></div>

<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>09:15 - 10:15<br/>Keynote 4: Durga Malladi (Qualcomm Technologies)</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="keynote.php#malladi"><b>What’s next in the cellular infrastructure</b></a>
</h6>
</div>
</div>

<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>10:20 - 11:20<br/>Keynote 5: Alex Kauffmann</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="keynote.php#alex"><b>TBD</b></a>
</h6>
</div>
</div>
<br/><hr/>

<div class="accordion">
<p class="h4"><b> Thursday, 24th September, 2020 PDT</b></p>
<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse7" class="d-block" style="color:white">
<b>06:00 - 06:40<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Mobile sensing and UI (4 papers)<br/>Chair: Anthony Rowe, Yunxin Liu (China) and Jennifer Chen</b>
</a></h6>
<div id="collapse7" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">TouchPass: Towards Behavior-irrelevant on-touch User Authentication on Smartphones Leveraging Vibrations</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Xiangyu Xu, Jiadi Yu (Shanghai Jiao Tong University); Yingying Chen (Rutgers University); Qin Hua, Yanmin Zhu, Yi-Chao Chen, Minglu Li (Shanghai Jiao Tong University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo54"></a>
<br/>
<div id="demo54" class="collapse">
With increasing private and sensitive data stored in mobile devices, secure and effective mobile-based user authentication schemes are desired. As the most natural way to contact with mobile devices, finger touches have shown potentials for user authentication. Most existing approaches utilize finger touches as behavioral biometrics for identifying individuals, which are vulnerable to spoofer attacks. To resist attacks for on-touch user authentication on mobile devices, this paper exploits physical characters of touching fingers by investigating active vibration signal transmission through fingers, and we find that physical characters of touching fingers present unique patterns on active vibration signals for different individuals. Based on the observation, we propose a behavior-irrelevant on-touch user authentication system, TouchPass, which leverages active vibration signals on smartphones to extract only physical characters of touching fingers for user identification. TouchPass first extracts features that mix physical characters of touching fingers and behavior biometrics of touching behaviors from vibration signals generated and received by smartphones. Then, we design a Siamese network-based architecture with a specific training sample selection strategy to reconstruct the extracted signal features to behavior-irrelevant features and further build a behavior-irrelevant on-touch user authentication scheme leveraging knowledge distillation. Our extensive experiments validate that TouchPass can accurately authenticate users and defend various attacks.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">EarSense: Earphones as a Teeth Activity Sensor</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Jay Prakash (Singapore University of Technology and Design, Singapore); Zhijian Yang, Yu-Lin Wei, Haitham Hassanieh (University of Illinois Urbana Champaign); Romit Roy Choudhury (University of Illinois at Urbana Champaign)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo55"></a>
<br/>
<div id="demo55" class="collapse">
This paper finds that actions of the teeth, namely tapping and sliding, produce vibrations in the jaw and skull. These vibrations are strong enough to propagate to the edge of the face and produce vibratory signals at an earphone. By re-tasking the earphone speaker as an input transducer -- a software modification in the sound card -- we are able to sense teeth-related gestures across various models of ear/headphones. In fact, by analyzing the signals at the two earphones, we show the feasibility of also localizing teeth gestures, resulting in a human-to-machine interface. Challenges range from coping with weak signals, distortions due to different teeth compositions, lack of timing resolution, spectral dispersion, etc. We address these problems with a sequence of sensing techniques, resulting in the ability to detect 6 distinct gestures in real-time. Results from 18 volunteers exhibit robustness, even though our system --EarSense -- does not depend on per-user training. Importantly, EarSense also remains robust in the presence of concurrent user activities, like walking, nodding, cooking and cycling. Our ongoing work is focused on detecting teeth gestures even while music is being played in the earphone; once that problem is solved, we believe EarSense could be even more compelling.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">PDLens: Smartphone Knows Drug Effectiveness among Parkinson's via Daily-Life Activity Fusion</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Hanbin Zhang, Gabriel Guo, Chen Song, Chenhan Xu, Kevin Cheung, Jasleen Alexis, Huining Li (University at Buffalo, SUNY); Dongmei Li (University of Rochester Medical Center); Kun Wang (University of California, Los Angeles); Wenyao Xu (University at Buffalo, SUNY)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo56"></a>
<br/>
<div id="demo56" class="collapse">
Drug effectiveness management is a complicated and challenging task in chronic diseases, like Parkinson's Disease (PD). Drug effectiveness control is not only linked to personal out-of-pocket cost but also affecting the quality of life among patients with chronic symptoms. In the current practice, although that health and medical professionals still play a key role in the personalized treatment plan, the critical decision on drug selection falls upon the individual report when patients call in or visit the clinics. Unfortunately, most of the patients with chronic diseases either fail to report their day-to-day symptoms or have a limited access to medical resources due to economic constraints. In this paper, we present \textit{PDLens}, a first smartphone-based system to detect drug effectiveness among Parkinson's in daily life. Specifically, PDLens can extract digital behavioral markers related to PD drug responses from everyday activities, including phone calls, standing, and walking. PDLens models the PD symptom severity on drug treatment and detects the change of severity scores before and after drug intake. A ranking-based multi-view deep neural network is developed to decide the drug effectiveness upon the symptom severity changes. To validate the performance of PDLens, we conduct a pilot study with 8181 PD patients and monitor their smartphone activities and severity changes over 3369333693 drug intake events across six (6) months. Compared with the standard clinical drug effectiveness test developed by Motor Disorder Society, results reveal that \textit{PDLens} is a promising tool to facilitate drug effectiveness detection among PD patients in their daily lives.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Deaf-Aid: Mobile IoT Communication Exploiting Stealthy Speaker-to-Gyroscope Channel</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Ming Gao (Zhejiang University, Alibaba-Zhejiang University Joint Research Institute of Frontier Technologise); Feng Lin, Weiye Xu, Muertikepu Nuermaimaiti (Zhejiang University); Jinsong Han (Zhejiang University, Alibaba-Zhejiang University Joint Research Institute of Frontier Technologise); Wenyao Xu (SUNY Buffalo); Kui Ren (Zhejiang University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo57"></a>
<br/>
<div id="demo57" class="collapse">
Internet of Things (IoT) devices are hindered from communicating with their neighbors by incompatible protocols or electromagnetic interference. Existing solutions adopting physical covert channels have limitations in receiver distinction, additional hardware, conditional placement, or physical contact. Our system, Deaf-Aid, utilizes the stealthy speaker-to-gyroscope channel to build robust protocol-independent communication with automatic receiver identification. Deaf-Aid exploits ultrasonic signals at a frequency corresponding to the target receiver, forcing the gyroscope inside to resonate, so as to convey information. We probe the relationship among axes in a gyroscope to surmount frequency offset ingeniously and support multi-channel communication. Meanwhile, Deaf-Aid identifies the receivers automatically via device fingerprints constituted by the diversity of resonant frequency ranges. Furthermore, we entitle Deaf-Aid the capability of mobile communication which is an essential demand for IoT devices. We address the challenge of accurate signals recovery from motion interference. Extensive evaluations demonstrate that Deaf-Aid yields 47bps with BER lower than 1% under motion interference. To our best knowledge, Deaf-Aid is the first work to enable stealthy mobile IoT communication on the basis of inertial motion sensors.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse8" class="d-block" style="color:white">
<b>06:45 - 07:35<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Long range wireless (5 papers)<br/>Chair: Brad Campbell (eastern US), Lu Su (eastern US) and Wenjun Hu</b>
</a></h6>
<div id="collapse8" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">WiChronos : Energy-Efficient Modulation for Long-Range, Large-Scale Wireless Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Yaman Sangar, Bhuvana Krishnaswamy (University of Wisconsin-Madison)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo58"></a>
<br/>
<div id="demo58" class="collapse">
Wireless communication over long distances has become the bottleneck for battery-powered, large-scale deployments. Currently used low-power protocols such as Zigbee and Bluetooth Low Energy have limited communication range, whereas long-range communication strategies used in cellular and satellite networks are heavy on energy consumption. Methods that use narrow-band communication such as LoRa, SigFox, and NB-IoT have low spectral efficiency, leading to scalability issues. The goal of this work is to develop a communication framework that can satisfy the following requirements: (1) Increased battery life, (2) Longer communication range, (3) Scalability in a wireless network. In this work, we propose, design, and prototype WiChronos, a communication paradigm that encodes information in the time interval between two narrowband symbols in order to drastically reduce the energy consumption in a wide area network with a large number of senders. We leverage the low data-rate and relaxed latency requirements of such applications to achieve the desired features identified above. Based on our prototype using off-the-shelf components, WiCchronos achieves an impressive 60\% improvement in battery life compared to state-of-the-art LPWAN technologies at distances of over 800 meters. We also show that more than 1000 WiChronos senders can co-exist with less than 5% probability of collisions under low traffic conditions.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Nephalai: Towards LPWAN C-RAN with Physical Layer Compression</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Jun Liu (UNSW Sydney); Weitao Xu (City University of Hong Kong); Sanjay Jha, Wen Hu (UNSW Sydney)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo59"></a>
<br/>
<div id="demo59" class="collapse">
We propose Nephelai, a Compressive Sensing-based Cloud Radio Access Network (C-RAN), to reduce the uplink bit rate of the physical layer (PHY) between the gateways and the cloud server for multi-channel LPWANs. Recent research shows that single-channel LPWANs suffer from scalability issues. While multiple channels improve these issues, data transmission is expensive. Furthermore, recent research has shown that jointly decoding raw physical layers that are offloaded by LPWAN gateways in the cloud can improve the signal-to-noise ratio (SNR) of week radio signals. However, when it comes to multiple channels, this approach requires high bandwidth of network infrastructure to transport a large amount of PHY samples from gateways to the cloud server, which results in network congestion and high cost due to Internet data usage. In order to reduce the operation's bandwidth, we propose a novel LPWAN packet acquisition mechanism based on Compressive Sensing with a custom design dictionary that exploits the structure of LPWAN packets, reduces the bit rate of samples on each gateway, and demodulates PHY in the cloud with (joint) sparse approximation. Moreover, we propose an adaptive compression method that takes the Spreading Factor (SF) and SNR into account. Our empirical evaluation shows that up to 93.7% PHY samples can be reduced by Nephelai when SF = 9SF=9 and SNR is high without degradation in the packet reception rate (PRR). With four gateways, 1.7x PRR can be achieved with 87.5% PHY samples compressed, which can extend the battery lifetime of embedded IoT devices to 1.7.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">LMAC: Efficient Carrier-Sense Multiple Access for LoRa</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Amalinda Gamage, Jansen Christian Liando, Chaojie Gu, Rui Tan, Mo Li (Nanyang Technological University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo60"></a>
<br/>
<div id="demo60" class="collapse">
Current LoRa networks including those following the LoRaWAN specification use the primitive ALOHA mechanism for media access control due to LoRa's lack of carrier sense capability. From our extensive measurements, the Channel Activity Detection (CAD) feature that is recently introduced to LoRa for detecting preamble chirps, can also detect payload chirps. This sheds light on an efficient carrier-sense multiple access (CSMA) protocol that we call LMAC for LoRa networks. This paper presents the designs of three advancing versions of LMAC that respectively implements CSMA, balances the communication loads among the channels defined by frequencies and spreading factors based on the end nodes' local information and then additionally the gateway's global information. Experiments on a 50-node lab testbed and a 16-node university deployment show that, compared with ALOHA, LMAC brings up to 2.2× goodput improvement and 2.4× reduction of radio energy per successfully delivered frame. Thus, should the LoRaWAN's ALOHA be replaced with LMAC, network performance boosts can be realized.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Joltik: Enabling Energy-Efficient "Future-Proof" Analytics on Low-Power Wide-Area Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Mingran Yang (Carnegie Mellon University and Massachusetts Institute of Technology); Junbo Zhang, Akshay Gadre (Carnegie Mellon University); Zaoxing Liu (Carnegie Mellon University and Boston University); Swarun Kumar, Vyas Sekar (Carnegie Mellon University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo61"></a>
<br/>
<div id="demo61" class="collapse">
Wireless sensors have enabled a number of key applications. Due to their energy constraints, wireless sensors today communicate occasional short samples or pre-determined summary statistics of the data they collect. This means that computing every additional statistic at high fidelity incurs additional communication and energy overhead. This paper presents Joltik, a framework enabling general, future-proof, and energy-efficient analytics for low power wireless sensors. Joltik is general in that it summarizes sensed data from low-power devices without making assumptions on which specific statistical metric(s) are desired at the cloud and is future-proof, meaning it supports new, unforeseen metrics. Joltik is built upon recent theoretical advances in universal sketching, which can enable a Joltik sensor node to report a compact summary of observed data to enable a large class of statistical summaries. We address key system design and implementation challenges with respect to communication, memory, and computation bottlenecks that arise in practically realizing the potential benefits of universal sketching in the low-power regime. We present a proof-of-concept testbed evaluation of Joltik in LoRaWAN NUCLEO-L476RG boards and sensors. Across a range of realistic datasets, Joltik provides up to a 24.6× reduction in energy cost compared to transmitting raw data and outperforms many natural alternatives (e.g., sub-sampling, custom sketches, compressed sensing, and lossy compression) in terms of energy-accuracy trade-offs.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Understanding Power Consumption of NB-IoT in the Wild: Tool and Large-scale Measurement</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Deliang Yang (Michigan State University); Xianghui Zhang (Nanjing University of Aeronautics and Astronautics, The Chinese University of Hong Kong); Xuan Huang (The Chinese University of Hong Kong); Liqian Shen (Nanjing University of Aeronautics and Astronautics); Jun Huang (Peking University, Massachusetts Institute of Technology); Xiangmao Chang (Nanjing University of Aeronautics and Astronautics); Guoliang Xing (The Chinese University of Hong Kong)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo62"></a>
<br/>
<div id="demo62" class="collapse">
Recent years have seen a widespread deployment of NB-IoT networks for massive machine-to-machine communication in the emerging 5G era. Unfortunately, the key aspects of NB-IoT networks, such as radio access performance and power consumption have not been well-understood due to lack of effective tools and closed nature of operational cellular infrastructure. In this paper, we develop NB-Scope - the first NB-IoT diagnostic hardware tool that supports fine-grained fusion of power and protocol traces. We then conduct a large-scale field measurement study consisting of 30 nodes deployed at over 1,200 locations in 3 regions during a period of three months. Our in-depth analysis of the collected 49 GB traces showed that NB-IoT nodes yield significantly imbalanced energy consumption in the wild, up to a ratio of 75:1. Such a high performance variance can be attributed to several key factors including poor network coverage level, long tail power profile, and excessive control message repetitions. We then explore the optimization of NB-IoT base station settings on a software-defined eNodeB testbed, and suggest several important design aspects that can be considered by future NB-IoT specifications and chipsets.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse9" class="d-block" style="color:white">
<b>07:40 - 08:10<br/><i class="fa fa-chevron-down float-right" ></i>
Session: UAV (3 papers)<br/>Chair: Karthik Dantu (eastern US) and Kassem Fawaz (mid US)</b>
</a></h6>
<div id="collapse9" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Bleep: Motor-Enabled Audio Side-Channel for Constrained UAVs</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Adeola Bannis (Carnegie Mellon University); Hae Young Noh (Stanford University); Pei Zhang (Carnegie Mellon University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo63"></a>
<br/>
<div id="demo63" class="collapse">
Small unmanned autonomous vehicles (UAVs) swarms are becoming ubiquitous in a number of applications (e.g., surveying, monitoring, and situational awareness). Indoor environments may contain metal equipment that temporarily disrupts radio reception. During these momentary interruptions, a small UAV needs to be able to broadcast a `heartbeat' to indicate that it is not damaged or lost. Considering alternative messaging modalities, we observe that light-based methods require line-of sight, which is not guaranteed when UAVs are moving through a cluttered environment, while a naive sound-based method is easily drowned out by the UAV's own loud motor and propeller noise.
We present Bleep, a side-channel messaging system that modulates UAV motors sounds to enable multiple UAVs to communicate when radio is unavailable. Bleep accomplishes this by 1) embedding linear chirps within the PWM frequency while maintaining the controllability of the UAV and 2) decoding the received sounds utilizing chirp multiplication to enhance signal detection in loud motor noise. Our chirp-based encoding allows multiple simultaneous transmissions to be detected and decoded in the presence of loud sounds from multiple UAV motors. Through real-world experiments, we show that Bleep is able to achieve over 95% signal detection and decoding accuracy with simultaneous transmissions.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">C-14: Assured Timestamps for Drone Videos</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Zhipeng Tang, Fabien Delattre, Pia Bideau, Mark D. Corner, Erik Learned-Miller (University of Massachusetts Amherst)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo64"></a>
<br/>
<div id="demo64" class="collapse">
Inexpensive and highly capable unmanned aerial vehicles (aka drones) have enabled people to contribute high-quality videos at a global scale. However, a key challenge exists for accepting videos from untrusted sources: establishing when a particular video was taken. Once a video has been received or posted publicly, it is evident that the video was created before that time, but there are no current methods for establishing how long it was made before that time. We propose C-14, a system that assures the earliest timestamp, t_bt, of drone-made videos. C-14 provides a challenge to an untrusted drone requiring it to execute a sequence of motions, called a motion program, revealed only after t_bt. It then uses camera pose estimation techniques to verify the resulting video matches the challenge motion program, thus assuring the video was taken after t_bt. We demonstrate the system on manually crafted programs representing a large space of possible motion programs. We also propose and evaluate an example algorithm which generates motion programs based on a seed value released after t_bt C-14 incorporates a number of compression and sampling techniques to reduce the computation required to verify videos. We can verify a 59-second video from an eight-motion, manual motion program, in 91 seconds of computation with a false positive rate of one in 10^13 and no false negatives. We can also verify a 190-second video from an algorithmically derived, 4-motion program, in 158 seconds of computation with a false positive rate of one in one hundred thousand and no false negatives.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Airdropping Sensor Networks from Drones and Insects</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Vikram Iyer, Maruchi Kim, Qiuyue(Shirley) Xue, Anran Wang, Shyamnath Gollakota (University of Washington)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo65"></a>
<br/>
<div id="demo65" class="collapse">
We present the first system that can airdrop wireless sensors from small drones and live insects. In addition to the challenges of achieving low-power consumption and long-range communication, airdropping wireless sensors is difficult because it requires the sensor to survive the impact when dropped in mid-air. Our design takes inspiration from nature: small insects like ants can fall from tall buildings and survive because of their tiny mass and size. Inspired by this, we design insect-scale wireless sensors that come fully integrated with an onboard power supply and a  lightweight mechanical actuator to detach from the aerial platform.  Our system introduces a first-of-its-kind 37 mg mechanical release mechanism to drop the sensor during flight, using only 450 uJ of energy as well as a wireless communication link that can transmit sensor data at 33 kbps up to 1 km. Once deployed, our 98 mg wireless sensor can run for 1.3-2.5 years when transmitting 10-50 packets per hour on a 68 mg battery. We demonstrate attachment to a small 28 mm wide drone and a moth (Manduca sexta) and show that our insect-scale sensors flutter as they fall, suffering no damage on impact onto a tile floor from heights of 22 m.
</div></li>

</ul></div></div></div>

<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>08:15 - 9:15<br/>Keynote 6: Ron Marquardt</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="keynote.php#ron"><b>TBD</b></a>
</h6>
</div>
</div>

<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>09:20 - 10:20<br/>Panel 2. Moderator: Lili Qiu</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="panel.php#panel2"><b>5G and Edge Applications</b></a>
</h6>
</div>
</div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse9" class="d-block" style="color:white">
<b>10:25 - 11:05<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Video (4 papers)<br/>Chair: Dinesh Bharadia (western US), Xinyu Zhang (western US) and Yuanjie Li</b>
</a></h6>
<div id="collapse9" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">ViVo: Visibility-Aware Mobile Volumetric Video Streaming</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Bo Han (AT&T Labs -- Research); Yu Liu, Feng Qian (University of Minnesota -- Twin Cities)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo66"></a>
<br/>
<div id="demo66" class="collapse">
In this paper, we perform a first comprehensive study of mobile volumetric video streaming. Volumetric videos are truly 3D, allowing six degrees of freedom (6DoF) movement for their viewers during playback. Such flexibility enables numerous applications in entertainment, healthcare, education, etc. However, volumetric video streaming is extremely bandwidth-intensive. We conduct a detailed investigation of each of the following aspects for point cloud streaming (a popular volumetric data format): encoding, decoding, segmentation, viewport movement patterns, and viewport prediction. Motivated by the observations from the above study, we propose ViVo, which is to the best of our knowledge the first practical mobile volumetric video streaming system with three visibility-aware optimizations. ViVo judiciously determines the video content to fetch based on how, what and where a viewer perceives for reducing bandwidth consumption of volumetric video streaming. Our evaluations over real wireless networks (including commercial 5G), mobile devices and users indicate that ViVo can save on average 40% of data usage (up to 80%) with virtually no drop in visual quality.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">NEMO: Enabling Neural-enhanced Video Streaming on Commodity Mobile Devices</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Hyunho Yeo, Chan Ju Chong, Youngmok Jung, Juncheol Ye, Dongsu Han (KAIST)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo67"></a>
<br/>
<div id="demo67" class="collapse">
The demand for mobile video streaming has experienced tremendous growth over the last decade. However, existing methods of video delivery fall short of delivering high quality video. Recent advances in neural super-resolution have opened up the possibility of enhancing video quality by leveraging client-side computation. Unfortunately, mobile devices cannot benefit from this because it is too expensive in computation and power-hungry.
To overcome the limitation, we present NEMO, a system that enables real-time video super-resolution on mobile devices. NEMO applies neural super-resolution to a few select frames and transfers the outputs to benefit the remaining frames. The frames to which super-resolution is applied are carefully chosen to maximize the overall quality gains. NEMO leverages fine-grained dependencies using information from the video codec and provides guarantees in the quality degradation compared to per-frame super-resolution. Our evaluation using a full system implementation on Android shows NEMO improves the overall processing throughput by x11.5, reduces energy consumption by 88.6%, and maintains device temperatures at acceptable levels compared to per-frame super-resolution, while ensuring high video quality. Overall, this leads to a 31.2% improvement in quality of experience for mobile users.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">OnRL: Improving Mobile Video Telephony via Online Reinforcement Learning</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Huanhuan Zhang, Anfu Zhou, Jiamin Lu, Ruoxuan Ma, Yuhan Hu, Cong Li (Beijing University of Posts and Telecommunications); Xinyu Zhang (University of California San Diego); Huadong Ma (Beijing University of Posts and Telecommunications); Xiaojiang Chen (Taobao Inc.)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo68"></a>
<br/>
<div id="demo68" class="collapse">
Machine learning models, particularly reinforcement learning (RL), have demonstrated great potential in optimizing video streaming applications. However, the state-of-the-art solutions are limited to an “offline learning” paradigm, i.e., the RL models are trained in simulators and then are operated in real networks. As a result, they inevitably suffer from the simulation-to-reality gap, showing far less satisfactory performance under real conditions compared with simulated environment. In this work, we close the gap by proposing OnRL, an online RL framework for real-time mobile video telephony. OnRL puts many individual RL agents directly into the video telephony system, which make video bitrate decisions in real-time and evolve their models over time. OnRL then aggregates these agents to form a high-level RL model that can help each individual to react to unseen network conditions. Moreover, OnRL incorporates novel mechanisms to handle the adverse impacts of inherent video traffic dynamics, and to eliminate risks of quality degradation caused by the RL model’s exploration attempts. We implement OnRL on a mainstream operational video telephony system, Alibaba Taobao-live. In a month-long evaluation with 543 hours of video sessions from 151 real-world mobile users, OnRL outperforms the prior algorithms significantly, reducing video stalling rate by 14.22% while maintaining similar video quality.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">GROOT: A Real-time Streaming System for High-Fidelity Volumetric Videos</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Kyungjin Lee, Juheon Yi, Youngki Lee (Seoul National University); Sunghyun Choi (Samsung Research); Youngmin Kim (Seoul National University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo69"></a>
<br/>
<div id="demo69" class="collapse">
We present GROOT, a mobile volumetric video streaming system that delivers three-dimensional data to mobile devices for a fully immersive virtual and augmented reality experience. The system design for streaming volumetric videos should be fundamentally different from conventional 2D video streaming systems. First, the amount of data required to deliver the 3D volume is considerably larger than conventional videos with frames of 2D images, even compared to high-resolution 2D or 360-degree videos. Second, the 3D data representation, which encodes the surface of objects within the volume, is a sparse and unorganized data structure with varying scales, whereas a conventional video is composed of a sequence of images with the fixed-size 2D grid structure. GROOT is a streaming framework with a novel data structure that enables not only real-time transmission and decoding on mobile devices but also continuous on-demand user view adaptation. Specifically, we modify the conventional octree to introduce the independence of leaf nodes with minimal memory overhead, which enables parallel decoding of highly irregular 3D data. We also developed a suite of techniques to compress color information and filter out 3D points outside of a user's view, which efficiently minimizes the data size and decoding cost. Our extensive evaluation shows that GROOT achieves more stable but faster frame rates compared to any previous method to stream and visualize volumetric videos on mobile devices.
</div></li>

</ul></div></div></div>
