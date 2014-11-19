<?php
interface ClockSetupState {

	public function previousValue();
	public function nextValue();
	public function selectValue();

	public function getInstructions();
	public function getSelectedValue();

}
?>