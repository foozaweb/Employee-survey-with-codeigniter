<?php
class SurveyModel extends CI_Model
{

	public function sendMail($msg, $email, $subject, $signout, $attachment)
	{

		$localhosts = array('::1', '127.0.0.1', 'localhost');
		$protocol = 'mail';
		if (in_array($_SERVER['REMOTE_ADDR'], $localhosts)) {
			$protocol = 'smtp';
		}

		$mailToSend = '
            <html>
                <head>
                    <style>
                        body { 
					    	background: #f5f5f5; 
					    	color:black; 
					    	word-wrap: break-word;
					    	padding:10px;
					    }
					    div{
					        background: white;
					        color: black;
					        overflow:auto;
					        letter-spacing: 0.01em;
					        word-wrap: break-word;
					    }
					    thead tr{
					    	background: #333;
					    	padding:10px;
					    	color:#fff;
					    }
					    tbody tr{
					    	background: #f5f5f5;
					    	padding:10px;
					    	color:#333;
					    	border:1px solid #333;
					    }
					    tbody tr:hover{
					    	background: #ffffff;
					    	padding:10px;
					    	color:#333;
					    	word-wrap: break-word;
					    }
					    i{
					    	color:#333;
					    	text-align:center;
					    	letter-spacing: 0.01em;
					    	word-wrap: break-word;
					    }
					    .div{
                            background: #ffffff;
                            color: black;
                            padding: 20px;
                            border: 1px solid #ddd;
                            overflow:auto;
                            -webkit-box-shadow: 0px 0px 6px 1px rgba(212,212,212,1);
							-moz-box-shadow: 0px 0px 6px 1px rgba(212,212,212,1);
							box-shadow: 0px 0px 6px 1px rgba(212,212,212,1);
							word-wrap: break-word;
                        }
                        header{
                        	color: #f55656;
                            text-align:center;
                            font-weight:bolder;
                            text-transform:uppercase;
                        }
                       hr{
                        	font-weight:bold;
                        	border:1px solid #f55656;
                        }
                    </style>
                </head>
                <body>
                    <header> ' . $subject . '</header>
                    <hr>
                    <div class="div">
                     	' . $msg . '
                    </div>
                    <br><br><br><br><br>
                    <footer>
                        <div style="text-align:center;">
                 			<i>' . $signout . '.</i>
                		</div>
                	</footer>
                </body>
            </html> ';
		// ##############################################################
		$config = array(
			'protocol' => $protocol,
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'cmwebandmobileunit@gmail.com',
			'smtp_pass' => 'BLWcamp17##',
			'mailtype' => 'html',
			'starttls'  => true,
			'newline'   => "\r\n",
		);
		$this->email->attach($attachment);
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->from('noreply@BlwcmStaffAppraisal');
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($mailToSend);
		$flag = $this->email->send();
		if ($flag) {
			return $flag;
		} else {
			return false;
		}
	}


	function getUnit()
	{
		$this->db->join('cm_sub_dept', 'cm_sub_dept.sub_id = cm_unit.unit_sub', 'left');
		return $this->db->get('cm_unit')->result_array();
	}


	function submitSurvey()
	{
		$checker = $this->db->get_where('cm_staff', array('staff_email' => $this->input->post('staff_email'))); 
		if ($checker->num_rows() < 1) {
			return "emailerror";
		}
		$row = $this->db->get_where('cm_staff', array('staff_email' => $this->input->post('staff_email')))->row_array();
		$staff_id = $row['staff_id'];

		$data = array(
			'key' . $this->input->post('id') => $this->input->post('ans'),
			'role' => $this->input->post('role'),
			'unit' => $this->input->post('unit'),
			'staff_id' => $staff_id,
			'key8' => $this->input->post('opinion'),
		);
		$check = $this->db->get_where('survey', array('staff_id' => $staff_id));
		if ($check->num_rows() > 0) {
			$this->db->where(array('staff_id' => $staff_id));
			$this->db->update('survey', $data);
			return 'successful';
		} else {
			$this->db->insert('survey', $data);
			return 'successful';
		}
	}
}
