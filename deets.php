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
<a href="keynotes.php#maja"><b>Electronics on the brain</b></a>
</h6>
</div>
</div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse1" class="d-block" style="color:white">
<b>07:30 - 08:10<br/><i class="fa fa-chevron-down float-right" ></i>
Session: Localization (4 papers)<br/> Chair: Nilanjan Banerjee (eastern US), Kyle Jamieson (eastern US) and Yunhao Liu</b>
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
<a href="https://dl.acm.org/citation.cfm?id=3300136">Living IoT: A Flying Wireless Platform on Live Insects</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Vikram Iyer, Rajalakshmi Nandakumar, Anran Wang, Sawyer B. Fuller, Shyamnath Gollakota (University of Washington)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo2"></a>
<br/>
<div id="demo2" class="collapse">
Sensor networks with devices capable of moving could enable applications ranging from precision irrigation to environmental sensing. Using mechanical drones to move sensors, however, severely limits operation time since flight time is limited by the energy density of current battery technology. We explore an alternative, biology-based solution: integrate sensing, computing and communication functionalities onto live flying insects to create a mobile IoT platform. Such an approach takes advantage of these tiny, highly efficient biological insects which are ubiquitous in many outdoor ecosystems, to essentially provide mobility for free. Doing so however requires addressing key technical challenges of power, size, weight and self-localization in order for the insects to perform location-dependent sensing operations as they carry our IoT payload through the environment. We develop and deploy our platform on bumblebees which includes backscatter communication, low-power self-localization hardware, sensors, and a power source. We show that our platform is capable of sensing, backscattering data at 1 kbps when the insects are back at the hive, and localizing itself up to distances of 80 m from the access points, all within a total weight budget of 102 mg.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345456">Extracting 3D Maps from Crowdsourced GNSS Skyview Data</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 João G. P. Rodrigues, Ana Aguiar (University of Porto)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo3"></a>
<br/>
<div id="demo3" class="collapse">
3D maps of urban environments are useful in various fields ranging from cellular network planning to urban planning and climatology. These models are typically constructed using expensive techniques such as manual annotation with 3D modeling tools, extrapolated from satellite or aerial photography, or using specialized hardware with depth sensing devices. In this work, we show that 3D urban maps can be extracted from standard GNSS data, by analyzing the received satellite signals that are attenuated by obstacles, such as buildings. Furthermore, we show that these models can be extracted from low-accuracy GNSS data, crowdsourced opportunistically from standard smartphones during their user's uncontrolled daily commute trips, unleashing the potential of applying the principle to wide areas. Our proposal incorporates position inaccuracies in the calculations, and accommodates different sources of variability of the satellite signals' SNR. The diversity of collection conditions of crowdsourced GNSS positions is used to mitigate bias and noise from the data. A binary classification model is trained and evaluated on multiple urban scenarios using data crowdsourced from over 900 users. Our results show that the generalization accuracy for a Random Forest classifier in typical urban environments lies between 79% and 91% on 4 m wide voxels, demonstrating the potential of the proposed method for building 3D maps for wide urban areas.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345440">Towards Low Cost Soil Sensing Using Wi-Fi</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Jian Ding (Rice University); Ranveer Chandra (Microsoft)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo4"></a>
<br/>
<div id="demo4" class="collapse">
A farm's soil moisture and soil electrical conductivity (EC)readings are extremely valuable for a farmer. They can help her reduce water use and improve productivity. However, the high cost of commercial soil moisture sensors and the inaccuracy of sub-1000 dollar EC sensors have limited their adoption. In this paper, we present the design and implementation of a system, called Strobe, that senses soil moisture and soil EC using RF propagation in existing Wi-Fi bands. Strobe overcomes the key challenge of limited bandwidth availability in the 2.4 GHz unlicensed spectrum using a novel multi-antenna technique. It maps the propagation time and amplitude of Wi-Fi signals received by different antennas to the soil permittivity and EC, which in turn depend on soil moisture and salinity. Our experiments with USRP, WARP, and commodity Wi-Fi cards show that Strobe can accurately estimate soil moisture and EC using Wi-Fi, thereby showing the potential of a future where a farmer can sense soil in their farm without investing 1000s of dollars in sensing tools.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345437">XModal-ID: Using WiFi for Through-Wall Person Identification from Candidate Video Footage</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Belal Korany, Chitra R. Karanam, Hong Cai, Yasamin Mostofi (University of California Santa Barbara)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo5"></a>
<br/>
<div id="demo5" class="collapse">
In this paper, we propose XModal-ID, a novel WiFi-video cross-modal gait-based person identification system. Given the WiFi signal measured when an unknown person walks in an unknown area and a video footage of a walking person in another area, XModal-ID can determine whether it is the same person in both cases or not. XModal-ID only uses the Channel State Information (CSI) magnitude measurements of a pair of off-the-shelf WiFi transceivers. It does not need any prior wireless or video measurement of the person to be identified. Similarly, it does not need any knowledge of the operation area or person's track. Finally, it can identify people through walls. XModal-ID utilizes the video footage to simulate the WiFi signal that would be generated if the person in the video walked near a pair of WiFi transceivers. It then uses a new processing approach to robustly extract key gait features from both the real WiFi signal and the video-based simulated one, and compares them to determine if the person in the WiFi area is the same person in the video. We extensively evaluate XModal-ID by building a large test set with 8 subjects, 2 video areas, and 5 WiFi areas, including 3 through-wall areas as well as complex walking paths, all of which are not seen during the training phase. Overall, we have a total of 2,256 WiFi-video test pairs. XModal-ID then achieves an 85% accuracy in predicting whether a pair of WiFi and video samples belong to the same person or not. Furthermore, in a ranking scenario where XModal-ID compares a WiFi sample to 8 candidate video samples, it obtains top-1, top-2, and top-3 accuracies of 75%, 90%, and 97%. These results show that XModal-ID can robustly identify new people walking in new environments, in various practical scenarios.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345443">FLUID: Flexible User Interface Distribution for Ubiquitous Multi-device Interaction</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Sangeun Oh, Ahyeon Kim, Sunjae Lee, Kilho Lee, Dae R. Jeong (KAIST); Steven Y. Ko (University at Buffalo, The State University of New York); Insik Shin (KAIST)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo6"></a>
<br/>
<div id="demo6" class="collapse">
The growing trend of multi-device ownerships creates a need and an opportunity to use applications across multiple devices. However, in general, the current app development and usage still remain within the single-device paradigm, falling far short of user expectations. For example, it is currently not possible for a user to dynamically partition an existing live streaming app with chatting capabilities across different devices, such that she watches her favorite broadcast on her smart TV while real-time chatting on her smartphone. In this paper, we present FLUID, a new Android-based multi-device platform that enables innovative ways of using multiple devices. FLUID aims to i) allow users to migrate or replicate individual user interfaces (UIs) of a single app on multiple devices (high flexibility), ii) require no additional development effort to support unmodified, legacy applications (ease of development), and iii) support a wide range of apps that follow the trend of using custom-made UIs (wide applicability). Previous approaches, such as screen mirroring, app migration, and customized apps utilizing multiple devices, do not satisfy those goals altogether. FLUID, on the other hand, meets the goals by carefully analyzing which UI states are necessary to correctly render UI objects, deploying only those states on different devices, supporting cross-device function calls transparently, and synchronizing the UI states of replicated UI objects across multiple devices. Our evaluation with 20 unmodified, real-world Android apps shows that FLUID can transparently support a wide range of apps and is fast enough for interactive use.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
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
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345427">Blind Distributed MU-MIMO for IoT Networking over VHF Narrowband Spectrum</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Chuhan Gao (University of Wisconsin-Madison); Mehrdad Hessar (University of Washington); Krishna Chintalapudi, Bodhi Priyantha (Microsoft Research)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo8"></a>
<br/>
<div id="demo8" class="collapse">
Longer range, in rural/urban IoT networks, allow a large geographical coverage with only a few base-stations, making their deployment and operation economical. In this paper we explore the 150-174 MHz spectrum for long range IoT networks comprising unlicensed MURS and licensed VHF narrowbands. Range in these bands is boosted by the lower RF frequencies as well as higher transmit powers allowed by the FCC. Through a 400 sq km wide area deployment study, we show that, these spectrum bands can provide > 20× the geographical coverage than that in the 900 MHz ISM band LoRa. Increased range translates to greater uplink IoT device traffic. The key contribution of this paper is a novel technique - Blind Distributed MU-MIMO, that allows capacity to scale with the number of antennas (base- stations) while not requiring any coordinated channel measurements between the devices and IoT base- stations. This requirement is crucial since in IoT networks power constrained IoT devices typically sleep and wake up to transmit short messages in response to unpredictable events without any coordination with the base-stations. We demonstrate the efficacy of Blind Distributed MU-MIMO through a real wide area deployment.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345451">TunnelScatter: Low Power Communication for Sensor Tags using Tunnel Diodes</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Ambuj Varshney, Andreas Soleiman, Thiemo Voigt (Uppsala University, Sweden)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo9"></a>
<br/>
<div id="demo9" class="collapse">
Due to extremely low power consumption, backscatter has become the transmission mechanism of choice for battery-free devices that operate on harvested energy. However, a limitation of recent backscatter systems is that the communication range scales with the strength of the ambient carrier signal (ACS). This means that to achieve a long-range, a backscatter tag needs to reflect a strong ACS, which in practice means that it needs to be close to an ACS emitter. We present TunnelScatter, a mechanism that overcomes this limitation. TunnelScatter uses a tunnel diode-based radio frequency oscillator to enable transmissions when there is no ACS, and the same oscillator as a reflection amplifier to support backscatter transmissions when the ACS is weak. Our results show that even without an ACS, TunnelScatter is able to transmit through several walls covering a distance of 18m while consuming a peak biasing power of 57 µW. Based on TunnelScatter, we design battery-free sensor tags, called TunnelTags, that can sense physical phenomena and transmit them using the TunnelScatter mechanism.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345436">On-Off Noise Power Communication</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Philip Lundrigan (Brigham Young University); Neal Patwari (Washington University in St. Louis); Sneha Kasera (University of Utah)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo10"></a>
<br/>
<div id="demo10" class="collapse">
We design and build a protocol called on-off noise power communication (ONPC), which modifies the software in commodity packet radios to allow communication, independent of their standard protocol, at a very slow rate at long range. To achieve this long range, we use the transmitter as an RF power source that can be on or off if it does or does not send a packet, respectively, and a receiver that repeatedly measures the noise and interference power level. We use spread spectrum techniques on top of the basic on/off mechanism to overcome the interference caused by other devices' channel access to provide long ranges at a much lower data rate. We implement the protocol on top of commodity WiFi hardware. We discuss our design and how we overcome key challenges such as non-stationary interference, carrier sensing and hardware timing delays. We test ONPC in several situations to show that it achieves significantly longer range than standard WiFi.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300121">OFDMA-Enabled Wi-Fi Backscatter</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Renjie Zhao, Fengyuan Zhu, Siyuan Peng, Yuda Feng, Xiaohua Tian, Hui Yu, Xinbing Wang (Shanghai Jiao Tong University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo11"></a>
<br/>
<div id="demo11" class="collapse">
In this paper, we for the first time demonstrate how to enable OFDMA in Wi-Fi backscatter for capacity and concurrency enhancement. With our approach, the excitation signal is reflected, modulated and shifted to lie in the frequency band of the OFDM subcarrier by the tag; OFDMA is realized by coordinating tags to convey information to the receiver with orthogonal subcarriers concurrently through backscatter. The crux of the design is to achieve strict synchronization among communication components, which is more challenging than in regular OFDMA systems due to the more prominent hardware diversity and uncertainty for backscattering. We reveal how the subtle asychnronization scenarios particularly for backscattering can incur system offsets, and present a series of novel designs for the excitation signal transmitter, tag, and receiver to address the issue. We build a prototype in 802.11g OFDM framework to validate our design. Experimental results show that our system can achieve 5.2-16Mbps aggregate throughput by allowing 48 tags to transmit concurrently, which is 1.45-5x capacity and 48x concurrency compared with the existing design respectively. We also design an OFDMA tag IC, and the simulation and numerical analysis results show that the tag's power consumption is in tens of µW.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300138">Wideband Full-Duplex Wireless via Frequency-Domain Equalization: Design and Experimentation</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Tingjun Chen, Mahmood Baraani Dastjerdi (Columbia University); Jin Zhou (University of Illinois at Urbana-Champaign); Harish Krishnaswamy, Gil Zussman (Columbia University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo12"></a>
<br/>
<div id="demo12" class="collapse">
Full-duplex (FD) wireless can significantly enhance spectrum efficiency but requires tremendous amount of self-interference (SI) cancellation. Recent advances in the RFIC community enabled wideband RF SI cancellation (SIC) in integrated circuits (ICs) via frequency-domain equalization (FDE), where RF filters channelize the SI signal path. Unlike other FD implementations, that mostly rely on delay lines, FDE-based cancellers can be realized in small-form-factor devices. However, the fundamental limits and higher layer challenges associated with these cancellers were not explored yet. Therefore, and in order to support the integration with a software-defined radio (SDR) and to facilitate experimentation in a testbed with several nodes, we design and implement an FDE-based RF canceller on a printed circuit board (PCB). We derive and experimentally validate the PCB canceller model and present a canceller configuration scheme based on an optimization problem. We then extensively evaluate the performance of the FDE-based FD radio in the SDR testbed. Experiments show that it achieves 95dB overall SIC (52dB from RF SIC) across 20MHz bandwidth, and an average link-level FD gain of 1.87x. We also conduct experiments in: (i) uplink-downlink networks with inter-user interference, and (ii) heterogeneous networks with half-duplex and FD users. The experimental FD gains in the two types of networks confirm previous analytical results. They depend on the users' SNR values and the number of FD users, and are 1.14x-1.25x and 1.25x-1.73x, respectively. Finally, we numerically evaluate and compare the RFIC and PCB implementations and study various design tradeoffs.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345445">Verification: Constructive and Destructive Full Duplex Relays</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Lu Chen, Kannan Srinivasan, Fang Liu (Ohio State University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo13"></a>
<br/>
<div id="demo13" class="collapse">
With recent advances in in-band full duplex techniques, full duplex capable relays have been shown feasible in many recent works. Instead of generating data itself to transmit, a full duplex relay can forward the received signal while receiving it. It also has the opportunity to properly modify the signal before forwarding it, which has been explored to enable constructive and destructive full duplex relaying recently. With these designs, the signal through the full duplex relay could constructively or destructively add up with the signal from the direct link at the receiver side. As a result, the received signal power may be boosted or greatly reduced, compared with direct forwarding. In this paper, we do detailed analysis on whether such constructive and destructive full duplex relays are possible. We find that for OFDM signals, such relays can not be achieved if the additional latency of the relayed path is more than one sample time than the direct link. Our analysis and results challenge the assumptions on the relay latency requirements of previous works to realize such systems.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse3" class="d-block" style="color:white">
<b>4:10 - 5:15<br/><i class="fa fa-chevron-down float-right" ></i>
Session 3: Computational Health (5 papers)<br/>Chair: Rajalakshmi Nandakumar (Cornell)</b>
</a></h6>
<div id="collapse3" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345454">eBP: A Wearable System For Frequent and Comfortable Blood Pressure Monitoring From User’s Ear</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Nam Bui, Nhat Pham, Jessica Jacqueline Barnitz, Phuc Nguyen, Hoang Truong, Taeho Kim, Anh Nguyen, Zhanan Zou, Nicholas Farrow, Jianliang Xiao (University of Colorado Boulder); Robin Deterding (Children's Hospital Colorado); Thang Dinh (Virginia Commonwealth University); Tam Vu (University of Colorado Boulder)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo14"></a>
<br/>
<div id="demo14" class="collapse">
Frequent blood pressure (BP) assessment is key to the diagnosis and treatment of many severe diseases, such as heart failure, kidney failure, hypertension, and hemodialysis. Current "gold-standard'' BP measurement techniques require the complete blockage of blood flow, which causes discomfort and disruption to normal activity when the assessment is done repetitively and frequently. Unfortunately, patients with hypertension or hemodialysis often have to get their BP measured every 15 minutes for a duration of 4-5 hours or more. The discomfort of wearing a cumbersome and limited mobility device affects their normal activities. In this work, we propose a device called eBP to measure BP from inside the user's ear aiming to minimize the measurement's impact on users' normal activities while maximizing its comfort level. eBP has 3 key components: (1) a light-based pulse sensor attached on an inflatable pipe that goes inside the ear, (2) a digital air pump with a fine controller, and (3) a BP estimation algorithm. In contrast to existing devices, eBP introduces a novel technique that eliminates the need to block the blood flow inside the ear, which alleviates the user's discomfort. We prototyped eBP custom hardware and software and evaluated the system through a comparative study on 35 subjects. The study shows that eBP obtains the average error of 1.8 mmHg and -3.1 mmHg and a standard deviation error of 7.2 mmHg and 7.9 mmHg for systolic (high-pressure value) and diastolic (low-pressure value), respectively. These errors are around the acceptable margins regulated by the FDA's AAMI protocol, which allows mean errors of up to 5 mmHg and a standard deviation of up to 8 mmHg.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345453">Contactless Infant Monitoring using White Noise</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Anran Wang (University of Washington), Jacob Sunshine (University of Washington School of Medicine), Shyamnath Gollakota (University of Washington)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo15"></a>
<br/>
<div id="demo15" class="collapse">
White noise machines are among the most popular devices to facilitate infant sleep. We introduce the first contactless system that uses white noise to achieve motion and respiratory monitoring in infants. Our system is designed for smart speakers that can monitor an infant's sleep using white noise. The key enabler underlying our system is a set of novel algorithms that can extract the minute infant breathing motion as well as position information from white noise which is random in both the time and frequency domain. We describe the design and implementation of our system, and present experiments with a life-like infant simulator as well as a clinical study at the neonatal intensive care unit with five new-born infants. Our study demonstrates that the respiratory rate computed by our system is highly correlated with the ground truth with a correlation coefficient of 0.938.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300125">PDVocal: Towards Privacy-preserving Parkinson's Disease Early Detection using Passive Body Sounds in Daily Life</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Hanbin Zhang, Chen Song, Aosen Wang (University at Buffalo); Dongmei Li (University of Rochester Medical Center); Wenyao Xu (University at Buffalo)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo16"></a>
<br/>
<div id="demo16" class="collapse">
Parkinson's disease (PD) is a chronic neurodegenerative disorder resulting from the progressive loss of dopaminergic nerve cells. People with PD usually demonstrate deficits in performing basic daily activities, and the relevant annual social cost can reach about $25 billion in the United States. Early detection of PD plays an important role in symptom relief and improvement in the performance of activities in daily life (ADL), which eventually reduces societal and economic burden. However, conventional PD detection methods are inconvenient in daily life (e.g., requiring users to wear sensors). To overcome this challenge, we propose and identify the non-speech body sounds as the new PD biomarker, and utilize the data in smartphone usage to realize the passive PD detection in daily life without interrupting the user. Specifically, we present PDVocal, an end-to-end smartphone-based privacy-preserving system towards early PD detection. PDVocal can passively recognize the PD digital biomarkers in the voice data during daily phone conversation. At the user end, PDVocal filters the audio stream and only extracts the non-speech body sounds (e.g., breathing, clearing throat and swallowing) which contain no privacy-sensitive content. At the cloud end, PDVocal analyzes the body sounds of interest and assesses the health condition using a customized residual network. For the sake of reliability in real-world PD detection, we investigate the method of the performance optimizer including an opportunistic learning knob and a long-term tracking protocol. We evaluate our proposed PDVocal on a collected dataset from 890 participants and real-life conversations from publicly available data sources. Results indicate that non-speech body sounds are a promising digital biomarker for privacy-preserving PD detection in daily life.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345433">HealthSense: Software-defined Mobile-based Clinical Trials</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Aidan Curtis, Amruta Pai, Jian Cao (Rice University); Nidal Moukaddam (Baylor College of Medicine); Ashutosh Sabharwal (Rice University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo17"></a>
<br/>
<div id="demo17" class="collapse">
With the rise of ever-more sophisticated wearables and sensing technologies, mobile health continues to be an active area of research. However, from a clinical researcher point of view, testing novel use of the mobile health innovations remains a major hurdle, as composing a clinical trial using a combination of technologies still remains in the realm of computer scientists. We take a software-inspired viewpoint of clinical trial designs to design, develop and validate HealthSense to enable expressibility of complex ideas, composability with diverse devices and services while maximally maintaining simplicity for a clinical research user. A key innovation in HealthSense is the concept of a study state manager (SSM) that modifies parameters of the study over time as data accumulates and can trigger external events that affect the participant; this design allows us to implement nearly arbitrary clinical trial designs. The SSM can funnel data streams to custom or third-party cloud processing pipelines and the result can be used to give interventions and modify parameters of the study. HealthSense supports both Android and iOS platforms and is secure, scalable and fully operational. We outline three trials (two with clinical populations) to highlight simplicity, composability, and expressibility of HealthSense.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345432">Experience: Design, Development and Evaluation of a Wearable Device for mHealth Applications</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 George Boateng (ETH Zurich); Vivian Genaro Motti (George Mason); Varun Mishra (Dartmouth); John A. Batsis (Dartmouth-Hitchcock Medical Center); Josiah Hester (Northwestern); David Kotz (Dartmouth)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo18"></a>
<br/>
<div id="demo18" class="collapse">
Wrist-worn devices hold great potential as a platform for mobile health (mHealth) applications because they comprise a familiar, convenient form factor and can embed sensors in proximity to the human body. Despite this potential, however, they are severely limited in battery life, storage, bandwidth, computing power, and screen size. In this paper, we describe the experience of the research and development team designing, implementing and evaluating Amulet? an open-hardware, open-software wrist-worn computing device? and its experience using Amulet to deploy mHealth apps in the field. In the past five years the team conducted 11 studies in the lab and in the field, involving 204 participants and collecting over 77,780 hours of sensor data. We describe the technical issues the team encountered and the lessons they learned, and conclude with a set of recommendations. We anticipate the experience described herein will be useful for the development of other research-oriented computing platforms. It should also be useful for researchers interested in developing and deploying mHealth applications, whether with the Amulet system or with other wearable platforms.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>5:30 - 7:00<br/>Poster and demo session</b></h6>
</div>
</div>
<br/><hr/>
<div class="accordion">
<p class="h4"><b> Wednesday, October 23, 2019</b></p>

