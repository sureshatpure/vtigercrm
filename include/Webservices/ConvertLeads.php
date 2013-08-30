<?php
include_once('vtwsclib/Vtiger/WSClient.php');

function vtws_login(){
        $url = 'http://en.vtiger.com/wip';
	$client = new Vtiger_WSClient($url);
	$login = $client->doLogin('admin', 'KpS9EjNz16JtPmoe');
        if(!$login) return 0;
        return $client;
}

function vtws_convertleads($recordid){
        $client = vtws_login();
        if ($client <> 0){
                $recordInfo = $client->doRetrieve($recordid);
                $wasError= $client->lastError();
                if($wasError) {
                        return $wasError['code'] . ':' . $wasError['message'];
                }
                if($recordInfo) {
                        $client1 = vtws_login();
                        $convert_lead_array = array();
                        $convert_lead_array['leadId'] = $recordInfo['id'];
                        $convert_lead_array['assignedTo'] = $recordInfo['assigned_user_id'];
                        $convert_lead_array['entities']['Accounts']['create']=true;
                        $convert_lead_array['entities']['Accounts']['name']='Accounts';
                        $convert_lead_array['entities']['Accounts']['accountname'] = $recordInfo['company'];
                        $convert_lead_array['entities']['Accounts']['industry']=$recordInfo['industry'];
                        $convert_lead_array['entities']['Potentials']['create']=true;
                        $convert_lead_array['entities']['Potentials']['name']='Potentials';
                        $convert_lead_array['entities']['Potentials']['potentialname']=$recordInfo['company'];
                        $convert_lead_array['entities']['Potentials']['closingdate']= date("Y-m-d", strtotime("+1 week Saturday"));
                        $convert_lead_array['entities']['Potentials']['sales_stage']= 'Prospecting';
                        $convert_lead_array['entities']['Potentials']['amount']= 0;
                        $convert_lead_array['entities']['Contacts']['create']=true;
                        $convert_lead_array['entities']['Contacts']['name']='Contacts';
                        $convert_lead_array['entities']['Contacts']['lastname']=$recordInfo['lastname'];
                        $convert_lead_array['entities']['Contacts']['firstname']=$recordInfo['firstname'];
                        $convert_lead_array['entities']['Contacts']['email']=$recordInfo['email'];
                        $convert_lead_json = json_encode($convert_lead_array);
                        $response = $client1->doInvoke('convertlead', array('element'=>$convert_lead_json));
                        $wasError = $client1->lastError();
                        if($wasError) {
                                return $wasError['code'] . ':' . $wasError['message'];
                        } else {
                                return 1;
                        }
                }
        }else{
                return 'Login failed';
        }
}

$d = '2x21022';
echo vtws_convertleads($d);

?>