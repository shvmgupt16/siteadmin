<?php
class Setting
{
		// Variables for member
		
		private $_token;
		private $_param;
		public $_mess;
		public $_messageClass;
		public $_pageHead;
		private $_table;
		public $_sectionName;
		public $_actionName;
		public $_action;
		public $_view;
		public $_records;
		public $_recordCount;
		public $_result;
		private $_fields=array('id'=>'hidden','category_name'=>'input','parent_id'=>'select','created'=>'none','modified'=>'none');
		
		public function generate()
		{
			
		}
		
		public function __construct()
		{
			$this->_mess = '';
			$this->_messageClass = '';
			$this->_table = 'admin';
			$this->_sectionName = " Setting";
			$this->_pageHead = 'Manage'.$this->_sectionName;
			(isset($_GET['id']) && $_GET['id'] != '') ? $this->_actionName = 'Update '.$this->_sectionName: $this->_actionName = 'Add '.$this->_sectionName;
			(isset($_GET['id']) && $_GET['id'] != '') ? $this->_action = 'update' : $this->_action = 'add';
			(isset($_GET['view']) && $_GET['view'] == 'add') ? $this->_view = 'add' : $this->_view = 'list';	
		}
		
		
		public function initializePage()
		{
			$this->processParams();
			admin_header();	
		}
		
		public function getList()
		{
			$q1 = "select * from ".$this->_table." where 1 and account_status = 'Y' ";
			
			if(isset($_GET['category_id']))
			{
				$q1 .= " AND  category_id =".$_GET['category_id'];
				//process search code	
			}
			
			$q1 .= " order by id";
			$this->_records = mysql_query($q1);
			$this->_recordCount = mysql_num_rows($this->_records);
			
			if($this->_recordCount == 0)
				{	
				$this->_mess = "No records present. Click on the Add ".$this->_sectionName." button to add records";
				$this->_messageClass = 'info';
				$this->_view = 'list';
				}
		}
		
		public function showRecord()
		{
			$q = "select * from ".$this->_table." where id =".$_REQUEST['id'];
			$this->_records = mysql_query($q);
			$this->_recordCount = mysql_num_rows($this->_records);	
			if($this->_recordCount == 0)
			{
				$this->_view = 'list';
				$this->_mess = '<strong>Bad Request: </strong> Invalid Id. The requested id doesnot exist.';
				$this->_messageClass = 'error';
			}
			
		}
		
		public function processParams()
		{
			if(isset($_REQUEST['action']))
			{
				 if($_REQUEST['action'] == 'update')
				{
					$this->updateRecord();
				}
				
			}
			
		}
		
		
		public function displayMessage()
		{
			if($this->_mess != '')
				display_message($this->_mess,$this->_messageClass);
		}
		
		
		public function updateRecord()
		{
		if($_POST['username']=='' || $_POST['admin_email']=='' || $_POST['password']=='')
		{
			    $this->_mess = "Error updating. All fields are required.";
				$this->_messageClass = 'error';
		}
		else
		{
		  $q = "update ".$this->_table." set username = '".$_POST['username']."',admin_email='".$_POST['admin_email']."',password='".$_POST['password']."' where id=1";
			if(mysql_query($q))
			{
				$this->_mess = "Record has been updated successfully";
				$this->_messageClass = 'success';	
			}
			else
			{
				$this->_mess = "Error updating recording again. Please try again";
				$this->_messageClass = 'error';
			}
		}
		}
		

		
}
?>