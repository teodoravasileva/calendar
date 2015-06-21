<?php
	class Calendar extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$pref=array('month_type'=>'short',
			            'day_type'=>'short',
						'start_day'=>'monday');
			
			$this->load->library('calendar',$pref);
			
			$data=array(
					10=>'http://school.vratsasoftware.com/wp-content/uploads/2015/05/1.-OOP-Intro.pdf',
					13=>'http://school.vratsasoftware.com/wp-content/uploads/2015/05/2.-OOP-Inheritance.pdf',
					17=>'http://school.vratsasoftware.com/wp-content/uploads/2015/05/3.1-OOP-Intefraces.pdf',
					20=>'http://school.vratsasoftware.com/wp-content/uploads/2015/05/4.-CI-Controllers.pdf',
					24=>'http://school.vratsasoftware.com/wp-content/uploads/2015/05/5.-CI-Models.pdf',
					27=>'http://school.vratsasoftware.com/wp-content/uploads/2015/05/6.-CI-Views.pdf');
		
			
			echo '<p style="margin-left:80px;">'.$this->calendar->generate(2015,5,$data).'</p>';
			
						
		}
	
	}
?>