<?php
class Inquiry
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
			$this->_table = 'ga_newsletter';
			$this->_sectionName = " Newsletter";
			$this->_pageHead = 'Manage'.$this->_sectionName;
			(isset($_GET['id']) && $_GET['id'] != '') ? $this->_actionName = 'Update '.$this->_sectionName: $this->_actionName = 'Add '.$this->_sectionName;
			(isset($_GET['id']) && $_GET['id'] != '') ? $this->_action = 'update' : $this->_action = 'add';
			(isset($_GET['view']) && $_GET['view'] == 'add') ? $this->_view = 'add' : $this->_view = 'list';	
		}
		
		
		public function initializePage()
		{
			$this->processParams();
			admin_header();
			//top_menu();	
		}
		
		 public function getList()
		  {
		   $q1 = "select * from ".$this->_table." where 1";
		   if(isset($_GET['action']) && $_GET['action'] == 'search')
		   {
			//process search code 
		   }
		   $q1 .= " order by id desc";
		   $this->_records = mysql_query($q1);
		   $this->_recordCount = mysql_num_rows($this->_records);
		   
		   if($this->_recordCount == 0)
			{ 
			$this->_mess = "No records present.";
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
				if($_REQUEST['action'] == 'add')
				{
					$this->addRecord();
				}
				else if($_REQUEST['action'] == 'update')
				{
					$this->updateRecord();
				}
				else if($_REQUEST['action'] == 'activate')
				{
					$this->activateRecord();
				}
				else if($_REQUEST['action'] == 'deactivate')
				{
					$this->deactivateRecord();
				}
				else if($_REQUEST['action'] == 'delete')
				{
					$this->deleteRecord();
				}
			}
			
		}
		
		public function activateRecord()
		{
				if(!isset($_GET['id']))
				{
					$this->_mess = '<strong>Invalid Request</strong>: Bad Request.';
					$this->_messageClass = 'error';
				}
				else
				{
						$q = "update $this->_table set status = 'Y' where id=".$_GET['id'];
						if(mysql_query($q))
						{
							$this->_mess = 'Record has been activated successfully';
							$this->_messageClass = 'success';
						}
						else
						{
							$this->_mess = '<strong>ERROR</strong>: Error Processing Request. Please retry.';
							$this->_messageClass = 'error';
						}
				}
		}

		public function deactivateRecord()
		{
				if(!isset($_GET['id']))
				{
					$this->_mess = '<strong>Invalid Request</strong>: Bad Request.';
					$this->_messageClass = 'error';
				}
				else
				{
						$q = "update $this->_table set status = 'N' where id=".$_GET['id'];
						if(mysql_query($q))
						{
							$this->_mess = 'Record has been deactivated successfully';
							$this->_messageClass = 'success';
						}
						else
						{
							$this->_mess = '<strong>ERROR</strong>: Error Processing Request. Please retry.';
							$this->_messageClass = 'error';
						}
				}
		}
		

		public function deleteRecord()
		{
				if(!isset($_REQUEST['id']))
				{
					$this->_mess = '<strong>Invalid Request</strong>: Bad Request.';
					$this->_messageClass = 'error';
				}
				else
				{
						$q = "delete from $this->_table where id=".$_REQUEST['id'];
						if(mysql_query($q))
						{
							$this->_mess = 'Record has been deleted successfully';
							$this->_messageClass = 'success';
						}
						else
						{
							$this->_mess = '<strong>ERROR</strong>: Error Processing Request. Please retry.';
							$this->_messageClass = 'error';
						}
				}
		}
		
	public function addRecord()
		{
          //=============
		}
		
		public function displayMessage()
		{
			if($this->_mess != '')
				display_message($this->_mess,$this->_messageClass);
		}
		
		
		public function updateRecord()
		{
			//===============
		}
		
				

	public function showRecords($start='',$records='')
		{
			$q = "select * from ".$this->_table." where 1";
			
			//$q .= " AND status != 'D'";
			
			if(isset($_GET['sort']) && $_GET['sort'] != '')
				$q .= ' order by '.$_GET['sort'].' '.$_GET['sort_type'];
			else	
				$q .= " order by id desc";
				
			if($start != '')
				$q .= ' LIMIT '.$start.",".$records;
			$this->_records = mysql_query($q);
			$this->_recordCount = mysql_num_rows($this->_records);
			
			if($this->_recordCount == 0)
				{	
				$this->_mess = "No records present. ";
				$this->_messageClass = 'info';
				$this->_view = 'list';
				}
	
	}
}
?>