<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>9:00 - 10:00<br/>Keynote: Carlos Guestrin</b></h6>
<div class="card-body bg-light">
<h6 class="card-title">
<a href="keynotes.php#carlos"><b>4 Systems Perspectives into Human-Centered Machine Learning</b></a>
</h6>
</div>
</div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse4" class="d-block" style="color:white">
<b>10:30 - 12:00<br/><i class="fa fa-chevron-down float-right" ></i>
Session 4: Video Streaming, Analytics and Intelligent Edge (6 papers)<br/>Chair: Aruna Balasubramanian (Stony Brook University)</b>
</a></h6>
<div id="collapse4" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345430">Learning to Coordinate Video Codec with Transport Protocol for Mobile Video Telephony</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Anfu Zhou, Huanhuan Zhang, Guangyuan Su, Leilei Wu, Ruoxuan Ma, Zhen Meng (Beijing University of Posts and Telecommunications); Xinyu Zhang (University of California San Diego); Xiufeng Xie (Hewlett Packard Labs); Huadong Ma (Beijing University of Posts and Telecommunications); Xiaojiang Chen (Alibaba Inc.)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo19"></a>
<br/>
<div id="demo19" class="collapse">
Despite the pervasive use of real-time video telephony services, the users' quality of experience (QoE) remains unsatisfactory, especially over the mobile Internet. Previous work studied the problem via controlled experiments, while a systematic and in-depth investigation in the wild is still missing. To bridge the gap, we conduct a large-scale measurement campaign on Taobao-Live, an operational mobile video telephony service. Our measurement logs fine-grained performance metrics over 1 million video call sessions. Our analysis shows that the application-layer video codec and transport-layer protocols remain highly uncoordinated, which represents one major reason for the low QoE. We thus propose Concerto, a machine learning based framework to resolve the issue. Instead of blindly following the transport layer's estimation of network capacity, Concerto reviews historical logs of both layers, and extracts high-level features of codec/network dynamics, based on which it determines the highest bitrates for forthcoming video frames without incurring congestion. To attain the ability, we train Concerto with the aforementioned massive data traces using a custom-designed imitation learning algorithm, which enables Concerto to learn from past experience. We have implemented and incorporated Concerto into Taobao-Live. Our experiments show that Concerto outperforms state-of-the-art solutions, improving video quality while reducing stalling time by multi-folds under various practical scenarios.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300127">Jigsaw: Robust Live 4K Video Streaming</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Ghufran Baig, Jian He, Mubashir Adnan Qureshi, Lili Qiu (The University of Texas at Austin); Peng Chen, Yinliang Hu (Huawei)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo20"></a>
<br/>
<div id="demo20" class="collapse">
The popularity of 4K videos has grown significantly in the past few years. Yet coding and streaming live 4K videos incurs prohibitive cost to the network and end system. Motivated by this observation, we explore the feasibility of supporting live 4K video streaming over wireless networks using commodity devices. Given the high data rate requirement of 4K videos, 60 GHz is appealing, but its large and unpredictable throughput fluctuation makes it hard to provide desirable user experience. In particular, to support live 4K video streaming, we should (i) adapt to highly variable and unpredictable wireless throughput, (ii) support efficient 4K video coding on commodity devices. To this end, we propose a novel system, Jigsaw. It consists of (i) easy-to-compute layered video coding to seamlessly adapt to unpredictable wireless link fluctuations, (ii) efficient GPU implementation of video coding on commodity devices, and (iii) effectively leveraging both WiFi and WiGig through delayed video adaptation and smart scheduling. Using real experiments and emulation, we demonstrate the feasibility and effectiveness of our system. Our results show that it improves PSNR by 6-15dB and improves SSIM by 0.011-0.217 over state-of-the-art approaches. Moreover, even when throughput fluctuates widely between 0.2Gbps-2Gbps, it can achieve an average PSNR of 33dB.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345455">MobiSR: Efficient On-Device Super-Resolution through Heterogeneous Mobile Processors</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Royson Lee, Stylianos I. Venieris, Lukasz Dudziak, Sourav Bhattacharya, Nicholas D. Lane (Samsung AI Center Cambridge)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo21"></a>
<br/>
<div id="demo21" class="collapse">
In recent years, convolutional networks have demonstrated unprecedented performance in the image restoration task of super-resolution (SR). SR entails the upscaling of a single low-resolution image in order to meet application-specific image quality demands and plays a key role in mobile devices. To comply with privacy regulations and reduce the overhead of cloud computing, executing SR models locally on-device constitutes a key alternative approach. Nevertheless, the excessive compute and memory requirements of SR workloads pose a challenge in mapping SR networks on resource-constrained mobile platforms. This work presents MobiSR, a novel framework for performing efficient super-resolution on-device. Given a target mobile platform, the proposed framework considers popular model compression techniques and traverses the design space to reach the highest performing trade-off between image quality and processing speed. At run time, a novel scheduler dispatches incoming image patches to the appropriate model-engine pair based on the patch's estimated upscaling difficulty in order to meet the required image quality with minimum processing latency. Quantitative evaluation shows that the proposed framework yields on-device SR designs that achieve an average speedup of 2.13x over highly-optimized parallel difficulty-unaware mappings and 4.79x over highly-optimized single compute engine implementations.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300116">Edge Assisted Real-time Object Detection for Mobile Augmented Reality</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Luyang Liu, Hongyu Li, Marco Gruteser (WINLAB, Rutgers University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo22"></a>
<br/>
<div id="demo22" class="collapse">
Most existing Augmented Reality (AR) and Mixed Reality (MR) systems are able to understand the 3D geometry of the surroundings but lack the ability to detect and classify complex objects in the real world. Such capabilities can be enabled with deep Convolutional Neural Networks (CNN), but it remains difficult to execute large networks on mobile devices. Offloading object detection to the edge or cloud is also very challenging due to the stringent requirements on high detection accuracy and low end-to-end latency. The long latency of existing offloading techniques can significantly reduce the detection accuracy due to changes in the user's view. To address the problem, we design a system that enables high accuracy object detection for commodity AR/MR system running at 60fps. The system employs low latency offloading techniques, decouples the rendering pipeline from the offloading pipeline, and uses a fast object tracking method to maintain detection accuracy. The result shows that the system can improve the detection accuracy by 20.2%-34.8% for the object detection and human keypoint detection tasks, and only requires 2.24ms latency for object tracking on the AR device. Thus, the system leaves more time and computational resources to render virtual elements for the next frame and enables higher quality AR/MR experiences.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345448">Source Compression with Bounded DNN Perception Loss for IoT Edge Computer Vision</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Xiufeng Xie, Kyu-Han Kim (Hewlett Packard Labs)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo23"></a>
<br/>
<div id="demo23" class="collapse">
IoT and deep learning based computer vision together create an immense market opportunity, but running deep neural networks (DNNs) on resource-constrained IoT devices remains challenging. Offloading DNN inference to an edge server is a promising solution, but limited wireless bandwidth bottlenecks its end-to-end performance and scalability. While IoT devices can adopt source compression to cope with the limited bandwidth, existing compression algorithms (or codecs) are not designed for DNN (but for human eyes), and thus, suffer from either low compression rates or high DNN inference errors. This paper presents GRACE, a DNN-aware compression algorithm that facilitates the edge inference by significantly saving the network bandwidth consumption without disturbing the inference performance. Given a target DNN, GRACE (i) analyzes DNN's perception model w.r.t both spatial frequencies and colors and (ii) generates an optimized compression strategy for the model - one-time offline process. Next, GRACE deploys thus-generated compression strategy at IoT devices (or source) to perform online source compression within the existing codec framework, adding no extra overhead. We prototype GRACE on JPEG (the most popular image codec framework), and our evaluation results show that GRACE indeed achieves the superior compression performance over existing strategies for key DNN applications. For semantic segmentation tasks, GRACE reduces a source size by 23% compared to JPEG with similar interference accuracy (0.38% lower than GRACE). Further, GRACE even achieves 7.5% higher inference accuracy than JPEG with a commonly used quality level of 75 does. For classification tasks, GRACE reduces the bandwidth consumption by 90% over JPEG with the same inference accuracy.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345447">Occlumency: Privacy-preserving Remote Deep-learning Inference Using SGX</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Taegyeong Lee (KAIST); Zhiqi Lin (University of Science and Technology of China); Saumay Pushp (KAIST); Caihua Li (Rice University); Yunxin Liu (Microsoft Research); Youngki Lee (Seoul National University); Fengyuan Xu (Najing University); Chenren Xu (Peking University); Lintao Zhang (Microsoft Research); Junehwa Song (KAIST)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo24"></a>
<br/>
<div id="demo24" class="collapse">
Deep-learning (DL) is receiving huge attention as enabling techniques for emerging mobile and IoT applications. It is a common practice to conduct DNN model-based inference using cloud services due to their high computation and memory cost. However, such a cloud-offloaded inference raises serious privacy concerns. Malicious external attackers or untrustworthy internal administrators of clouds may leak highly sensitive and private data such as image, voice and textual data. In this paper, we propose Occlumency, a novel cloud-driven solution designed to protect user privacy without compromising the benefit of using powerful cloud resources. Occlumency leverages secure SGX enclave to preserve the confidentiality and the integrity of user data throughout the entire DL inference process. DL inference in SGX enclave, however, impose a severe performance degradation due to limited physical memory space and inefficient page swapping. We designed a suite of novel techniques to accelerate DL inference inside the enclave with a limited memory size and implemented Occlumency based on Caffe. Our experiment with various DNN models shows that Occlumency improves inference speed by 3.6x compared to the baseline DL inference in SGX and achieves a secure DL inference within 72% of latency overhead compared to inference in the native environment.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse5" class="d-block" style="color:white">
<b>1:30 - 3:00<br/><i class="fa fa-chevron-down float-right" ></i>
Session 5: Advancing Wireless Networks: Tools, Techniques and Deployments (7 papers)<br/>Chair: Swarun Kumar (Carnegie Mellon University)</b>
</a></h6>
<div id="collapse5" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300140">Detecting if LTE is the Bottleneck with BurstTracker</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Arjun Balasingam (Stanford University); Manu Bansal (Stanford University); Rakesh Misra (Uhana Inc.); Kanthi Nagaraj (Stanford University); Rahul Tandra (Uhana Inc.); Sachin Katti (Stanford University); Aaron Schulman (UC San Diego)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo25"></a>
<br/>
<div id="demo25" class="collapse">
We present BurstTracker, the first tool that developers can use to detect if the LTE downlink is the bottleneck for their applications. BurstTracker is driven by our discovery that the proprietary LTE downlink schedulers running on LTE base stations allocate resources to users in a way that reveals if a user's downlink queue runs empty during a download. We demonstrate that BurstTracker works across Tier-1 cellular providers and across a variety of network conditions. We also present a case study that shows how application developers can use this tool in practice. Surprisingly, with BurstTracker, we find that the LTE downlink may not be the bottleneck for video streaming on several Tier-1 providers, even during peak hours at busy locations. Rather, transparent TCP middleboxes deployed by these providers lead to downlink underutilization, because they force Slow-Start Restart. With a simple workaround, we improve video streaming bitrate on busy LTE links by 35%.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345446">Experiences: Design, Implementation, and Deployment of CoLTE, a Community LTE Solution</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Spencer Sevilla, Matthew Johnson, Pathirat Kosakanchit, Jenny Ting Liang, Kurtis Heimerl (University of Washington)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo26"></a>
<br/>
<div id="demo26" class="collapse">
In this paper we introduce CoLTE, a solution for LTE-based community networks. CoLTE is a lightweight, Internet-only LTE core network (EPC) designed to facilitate the deployment and operation of small-scale, community owned and operated LTE networks in rural areas with limited and unreliable backhaul. The key differentiator of CoLTE, when compared to existing LTE solutions, is that in CoLTE the EPC is designed to be located in the field and deployed alongside a small number of cellular radios (eNodeBs), as opposed to the centralized model seen in large-scale telecom networks. We also provide performance results and lessons learned from a real-world CoLTE network deployed in rural Indonesia. This network has been sustainably operating for over six months, currently serves over 40 active users, and provides measured backhaul reductions of up to 45% when compared to cloud-core solutions.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300134">Systematic way to LTE Testing</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Muhammad Taqi Raza, Songwu Lu (UCLA)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo27"></a>
<br/>
<div id="demo27" class="collapse">
LTE test cases are standardized by 3GPP. They must be executed on every LTE-capable device model before commercial release. In this work, we examine the LTE testing practices in terms of completeness and efficiency. We discover that the standardized tests are incomplete in that a number of test cases related to multiple protocol interactions are missing. Our analysis also shows that, the isolated treatment of test cases, but not from the system perspective, incurs repetitive executions of test operations, thus resulting in testing inefficiencies. We thus make a case for a paradigm shift from ad hoc testing to a methodical approach to LTE testing. We follow a few guidelines from the LTE standards and propose an algorithmic approach to systematic testing. In the process, we address various challenges, provide complete list of test cases, and present the related algorithms. Our evaluation shows that, by eliminating repetitive operations, our new scheme reduces up to 70% of LTE testing steps. We also find 87 new, yet valid test cases that are not defined by the LTE standards.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300123">An Active-Passive Measurement Study of TCP Performance over LTE on High-speed Rails</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Jing Wang, Yufan Zheng, Yunzhe Ni, Chenren Xu (Peking University), Feng Qian (University of Minnesota - Twin Cities), Wangyang Li, Wantong Jiang, Yihua Cheng, Zhuo Cheng (Peking University), Yuanjie Li, Xiufeng Xie (Hewlett Packard Labs), Yi Sun (Institute of Computing Technology, University of Chinese Academy of Sciences), Zhongfeng Wang (China Academy of Railway Sciences)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo28"></a>
<br/>
<div id="demo28" class="collapse">
High-speed rail (HSR) systems potentially provide a more efficient way of door-to-door transportation than airplane. However, they also pose unprecedented challenges in delivering seamless Internet service for on-board passengers. In this paper, we conduct a large-scale active-passive measurement study of TCP performance over LTE on HSR. Our measurement targets the HSR routes in China operating at above 300 km/h. We performed extensive data collection through both controlled setting and passive monitoring, obtaining 1732.9 GB data collected over 135719 km of trips. Leveraging such a unique dataset, we measure important performance metrics such as TCP goodput, latency, loss rate, as well as key characteristics of TCP flows, application breakdown, and users' behaviors. We further quantitatively study the impact of frequent cellular handover on HSR networking performance, and conduct in-depth examination of the performance of two widely deployed transport-layer protocols: TCP CUBIC and TCP BBR. Our findings reveal the performance of today's commercial HSR networks "in the wild'', as well as identify several performance inefficiencies, which motivate us to design a simple yet effective congestion control algorithm based on BBR to further boost the throughput by up to 36.5%. They together highlight the need to develop dedicated protocol mechanisms that are friendly to extreme mobility.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300131">MP-H2: a Client-only Multipath Solution for HTTP/2</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Ashkan Nikravesh, Yihua Guo, Xiao Zhu (University of Michigan); Feng Qian (University of Minnesota - Twin Cities); Z. Morley Mao (University of Michigan)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo29"></a>
<br/>
<div id="demo29" class="collapse">
MP-H2 is a client-only, HTTP-based multipath solution. It enables an HTTP client to fetch content (an HTTP object) over multiple network paths such as WiFi and cellular on smartphones. Compared to MPTCP, MP-H2 offers several key advantages including server transparency, middlebox compatibility, and friendliness to CDN, anycast, and load balancing. MP-H2 strategically splits the file into byte range requests sent over multipath, and dynamically balances the workload across all paths. Furthermore, MP-H2 leverages new features in HTTP/2 including stream multiplexing, flow control, and application-layer PING to boost the performance. MP-H2 also supports multi-homing where each path contacts a different CDN server for enhanced performance. Evaluations show that MP-H2 offers only slightly degraded performance (6% on average) while being much easier to deploy compared to MPTCP. Compared to other state-of-the-art HTTP multipath solutions, MP-H2 reduces the file download time by up to 47%, and increases the DASH video streaming bitrate by up to 44%.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345435">MuSher: An Agile Multipath-TCP Scheduler for Dual-Band 802.11ad/ac Wireless LANs</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Swetank Kumar Saha, Shivang Aggarwal, Rohan Pathak, Dimitrios Koutsonikolas (University at Buffalo, The State University of New York); Joerg Widmer (IMDEA Networks Institute)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo30"></a>
<br/>
<div id="demo30" class="collapse">
Future WLAN devices will combine both IEEE 802.11ad and 802.11ac interfaces. The former provides multi-Gbps rates but is susceptible to blockage, whereas the latter is slower but offers reliable connectivity. A fundamental challenge is thus how to combine those complementary technologies, to make the most of the advantages they offer. In this work, we explore leveraging Multipath TCP (MPTCP) to use both interfaces simultaneously in order to achieve a higher overall throughput as well as seamlessly switching to a single interface when the other one fails. We find that standard MPTCP often performs sub-optimally and may even yield a throughput much lower than that of single path TCP over the faster of the two interfaces. We analyze the cause of these performance issues in detail and then design MuSher, an agile MPTCP scheduler that allows MPTCP to fully utilize the channel resources available to both interfaces. Our evaluation in realistic scenarios shows that MuSher provides a throughput improvement of up to 1.5x/2.3x and speeds up the recovery of a traffic stream, after disruption, by a factor of up to 8x/75x, under WLAN/Internet settings respectively, compared to the default MPTCP scheduler.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300135">ClientMarshal: Regaining Control from Wireless Clients for Better Experience in Enterprise WLANs</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Apurv Bhartia, Bo Chen, Derrick Pallas, Waldin Stone (Cisco Meraki)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo31"></a>
<br/>
<div id="demo31" class="collapse">
Client devices must cooperate to share limited resources in wireless local area networks (WLANs). Standards exist for access points (APs), to use a more holistic view of the RF environment, to share information with clients (802.11v/k), allowing clients to make better performance-impacting decisions, e.g. choosing to roam between APs. Standards intended to lower the cost of these expensive control-plane operations (802.11r) also exist. In this paper, we use large scale measurements to show the limited adoption of existing client-based techniques. We propose ClientMarshal for enterprise WLANs, which provides network infrastructure more control over these decisions without modification to client device software. ClientMarshal divides the enterprise network into logical groups called cells, each consisting of a small number of neighboring APs operating on different channels. All APs belonging to the same cell broadcast the same wireless identity (BSSID) to client devices, and appear as a single virtual AP. The key enabler behind ClientMarshal is FreeSteer (FST), a novel protocol we develop that allows an AP to dynamically steer an associated client to another AP in the same cell based on various network measurements in order to improve overall network performance. This design also improves the roaming experience by bypassing traditional control-plane operations, avoiding significant overhead as well as client implementation defects. Using systematic evaluation and implementation on commodity APs, we show the efficacy and control of FST protocol in client steering. Compared to state-of-the-art approaches, FST can steer clients almost 2.5X faster, with 52% higher success rate, and reduce packet loss by more than 68%.
</div></li>

