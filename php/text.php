<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$namepage="Home";}
elseif ($page_name=='about.php') {$namepage="About";}
elseif ($page_name=='services.php') {$namepage="Services";}
elseif ($page_name=='reviews.php') {$namepage="Reviews";}
elseif ($page_name=='projects.php') {$namepage="Projects";}
elseif ($page_name=='thank-you.php') {$namepage="Thank You";}
elseif ($page_name=='404.php') {$namepage="Not Found";}
elseif ($page_name=='contact.php') {$namepage="Contact Us";}
//Info
	$Company="";
	$Domain='';//No dejar pleca al final del dominio
	
	
	$Address='';
	// $Street="10724  NE 17Th St";
	// $City="Oklahoma City";
	// $State="Oklahoma";

	$PhoneName="Telefono";
	$Phone='';
	
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);
	$PhoneRef2 = str_replace(str_split(' '), '', $PhoneConvert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='';$MailRef="mailto:".$Mail;
	$Services="";
	$Estimates="";
	$Payment="";
	$Experience="";
	$Schedule="";
	
	$Time= "";
	$Cover="";

	$Facebook="";
	$GoogleMap='';
	$Url_Map='';
//Phrases

	$Description="";	
 	$Phrase = array(	
		"",
	);
	



	//Home  etc.
	$Home = array(		 
		"",
		);


	$About = array(
		"Welcome To $Company",
		"At $Company, we specialize in providing top-quality construction services tailored to meet the unique needs of our clients. With a commitment to excellence, integrity, and innovation, we deliver superior results that exceed expectations and stand the test of time.",
		""
		);

	$AboutText = array (
		"At $Company, we specialize in providing top-quality construction services tailored to meet the unique needs of our clients. With a commitment to excellence, integrity, and innovation, we deliver superior results that exceed expectations and stand the test of time.",
		"Founded on the principles of craftsmanship and professionalism, $Company has been serving Boston for 14 years. Our team of skilled craftsmen, project managers",
		"",
		""
	);


	$ChooseUs = array(
		"We take pride in our workmanship and strive for perfection in every project we undertake. From the foundation to the finishing touches, we pay attention to every detail to ensure the highest quality results.",
		"At $Company, customer satisfaction is our top priority. We work closely with our clients to understand their needs, preferences, and budget, and we go above and beyond to exceed their expectations.",
		"With $Company , you can count on us to deliver on our promises. We adhere to strict timelines and budgets, and we communicate openly and transparently with our clients throughout the entire construction process.",
		"Our team consists of experienced professionals with a wealth of knowledge and expertise in the construction industry. From project managers to skilled craftsmen, we have the talent and resources to handle projects of all sizes and complexities.",
		"",
		"",
	);


 

	//Services
	$SN[1]="Bathroom Remodeling";
	$SD[1]="";

	$SN[2]="Fencing";
	$SD[2]="";

	$SN[3]="drywall";
	$SD[3]="";

	$SN[4]="Roof tile";
	$SD[4]="";

	$SN[5]="lamite floors";
	$SD[5] = "";

	$SN[6]="installation of doors and windows";
	$SD[6] ="";
	
	$textimonials = array(
		"",
		"We had heard stories of projects being delayed, but $Company was the complete opposite. They met the established deadlines and maintained clear communication at every stage of the process.",
		"We hired $Company to design and build our corporate office. We are delighted with the innovative design they came up with and how they managed to bring our vision to life.",
		"The $Company team proved to be highly competent in all phases of our project. From planning to execution, each team member displayed a level of expertise that gave us peace of mind.",
		"What really made the difference was the personalized attention we received. $Company not only focused on the job, but also made sure to understand our specific needs."
	);

	$servicesTitle = array(
		"From Idea to Reality <br> With $Company"
	);

	$ServicesText = array (
		"From residential to commercial projects, $Company offers a comprehensive range of construction services to meet the diverse needs of our clients. Whether you're planning a new construction project, a renovation, or a remodeling project, our team has the knowledge, skills, and resources to bring your vision to life.",
		"",
		"",
		"",
	);

	$Detail = array(		 
		"",
	);



//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,145).'...';};
	if (strlen($Home[0]) > 10){$ExHome=substr($Home[0], 0,87).'...';};

	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,100).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,96).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,82).'...';};
	//if (strlen($SD[5]) > 10){$ExSD[4]=substr($SD[4], 0,108).'...';};
?>

