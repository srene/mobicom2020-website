<div class="accordion">
<p class="h4"><b> Monday, 21th September, 2020  PDT</b></p>
<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>06:00 - 06:20<br/>Opening remarks</b></h6>
</div>

<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>06:25 - 07:25<br/>Keynote 1: George Malliaras (University of Cambridge)</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="keynotes.php"><b>Electronics on the brain</b></a>
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
<a href="">Deep Learning based Wireless Localization for Indoor Navigation</a></b></h6>
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
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo7"></a>
<br/>
<div id="demo5" class="collapse">
  Global Positioning System is a widely adopted localization technique. With the increasing demand for small satellites, the need for a low-power GPS for satellites is also increasing. To enable many state-of-the-art applications, the exact position of the satellites is necessary. However, building low-power GPS receivers which operate in low earth orbit pose significant challenges. This is mainly due to the high speed (~7.8km/s) of small satellites. While duty-cycling the receiver is a possible solution, the high relative Doppler shift between the GPS satellites and the small satellite contributes to the increase in Time To First Fix (TTFF), thus increasing the energy consumption. Further, if the GPS receiver is tumbling along with the small satellite on which it is mounted, longer TTFF may lead to no GPS fix due to disorientation of the receiver antenna. In this paper, we elucidate the design of a low-cost, low-power GPS receiver for small satellite applications. We also propose an energy optimization algorithm called F3 to improve the TTFF which is the main contributor to the energy consumption during cold start. With simulations and in-orbit evaluation from a launched nanosatellite with our μGPS and high-end GPS simulators, we show that up to 96.16% of energy savings (consuming only ~ 1/25th energy compared to the state of the art) can be achieved using our algorithm without compromising much (~10m) on the navigation accuracy. The TTFF achieved is at most 33s.
</div></li>

<!--<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">MET: A Novel Magneto-Inductive Sensing Based Electric Toothbrushing Monitoring System</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Hua Huang, Shan Lin (Stony Brook University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo8"></a>
<br/>
<div id="demo6" class="collapse">
Electric toothbrushes are widely used for home oral care, but many users do not achieve desired hygiene results due to insufficient brushing coverage or incorrect brushing techniques. Existing electric toothbrushing monitoring systems fail to detect these issues because they cannot achieve fine-grained position tracking. In this paper, we present a novel electric toothbrushing monitoring system called MET that tracks brushing coverage for all the 15 surfaces of teeth and detects different types of incorrect brushing techniques. This design is inspired by our observation that the motor inside an electric toothbrush generates a unique magnetic field, which can serve as a reliable signal for position and orientation tracking.  MET is the first system that tracks both the position and orientation of an unmodified electric motor using magnetic inductive sensing. Experiments with fourteen users show that the average toothbrushing surface recognition accuracy of MET is 85.3%. Moreover, MET is robust to user location changes and posture variations and does not require any training from the users. Experimental results also demonstrate our significant advantages over existing commercial systems.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Towards Flexible Wireless Charging for Medical Implants Using Distributed Antenna System</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Ambuj Varshney, Andreas Soleiman, Thiemo Voigt (Uppsala University, Sweden)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo9"></a>
<br/>
<div id="demo7" class="collapse">
This paper presents the design, implementation and evaluation of In-N-Out, a software-hardware solution for far-field wireless power transfer.In-N-Out can continuously charge the medical implant residing in deep tissues with consistently near-optimal power, even when the implant moves around inside the human body. To accomplish this, we exploit the structure of a distributed antenna array and devise a backscatter-assisted beamforming algorithm that can concentrate RF energy on a tiny spot surrounding the medical implant. Meanwhile,we can keep radiation exposure levels on other body parts very low, reducing the risk of overheating. We prototype In-N-Out on 21 software-defined radios and a printed circuit board (PCB). Through extensive experimentation, we show that In-N-Out achieves 0.37 mW average charging power in-side a 10 cm-thick pork belly, which is sufficient to wirelessly power a range of commercial medical devices from outside the body. Our head-to-head comparison with the state-of-the-art approach shows that In-N-Out achieves 5.4×–18.1×power gain when the implant is stationary, and 5.3×–7.4×power gain when the implant is in motion.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Self-Reconfigurable Micro-Implants for Cross-Tissue Wireless and Batteryless Connectivity</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Mohamed R. Abdelhamid, Ruicong Chen, Joonhyuk Cho, Anantha P. Chandrakasan, Fadel Adib (Massachusetts Institute of Technology)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo10"></a>
<br/>
<div id="demo8" class="collapse">
We present the design, implementation, and evaluation of μmedIC, a fully-integrated wireless and batteryless micro-implanted sensor. The sensor powers up by harvesting energy from RF signals and communicates at near-zero power via backscatter. In contrast to prior designs which cannot operate across various in-body environments, our sensor can self-reconfigure to adapt to different tissues and channel conditions. This adaptation is made possible by two key innovations: a reprogrammable antenna that can tune its energy harvesting resonance to surrounding tissues, and a backscatter rate adaptation protocol that closes the feedback loop by tracking circuit-level sensor hints.

We built our design on millimeter-sized integrated chips and flexible antenna substrates, and tested it in environments that span both in-vitro (fluids) and ex-vivo (tissues) conditions. Our evaluation demonstrates μmedIC’s ability to tune its energy harvesting resonance by more than 200 MHz (i.e., adapt to different tissues) and to scale its bitrate by an order of magnitude up to 6Mbps, allowing it to support higher data rate applications (such as streaming low-res images) without sacrificing availability. This rate adaptation also allows μmedIC to scale its energy consumption by an order of magnitude down to 350 nanoWatts. These capabilities pave way for a new generation of networked micro-implants that can adapt to complex and time-varying in-body environments.
</div></li>-->

</ul></div></div></div>