</ul></div></div></div>

<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse6" class="d-block" style="color:white">
<b>3:30 - 5:00<br/><i class="fa fa-chevron-down float-right" ></i>
Session 6: Mobile Systems: Performance, Energy and Data Analytics (7 papers)<br/>Chair: Heather Zheng (University of Chicago)</b>
</a></h6>
<div id="collapse6" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300122">Mobile Gaming on Personal Computers with Direct Android Emulation</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Qifan Yang, Zhenhua Li (Tsinghua University); Tianyin Xu (UIUC); Ennan Zhai (Alibaba Group Inc.); Yunhao Liu (Tsinghua University); Yuanchao Huang, Jiaming He, Hai Long (Tencent Security)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo32"></a>
<br/>
<div id="demo32" class="collapse">
Playing Android games on Windows x86 PCs has gained enormous popularity in recent years, and the de facto solution is to use mobile emulators built with the AOVB (Android-x86 On VirtualBox) architecture. When playing heavy 3D Android games with AOVB, however, users often suffer unsatisfactory smoothness due to the considerable overhead of full virtualization. This paper presents DAOW, a game-oriented Android emulator implementing the idea of direct Android emulation, which eliminates the overhead of full virtualization by directly executing Android app binaries on top of x86-based Windows. Based on pragmatic, efficient instruction rewriting and syscall emulation, DAOW offers foreign Android binaries direct access to the domestic PC hardware through Windows kernel interfaces, achieving nearly native hardware performance. Moreover, it leverages graphics and security techniques to enhance user experiences and prevent cheating in gaming. As of late 2018, DAOW has been adopted by over 50 million PC users to run thousands of heavy 3D Android games. Compared with AOVB, DAOW improves the smoothness by 21% on average, decreases the game startup time by 48%, and reduces the memory usage by 22%.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345452">Device Administrator Use and Abuse in Android: Detection and Characterization</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Zhiyong Shan (Wichita State University); Raina Samuel, Iulian Neamtiu (New Jersey Institute of Technology)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo33"></a>
<br/>
<div id="demo33" class="collapse">
Device Administrator (DA) capabilities for mobile devices, e.g., remote locking/wiping, or enforcing password strength, were originally introduced to help organizations manage phone fleets or enable parental control. However, DA capabilities have been subverted and abused: malicious apps have used DA to create ransomware or lock users out, while benign apps have used DA to prevent or hinder uninstallation; in certain cases the only remedy is to factory-reset the phone. We call these apps "Deathless Device Administrator" (DDA), i.e., apps that cannot be uninstalled. We provide the first systematic study of Android DA capabilities, DDA apps, DDA-attack resistance across Android versions, and DDA-induced families in malicious apps. To enable scalable studies of questionable DA behavior, we developed DAAX, a static analyzer which exposes potential DA abuse effectively and efficiently. In a corpus of 39,459 apps (20,467 malicious and 18,992 benign) DAAX has found 4,135 DA apps and 691 potential DDA apps. The static analysis results on the 4,135 apps were cross-checked via dynamic analysis on at least 3 phones, confirming 578 true DDAs, including apps currently on Google Play. The study has shown that DAAX is effective (84.8% F-measure) and efficient (analysis typically takes 205 seconds per app).
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300137">AMP up your mobile web experience: Characterizing the impact of Google’s Accelerated Mobile Project</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Byungjin Jun, Fabián E. Bustamante, Sung Yoon Whang (Northwestern University); Zachary S. Bischof (IIJ Research)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo34"></a>
<br/>
<div id="demo34" class="collapse">
The rapid growth in the number of mobile devices, subscriptions and their associated traffic, has served as motivation for several projects focused on improving mobile users' quality of experience (QoE). Few have been as contentious as the Google-initiated Accelerated Mobile Project (AMP), both praised for its seemingly instant mobile web experience and criticized based on concerns about the enforcement of its formats. This paper presents the first characterization of AMP's impact on users' QoE. We do this using a corpus of over 2,100 AMP webpages, and their corresponding non-AMP counterparts, based on trendy-keyword-based searches. We characterized AMP's impact looking at common web QoE metrics, including Page Load Time, Time to First Byte and SpeedIndex (SI). Our results show that AMP significantly improves SI, yielding on average a 60% lower SI than non-AMP pages without accounting for prefetching. Prefetching of AMP pages pushes this advantage even further, with prefetched pages loading over 2,000ms faster than non-prefetched AMP pages. This clear boost may come, however, at a non-negligible cost for users with limited data plans as it incurs an average of over 1.4 MB of additional data downloaded, unbeknownst to users.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345449">Optimizing Energy Efficiency of Browsers in Energy-Aware Scheduling–enabled Mobile Devices</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Yonghun Choi, Seonghoon Park, Hojung Cha (Yonsei University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo35"></a>
<br/>
<div id="demo35" class="collapse">
Web browsing, previously optimized for the desktop environment, is being fine-tuned for energy-efficient use on mobile devices. Although active attempts have been made to reduce energy consumption, the advent of energy-aware scheduling (EAS) integrated in the recent devices suggests the possibility of a new approach for optimizing energy use by browsers. Our preliminary analysis showed that the existing EAS-enabled system is overly optimized for performance, leading to energy inefficiencies while a web browser is running. In this paper, we analyze the characteristics of web browsers, and investigate the cause of energy inefficiency in EAS-enabled mobile devices. We then propose a system, called WebTune, to improve the energy efficiency of mobile browsers. Exploiting the reinforcement learning technique, WebTune learns the optimal execution speed of the web browser's processes, and adjusts the speed at runtime, thus saving energy and ensuring the quality of service (QoS). WebTune is implemented on the latest Android-based smartphones, and evaluated with Alexa's top 200 websites. The experimental results show that WebTune reduced the device-level energy consumption of the Google Pixel 2 XL and Samsung Galaxy S9 Plus smartphones by 18.7-22.0% and 13.7-16.1%, respectively, without degrading the QoS.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300126">Diagnosing Vehicles with Automotive Batteries</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Liang He (University of Colorado Denver); Linghe Kong, Ziyang Liu (Shanghai Jiao Tong University); Yuanchao Shu (Microsoft Research); Cong Liu (University of Texas at Dallas)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo36"></a>
<br/>
<div id="demo36" class="collapse">
The automotive industry is increasingly employing software- based solutions to provide value-added features on vehicles, especially with the coming era of electric vehicles and autonomous driving. The ever-increasing cyber components of vehicles (i.e., computation, communication, and control), however, incur new risks of anomalies, as demonstrated by the millions of vehicles recalled by different manufactures. To mitigate these risks, we design B-Diag, a battery-based diagnostics system that guards vehicles against anomalies with a cyber-physical approach, and implement B-Diag as an add-on module of commodity vehicles attached to automotive batteries, thus providing vehicles an additional layer of protection. B-Diag is inspired by the fact that the automotive battery operates in strong dependency with many physical components of the vehicle, which is observable as correlations between battery voltage and the vehicle's corresponding operational parameters, e.g., a faster revolutions-per-minute (RPM) of the engine, in general, leads to a higher battery voltage. B-Diag exploits such physically-induced correlations to diagnose vehicles by cross-validating the vehicle information with battery voltage, based on a set of data-driven norm models constructed online. Such a design of B-Diag is steered by a dataset collected with a prototype system when driving a 2018 Subaru Crosstrek in real-life over 3 months, covering a total mileage of about 1, 400 miles. Besides the Crosstrek, we have also evaluated B-Diag with driving traces of a 2008 Honda Fit, a 2018 Volvo XC60, and a 2017 Volkswagen Passat, showing B-Diag detects vehicle anomalies with >86% (up to 99%) averaged detection rate.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300132">Experience: Understanding Long-Term Evolving Patterns of Shared Electric Vehicle Fleets</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Guang Wang, Xiuyuan Chen (Rutgers University); Fan Zhang (Shenzhen Institutes of Advanced Technology, Chinese Academy of Sciences); Yang Wang (University of Science and Technology of China); Desheng Zhang (Rutgers University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo37"></a>
<br/>
<div id="demo37" class="collapse">
Due to the ever-growing concerns over air pollution and energy security, many cities have started to update their taxi fleets with electric ones. In this paper, we perform the first comprehensive measurement investigation called ePat to explore the evolving mobility and charging patterns of electric vehicles. Our ePat is based on 5-year 4.8 TB taxi GPS data, 240 GB taxi transaction data, and metadata from 117 charging stations, during an evolving process from 427 electric taxis in 2013 to 13,178 in 2018. Moreover, ePat also explores the impacts of various contexts and benefits during the evolving process. Our ePat as a comprehensive investigation of the electric taxi network mobility and charging evolving has the potential to advance the understanding of the evolving patterns of electric taxi networks and pave the way for analyzing future shared autonomous vehicles.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300130">VeMo: Enabling Transparent Vehicular Mobility Modeling at Individual Levels with Full Penetration</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Yu Yang, Xiaoyang Xie, Zhihan Fang (Rutgers University); Fan Zhang (Shenzhen Institute of Advanced Technology); Yang Wang (University of Science and Technology of China); Desheng Zhang (Rutgers University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo38"></a>
<br/>
<div id="demo38" class="collapse">
Understanding and predicting real-time vehicle mobility patterns on highways are essential to address traffic congestion and respond to the emergency. However, almost all existing works (e.g., based on cellphones, onboard devices, or traffic cameras) suffer from high costs, low penetration rates, or only aggregate results. To address these drawbacks, we utilize Electric Toll Collection systems (ETC) as a large-scale sensor network and design a system called VeMo to transparently model and predict vehicle mobility at the individual level with a full penetration rate. Our novelty is how we address uncertainty issues (i.e., unknown routes and speeds) due to sparse implicit ETC data based on a key data-driven insight, i.e., individual driving behaviors are strongly correlated with crowds of drivers under certain spatiotemporal contexts and can be predicted by combining both personal habits and context information. More importantly, we evaluate VeMo with (i) a large-scale ETC system with tracking devices at 773 highway entrances and exits capturing more than 2 million vehicles every day; (ii) a fleet consisting of 114 thousand vehicles with GPS data as ground truth. We compared VeMo with state-of-the-art benchmark mobility models, and the experimental results show that VeMo outperforms them by average 10% in terms of accuracy.
</div></li>

