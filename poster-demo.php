<?php require_once('head.php'); ?>

<body>

<center>
<?php require_once('nav.php'); ?>
<?php require_once('banner-small.php'); ?>

<div class="container bigc">
<div class="spacing"></div>

<main>

<h2 class="text-center">Posters & Demos Session</h2>

<div class="accordion">
<p class="h4"><b> Wednesday, 23rd September, 2020 PDT</b></p>
<div class="card">
<h6 class="card-header text-white" style="background-color:#D62728">
<b>04:30 - 06:00<br/>Posters & Demos</b></h6>
<div id="collapse7" class="collapse show">
<div class="card-body">
<ul class="list-group list-group-flush">
<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418156">Poster: Using Magnetic Fingerprints to Position Cars on Multi-layer Roads</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Ping-Fan Ho, Chia-Cheng Wang, and Jyh-Cheng Chen (National Chiao Tung University)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/kX14EY3LHBY'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/I-UJkUxL1qg'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo1"></a>
<br/>
<div id="demo1" class="collapse">
  Today's GPS navigators have difficulty determining altitude on multi-layer roads. In this paper, we first explain how the structures of overpasses and bridges have special magnetic fields. We then propose how to use the magnetometers which come with off-the-shelf smartphones to assist GPS navigators to determine position on multi-layer roads by detecting and matching these magnetic fingerprints. We also present performance evaluation on different multi-layer roads to show the feasibility of the proposed method.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418157">Poster: Homecoming: A Wireless Homing Device for UAVs</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
 Yifeng Cao and Ashutosh Dhekne (Georgia Institute of Technology)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://www.youtube.com/watch?v=c6G5_JLjuQs'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://www.youtube.com/watch?v=X4mWG7Md4m0'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo2"></a>
<br/>
<div id="demo2" class="collapse">
  Unmanned Aerial Vehicles (UAVs) are quickly becoming a viable delivery platform for physical packages with promise to transform the retail industry's supply chains. This work focuses on the last leg of such delivery: physically approaching a customer's landing zone. This has traditionally relied on a combination of GPS and computer-vision to locate and identify a landing zone. Instead of using computer vision, we propose to use ultra-wideband beacons (UWB) to assist in the landing process. The UAV's location relative to the landing zone is continuously measured based on the wireless propagation delay between the UAV and the landing zone's corners. We show that a single pair of wireless devices, one at the UAV and one at the landing zone, suffices to obtain the UAV's location. The landing zone's UWB device, connected to multiple antennas, receives multiple copies of the UAV's signals, that enables a sub-decimeter 3D-localization of the UAV. This helps the UAV's control logic governing the approach and landing process.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418158">Poster: Performance Bottlenecks Identification in Cloudified Mobile Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Georgios Patounas (Simula Metropolitan Center for Digital Engineering); Xenofon Foukas (Microsoft Research); Ahmed Elmokashfi (Simula Metropolitan Center for Digital Engineering); Mahesh Marina (The University of Edinburgh)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/B_s-XdC_5vI'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/vRBKXhVYl8E'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo3"></a>
<br/>
<div id="demo3" class="collapse">
  The recent trend towards cloudifying mobile networks brings more flexibility and shortens deployment times. However, it results in an architecture spanning several independent layers from the bare metal to the service level thus complicating troubleshooting and service assurance. In this work, we experimentally explore whether we can accurately and efficiently identify bottlenecks across the different locations of the network and layers of the cloudified architecture. Our findings confirm the complexity of this task and lead us to promising solutions through the use of Machine Learning.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418159">Poster: Bringing Temperature-Awareness to Millimeter-Wave Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Moh Sabbir Saadat, Sanjib Sur, and Srihari Nelakuditi (University of South Carolina)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/Jk_o9bC-ggE'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/5nlz1hSym8U'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo4"></a>
<br/>
<div id="demo4" class="collapse">
  Millimeter-wave devices operate at very high frequency and ultra-wide bandwidth. They consume more energy, dissipate more power, and heat up faster. So, millimeter-wave (mmWave) would exacerbate the device overheating problem in the future. In this work, we first perform a thermal characterization of mmWave devices: it reveals that after only 10 s. of data transfer at 1.9 Gbps, the antenna temperature reaches 68°C; it reduces the link throughput by 21%, increases the standard deviation by 6×, and takes 130 s. to dissipate the heat completely. We then propose Aquilo to bring temperature-awareness in mmWave networks; Aquilo maintains relatively high throughput performance and cools down the devices substantially. Our testbed experiments in static conditions show that Aquilo reaches a median peak temperature just 1°C above the optimal with less than 10% throughput sacrifice only.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418160">Poster: Constructing 3-Dimensional 5G Coverage Map for Real-time Airborne Missions</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Sejin Seo, Seunghwan Kim, Sujin Kook, Sihun Baek, and Seong-Lyun Kim (Yonsei University)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/eHWLO1hXuq8'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/eytoDd1BBKM'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo5"></a>
