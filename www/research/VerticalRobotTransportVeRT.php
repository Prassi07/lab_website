<?php include $_SERVER['DOCUMENT_ROOT'].'/phpincludes/header.php'; ?>

<!-- Basic Page Needs - Edit keywords and page title here
============================= -->
	<title>Vertical Robot Transport (VeRT) - Biorobotics</title>
	<meta name="Keywords" content="Carnegie Mellon University, robotics, Locomoting Systems">
	<meta name="description" content ="Vertical Robot Transport (VeRT) - Carnegie Mellon Biorobotics" /><!-- Banner and Menu - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/banner.php";?>

<!-- Content - Add content for your page here
============================= -->
    
	<div class="row"><h3 class="c27" id="h.36vhoyah11d"><b><span class="c16">Locomoting Systems</b> - Vertical Robot Transport (VeRT)</span></h3><p class="c4"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 485.50px; height: 249.75px;"><img alt="" src="images/VerticalRobotTransportVeRT/image45.png" style="width: 485.50px; height: 249.75px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c10"><span class="c1">Urban</span><span class="c3 c1">&nbsp;combat theaters and disaster scenarios present a unique challenge as personnel must move rapidly to forward positions while transporting heavy mission-critical equipment up and down stairs. These environments are inherently unstructured, which currently limits the use of robots in these missions. This project aims to identify what technology gaps exist to carry heavy payloads upstairs in unstructured environments quickly. We will accomplish the project goal by defining metrics for robot comparison, establishing the current state-of-the-art baselines, designing and building novel propulsive mechanisms, experimentation and design iteration, integrating multimodal sensing, and developing autonomous control.</span></p><p class="c10 c13"><span class="c3 c1"></span></p><p class="c4"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 576.50px; height: 218.04px;"><img alt="" src="images/VerticalRobotTransportVeRT/image73.png" style="width: 576.50px; height: 218.04px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c10"><span class="c3 c1">While working towards the project goal, we will develop design gradients to better understand the proposed capabilities range and tradeoffs among them. For example, if we add more powerful motors, then intuitively, we would expect the robot payload to increase, but the relationship, in reality, would not be linear. Increasing motor power increased motor weight and required battery power, increasing the overall robot weight, which might reduce the payload capability. By utilizing the design gradients, we ensure that the design decisions made throughout the project will result in better-performing robots. Each robot iteration will further refine our design gradients, effectively creating a feedback loop that will ultimately lead to accomplishing the project goals.</span></p><p class="c10 c13"><span class="c38 c62 c75 c42 c56"></span></p><p class="c4"><span style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 624.00px; height: 297.33px;"><img alt="" src="images/VerticalRobotTransportVeRT/image1.png" style="width: 624.00px; height: 297.33px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);" title=""></span></p><p class="c10"><span class="c2">The design gradients mentioned above are analogous to first-order approximations calculated by perturbing a particular robot parameter and measuring the change in performance, which is limited to comparisons within a specific propulsive mechanism group. For example, if we increase the wheelbase on a tracked robot, the climbing speed will increase, but that may not be true for a wheeled robot. We hypothesize that if we can encode robots of various morphologies onto a common continuous latent space, then on that latent space, we can calculate design gradients that are not unique to one particular morphology. To accomplish this, first, we will create a graph representation of a specific robot. Then we will encode the graph representation onto the latent space using a message-passing neural network coupled with a graph variational autoencoder. The robot&#39;s latent space representation will be input into a performance-predicting neural network (PPN) and a decoder. We will utilize the PPN to calculate the expected performance of the robot and the decoder to estimate the original graph representation. By training the encoder and PNN end-to-end, we force robots with similar abilities to be clustered together on the latent space, even if the robot morphologies are very different. Once training is complete, we can encode a robot onto the latent space, perturb that latent space location and calculate the change in performance with the PNN. This difference in performance over the change in latent space location enables us to calculate the design gradients. We will use the design gradients to identify a performance maximum on latent space and decode the maximum to obtain an optimized robot morphology.</span></p><p class="c10 c13"><span class="c2"></span></p><!-- <div class="six columns">
			<h3><b>Modularity</b> - Modular manipulators</h3>
			<p>
				<b>Modular robotic systems</b> have the potential to be adapted to varying tasks using a single set of reconfigurable hardware, enabling customizable robots to be developed faster and more economically than conventional robots. Currently, even with the engineering experience, calculations and intuitions, it is not immediately evident how to construct and program a modular robot for a task. We research methods to automatically synthesize the design and controllers for modular robot arms.
			</p>
			<div class="eleven columns u-pull-left">
				<img src="images/Modularity/fig2.png" alt="ModularityF2" width="100%;" style="padding-left:1rem;">
				<p class="caption"> Figure2 : A prototype of a robot arm made from HEBI modular actuators.
				</p>
		</div>
		</div>
		<div class="five columns u-pull-right">
			<img src="images/Modularity/fig1.png" alt="ModularityF1" width="100%;" style="padding-left:1rem;">
			<p class="caption"> Figure 1:  Supernumerary arm implemented in hardware, reaching  one  of  the  targets  on  the  overhead  workpiece.  The  end
			effector  is  a  flat  rubberized  plate  with  spring-loaded  hinge.
			The  arm,  attached  to  a  backpack  control  and  power  pack,
			lends the user a helping hand
			</p>
		</div> -->
	</div>
<!-- Gallery - include if page has gallery elements
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/gallery.php";?>

<!-- Footer - Do not change
============================= -->
<?php include $_SERVER['DOCUMENT_ROOT']."/phpincludes/footer.php";?>