</ul></div></div></div>

</div>
<br/><hr/>
<div class="accordion">
<p class="h4"><b> Thursday, October 24, 2019</b></p>
<div class="card bg-light">
<h6 class="card-header text-white" style="background-color:#2CA02C">
<a data-toggle="collapse" href="#collapse7" class="d-block" style="color:white">
<b>9:00 - 10:30<br/><i class="fa fa-chevron-down float-right" ></i>
Session 7: Wireless Sensing: Acoustics, Light and Wi-Fi (7 papers)<br/>Chair: Robin Kravets (University of Illinois at Urbana Champaign)</b>
</a></h6>
<div id="collapse7" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345439">RNN-based Room Scale Hand Motion Tracking</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Wenguang Mao, Mei Wang, Wei Sun, Lili Qiu, Swadhin Pradhan (UT Austin); Yi-chao Chen (Hauoli)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo39"></a>
<br/>
<div id="demo39" class="collapse">
Smart speakers allow users to interact with home appliances using voice commands and are becoming increasingly popular. While voice-based interface is intuitive, it is insufficient in many scenarios, such as in noisy or quiet environments, for users with language barriers, or in applications that require continuous motion tracking. Motion-based control is attractive and complementary to existing voice-based control. However, accurate and reliable room-scale motion tracking poses a significant challenge due to low SNR, interference, and varying mobility. To this end, we develop a novel recurrent neural network (RNN) based system that uses speakers and microphones to realize accurate room-scale tracking. Our system jointly estimates the propagation distance and angle-of-arrival (AoA) of signals reflected by the hand, based on AoA-distance profiles generated by 2D MUSIC. We design a series of techniques to significantly enhance the profile quality under low SNR. We feed the profiles in a recent history to our RNN to estimate the distance and AoA. In this way, we can exploit the temporal structure among consecutive profiles to remove the impact of noise, interference and mobility. Using extensive evaluation, we show our system achieves 1.2-3.7 cm error within 4.5 m range, supports tracking multiple users, and is robust against ambient sound. To our knowledge, this is the first acoustic device-free room-scale tracking system.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300139">Rebooting Ultrasonic Positioning Systems for Ultrasound-incapable Smart Devices</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Qiongzheng Lin, Zhenlin An, Lei Yang (The Hong Kong Polytechnic University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo40"></a>
<br/>
<div id="demo40" class="collapse">
An ultrasonic Positioning System (UPS) has outperformed RF-based systems in terms of its accuracy for years. However, few of the developed solutions have been deployed in practice to satisfy the localization demand of today's smart devices, which lack ultrasonic sensors and were considered as being "deaf" to ultrasound. A recent finding demonstrates that ultrasound may be audible to the smart devices under certain conditions due to their microphone's nonlinearity. Inspired by this insight, this work revisits the ultrasonic positioning technique and builds a practical UPS, called UPS+, for ultrasound-incapable smart devices. The core concept is to deploy two types of indoor beacon devices, which will advertise ultrasonic beacons at two different ultrasonic frequencies respectively. Their superimposed beacons are shifted to a low-frequency by virtue of the nonlinearity effect at the receiver's microphone. This underlying property functions as an implicit ultrasonic downconverter without throwing harm to the hearing system of humans. We demonstrate UPS+, a fully functional UPS prototype, with centimeter-level localization accuracy using custom-made beacon hardware and well-designed algorithms.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345429">Canceling Inaudible Voice Commands Against Voice Control Systems</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Yitao He, Zihui Qian, Junyu Bian, Xiaohua Tian, Xinbing Wang (Shanghai Jiao Tong University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo41"></a>
<br/>
<div id="demo41" class="collapse">
Recent studies show that the voice control system (VCS) is subject to the inaudible voice command attack, which can not be heard by human ears but can be recorded by the microphone. An adversary could leverage the attack to disable the VCS user's home security system, leak the victim's privacy or download malware stealthily. Efforts have been dedicated to developing forensics based defense mechanisms, which target at detecting traces of the attack signal; however, we find that existing approaches of the kind still leave loopholes. Moreover, a complete defense mechanism should be able to not only detect the attack but also cancel out the attack signal, and meanwhile ensure the legitimate voice commands unaffected, which however is still unavailable to the best of our knowledge. This paper is an attempt to fill the gap. We first systematically analyze existing forensics based defense mechanisms and reveal the root cause of their loopholes. Then we present an active inaudible-voice-command cancellation (AIC) design, which can reliably detect and capture the attack signal facilitated by our custom-designed "guard'' signal transmitter. AIC can create a special spectrum in the passband of the VCS microphone, based on which we are able to neutralize the attack signal in software means. We implement a prototype of our defense system and conduct comprehensive experiments to validate our design.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345428">mQRCode: Secure QR Code Using Nonlinearity of Spatial Frequency in Light</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Hao Pan, Lanqing Yang, Yi-Chao Chen, Guangtao Xue, Chuang-Wen You, Xiaoyu Ji</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo42"></a>
<br/>
<div id="demo42" class="collapse">
Quick response (QR) codes are becoming pervasive due to their rapid readability and the popularity of smartphones with built-in cameras. QR codes are also gaining importance in the retail sector as a convenient mobile payment method. However, researchers have concerns regarding the security of QR codes, which leave users susceptible to financial loss or private information leakage. In this study, we addressed this issue by developing a novel QR code (called mQRCode), which exploits patterns presenting a specific spatial frequency as a form of camouflage. When the targeted receiver holds a camera in a designated position (e.g., directly in front at a distance of 30 cm from the camouflaged QR code), the original QR code is revealed in form of a Moire pattern. From any other position, only the camouflaged QR code can be seen. In experiments, the decryption rate of mQRCode was > 98.6% within 10.2 frames via a multi-frame decryption method. The decryption rate for cameras positioned 20° off axis or > 10cm away from the designated location dropped to 0%, indicating that mQRCode is robust against attacks.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3345442">On the Feasibility of Wi-Fi Based Material Sensing</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Diana Zhang, Jingxian Wang (Carnegie Mellon University); Junsu Jang (Massachusetts Institute of Technology); Junbo Zhang (Tsinghua University); Swarun Kumar (Carnegie Mellon University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo43"></a>
<br/>
<div id="demo43" class="collapse">
Wireless sensing has demonstrated the potential of using Wi-Fi signals to track people and objects, even behind walls.Yet, prior work in this space aims to merely detect the presence of objects around corners, rather than their type. In this paper, we explore the feasibility of the following re-search question: ?Can commodity Wi-Fi radios detect both the location and type of moving objects around them?". We present IntuWition, a complementary sensing system that can sense the location and type of material of objects in the environment, including those out of line-of-sight. It achieves this by sensing wireless signals reflected off surrounding objects using commodity Wi-Fi radios, whose signals penetrate walls and occlusions. At the core of IntuWition is the idea that different materials reflect and scatter polarized waves in different ways. We build upon ideas from RADAR Polarimetry to detect the material of objects across spatial locations, despite mobility of the sensing device and the hardware non-idealities of commodity Wi-Fi radios. A detailed feasibility study reveals an average accuracy of 95% in line-of-sight and 92% in non-line-of-sight in classifying five types of materials:copper, aluminum, plywood, birch, and human. Finally, we present a proof-of-concept application of our system on an autonomous UAV that uses its onboard Wi-Fi radios to sense whether an occlusion is a person versus another UAV.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300133">mD-Track: Leveraging Multi-Dimensionality for Passive Indoor Wi-Fi Tracking</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Yaxiong Xie (Nanyang Technological University); Jie Xiong (UMass Amherst); Mo Li (Nanyang Technological University); Kyle Jamieson (Princeton University)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo44"></a>
<br/>
<div id="demo44" class="collapse">
Wi-Fi localization and tracking face accuracy limitations dictated by antenna count (for angle-of-arrival methods) and frequency bandwidth (for time-of-arrival methods). This paper presents mD-Track, a device-free Wi-Fi tracking system capable of jointly fusing information from as many dimensions as possible to overcome the resolution limit of each individual dimension. Through a novel path separation algorithm, mD-Track can resolve multipath at a much finer-grained resolution, isolating signals reflected off targets of interest. mD-Track can localize human passively at a high accuracy with just a single Wi-Fi transceiver pair. mD-Track also introduces novel methods to greatly streamline its estimation algorithms, achieving real-time operation. We implement mD-Track on both WARP and cheap off-the-shelf commodity Wi-Fi hardware, and evaluate its performance in different indoor environments.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/citation.cfm?id=3300120">Proximity detection with single-antenna IoT devices</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Timothy J Pierson, Travis Peters, Ronald Peterson, David Kotz (Dartmouth College)</h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo45"></a>
<br/>
<div id="demo45" class="collapse">
Providing secure communications between wireless devices that encounter each other on an ad-hoc basis is a challenge that has not yet been fully addressed. In these cases, close physical proximity among devices that have never shared a secret key is sometimes used as a basis of trust; devices in close proximity are deemed trustworthy while more distant devices are viewed as potential adversaries. Because radio waves are invisible, however, a user may believe a wireless device is communicating with a nearby device when in fact the user's device is communicating with a distant adversary. Researchers have previously proposed methods for multi-antenna devices to ascertain physical proximity with other devices, but devices with a single antenna, such as those commonly used in the Internet of Things, cannot take advantage of these techniques. <br/><br/> We present theoretical and practical evaluation of a method called SNAP -- SiNgle Antenna Proximity -- that allows a single-antenna Wi-Fi device to quickly determine proximity with another Wi-Fi device. Our proximity detection technique leverages the repeating nature Wi-Fi's preamble and the behavior of a signal in a transmitting antenna's near-field region to detect proximity with high probability; SNAP never falsely declares proximity at ranges longer than 14 cm.
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
</div>