<br/>
<div id="demo5" class="collapse">
With recent deployments of the fifth generation (5G) network and advances in unmanned aerial vehicles, diverse airborne missions that provide high resolution aerial imagery in real-time are possible. However, a reliable inference of 3D cellular coverage is required to provide seamless imagery. As a part of intercontinental 5G testbed activities within Korea-EU 5G Project (PriMO-5G), we construct 3D 5G coverage map manually, to present insights regarding 3D coverage and how to construct its map efficiently. We then devise algorithms for constructing 3D coverage map simultaneously with real-time airborne missions in a cost-effective manner.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418161">Poster: What You Wear Know How You Feel: An Emotion Inference System with Multi-modal Wearable Devices</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Dan Wang, Haibo Lei, Haozhi Dong, Yunshu Wang, Yongpan Zou, and Kaishun Wu (Shenzhen University)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://www.youtube.com/watch?v=KMwr-nALfxw'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://www.youtube.com/watch?v=4bsF0mic9Lw'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo6"></a>
<br/>
<div id="demo6" class="collapse">
  Emotions show high significance on human health. Automatic emotion recognition is helpful for monitoring psychological disorders, mental problems and exploring behavioral mechanisms. Existing approaches adopt costly and bulky specialized hardware such as EEG/ECG helmet, possess privacy risks, or with low accuracy and user experience. With the increasing popularity of wearables, people tend to equip multiple smart devices, which provides potential opportunity for emotion perception. In this paper, we present a pervasive and portable system called MW-Emotion to recognize common emotional states with multi-modal wearable devices. However, ubiquitous wearable devices perceive shallow information which is not obviously related to human emotions. MW-Emotion excavates intrinsic mapping relationship between emotions and sensing data. Our experiments show that MW-Emotion can recognize different emotion states with a relatively high accuracy of 83.1%.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418162">Poster: SmartPatch: A patch prioritization framework for SCADA chain in Smart grid</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Geeta Yadav (Indian Institute of Technology, Delhi, India); Praveen Gauravaram (Tata Consultancy Services, Australia); Arun Kumar Jindal (Tata Consultancy Services, New Delhi, India)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/9H8KzY-pL5Q'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/ZRHc3ZxIeq0'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo7"></a>
<br/>
<div id="demo7" class="collapse">
Supervisory Control and Data Acquisition (SCADA) systems are the industrial control systems and operational infrastructure that can monitor and control the electricity grid. Electricity grids are increasingly transforming from the one-directional way of generating, transmitting, and distributing electricity to smart grids that are multi-directional in the way they monitor, automate, and remotely operate the power sector. SCADA systems are increasingly under cyber attacks illustrating growing vulnerabilities to the smart grids. The U.S. power industry notes the importance of SCADA chain cyber risks and the need to take proactive measures (timely patching of vulnerabilities) to mitigate the risks. However, not all vulnerabilities are always exploited by attackers; and not all vulnerabilities can be patched in resource-constrained scenarios. Therefore, the patch sequence needs to be strategic and efficient.

In this poster, we address the critical need to prioritize patching the smart grid SCADA systems on time. This is even more prominent with the advent of new technologies, usage of backup systems, updated standards, and new regulations on the safety and security of the smart grid. In this direction, we present SmartPatch - a patch prioritization method to address patch sequencing of the SCADA chain in the smart grid systems. It analyzes the possible attacker behavior as well as system criticality using game theory for decision making. It provides a patch prioritization strategy that is cost-constrained and reduces the impact of the possible attacks to a large extent.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418163">Poster: TSFCC: High Availability Service Function Chain Composition Approach in Mobile Network</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Meng Niu, Bo Cheng, Wenyuan Gu, Meng Wang, and Junliang Chen (Beijing University of Posts and Telecommunications)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/QaW6ID2x4jw'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/uMk4e1N3u7Y'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo8"></a>
<br/>
<div id="demo8" class="collapse">
  Network function virtualization (NFV) plays a vital role in 5G mobile networks. Concatenating virtual network functions (VNFs) into service function chains (SFCs) provides flexible and diverse network support for intelligent applications. However, the mobile network connection is very unreliable. A reasonable SFC composition mechanism is essential for stable service providing. This paper proposes a high availability service function chain composition approach, TSFCC. TSFCC includes real-time road marking strategy, bi-composition mechanism, and VNF reallocation mechanism. Evaluation results prove that TSFCC can adapt to the mobile network environment and provide users with efficient and highly available SFC service.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418164">Poster: Hybrid Communication and Storage System with User Privacy Preservation for Public Management, Analysis and Prediction</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Lifeng Liu and Yingxuan Zhu (FutureWei Technologies Inc.); Jian Li (Futurewei Technologies Inc.)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/T4gUNAvNc7Y '>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/7ujS3rfUd7s'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo9"></a>
