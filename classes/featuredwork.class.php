<?php
class Work
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
			$this->_table = 'ga_featured_work';
			$this->_sectionName = " Featured Work";
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
			$q1 = "select * from ".$this->_table." where 1 and status != 'D' ";
			
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
						$q = "update $this->_table set status = 'D' where id=".$_REQUEST['id'];
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
			//==============================
			$url=$_POST['youtube_url'];
			/*
			$ex=explode('<',$x);
			$exx=explode(' ',$ex[1]);
			$e=explode("=", $exx[3]);
			$url1 = str_replace('"','',$e[1]);
			$url = stripslashes($url1);
            */
          //===========================================
			 
			 $filename='';
			  if (is_uploaded_file($_FILES['thumb']['tmp_name']))
					{
					$image = $_FILES['thumb']['name'];
					$r = uniqid();					
					$filename= $r.'_'.$image;
					move_uploaded_file($_FILES['thumb']['tmp_name'], "../uploads/thumb/".$filename);	
					}
			  
			  
			  $q = "insert into ".$this->_table." (work_title,youtube_url,thumb_image,created_date,status) values ('".$_POST['work_title']."','".$url."','".$filename."',now(),'Y')";	
			if(mysql_query($q))
			{
				$this->_mess = "Record Added Successfully";
				$this->_messageClass = 'success';	
			}
			else
			{
				$this->_mess = "Error adding record";
				$this->_messageClass = 'error';	
			}
		}
		
		public function displayMessage()
		{
			if($this->_mess != '')
				display_message($this->_mess,$this->_messageClass);
		}
		
		
		public function updateRecord()
		{
			  $url=$_POST['youtube_url'];
			  //==============================
			/*$v=strlen($_POST['youtube_url']);
			if($v > 50)
			{
			$x=$_POST['youtube_url'];
			$ex=explode('<',$x);
			$exx=explode(' ',$ex[1]);
			$e=explode("=", $exx[3]);
			$url1 = str_replace('"','',$e[1]);
			$url = stripslashes($url1);
			}
			else { 
			$url=$_POST['youtube_url'];
			}
			*/
		  //===========================================
			  
			  $filename='';
			  if (is_uploaded_file($_FILES['thumb']['tmp_name']))
					{
					$image = $_FILES['thumb']['name'];
					$r = uniqid();					
					$filename= $r.'_'.$image;
					move_uploaded_file($_FILES['thumb']['tmp_name'], "../uploads/thumb/".$filename);	
					@unlink('../uploads/thumb/'.$_POST['img']);
					
					}
			  
			        if($image=='')
					{
						$filename = $_POST['img'];
					}
			$q = "update ".$this->_table." set work_title = '".$_POST['work_title']."',youtube_url='".$url."',thumb_image='".$filename."',status='Y' where id=".$_POST['id'];
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
		
		
		
		public function getCategory()
		{
			$q = "select * from ".$this->_table." where status != 'D'";
			return $q;	
		}

		public function getCategoryWeb()
		{
			$q = "select * from ".$this->_table." where status = 'Y'";
			return $q;	
		}
		
		public function getCatCount($id)
		{
			$q = "select * from ".$this->_table." where parent_id = ".$id;
			return mysql_num_rows(mysql_query($q));	
		}

		public function getProdCount($id)
		{
			$q = "select * from product where category_id = ".$id;
			return mysql_num_rows(mysql_query($q));	
		}

		public function getData($fields='*',$cond=' status=\'y\'')
		{
			 $q = "select ".$fields." from ".$this->_table." where ".$cond;
			$this->_records = mysql_query($q);
			$this->_recordCount = mysql_num_rows($this->_records);
			
		}
		function getNewsById($id)
		{
			$q = mysql_query("select * from ".$this->_table." where id=".$id." and status='Y'");
		    return $q;
		}
		function getNewsByType($id,$site)
		{
			$q = mysql_query("select * from ".$this->_table." where category_type='".$id."' and site_type='".$site."' and status='Y'");
		    return $q;
		}
		public function showRecords($start='',$records='')
		{
			$q1 = "select * from ".$this->_table." where 1";
			
			$q1 .= " AND status != 'D'";
			
			if(isset($_GET['sort']) && $_GET['sort'] != '')
				$q1 .= ' order by '.$_GET['sort'].' '.$_GET['sort_type'];
			else	
				$q1 .= " order by id desc";
				
			if($start != '')
				$q1 .= ' LIMIT '.$start.",".$records;
			
			$this->_records = mysql_query($q1);
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