<!--<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>09:00 - 10:00<br/>Keynote 2: Sachin Katti (Stanford University)</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="keynotes.php"><b>TBD</b></a>
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
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo14"></a>
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
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo15"></a>
<br/>
<div id="demo10" class="collapse">
Respiratory diseases have been a significant public health challenge. Efficient disease evaluation and monitoring call for daily spirometry tests, as an effective way of pulmonary function testing, out of clinic. This requirement, however, is hard to be satisfied due to the large size and high costs of current spirometry equipments. In this paper, we present SpiroSonic, a new system design that uses commodity smartphones to support complete, accurate yet reliable spirometry tests in regular home settings with various environmental and human factors. SpiroSonic measures the humans' chest wall motion via acoustic sensing and interprets such motion into lung function indices, based on the clinically validated correlation between them. We implemented SpiroSonic as a smartphone app, and verified SpiroSonic's monitoring error over healthy humans as <3%. Clinical studies further show that SpiroSonic reaches 5%-10% monitoring error among 83 pediatric patients. Given that the error of in-clinic spirometry is usually around 5%, SpiroSonic can be reliably used for disease tracking and evaluation out of clinic.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Ear-AR: Indoor Acoustic Augmented Reality on Earphones</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Zhijian Yang, Yu-Lin Wei (University of Illinois Urbana Champaign); Sheng Shen (University of Illinois at Urbana-Champaign); Romit Roy Choudhury (University of Illinois at Urbana Champaign)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo16"></a>
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
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo14"></a>
<br/>
<div id="demo12" class="collapse">
Temperature sensor is one of the most widespread technologies in the IoT era. Wireless temperature monitoring systems are convenient to deploy and can drive mass applications in the fields of smart home, transportation and logistics. Currently, wireless temperature monitoring products are based on microelectronic and semiconductor components, which are not cost-effective (e.g., a few dollars) and more importantly, generate electronic wastes. In this work, we present ThermoWave, a new paradigm of wireless temperature monitoring that is ecological, battery-less, and ultra-low cost. Specifically, ThermoWave is on the basis of the thermal scattering effect on millimeter-wave (mmWave) signals. Specifically, cholesteryl materials align their molecular patterns at different environmental temperatures, and this temperature-induced pattern change will be modulated and sensed by the scattered mmWave signals. There are three functional modules in the ThermoWave system. The ThermoTag is a cholesteryl material inked film or paper tag that can be conveniently attached to the object of interest to monitor temperature changes. Each ThermoTag costs less than 0.01 dollars. {The temperature modulated mmWave scattering will be received by a mmWave-radar based ThermoScanner and demodulated by a software-based temperature decoder ThermoSense, which includes a model-based method (i.e., ThermoDot) for point temperature estimation and a data-driven method (i.e., ThermoNet) for thermal imaging.} We prototype and evaluate the ThermoWave system performance in both controlled and real-world setups. Experimental results show that the ThermoWave achieves the precision of ± 1.0 \degree° F in the range of 30 ° F to 120 ° F in a controlled setup. We also investigate the performance in real-world applications, and the ThermoWave can reach the ± 3.0 ° F precision in the temperature estimation. {We also test and discuss sustainability, durability, robustness, and cost-effectiveness of the ThermoWave in both design and experiments.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">mmVib: Micrometer-Level Vibration Measurement with mmWave Radar</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Chengkun Jiang, Junchen Guo, Yuan He, Meng Jin, Shuai Li (Tsinghua University); Yunhao Liu (Tsinghua University & MSU)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo15"></a>
<br/>
<div id="demo13" class="collapse">
Vibration measurement is a crucial task in industrial systems, where vibration characteristics reflect the health and indicate anomalies of the objects. Previous approaches either work in an intrusive manner or fail to capture the micrometer-level vibrations. In this work, we propose mmVib, a practical approach to measure micrometer-level vibrations with mmWave radar. By introducing a Multi-Signal Consolidation (MSC) model to describe the properties of the reflected signals, we exploit the inherent consistency among those signals to accurately recover the vibration characteristics. We implement a prototype of mmVib, and the experiments show that this design achieves 8.2% relative amplitude error and 0.5% relative frequency error in median. Typically, the median amplitude error is 3.4um for the 100um-amplitude vibration. Compared to two existing approaches, mmVib reduces the 80th percentile amplitude error by 62.9% and 68.9% respectively.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Demystifying Millimeter-Wave V2X: Towards Robust and Efficient Directional Connectivity Under High Mobility</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Song Wang, Jingqi Huang, Xinyu Zhang (University of California San Diego)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo16"></a>
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
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo14"></a>
<br/>
<div id="demo13" class="collapse">
Millimeter-wave (mmWave) networks are conventionally considered to bear a fundamental coverage limitation, due to the directional beams and limited field-of-view (FoV) of the phased array antennas. In this paper, we explore an array of phased arrays (APA) architecture, which aggregates co-located phased arrays with complementary FoVs to approximate WiFi-like omni-directional coverage. We found that straightforwardly activating all the arrays may even hamper network performance. To fully exploit the APA's potential, we propose X-Array, which jointly selects the arrays and beams, and applies a dynamic co-phasing mechanism to ensure different arrays' signals enhance each other. X-Array also incorporates a link recovery mechanism to identify alternative arrays/beams that can efficiently recover the link from outage. We have implemented X-Array on a commodity 802.11ad APA radio. Our experiments demonstrate that X-Array can approach omni-directional coverage and maintain high performance in spite of link dynamics.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">M-Cube: A Millimeter-Wave Massive MIMO Software Radio</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Renjie Zhao, Timothy Woodford, Teng Wei, Kun Qian, Xinyu Zhang (University of California San Diego)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo15"></a>
<br/>
<div id="demo14" class="collapse">
Millimeter-wave (mmWave) technologies represent a cornerstone for emerging wireless network infrastructure, and for RF sensing systems in security, health, and automotive domains. Through a MIMO array of phased arrays with hundreds of antenna elements, mmWave can boost wireless bit-rate to 100+~Gbps, and potentially achieve near-vision sensing resolution. However, lack of an experimental platform has been impeding research in this field. This paper fills the gap with M^3M (M-Cube), the first mmWave massive MIMO software radio. M^3M features a fully reconfigurable array of phased arrays, with up to 8 RF chains and 288 antenna elements. Despite the orders of magnitude larger antenna arrays, its cost is orders of magnitude lower, even when compared with state-of-the-art single RF chain mmWave software radios. The key design principle behind M^3M is to hijack a low-cost commodity 802.11ad radio, separate the control path and data path inside, regenerate the phased array control signals, and recreate the data signals using a programmable baseband. Extensive experiments have demonstrated the effectiveness of the M^3M design, and its usefulness for research in mmWave massive MIMO communication and sensing.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Single Shot Single Antenna Path Discovery in THz Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Yasaman Ghasempour, Chia-Yi Yeh (Rice University); Rabi Shrestha, Daniel Mittleman (Brown University); Edward W. Knightly (Rice University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo16"></a>
<br/>
<div id="demo15" class="collapse">
THz communication has the potential to realize an order of magnitude increase in data rates due to the availability of wide THz-scale spectral bands. Unfortunately, establishing and managing highly directional beams in THz networks is challenging as links lack the “pseudo-omni” reception capability of lower bands and the product of AP-client beam resolution is high due to narrow beams of only a few degrees. In this paper, we present One-shot Path discovEry with a THz RAinbow (OPERA), a novel system that identifies dominant paths between the AP and all clients in order to efficiently steer directional beams. The key idea is to embed path direction into the inherent characteristics of signals traveling along each path. To do so, we exploit a single leaky wave antenna and create a THz Rainbow. A THz Rainbow transmission consists of distinct signals with unique spectral characteristics across the angular domain. Leveraging the spatial-spectral signatures in the THz Rainbow, all receivers can correlate the measured signal with the known transmission signatures to discover the sender’s path directions in one-shot. Our experiments demonstrate that OPERA achieves average direction estimates within 2^{\circ}2 of ground truth for LOS and reflected paths.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Millimeter-Wave Full Duplex Radios</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Vaibhav Singh, Susnata Mondal, Akshay Gadre (Carnegie Mellon University); Milind Srivastava (Indian Institute of Technology Madras); Jeyanandh Paramesh, Swarun Kumar (Carnegie Mellon University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo16"></a>
<br/>
<div id="demo16" class="collapse">
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
<div id="demo17" class="collapse">
This paper focuses on COSMOS - Cloud enhanced Open Software defined MObile wireless testbed for city-Scale deployment. The COSMOS testbed is being deployed in West Harlem (New York City) as part of the NSF Platforms for Advanced Wireless Research (PAWR) program. It will enable researchers to explore the technology ``sweet spot'' of ultra-high bandwidth and ultra-low latency in the most demanding real-world environment. We describe the testbed's architecture, the design and deployment challenges, and the experience gained during the design and pilot deployment. Specifically, we describe COSMOS' computing and network architectures, the critical building blocks, and its programmability at different layers. The building blocks include software-defined radios, 28 GHz millimeter-wave phased array modules, optical transport network, core and edge cloud, and control and management software. We describe COSMOS' deployment phases in a dense urban environment, the research areas that could be studied in the testbed, and specific example experiments. Finally, we discuss our experience with using COSMOS as an educational tool.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Experience: Advanced Network Operations in (Un)-Connected Remote Communities</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Diego Perino (Telefonica Research); Xiaoyuan Yang (Telefonica); Joan Serra (Dolby Labs); Andra Lutu (Telefonica Research); Ilias Leontiadis (Samsung AI)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo20"></a>
<br/>
<div id="demo18" class="collapse">
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
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo25"></a>
<br/>
<div id="demo19" class="collapse">
IMS (IP Multimedia Subsystem) is an essential framework for providing 4G/5G multimedia services. It has been deployed worldwide to support two call services: VoLTE (Voice over LTE) and VoWi-Fi (Voice over Wi-Fi). VoWi-Fi enables telephony calls over the Wi-Fi network to complement VoLTE. In this work, we uncover that the VoWi-Fi signaling session can be hijacked to maliciously manipulate the IMS call operation. An adversary can easily make ghost calls to launch a stealthy call DoS (Denial of Service) attack against specific cellular users. Only phone numbers, but not any malware or network information, are required from the victims. This sophisticated attack harnesses a design defect of the IMS call state machine, but not simply flooding or a crash trigger. To stealthily detect attackable phones at run time, we exploit a vulnerability of the 4G network infrastructure, call information leakage, which we explore using machine learning. We validate these vulnerabilities in operational 4G networks of 4 top-tier carriers across Asia and North America countries with 7 phone brands. Our result shows that the call DoS attack can prevent the victims from receiving incoming calls up to 99.0% time without user awareness. We finally propose and evaluate recommended solutions.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">DMM: Fast Map Matching Framework for Cellular Data</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Zhihao Shen (Xi’an Jiaotong University); Wan Du (University of California, Merced); Xi Zhao, Jianhua Zou (Xi’an Jiaotong University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo26"></a>
<br/>
<div id="demo20" class="collapse">
Map matching for cellular data is to transform a sequence of cell tower locations to a trajectory on a road map. It is an essential processing step for many applications, such as traffic optimization and human mobility analysis. However, most current map matching approaches are based on Hidden Markov Models (HMMs) that have heavy computation overhead to consider high-order cell tower information. This paper presents a fast map matching framework for cellular data, named as DMM, which adopts a recurrent neural network (RNN) to identify the most-likely trajectory of roads given a sequence of cell towers. Once the RNN model is trained, it can process cell tower sequences as making RNN inference, resulting in fast map matching speed. To transform DMM into a practical system, several challenges are addressed by developing a set of techniques, including spatial-aware representation of input cell tower sequences, an encoder-decoder framework for map matching model with variable-length input and output, and a reinforcement learning based model for optimizing the matched outputs. Extensive experiments on a large-scale anonymized cellular dataset reveal that DMM provides high map matching accuracy (precision 80.43% and recall 85.42%) and reduces the average inference time of HMM-based approaches by 46.58x.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Microscope: Mobile Service Traffic Decomposition for Network Slicing as a Service</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Chaoyun Zhang (University of Edinburgh); Marco Fiore (IMDEA Networks Institute); Cezary Ziemlicki (Orange Labs); Paul Patras (University of Edinburgh)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo27"></a>
<br/>
<div id="demo21" class="collapse">
The growing diversification of mobile services imposes requirements on network performance that are ever more stringent and heterogeneous. Network slicing aligns mobile network operation to this context, by enabling operators to isolate and customize network resources on a per-service basis. A key input for provisioning resources to slices is real-time information about the traffic demands generated by individual services. Acquiring such knowledge is however challenging. In particular, legacy approaches based on in-depth inspection of traffic streams have high computational costs, which inflate with the widening adoption of encryption over data and control traffic. In this paper, we present an original approach to service-level demand estimation for slicing, which hinges on decomposition, the inference of per-service demands from traffic aggregates. By operating on total traffic volumes only, our approach overcomes the complexity and limitations of legacy traffic classification techniques, and provides an output suitable for recent 'Network Slice as a Service' models. We implement decomposition through Microscope, a dedicated framework based on novel 3D Deformable Convolutional Neural Networks (3D-DefCNNs), which we design to handle spatial distortion in the input data due to irregular radio access deployment and coverage, and to exploit spatiotemporal features hidden in traffic aggregates. Experiments with metropolitan-scale measurements collected in an operational network demonstrate that Microscope accurately infers per-service traffic demands, with estimation errors below 1.2%.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">iCellSpeed: Increasing Cellular Data Speed with Device-Assisted Cell Selection</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Haotian Deng (Purdue University); Qianru Li (UCLA); Jingqi Huang, Chunyi Peng (Purdue University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo28"></a>
<br/>
<div id="demo22" class="collapse">
In this paper, we propose iCellSpeed, an on-device solution to increase data access speed by substantiating unrealized performance potentials. We find that performance potentials are missed in today’s mobile networks, as the data speed a user device gets is much lower than what the device could get. The issue is rooted in the current cell selection practice, which misses good candidate cells that offer faster access speed, thus under-utilizing the available capabilities in mobile networks. We design iCellSpeed to facilitate network-controlled cell selection with proactive device-side assistance towards more desirable cells. Our evaluation over AT&T and Verizon confirms its effectiveness. iCellSpeed increases data access speed by more than 10 Mbps at 79% of test locations (> 25Mbps at 29% of locations, up to 80.6 Mbps). It doubles access speed at 62.5% of locations with the gain up to 28.4x. Datasets are available at 7].
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Experience: Towards Automated Customer Issue Resolution in Cellular Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Amit Sheoran, Sonia Fahmy (Purdue University); Matthew Osinski (AT&T Labs Research); Chunyi Peng, Bruno Ribeiro (Purdue University); Jia Wang (AT&T Labs Research)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo29"></a>
<br/>
<div id="demo23" class="collapse">
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
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo32"></a>
<br/>
<div id="demo24" class="collapse">
With the explosive increase in wireless devices, physical-layer signal analysis has become critically beneficial across distinctive domains including interference minimization in network planning, security and privacy (e.g., drone and spycam detection), and mobile health with remote sensing. While SDR is known to be highly effective in realizing such services, they are rarely deployed or used by the end-users due to the costly hardware∼1K USD (e.g., USRP). Low-cost SDRs (e.g., RTL-SDR) are available, but their bandwidth is limited to 2-3 MHz and operation range falls well below 2.4 GHz – the unlicensed band holding majority of the wireless devices. This paper presents SDR-Lite, the first zero-cost, software-only soft-ware defined radio (SDR) receiver that empowers commodity WiFi to retrieve the In-phase and Quadrature of an ambient signal. With the full compatibility to pervasively-deployed WiFi infrastructure (without any change to the hardware and firmware), SDR-Lite aims to spread the blessing of SDR receiver functionalities to billions of WiFi users and households to enhance our everyday lives. The key idea of SDR-Lite is to trick WiFi to begin packet reception (i.e., the decoding process) when the packet is absent, so that it accepts ambient signals in the air and outputs corresponding bits. The bits are then reconstructed to the original physical-layer waveform, on which diverse SDR applications are performed. Our comprehensive evaluation shows that the reconstructed signal closely reassembles the original ambient signal (>85% correlation). We extensively demonstrate SDR-Lite effectiveness across seven distinctive SDR receiver applications under three representative categories: (i) RFfingerprinting, (ii) spectrum monitoring, and (iii) (ZigBee) decoding. For instance, in security applications of drone and rogue WiFi AP detection, SDR-Lite achieves 99% and 97% accuracy, which is comparable to USRP.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Towards Quantum Belief Propagation for LDPC Decoding in Wireless Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Srikar Kasi, Kyle Jamieson (Princeton University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo33"></a>
<br/>
<div id="demo25" class="collapse">
We present Quantum Belief Propagation (QBP), a Quantum Annealing (QA) based decoder design for Low Density Parity Check (LDPC) error control codes, which have found many useful applications in Wi-Fi, satellite communications, mobile cellular systems, and data storage systems. QBP reduces the LDPC decoding to a discrete optimization problem, then embeds that reduced design onto quantum annealing hardware. QBP's embedding design can support LDPC codes of block length up to 420 bits on real state-of-the-art QA hardware with 2,048 qubits. We evaluate performance on real quantum annealer hardware, performing sensitivity analyses on a variety of parameter settings. Our design achieves a bit error rate of 10^{-8}10 in 20 μs and a 1,500 byte frame error rate of 10^{-6}10 in 50 μs at SNR 9 dB over a Gaussian noise wireless channel. Further experiments measure performance over real-world wireless channels, requiring 30 μs to achieve a 1,500 byte 99.99% frame delivery rate at SNR 15-20 dB. QBP achieves a performance improvement over an FPGA based soft belief propagation LDPC decoder, by reaching a bit error rate of 10^{-8}10 and a frame error rate of 10^{-6}10 at an SNR 2.5--3.5 dB lower. In terms of limitations, QBP currently cannot realize practical protocol-sized (\textit{e.g.,}e.g., Wi-Fi, WiMax) LDPC codes on current QA processors. Our further studies in this work present future cost, throughput, and QA hardware trend considerations.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">ScatterMIMO: Enabling Virtual MIMO with Smart Surfaces</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Manideep Dunna, Chi Zhang (UC San Diego); Daniel Sievenpiper, Dinesh Bharadia (University of California San Diego)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo34"></a>
<br/>
<div id="demo26" class="collapse">
In the last decade, the bandwidth expansion and MIMO spatial multiplexing have promised to increase data throughput by orders of magnitude. However, we are yet to enjoy such improvement in real-world environments, as they lack rich scattering and preclude effective MIMO spatial multiplexing. In this paper, we present ScatterMIMO, which uses smart surface to increase the scattering in the environment, to provide MIMO spatial multiplexing gain. Specifically, smart surface pairs up with a wireless transmitter device say an active AP and re-radiates the same amount of power as any active access point (AP), thereby creating virtual passive APs. ScatterMIMO avoids the synchronization, interference, and power requirements of conventional distributed MIMO systems by leveraging virtual passive APs, allowing its smart surface to provide spatial multiplexing gain, which can be deployed at a very low cost. We show that with optimal placement, these virtual APs can provide signals to their clients with power comparable to real active APs, and can increase the coverage of an AP. Furthermore, we design algorithms to optimize ScatterMIMO's smart surface for each client with minimal measurement overhead and to overcome random per-packet phase offsets during the measurement. Our evaluations show that with commercial off-the-shelf MIMO WiFi (11ac) AP and unmodified clients, ScatterMIMO provides a median throughput improvement of 2x over the active AP alone.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Sniffing Visible Light Communication Through Walls</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
  Minhao Cui, Yuda Feng (University of Massachusetts Amherst); Qing Wang (Delft University of Technology); Jie Xiong (University of Massachusetts Amherst)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo35"></a>
<br/>
<div id="demo27" class="collapse">
Visible light communication (VLC) is gaining a significant amount of interest as a new paradigm to meet rapidly increasing demands on wireless capacity required by a digitalized world. VLC is considered as a secure wireless communication scheme because VLC signals can be easily constrained within physical boundaries.  In this paper, for the first time, we show that VLC is not as secure as people thought: VLC can be sniffed through walls! The key principle behind this is that in VLC transmissions, a VLC transmitter not only emits visible light signals but also leaks out "side channel RF signals". The leaked RF signals can be sniffed by a receiver to decode the VLC transmissions even the receiver is blocked (e.g., by walls) from the VLC transmitter. In this work, we establish a theoretical model to quantify the amplitude of the leaked RF signal and verify the model with comprehensive experiments. We design and implement a VLC sniffing system including receiver coil design, signal processing and frame decoding, spanning across hardware and software.  Field studies show that with a cheap receiver design, our system can simultaneously sniff transmissions from multiple VLC transmitters  6.4 meters away with a 14 cm concrete wall in between, where the distance exceeds the communication range of most state-of-the-art VLC systems. By simply twining a wired earphone on the arm, we can sniff the VLC transmission 1.9 meters away.
</div></li>

</ul></div></div></div>

<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>09:00 - 10:00<br/>Keynote 3: Nic Lane (Rock Star)</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="keynotes.php"><b>TBD</b></a>
</h6>
</div>

</div>
<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>10:05 - 11:00<br/>Panel 1: Future of Wi-Fi and 5G sensing and localization</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="keynotes.php"><b>Moderator: Yasamin Mostofi</b></a>
</h6>
</div>
</div>

</div>
<br/><hr/>

<div class="accordion">
<p class="h4"><b> Wednesday, 23th September, 2020 PDT</b></p>
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
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo39"></a>
<br/>
<div id="demo28" class="collapse">
Advertisers gather data about users and their mobile devices through ads placed within Android and iOS apps. Most of the time, location, device, and app information are linked to the same device using a unique advertising ID (Ad ID). If the Ad ID is not available, advertisers can still use geo-coordinates or IP address to infer links in data gathered from different ad placements.

Even though the Ad ID can be disabled by users on both OSes, we demonstrate that advertisers can leave their own unique strings (marks) in the app storage, and use these strings to link information collected from ads. Users cannot clear these marks without losing all data within the app. Because advertising platforms allow connection filtering and geofencing, users who either connect using a non-cellular IP address or allow location access to the app are substantially easier to be rediscovered by the advertiser.

We carried out many large-scale experiments on iOS and Android devices involving hundreds of thousands of impressions. We found that on average 49% of impressions from an iOS device, and 59% of Android impressions could be re-identified for less than $5/day using this strategy. We subsequently verified this method on 1,727 devices and recovered 660 of them within 48 hours for $86.73. Finally, we explore the behaviour of privacy-seeking VPN users. We found that for the majority, their clearnet IP address and location could be unmasked easily using ads.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">Billion-Scale Federated Learning on Mobile Clients: A Submodel Design with Tunable Privacy</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Chaoyue Niu, Fan Wu (Shanghai Jiao Tong University); Shaojie Tang (University of Texas at Dallas); Lifeng Hua, Rongfei Jia, Chengfei Lv, Zhihua Wu (Alibaba Group); Guihai Chen (Shanghai Jiao Tong University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo40"></a>
<br/>
<div id="demo29" class="collapse">
Federated learning was proposed with an intriguing vision of achieving collaborative machine learning among numerous clients without uploading their private data to a cloud server. However, the conventional framework requires each client to leverage the full model for learning, which can be prohibitively inefficient for large-scale learning tasks and resource-constrained mobile devices. Thus, we proposed a submodel framework, where clients download only the needed parts of the full model, namely, submodels, and then upload the submodel updates. Nevertheless, the "position" of a client's truly required submodel corresponds to its private data, while the disclosure of the true position to the cloud server during interactions inevitably breaks the tenet of federated learning. To integrate efficiency and privacy, we designed a secure federated submodel learning scheme coupled with a private set union protocol as a cornerstone. The secure scheme features the properties of randomized response, secure aggregation, and Bloom filter, and endows each client with customized plausible deniability (in terms of local differential privacy) against the position of its desired submodel, thereby protecting private data. We further instantiated the scheme with Alibaba's e-commerce recommendation, implemented a prototype system, and extensively evaluated over 30-day Taobao user data. Empirical results demonstrate the feasibility and scalability of the proposed scheme as well as its remarkable advantages over the conventional federated learning framework, from model accuracy and convergency, practical communication, computation, and storage overhead.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="">FaceRevelio: A Face Liveness Detection System for Smartphones with a Single Front Camera</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Habiba Farrukh, Reham Mohamed Aburas, Siyuan Cao, He Wang (Purdue University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo41"></a>
<br/>
<div id="demo30" class="collapse">
Facial authentication mechanisms are gaining traction on smartphones because of their convenience and increasingly good performance of face recognition systems. However, mainstream systems use traditional 2D face recognition technologies, which are vulnerable to various spoofing attacks. Existing systems perform liveness detection via specialized hardware, such as infrared dot projectors and dedicated cameras. Although effective, such methods do not align well with the smartphone industry’s desire to maximize screen space. This paper presents a new liveness detection system, FaceRevelio, for commodity smartphones with a single front camera. It utilizes the smartphone screen to illuminate a user’s face from multiple directions. The facial images captured under varying illumination enable the recovery of the face surface normals via photometric stereo, which can then be integrated into a 3D shape. We leverage the facial depth features of this 3D surface to distinguish a human face from its 2D counterpart. On top of this, we change the screen via a light passcode consisting of a combination of random light patterns to provide security against replay attacks. We evaluate FaceRevelio with 30 users trying to authenticate under various lighting conditions and with a series of 2D spoofing attacks. The results show that using a passcode of 1s, FaceRevelio achieves a mean EER of 1.4% and 0.15% against photo and video attacks, respectively.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse8" class="d-block" style="color:white">
<b>11:00 - 11:40<br/><i class="fa fa-chevron-down float-right" ></i>
Session 8: Machine Learning for Wireless Networking (3 papers)<br/>Chair: Lili Qiu (University of Texas at Austin)</b>
</a></h6>
<div id="collapse8" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345431">vrAIn: A Deep Learning Approach Tailoring Computing and Radio Resources in Virtualized RANs</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Jose A. Ayala-Romero (Technical University of Cartagena); Andres Garcia-Saavedra (NEC Laboratories Europe); Marco Gramaglia (Universidad Carlos III de Madrid); Xavier Costa-Perez (NEC Laboratories Europe); Albert Banchs (Universidad Carlos III de Madrid); Juan J. Alcaraz (Technical University of Cartagena)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo46"></a>
<br/>
<div id="demo46" class="collapse">
The virtualization of radio access networks (vRAN) is the last milestone in the NFV revolution. However, the complex dependencies between computing and radio resources make vRAN resource control particularly daunting. We present vrAIn, a dynamic resource controller for vRANs based on deep reinforcement learning. First, we use an autoencoder to project high-dimensional context data (traffic and signal quality patterns) into a latent representation. Then, we use a deep deterministic policy gradient (DDPG) algorithm based on an actor-critic neural network structure and a classifier to map (encoded) contexts into resource control decisions. We have implemented vrAIn using an open-source LTE stack over different platforms. Our results show that vrAIn successfully derives appropriate compute and radio control actions irrespective of the platform and context: (i) it provides savings in computational capacity of up to 30% over CPU-unaware methods; (ii) it improves the probability of meeting QoS targets by 25% over static allocation policies using similar CPU resources in average; (iii) upon CPU capacity shortage, it improves throughput performance by 25% over state-of-the-art schemes; and (iv) it performs close to optimal policies resulting from an offline oracle. To the best of our knowledge, this is the first work that thoroughly studies the computational behavior of vRANs, and the first approach to a model-free solution that does not need to assume any particular vRAN platform or system conditions.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345438">Fast and Efficient Cross Band Channel Prediction Using Machine Learning</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Arjun Bakshi, Yifan Mao, Srinivasan Parthasarathy, Kannan Srinivasan (The Ohio State University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo47"></a>
<br/>
<div id="demo47" class="collapse">
Channel information plays an important role in modern wireless communication systems. Systems that use different frequency bands for uplink and downlink communication often need feedback between devices to exchange band specific channel information. The current state-of-the-art approach proposes a way to predict the channel in the downlink based on that of the observed uplink by identifying variables underlying the uplink channel. In this paper we present a solution that greatly reduces the complexity of this task, and is even applicable for single antenna devices. Our approach uses a neural network trained on a standard channel model to generate coarse estimates for the variables underlying the channel. We then use a simple and efficient single antenna optimization framework to get more accurate variable estimates, which can be used for downlink channel prediction. We implement our approach on software defined radios and compare it to the state-of-the-art through experiments and simulations. Results show that our approach reduces the time complexity by at least an order of magnitude (10x), while maintaining similar prediction quality.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345450">A Framework for Analyzing Spectrum Characteristics in Large Spatio-temporal Scales</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Yijing Zeng, Varun Chandrasekaran, Suman Banerjee (UW-Madison); Domenico Giustiniano (IMDEA Networks)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo48"></a>
<br/>
<div id="demo48" class="collapse">
Understanding spectrum characteristics with little prior knowledge requires fine-grained spectrum data in the frequency, spatial, and temporal domains; gathering such a diverse set of measurements results in a large data volume. Analysis of the resulting dataset poses unique challenges; methods in the status quo are tailored for specific spectrum-related applications (apps), and are ill equipped to process data of this magnitude. In this paper, we design BigSpec, a general-purpose framework that allows for fast processing of apps. The key idea is to reduce computation costs by performing computation extensively on compressed data that preserves signal features. Adhering to this guideline, we build solutions for three apps, i.e., energy detection, spatio-temporal spectrum estimation, and anomaly detection. These apps were chosen to highlight BigSpec's efficiency, scalability, and extensibility. To evaluate BigSpec's performance, we collect more than 1 terabyte of spectrum data spanning a year, across 300MHz-4GHz, covering 400 km2. Compared with baselines and prior works, we achieve 17× run time efficiency, sublinear rather than linear run time scalability, and extend the definition of anomaly to different domains (frequency & spatio-temporal). We also obtain high-level insights from the data to provide valuable advice on future spectrum measurement and data analysis.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse9" class="d-block" style="color:white">
<b>1:30 - 3:00<br/><i class="fa fa-chevron-down float-right" ></i>
Session 9: Mobile Interfaces (7 papers)<br/>Chair: Tam Vu (University of Colorado Boulder)</b>
</a></h6>
<div id="collapse9" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300119">Keep Others From Peeking At Your Mobile Device Screen!</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Chun-Yu Chen, Bo-Yao Lin, Junding Wang, Kang G. Shin (University of Michigan, Ann Arbor)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo49"></a>
<br/>
<div id="demo49" class="collapse">
The information displayed on mobile device screens can be seen by nearby (unauthorized) parties, called shoulder surfers. To protect sensitive on-screen information, we have developed HideScreen by utilizing the human vision and optical system properties to hide the users' on-screen information from the shoulder surfers. <br/><br/>Specifically, HideScreen discretizes the on-screen information (OSI) into grid patterns to neutralize the low-frequency components so that the OSI will "blend into" the background when viewed from the outside of the designed range. We have developed and evaluated several ways of hiding both on-screen texts and images from shoulder surfers. Our extensive experimental evaluation of HideScreen has demonstrated its high protection rates (>96% for texts and >99% for images) while providing good user experience.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300124">Taprint: Secure Text Input for Commodity Smart Wearables</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Wenqiang Chen, Lin Chen, Yandao Huang (Shenzhen University); Xinyu Zhang (University of California San Diego); Lu Wang, Rukhsana Ruby, Kaishun Wu (Shenzhen University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo50"></a>
<br/>
<div id="demo50" class="collapse">
Smart wristband has become a dominant device in the wearable ecosystem, providing versatile functions such as fitness tracking, mobile payment, and transport ticketing. However, the small form-factor, low-profile hardware interfaces and computational resources limit their capabilities in security checking. Many wristband devices have recently witnessed alarming vulnerabilities, e.g., personal data leakage and payment fraud, due to the lack of authentication and access control. To fill this gap, we propose a secure text pin input system, namely Taprint, which extends a virtual number pad on the back of a user's hand. Taprint builds on the key observation that the hand "landmarks'', especially finger knuckles, bear unique vibration characteristics when being tapped by the user herself. It thus uses the tapping vibrometry as biometrics to authenticate the user, while distinguishing the tapping locations. Taprint reuses the inertial measurement unit in the wristband, "overclocks'' its sampling rate to extrapolate fine-grained features, and further refines the features to enhance the uniqueness and reliability. Extensive experiments on 128 users demonstrate that Taprint achieves a high accuracy (96%) of keystrokes recognition. It can authenticate users, even through a single-tap, at extremely low error rate (2.4%), and under various practical usage disturbances.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345434">Touch Well Before Use: Intuitive and Secure Authentication for IoT Devices</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Xiaopeng Li, Fengyao Yan, Fei Zuo, Qiang Zeng, Lannan Luo (University of South Carolina)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo51"></a>
<br/>
<div id="demo51" class="collapse">
Internet of Things (IoT) are densely deployed in smart environments, such as homes, factories and laboratories, where many people have physical access to IoT devices. How to authenticate users operating on these devices is thus an important problem. IoT devices usually lack conventional user interfaces, such as keyboards and mice, which makes traditional authentication methods inapplicable. We present a virtual sensing technique that allows IoT devices to virtually sense user 'petting' (in the form of some very simple touches for about 2 seconds) on the devices. Based on this technique, we build a secure and intuitive authentication method that authenticates device users by comparing the petting operations sensed by devices and those captured by the user wristband. The authentication method is highly secure as physical operations are required, rather than based on proximity. It is also intuitive, adopting very simple authentication operations, e.g., clicking buttons, twisting rotary knobs, and swiping touchscreens. Unlike the state-of-the-art methods, our method does not require any hardware modifications of devices, and thus can be applied to commercial off-the-shelf (COTS) devices. We build prototypes and evaluate them comprehensively, demonstrating their high effectiveness, security, usability, and efficiency.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300118">Towards Touch-to-Access Device Authentication Using Body Electric Potentials</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Zhenyu Yan, Qun Song, Rui Tan (Nanyang Technological University, Singapore); Yang Li (Shenzhen University, P. R. China); Adams Wai Kin Kong (Nanyang Technological University, Singapore)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo52"></a>
<br/>
<div id="demo52" class="collapse">
This paper presents TouchAuth, a new touch-to-access device authentication approach using induced body electric potentials (iBEPs) caused by the indoor ambient electric field that is mainly emitted from the building's electrical cabling. The design of TouchAuth is based on the electrostatics of iBEP generation and a resulting property, i.e., the iBEPs at two close locations on the same human body are similar, whereas those from different human bodies are distinct. Extensive experiments verify the above property and show that TouchAuth achieves high-profile receiver operating characteristics in implementing the touch-to-access policy. Our experiments also show that a range of possible interfering sources including appliances' electromagnetic emanations and noise injections into the power network do not affect the performance of TouchAuth. A key advantage of TouchAuth is that the iBEP sensing requires a simple analog-to-digital converter only, which is widely available on microcontrollers. Compared with existing approaches including intra-body communication and physiological sensing, TouchAuth is a low-cost, lightweight, and convenient approach for authorized users to access the smart objects found in indoor environments.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300117">SignSpeaker: A Real-time, High-Precision SmartWatch-based Sign Language Translator</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Jiahui Hou (University of Science and Technology of China & Illinois Institute of Technology); Xiang-Yang Li, Peide Zhu, Zefan Wang (University of Science and Technology of China); Yu Wang (University of North Carolina at Charlotte); Jianwei Qian (Illinois Institute of Technology); Panglong Yang (University of Science and Technology of China)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo53"></a>
<br/>
<div id="demo53" class="collapse">
Sign language is a natural and fully-formed communication method for deaf or hearing-impaired people. Unfortunately, most of the state-of-the-art sign recognition technologies are limited by either high energy consumption or expensive device costs and have a difficult time providing a real-time service in a daily-life environment. Inspired by previous works on motion detection with wearable devices, we propose Sign Speaker - a real-time, robust, and user-friendly American sign language recognition (ASLR) system with affordable and portable commodity mobile devices. SignSpeaker is deployed on a smartwatch along with a smartphone; the smartwatch collects the sign signals and the smartphone outputs translation through an inbuilt loudspeaker. We implement a prototype system and run a series of experiments that demonstrate the promising performance of our system. For example, the average translation time is approximately 1.1 seconds for a sentence with eleven words. The average detection ratio and reliability of sign recognition are 99.2% and 99.5%, respectively. The average word error rate of continuous sentence recognition is 1.04% on average.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300129">SolarGest: Ubiquitous and Battery-free Gesture Recognition using Solar Cells</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Dong Ma, Guohao Lan, Mahbub Hassan, Wen Hu, Mushfika Baishakhi Upama, Ashraf Uddin (University of New South Wales); Moustafa Youssef (Egypt-Japan University of Science and Technology)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo54"></a>
<br/>
<div id="demo54" class="collapse">
We design a system, SolarGest, which can recognize hand gestures near a solar-powered device by analyzing the patterns of the photocurrent. SolarGest is based on the observation that each gesture interferes with incident light rays on the solar panel in a unique way, leaving its distinguishable signature in harvested photocurrent. Using solar energy harvesting laws, we develop a model to optimize design and usage of SolarGest. To further improve the robustness of SolarGest under non-deterministic operating conditions, we combine dynamic time warping with Z-score transformation in a signal processing pipeline to pre-process each gesture waveform before it is analyzed for classification. We evaluate SolarGest with both conventional opaque solar cells as well as emerging see-through transparent cells. Our experiments with 6,960 gesture samples for 6 different gestures reveal that even with transparent cells, SolarGest can detect 96% of the gestures while consuming 44% less power compared to light sensor based systems.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300128">Fire in Your Hands: Understanding Thermal Behavior of Smartphones</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Soowon Kang (KAIST); Hyeonwoo Choi (Samsung Electronics); Soo Young Park (KAIST); Chunjong Park (University of Washington); Jemin Lee, Uichin Lee, Sung-Ju Lee (KAIST)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo55"></a>
<br/>
<div id="demo55" class="collapse">
Overheating smartphones could hamper user experiences. While there have been numerous reports on smartphone overheating, a systematic measurement and user experience study on the thermal aspect of smartphones is missing. Using thermal imaging cameras, we measure and analyze the temperatures of various smartphones running diverse application workloads such as voice calling, video recording, video chatting, and 3D online gaming. Our experiments show that running popular applications such as video chat, could raise the smartphone's surface temperature to over 50°C in only 10 minutes, which could easily cause thermal pain to users. Recent ubiquitous scenarios such as augmented reality and mobile deep learning also have considerable thermal issues. We then perform a user study to examine when the users perceive heat discomfort from the smartphones and how they react to overheating. Most of our user study participants reported considerable thermal discomfort while playing a mobile game, and that overheating disrupted interaction flows. With this in mind, we devise a smartphone surface temperature prediction model, by using only system statistics and internal sensor values. Our evaluation showed high prediction accuracy with root-mean-square errors of less than 2°C. We discuss several insights from our findings and recommendations for user experience, OS design, and developer support for better user-thermal interactions.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#D62728">
<a href="keynotes.php#tot" class="d-block" style="color:white">
<b>3:30 - 4:00<br/>Test of Time Award Talks<br/>Chair: Marco Gruteser (WINLAB - Rutgers University)</b>
</a></h6>
<div id="collapse10" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://ieeexplore.ieee.org/document/7071706">Design of WARP: a wireless open-access research platform</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Patrick Murphy, Ashutosh Sabharwal, and Behnaam Aazhang<br/>European Signal Processing Conference, 2006.</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo56"></a>
<br/>
<div id="demo56" class="collapse">
WARP was a groundbreaking open-source specialized hardware platform for high-performance wireless research. As one of the very few university hardware projects that moved outside the university, WARP has served as an experimental enabler for hundreds of ideas, which otherwise would have hardly been demonstrated, due to code base limitations and the large cost of wireless platforms capable of supporting high-end research. In the process, WARP was instrumental in changing the way the SIGMOBILE wireless community did research – strong experimental evidence versus oversimplified simulations.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=1460445">Sensing meets mobile social networks: the design, implementation and evaluation of the CenceMe application</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Emiliano Miluzzo, Nicholas D. Lane, Kristof Fodor, Ronald Peterson, Hong Lu, Mirco Musolesi, Shane B. Eisenman, Xiao Zheng, and Andrew T. Campbell<br/>ACM SenSys, 2008.</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo57"></a>
<br/>
<div id="demo57" class="collapse">
CenceMe was the first paper to demonstrate how smartphones can be used to derive rich behavioral insights continuously from onboard sensors. Since its publication, the work has inspired a huge body of research and commercial endeavors that has continued to increase the breadth and depth of personal sensing. Some of the activity inference methods that are now common in smartphone operating systems can be traced back to the original CenceMe system.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>4:00 - 4:30<br/>Closing remarks</b></h6>
</div>-->