<br/>
<div id="demo9" class="collapse">
  We propose a hybrid system of combining mobile sensor nodes and fixed sensor nodes for robust and effective public management, analysis, and prediction. In the proposed system, user privacy protection (on device, edge, and cloud) is implemented via the design of multiple levels of data sensitivity protection: User activities and location data are anonymized, consented, and aggregated (via edge computing at public infrastructures) before uploading for analysis; Specially designed event tokens are distributed for information/notification flowing and matching, and sharing user sensitive data is avoided; Event tokens also link hierarchical user groups combined with blockchain based technologies. Our system facilitates matching between user private data and public data without compromising privacy.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418165">Poster: Toward a Secure QR Code System by Fingerprinting Screens</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Yijie Li and Yi-Chao Chen (Shanghai Jiao Tong University); Xiaoyu Ji (Zhejiang University); Hao Pan, Lanqing Yang, Guangtao Xue, and Jiadi Yu (Shanghai Jiao Tong University)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/uwsaNRk_J1A'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/Rfdut8RmkQU'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo10"></a>
<br/>
<div id="demo10" class="collapse">
  Quick response (QR) codes have been widely used in mobile applications, due to its convenience and the pervasive built-in cameras on smartphones. Recently, however, QR codes have been reported suffering attacks for being sniffed just before the QR code is scanned, which lead to financial loss. In this study, we propose ScreenID, for enhancing the QR code security by identifying its authenticity, which embeds a QR code with information of unique screen fingerprint - PWM frequency. PWM frequencies are adjusted to different values by screen manufacturers, therefore can successfully differentiate screens. To improve the estimation accuracy of PWM frequency, ScreenID incorporates a model for the interaction between the camera and screen in the temporal and spatial domains. Extensive experiments demonstrate that ScreenID can differentiate screens of different models, types and manufacturers and thus improve the security of QR codes.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418166">Poster: A Seamless Virtualized Network Functions Migration Mechanism in Mobile Edge Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Biyi Li, Bo Cheng, Yi Yue, Meng Wang, and Junliang Chen (Beijing University of Posts and Telecommunications)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/8ZeDqeWfPbQ'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/Jw7zRfbEGKU'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo11"></a>
<br/>
<div id="demo11" class="collapse">
  Mobile Edge Computing (MEC) is an emerging architecture that supports ultra-low latency and high-bandwidth services by deploying servers at the edge of the network to provide computing and storage resources. Recent studies tend to combine (Network Function Virtualization) NFV with MEC and deploy (Virtualized Network Functions) VNFs on MEC servers to achieve fast access to the edge user equipment (UE). However, to guarantee the QoS requirements of mobile users, it is necessary to migrate VNFs to an advisable edge server when users move across Base Stations (BS). How to choose the target BS for VNFs migration? How to select the path for VNF data migration? How to ensure the QoS of user services during the migration process? To solve these issues, we study the seamless VNFs migration problem in mobile edge networks and formulate it as an ILP model, which aims to minimize the migration delay and cost. Then we propose a migration algorithm based on Dijkstra (MBD) to obtain the migration destination BS and migration paths. We implement the mathematical model in Gurobi and design a Greedy algorithm to compare the performance with the MBD algorithm. The experiment results show the effectiveness and efficiency of our algorithm.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418167">Poster: A Reliable Intelligent Routing Mechanism in 5G Core Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Tze-Jie Tan, Fu-Lian Weng, Wei-Ting Hu, Jyh-Cheng Chen, and Cheng-Ying Hsieh (National Chiao Tung University)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/z0f0aJj6jac'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/YJsYM-03e5Y'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo12"></a>
<br/>
<div id="demo12" class="collapse">
  One of the main goal of 5G networks is to provide ultra-reliable low latency service to users. When users keep accessing the system, the traffic in 5G core network (5GC) may be congested. Thus, we propose a load balance algorithm to select the best traffic data routing path based on the traffic loading in the 5GC. The proposed algorithm is implemented in a 5G testbed called free5GC. The experimental results show that our proposed algorithm outperforms the traditional round-robin load balance algorithm in many performance metrics.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418168">Poster: CarML: Distributed Machine Learning in Vehicular Clouds</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Anran Du, Yicheng Shen, and Lewis Tseng (Boston College)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/VkM--dl_hr4'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/EdnEosVmR4Q'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo13"></a>
