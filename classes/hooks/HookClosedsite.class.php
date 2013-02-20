<?php

class PluginClosedsite_HookClosedsite extends Hook {

	public function RegisterHook() {
		$this->AddHook('init_action', 'HookInitAction');
	}
	
	// ������������ ���, ������� ���������� ����� ����������� ������ ������
	// � ������ ���������� ������ � ������ �����������, ���������� ������������ 
	// �� �������� �����������
	public function HookInitAction(){
		$oCurrentUser		= $this->User_GetUserCurrent();
		if($oCurrentUser) return true;
	
		$aAllowedElements	= Config::Get('plugin.closedsite.allowedelements');
		$aAllowedactions	= array_keys($aAllowedElements);
		
		$sCurrentAction		= Router::GetAction();
		$sCurrentEvent		= Router::GetActionEvent();

		if (!in_array($sCurrentAction,$aAllowedactions)){			
			return Router::Action('login');
		}
		
		$aAllowedEvents		= $aAllowedElements[$sCurrentAction];
		if( (!empty($aAllowedEvents)) and (!in_array($sCurrentEvent,$aAllowedEvents)) ){
			return Router::Action('login');		
		}
	}

	
}

?>