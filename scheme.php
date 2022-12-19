


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>scheme</title>
		<?php include "assets/csslink.php"?>

	<?php include "assets/jslink.php"?>



<script type="text/javascript">
var interval;
function startTicker()
{

$("#news li:first").slideUp(function(){
	$(this).appendTo($("#news")).slideDown();
});
}
function stopTicker(){
clearInterval(interval);
}
$(document).ready(function(){

interval=setInterval(startTicker,2000);
$("#news").hover(function(){
	stopTicker();
},function(){
	interval=setInterval(startTicker,2000);
});
});
</script>




<?php 

session_start();
if (!isset($_SESSION['mobile'])) {
?>

<script type="text/javascript">
	window.location.replace("index.php");
</script>

<?php  

}
 ?>






		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		
		<div>
			<div class="">
				
				<div class="gvtheader">
					<h1>Government Schemes</h1>
					<p>Good Facility for Farmers</p>
				</div>
				<div class="row">
					
					<div class="col-lg-7 col-md-7 col-12">
						<div class="container">
							<div class="gvtscheme">
								<h4 class="mt-3 font-weight-bold">Pradhan Mantri Kisan Maandhan yojana </h4>
								<p class="mt-2"> Prime Minister Narendra Modi launched a pension scheme for the small & marginal farmers of India last September. Under this pension scheme about 5 crore marginalised farmers will get a minimum pension of Rs 3000 / month on attaining the age of 60. Those who fall in the age group of 18 - 40 years will be eligible to apply for the scheme. Under this scheme, the farmers will be required to make a monthly contribution of Rs 55 to 200, depending on their age of entry, in the Pension Fund till they reach the retirement date, 60 years. The Government will make an equal contribution of the same amount in the pension fund for the cultivators. For more details click- <a href="https://pmkmy.gov.in/">pmkmy.gov.in </a></p>
								<img src="img/k33.jpeg" class="img-thumbnail img-fluid"alt="">
								<h4 class="mt-3 font-weight-bold">PM-Kisan Scheme </h4>
								<p> Pradhan Mantri Kisan Samman Nidhi Yojana is an initiative of the Government wherein 120 million small and marginal farmers of India with less than two hectares of landholding will get up to Rs. 6,000 per year as a minimum income support. PM-Kisan scheme has become operational since 1st December 2018. Under this scheme, cultivators will get Rs. 6000 in three installments. For more details check- <a href="https://www.pmkisan.gov.in/">pmkisan.gov.in/ </a></p>
								
								<img src="img/k11.jpeg" class="img-thumbnail img-fluid"  alt="">
								<h4 class="mt-3 font-weight-bold">Pradhan Mantri Fasal Bima Yojana (PMFBY)</h4>
								<p>Pradhan Mantri Fasal Bima Yojana is an actuarial premium based scheme where farmer has to pay maximum premium of 2 percent for Kharif, 1.5 percent for Rabi food & oilseed crops and 5 percent for annual commercial or horticultural crops and the remaining part of the actuarial or bidded premium is equally shared by the Central & State Government.  An important purpose of the scheme is to facilitate quick claims settlement. The claims should be settled within 2 months of harvest subject to timely provision of both yield data & share of premium subsidy by State Government. Check this link for more details <a href="https://pmfby.gov.in/">pmfby.gov.in/</a></p>
								<img src="img/k3.jpeg" class="img-thumbnail img-fluid"  alt="">
								<h4 class="mt-3 font-weight-bold">Paramparagat Krishi Vikas Yojana (PKVY)</h4>
								<p>Paramparagat Krishi Vikas Yojana is implemented with the aim to promote organic cultivation in India. To improve soil health as well as organic matter content and to boost the net income of the farmer so as to realize premium prices.  Under Paramparagat Krishi Vikas Yojana, an area of 5 lakh acre is targeted to be covered though 10,000 clusters of 50 acre each, from 2015-16 to 2017-18. <a href="https://pkvy.gov.in/">pkvy.gov.in/</a></p>
								
								<img src="img/k5.jpeg" class="img-thumbnail img-fluid"  alt="">
								
								<h4 class="mt-3 font-weight-bold">Soil Health Card Scheme</h4>
								<p>Soil health card scheme was launched in the year 2015 in order to help the State Governments to issue Soil Health Cards to farmers of India.  The Soil Health Cards gives information to farmers on nutrient status of their soil along with recommendation on appropriate dosage of nutrients to be applied for improving soil health and its fertility. Check for more information <a href="https://soilhealth.dac.gov.in">soilhealth.dac.gov.in/</a> </p>
								<img src="img/k2.jpeg" class="img-thumbnail img-fluid"  alt="">
								<h4 class="mt-3 font-weight-bold">Pradhan Mantri Krishi Sinchai Yojana (PMKSY)</h4>
								<p>Pradhan Mantri Krishi Sinchai Yojana was launched on 1 July 2015 with the motto ‘Har Khet Ko Paani’ to provide end-to end solutions in irrigation supply chain, viz. water sources, distribution network & farm level applications. PMKSY focuses on creating sources for assured irrigation, also creating protective irrigation by harnessing rain water at micro level through ‘Jal Sanchay’ & ‘Jal Sinchan’.<a href="https://pmksy.gov.in">pmksy.gov.in</a></p>
								
								<p class="font-weight-bold">Component:-</p>
								<p > <li class="ml-5"> Accelerated Irrigation Benefit Programme - implemented by Ministry of Water Resources, RD & GR.</li></p>
								<p><li class="ml-5">PMKSY (Har Khet ko Pani) - implemented by Ministry of Water Resources, RD & GR.</li></p>
								<p><li class="ml-5">PMKSY (Watershed) - implemented by Department of Land Resources.</li></p>
								<p><li class="ml-5">PMKSY(Per Drop More Crop - PDMC).</li></p>
								<img src="img/k22.jpeg" class="img-thumbnail img-fluid"  alt="">
								<h4 class="mt-3 font-weight-bold">National Agriculture Market (e-NAM) </h4>
								<p>National Agriculture Market gives an e-marketing platform at the national level and support creation of infrastructure to enable e-marketing. This new market process is revolutionizing agriculture markets by guaranteeing better price discovery. It also brings in transparency & competition to enable cultivators to get improved remuneration for their produce moving towards ‘One Nation One Market’.  Steps to register on e-NAM  <a href="https://e-nam.gov.in">Register Here</a></p>
								<img src="img/k23.jpeg" class="img-thumbnail img-fluid"  alt="">
								<h4 class="mt-3 font-weight-bold">Dairy Entrepreneurship Development Scheme  </h4>
								<p>The Department of Animal Husbandry, Dairying & Fisheries (DAHD&F) had launched a pilot scheme called as “Venture Capital Scheme for Dairy & Poultry” in the year 2005-06.  The scheme aimed at extending support for setting up small dairy farms and other components to bring structural changes in the dairy sector. Later on, DAHD&F changed its name to 'Dairy Entrepreneurship Development Scheme' (DEDS) & the revised scheme came into operation with effect from 1st September, 2010.</p>
								<img src="img/k20.jpeg" class="img-thumbnail img-fluid"  alt="">
								<h4 class="mt-3 font-weight-bold">Rainfed Area Development Programme (RADP)</h4>
								<p>Rainfed Area Development Programme was started as a sub-scheme under the Rashtriya Krishi Vikas Yojana (RKVY). The aim was to improve quality of life of farmers’ especially, small & marginal farmers by giving a complete package of activities to maximize farm returns. It also help in increasing agricultural productivity of rainfed areas in a sustainable way by adopting suitable farming system based approaches. It minimises the adverse impact of possible crop failure because of drought, flood or un-even rainfall distribution through diversified & composite farming system. The programme also help in increasing farmer’s income & livelihood support for reduction of poverty in Rainfed areas.</p>
								<img src="img/k34.jpeg" class="img-thumbnail img-fluid"  alt="">
								<h4 class="mt-3 font-weight-bold">National Mission for Sustainable Agriculture (NMSA)</h4>
								<p>National Mission for Sustainable Agriculture is one of the eight Missions under the National Action Plan on Climate Change (NAPCC). It is aimed at promoting Sustainable Agriculture via climate change adaptation measures, boosting agriculture productivity especially in Rainfed areas focusing on integrated farming, soil health management & synergizing resource conservation.</p>
								
								<p class="font-weight-bold">Schemes under NMSA</p>
								<p><li class="ml-5">Rainfed Area Development (RAD) - implemented by RFS Division.</li></p>
								<p><li class="ml-5">Sub Mission on Agro Forestry (SMAF) - implemented by NRM Division</li></p>
								<p><li class="ml-5">Soil Health Management (SHM) - implemented by INM Division</li></p>
								<p><li class="ml-5">Paramparagat Krishi Vikas Yojana (PKVY) - implemented by INM Division</li></p>
								<p><li class="ml-5">National Rainfed Area Authority (NRAA) - implemented by RFS Division</li></p>
								<p><li class="ml-5">Soil and Land Use Survey of India (SLUSI) - implemented by RFS Division</li></p>
								<p><li class="ml-5">National Centre of Organic Farming (NCOF) - implemented by INM Division</li></p>
								<p><li class="ml-5">Mission Organic Value Chain Development in North Eastern Region (MOVCDNER) - implemented by INM Division</li></p>
							</div>
						</div>

					</div>

<div class="col-lg-5">
<div class="headertxt">
	<h2>Latest News</h2>
	<p>Daily Latest News</p>
</div>

<section>
<div class="newsphp ">

		<?php
		include "insertnews.php";
		$sql="SELECT * FROM news";
		$q=mysqli_query($con,$sql);
		while($res=mysqli_fetch_array($q)){
		?>		



			<ul id="news">
				<li class="card-header m-2"><i class="fa fa-bookmark p-3 m-2"></i><?php echo $res['news']; ?></li>
	
					<?php
				}
				?>
</ul>
						</div>
						</section>

				</div>

			</div>
		</div>
	</div>
</div>
<?php include "assets/jslink.php"?>
</body>
</html>
</script>