<br/>
<div id="demo13" class="collapse">
  This paper presents CarML, a distributed machine learning platform built on top of an emerging computing paradigm, vehicular clouds. We discuss our design and technical challenges, followed by our preliminary solutions. We verify the efficacy of our solutions using a customized simulator based on Python and SUMO.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418169">Poster: Throughput Optimization VNF Placement For Mapping SFC Requests in MEC-NFV Enabled Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Yi Yue, Bo Cheng, Biyi Li, Xuan Liu, and Meng Wang (Beijing University of Posts and Telecommunications)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/8rMFKBcYOnI'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/viAbkENRvTo'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo14"></a>
<br/>
<div id="demo14" class="collapse">
  Network function virtualization (NFV) and mobile edge computing (MEC) enable internet service providers (ISPs) to deploy service function chains (SFCs) to achieve the convenience and performance benefit without incurring high service delay, capital expenditures, and operating expenses. In MEC-NFV networks, network services are deployed in the form of service function chains (SFCs), each consisting of an ordered set of virtual network functions (VNFs). In this paper, we focus on the VNF placement problem in MEC-NFV enabled networks, aiming to optimize the throughput of SFC requests (SFCRs). First, we involve the sharing mechanism of VNF instances in the problem formulations, which can improve network resource utilization and save more node resources. Then we formulate the problem mathematically and propose a correlation-based mapping algorithm to map SFCRs in the network. Moreover, we design an adjustment algorithm to optimize the mapped SFCRs. Evaluation results show that our proposed solution efficiently improves the throughput of SFCRs compared with the benchmarks.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418170">Poster: Design of an IoT-based water flow monitoring system</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Zill Ullah Khan and M Umair Anwar (Information Technology University); Sabah Pirani (University of Michigan); Faisal Lalani (Microsoft Research); Babatunde Adegoke (University of Colorado Boulder); Tauseef Tauqeer (Information Technology University); Mustafa Naseem (University of Michigan)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://www.youtube.com/watch?v=dDoZZtf5qgI'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://www.youtube.com/watch?v=mOydLqJ-Xq8&feature=youtu.be'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo15"></a>
<br/>
<div id="demo15" class="collapse">
  In this paper, we present the design of a low-cost IoT based approach to monitor the amount of water dispensed at communal clean water collection nodes called Water Filtration Plants. The design of our system caters to the limitations of low-resource settings, such as brown-outs, power surges, data connectivity issues, while our data processing methodology caters to the limitations inherent in the use of low-cost hardware installed in our deployment. Our actionable insights help the water utility of a dense Urban city in Pakistan improve the quality of service of providing clean drinking water to its residents.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3418171">Poster: Age of Information in Wireless Networks: from Theory to Implementation</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Igor Kadota, M. Shahir Rahman, and Eytan Modiano (MIT LIDS)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/A99CLPL0t3k'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/8B7h6Y2fOMQ'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo16"></a>
<br/>
<div id="demo16" class="collapse">
  Emerging applications, such as smart factories and fleets of drones, increasingly rely on sharing time-sensitive information for monitoring and control. In such application domains, it is essential to keep information fresh, as outdated information loses its value and can lead to system failures and safety risks. The Age of Information (AoI) is a performance metric that captures how fresh the information is from the perspective of the destination. In this paper, we show that as the congestion in the wireless network increases, the AoI degrades sharply, leading to outdated information at the destination. Leveraging years of theoretical research, we propose and implement WiFresh: an unconventional architecture that achieves near optimal information freshness in wireless networks, regardless of the level of congestion. Our experimental results show that WiFresh can improve information freshness by two orders of magnitude when compared to an equivalent standard WiFi network.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417314">Demo: BeeCast: A Collaborative Video Streaming System</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Asaad AlGhamdi, Younes Balah, Muhamad Felemban, and Mohammad AlBejadi (King Fahd University of Petroleum and Minerals)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/QB8J28BjkYg'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://www.youtube.com/watch?v=73RwezPiDkE'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo17"></a>
<br/>
<div id="demo17" class="collapse">
  In this paper, we propose BeeCast, a collaborative video streaming system, that allows a group of mobile users to cooperate in streaming video content. The novelty of the proposed system is that it allows each user to watch the same video content on their own device at the same time. This entails proposing a method to exchange the downloaded video chunks among the users using device-to-device communication. The proposed system is composed of two components: BeeBuzzer, and BeePlanner. The BeePlanner component performs chunk scheduling, while the BeeBuzzer component manages and coordinates the chunk exchange among devices.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417315">Demo: 5G Edge Enhanced Mobile Augmented Reality</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Xiang Su (University of Helsinki and University of Oulu); Jacky Cao (University of Oulu); Pan Hui (University of Helsinki and The Hong Kong University of Science and Technology)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/49xC9o9c6SA'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/TpEFwMIs8V4'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo18"></a>
<br/>
<div id="demo18" class="collapse">
  Mobile Augmented Reality (MAR) provides a unique experience where the physical world is augmented with virtual annotations. MAR involves computation-heavy algorithms that could potentially be offloaded to edge servers on 5G networks, which significantly enhances MAR with reduced communication latency and more stable network connections, therefore leading to seamless MAR user experiences. In this demo, we show a running MAR system deployed on a 5G edge test bed and present latency results.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417316">Demo: A Hyperlocal Mobile Web for the Next 3 Billion Users</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Arjuna Sathiaseelan, Arko Chatterjee, Mukund Lal, Yasir Zaki, and Lakshminarayanan Subramanian (Gaius Networks)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/YPowdlzY2b8'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/RXwGD-FuMHo'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo19"></a>
<br/>
<div id="demo19" class="collapse">
  Despite increasing mobile Internet penetration in developing regions, growing web page complexity and the lack of optimization from remote content providers make the web experience poor in these areas. The high relative bandwidth cost, poor network performance, and lack of relevant local content combine to dampen the demand for the Internet and services it enables. In this paper we propose GAIUS, a content ecosystem enabling efficient creation and dissemination of locally relevant web content. At its core, GAIUS consists of the following innovations: a locally sustainable content ecosystem, and MAML, a web specification language that simplifies web pages to reduce costs and lower barriers for content creation.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417327">Demo: M-Cube: An Open-Source Millimeter-Wave MIMO Software Radio for Wireless Communication and Sensing Applications</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Renjie Zhao, Timothy Woodford, Teng Wei, Kun Qian, and Xinyu Zhang (University of California San Diego)</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/Z_TUj4eEw-Q'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/f6WbcZwUJbM'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo20"></a>
<br/>
<div id="demo20" class="collapse">
  Millimeter-wave (mmWave) technologies represent a cornerstone for emerging wireless network infrastructure, and for RF sensing systems in security, health, and automotive domains. Through a MIMO array of phased arrays with hundreds of antenna elements, mmWave can boost wireless bit-rates to 100+ Gbps, and potentially achieve near-vision sensing resolution. However, the lack of an experimental platform has been impeding research in this field. We propose to fill the gap with M3 (M-Cube), the first mmWave massive MIMO software radio. M3 features a fully reconfigurable array of phased arrays, with up to 8 RF chains and 256 antenna elements. Despite the orders of magnitude larger antenna arrays, its cost is orders of magnitude lower, even when compared with state-of-the-art single RF chain mmWave software radios. In this demo, we will show M3's hardware modules, and demonstrate its usage in mmWave MIMO communication and sensing.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417317">Demo: A Query Engine for Zero-streaming Cameras</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Mengwei Xu (Peking University); Tiantu Xu (Purdue ECE); Yunxin Liu (Microsoft Research); Xuanzhe Liu and Gang Huang (Peking University); Felix Xiaozhu Lin (Purdue ECE)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://www.youtube.com/watch?v=sy-u-bzk48s'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://www.youtube.com/watch?v=32pFQ84eufA'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo21"></a>
<br/>
<div id="demo21" class="collapse">
  Low-cost wireless cameras are growing rapidly. With the help of advanced machine learning models (e.g., CNNs), those videos exhibit high business and social values, e.g., for retailing planning, wildlife study, and traffic monitoring. However, with high compute need, traditional video analytics systems require all videos to be uploaded to a backend server, which stresses the scarce network bandwidth between cameras and servers.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417318">Demo: The Implementation of Stigmergy in Network-assisted Multi-agent System</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Kun Chen and Rongpeng Li (Zhejiang University); Jon Crowcroft (University of cambridge); Zhifeng Zhao (Zhejiang Lab); Honggang Zhang (Zhejiang University)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://www.youtube.com/watch?v=rZiYdJfkQ3k&feature=youtu.be'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://www.youtube.com/watch?v=xxZy2gw7ujg&feature=youtu.be'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo22"></a>
<br/>
<div id="demo22" class="collapse">
  Multi-agent system (MAS) needs to mobilize multiple simple agents to complete complex tasks. However, it is difficult to coherently coordinate distributed agents by means of limited local information. In this demo, we propose a decentralized collaboration method named as "stigmergy" in network-assisted MAS, by exploiting digital pheromones (DP) as an indirect medium of communication and utilizing deep reinforcement learning (DRL) on top. Correspondingly, we implement an experimental platform, where KHEPERA IV robots form targeted specific shapes in a decentralized manner. Experimental results demonstrate the effectiveness and efficiency of the proposed method. Our platform could be conveniently extended to investigate the impact of network factors (e.g., latency, data rate, etc).
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417319">Demo: WhiteHaul: White Space Spectrum Aggregation System for Backhaul</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Mohamed M. Kassem (Cairo University); Morteza Kheirkhah (University College London); Mahesh K. Marina and Peter Buneman (The University of Edinburgh)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/VV6AL5S8E7M'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/VYbrc1p5cww'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo23"></a>
<br/>
<div id="demo23" class="collapse">
  Today almost half the world's population does not have Internet access. This is particularly the case in rural and undeserved regions where providing Internet access infrastructure is challenging and expensive. To this end, we present demonstration of WhiteHaul [5], a low-cost hybrid cross-layer aggregation system for TV White Space (TVWS) based backhaul. WhiteHaul features a custom-designed frequency conversion substrate that efficiently handles multiple noncontiguous chunks of TVWS spectrum using multiple low-cost COTS 802.11n/ac cards but with a single antenna. At the software layer, WhiteHaul uses MPTCP as a link-level tunnel abstraction to efficiently aggregate multiple chunks of the TVWS spectrum via a novel uncoupled, cross-layer congestion control algorithm. This demo illustrates the unique features of the WhiteHaul system based on a prototype implementation employing a modified version of MPTCP Linux Kernel and a custom-designed conversion substrate. Using this prototype, we highlight the performance of the WhiteHaul system under various configurations and network conditions.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417320">Demo: Bringing Hybrid Analog-Digital Beamforming to Commercial MU-MIMO WiFi Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Thomas Kuhne, Piotr Gawłowicz, Anatolij Zubow, Falko Dressler, and Giuseppe Caire (Technische Universit√§t Berlin)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/PPlUObHxwcY'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/4TWXdRqlrwQ'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo24"></a>
<br/>
<div id="demo24" class="collapse">
  Commercial off-the-shelf (COTS) IEEE 802.11ac WiFi systems only use a low number of antennas. This limits the multi-user MIMO (MU-MIMO) performance and, hence, the throughput of such systems, especially in dense environments. We present a unique solution based on hybrid digital-analog (HDA) beamforming to overcome the limitation of COTS WiFi hardware and effectively increase the MU-MIMO gain and to unlock the potential of MU-MIMO in WiFi. We use COTS WiFi hardware in combination with a self-developed beamforming module and novel algorithms for the HDA approach, leveraging the MU-MIMO precoding of the WiFi system. The implemented control and signal processing software is fully transparent to the WiFi part, i.e., no protocol changes are needed. We demonstrate the increase in MU-MIMO gain using unmodified COTS end-user terminals.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417321">Demo: Service-Oriented Intelligent and Extensible RAN</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Robert Schmidt and Navid Nikaein (EURECOM)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/E4BmLbL3sj8'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/KxTEpFe5dJU'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo25"></a>
<br/>
<div id="demo25" class="collapse">
  Network slicing is considered to be the enabler for a coexistence of a multitude of services on a multi-tenant 5G infrastructure. It is supported through software-defined radio access networking (SD-RAN), bringing programmability to the network in order to enhance performance according to the needs of slice owners. However, SD-RAN so far remained limited to a mere reconfiguration of the base station. In this work, we demonstrate a prototype of a service-oriented RAN on top of the OpenAirInterface and Mosaic5G platforms that brings programmability and extensibility to the RAN with a range of network applications for the purpose of intelligent slicing. We implemented a slice control and management framework, and plug a traffic analysis application that significantly improves the performance of slice users. We observe an improvement of 30% in application round-trip time with negligible variability for the considered traffic. Further, we demonstrate how to extend control plane functionality from a network store to improve slice performance.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417322">Demo: WiChronos: Energy-Efficient Modulation for Long-Range,Large-Scale Wireless Networks</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Yaman Singh Sangar and Bhuvana Krishnaswamy (University of Wisconsin - Madison)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/7C3hQp244iM'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/9EI3f0a2yI8'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo26"></a>
<br/>
<div id="demo26" class="collapse">
  Power efficient wireless communication has become a bottleneck for long range and large scale deployments. We propose and prototype WiChronos, an energy efficient modulation technique for long range wireless communication in a large scale network. Using off-the-shelf (OTS) components, we demonstrate that WiChronos achieves an impressive 60% improvement in battery life compared to state-of-the-art LPWAN technologies at distances over 800 meters. We also show that more than 1000 WiChronos senders co-exist with less than 5% probability of collisions in low traffic conditions.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417323">Demo: Accelerometer-based Smartphone Eavesdropping</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Zhongjie Ba (Zhejiang University); Tianhang Zheng (University of Toronto); Zhan Qin, Hanlin Yu, and Liu Liu (Zhejiang University); Baochun Li (University of Toronto); Xue Liu (McGill University); Kui Ren (Zhejiang University)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/2fh6NwMSJaM'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/aIHYptMMdcg'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo27"></a>
<br/>
<div id="demo27" class="collapse">
  In this demonstration, we show that audio signals emitted by a smartphone speaker can be captured by the accelerometer on the same smartphone, and accelerometers on recently released smartphones can cover most of the fundamental frequency band of adult speech. Based on these pivotal observations, we present AccelEve, a new side channel attack that allows smartphone applications to eavesdrop on the smartphone speaker without the requirement of sensitive system permissions. Through analyzing the accelerometer measurements of a smartphone, AccelEve is able to: 1) recognize the speech information (text) carried by the acceleration signal; 2) reconstruct the audio signal played by the smartphone speaker. This demo will present experimental validations for our observations and the proposed system.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417324">Demo: Remote Experimentation with Open-Access Full-Duplex Wireless in the COSMOS Testbed</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Manav Kohli, Tingjun Chen, Jackson Welles, and Mahmood Baraani Dastjerdi (Columbia University); Jakub Kolodziejski, Michael Sherman, and Ivan Seskar (WINLAB, Rutgers University); Harish Krishnaswamy and Gil Zussman (Columbia University)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://www.youtube.com/watch?v=jA11cDbO0Jc'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://www.youtube.com/watch?v=BmCFjwDEJ6g'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo28"></a>
<br/>
<div id="demo28" class="collapse">
  To support experimentation with full-duplex (FD) wireless, we recently integrated two FlexICoN Gen-2 wideband FD radios in the open-access, city-scale NSF PAWR COSMOS testbed. Each integrated FD radio consists of an antenna, a customized Gen-2 RF self-interference (SI) canceller box, a USRP software-defined radio, and a remotely accessible compute node. The RF SI canceller box includes an RF canceller printed circuit board which emulates an integrated circuit implementation based on the technique of frequency-domain equalization. The Gen-2 canceller box can achieve up to 50 dB RF SI cancellation across 20MHz bandwidth. In this demo, we present the design and implementation of the open-acccess, remotely accessible FD radios that are integrated in the indoor COSMOS Sandbox 2 at Columbia University. We also demonstrate example experiments that are available to researchers, where demo participants can observe the visualized performance of the open-access FD radios.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417325">Demo: Slicing-Enabled Private 4G/5G Network for Industrial Wireless Applications</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Jaya Thota and Adnan Aijaz (Toshiba Europe Ltd.)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://www.youtube.com/watch?v=QwuTZZrtsnk'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://www.youtube.com/watch?v=PzRilcaYVt0'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo29"></a>
<br/>
<div id="demo29" class="collapse">
  Private deployments of 4G and 5G networks in industrial environments are beneficial from various aspects. Private 4G/5G networks typically face the challenge of supporting heterogeneous industrial applications. This technology demonstration highlights the importance of network slicing in private 4G/5G networks. It shows that network slicing is crucial for performance guarantees in multiservice co-existence scenarios. With network slicing, our private 4G/5G network successfully supports closed-loop control, event-driven control and video streaming applications.
</div></li>

<li class="list-group-item bg-light">
<h6 class="card-title"><b>
<a href="https://dl.acm.org/doi/10.1145/3372224.3417326">Demo: Edge-SLAM: Edge-Assisted Visual Simultaneous Localization and Mapping</a></b></h6>
<h6 class="card-subtitle mb-2 text-muted">
Ali J. Ben Ali, Zakieh Sadat Hashemifar, and Karthik Dantu (University at Buffalo)
</h6>
<h6 class='card-subtitle mb-2 text-muted'><a href='https://youtu.be/LLsbALyANA8'>Elevator pitch</a>&nbsp;&nbsp;&nbsp;<a href='https://youtu.be/AeTK4EyfRZ0'>Full presentation</a></h6>
<a href="" class="abstract collapsed" data-toggle="collapse" data-target="#demo30"></a>
<br/>
<div id="demo30" class="collapse">
  The recent advances in mobile devices have allowed them to run spatial sensing algorithms such as Visual Simultaneous Localization and Mapping (Visual-SLAM). However, the resource requirements of Visual-SLAM prevents long-operation of such algorithm on mobile devices. We demonstrate Edge-SLAM [2], a system that adapts edge computing into Visual-SLAM through a split architecture. Edge-SLAM offloads the compute-intensive modules of Visual-SLAM to the edge without losing accuracy. Our experiments show that Edge-SLAM architecture reduces the use of computation and memory resources on mobile devices and keeps it constant. Thus, enabling long-operation of Visual-SLAM along with other applications services on mobile devices.
</div></li>
<!--
The MobiCom demo and poster sessions solicit the submission of research, platform, and product demonstrations and posters from both academia and industry.<br/><br/>

Demonstrations should showcase innovative research or product prototypes, platforms, and applications in the areas of mobile computing and wireless and mobile networking. We strongly encourage live​ demos based on novel applications in the domain of mobile computing and wireless systems. We also welcome live​ demos reproducing evaluation results of papers appearing in ACM Mobicom 2019 or past editions as well as other relevant venues.<br/><br/>

The MobiCom 2019 Poster Session will provide an excellent opportunity for initial feedback on your early research results and give your ongoing projects early visibility. ACM MobiCom 2019 will host an ACM <a href="src.php">Student Research Competition (SRC)</a> alongside the Posters Program. SRC offers graduate and undergraduate students an opportunity to present their original research, and get feedback. The presenters are strongly encouraged to include their poster submission for the SRC.<br/><br/>

The MobiCom 2019 Demo and Poster committee will review all submissions to select the accepted demos and posters. All accepted submissions will be considered for Best Demo and Best Poster Awards. A committee will decide the winner on-site after evaluating all presentations.<br/><br/>

Please refer to the main conference introduction and <a href="cfp.php">CFP</a> for the general areas that are relevant to the typical MobiCom audience.<br/><br/>

<h5><b>Why should you submit a Demo or Poster?</b></h5>
Presenting a demo or poster is a great opportunity, especially for students and industry, to obtain valuable feedback on ongoing research from the knowledgeable crowd at the conference. Accepted submissions will be posted on the conference website and published as a three-page abstract for the archived conference proceedings and the ACM digital library.<br/><br/>

<h5><b>Where and What to Submit?</b></h5>
Please submit a proposal of your demo or poster at <a href="https://mobicom19demos-posters.hotcrp.com/">https://mobicom19demos-posters.hotcrp.com/</a>. It should be a summary or extended abstract describing the research to be presented, maximum 3 pages in US letter size (8.5 x 11 inches) with font no smaller than 10 point size, in PDF file format. Please ensure that the proposal includes:<br/><br/>

The names, affiliations, and email addresses of the authors, and whether the submission should preferably be considered for the demo session, or the poster session. If presenting a demo, mention the equipment to be used for the demo (check default setup below), the space and setup time required, and any additional facilities needed including estimated power connections needed for the demo, special environments and tools, Internet access, physical space requirements, etc.<br/><br/>

<h5><b>Can I also include a poster when presenting the demo?</b></h5>
Yes. All accepted demo submissions would also be provided with a single easel for displaying the accompanied poster.<br/><br/>


<h5><b>Default Setup:</b></h5>
For all accepted submissions in demo or poster sessions, a single easel for displaying a poster will be provided. Suggested poster size is 3 x 3 ft, or 3 x 4 ft in portrait orientation. By no means should the poster exceed 4x6 ft in portrait orientation.<br/><br/>

For submissions accepted for demos, additionally a single 6 x 2.5 ft table would be provided. Demo participants should bring extension power cable/multi-point along with suitable power adapters and voltage transformers.<br/><br/>

<h5><b>SRC instructions:</b></h5>
Indicate whether you would like the poster submission to be considered for the Student Research Competition (SRC). Indicate your correct identifier by adding [SRC/Undergraduate] or <b>[SRC/Graduate]</b> in the submission title for consideration in respective SRC category. Note that if any of the authors is a graduate student, then the submission will be considered under the graduate category.<br/><br/>

<h5><b>Important Dates:</b></h5>
<div class="table-responsive">
<table class="table table-striped table-sm">
<tr>
<th>Deadlines</th>
<th>Dates</th>
</tr>
<tr>
<td>Submission</td>
<td>June 15, 2019 11:59 PM</td>
</tr>
<tr>
<td>Notification of acceptance</td>
<td>June 24, 2019 11:59 PM</td>
<tr>
<td>Camera-ready</td>
<td>July 1, 2019</td>
</tr>
</table>
</div>

<b>For further questions, please contact the chairs:</b>
<a href="mailto:mobicom19demos-posters@googlegroups.com">mobicom19demos-posters@googlegroups.com</a>
<br/><br/>
<h5><b>Important Notes:</b></h5>
AUTHORS TAKE NOTE: The official publication date is the date the proceedings are made available in the ACM Digital Library. This date may be up to two weeks prior to the first day of your conference. The official publication date affects the deadline for any patent filings related to published work. (For those rare conferences whose proceedings are published in the ACM Digital Library after the conference is over, the official publication date remains the first day of the conference.)

<br/>-->

</main>

</center>
<?php require_once('footer2.php'); ?>

</body>
</html>
